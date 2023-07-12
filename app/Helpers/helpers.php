<?php

use Carbon\Carbon as Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


/*
 * Global helpers file with misc functions.
 */
if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}


if (!function_exists('access')) {

    function access()
    {
        return auth();
    }
}

if (!function_exists('accessAllow')) {

    function accessAllow($permission)
    {
        $user = auth()->user();
        $roles = $user->roles;
        foreach ($roles as $role) {
            if($role->name == 'Administrator'){
                return true;
                break;
            }
            $allow = $role->permissions->where('name', $permission);
            if(count($allow)){
              return true;
              break;
            }
        }
        return false;
    }
}


if (!function_exists('includeRouteFiles')) {

    function includeRouteFiles($folder)
    {
        $directory = $folder;
        $handle = opendir($directory);
        $directory_list = [$directory];

        while (false !== ($filename = readdir($handle))) {
            if ($filename != '.' && $filename != '..' && is_dir($directory . $filename)) {
                array_push($directory_list, $directory . $filename . '/');
            }
        }

        foreach ($directory_list as $directory) {
            foreach (glob($directory . '*.php') as $filename) {
                require $filename;
            }
        }
    }
}


if (!function_exists('escapeSlashes')) {
    /**
     * Access the escapeSlashes helper.
     */
    function escapeSlashes($path)
    {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
        $path = str_replace('//', DIRECTORY_SEPARATOR, $path);
        $path = trim($path, DIRECTORY_SEPARATOR);

        return $path;
    }
}

if (!function_exists('getMenuItems')) {
    /**
     * Converts items (json string) to array and return array.
     */
    function getMenuItems($type = 'backend', $id = null)
    {
        $menu = new \App\Models\Menu\Menu();
        $menu = $menu->where('type', $type);
        if (!empty($id)) {
            $menu = $menu->where('id', $id);
        }
        $menu = $menu->first();
        if (!empty($menu) && !empty($menu->items)) {
            return json_decode($menu->items);
        }

        return [];
    }
}

if (!function_exists('getRouteUrl')) {
    /**
     * Converts querystring params to array and use it as route params and returns URL.
     */
    function getRouteUrl($url, $url_type = 'route', $separator = '?')
    {
        $routeUrl = '';
        if (!empty($url)) {
            if ($url_type == 'route') {
                if (strpos($url, $separator)) {
                    $urlArray = explode($separator, $url);
                    $url = $urlArray[0];
                    parse_str($urlArray[1], $params);
                    $routeUrl = route($url, $params);
                } else {
                    $routeUrl = route($url);
                }
            } else {
                $routeUrl = $url;
            }
        }
        return $routeUrl;
    }
}

if (!function_exists('renderMenuItems')) {
    /**
     * render sidebar menu items after permission check.
     */
    function renderMenuItems($items, $viewName = 'backend.includes.partials.sidebar-item')
    {
        foreach ($items as $item) {
            // if(!empty($item->url) && !Route::has($item->url)) {
            //     return;
            // }
            if (!empty($item->view_permission_id)) {
                if (accessAllow($item->view_permission_id)) {
                    if (1) {
                        echo view($viewName, compact('item'));
                    }
                }
            } else {
                echo view($viewName, compact('item'));
            }
        }
    }
}

if (!function_exists('checkDatabaseConnection')) {

    /**
     * @return bool
     */
    function checkDatabaseConnection()
    {
        try {
            DB::connection()->reconnect();

            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
}




if (!function_exists('isActiveMenuItem')) {
    function isActiveMenuItem($item, $separator = '?')
    {

        $item->clean_url = $item->url;
       if(!empty($item->clean_url)){
            if (strpos($item->url, $separator)) {
                // $item->clean_url = explode($separator, $item->url, -1);
                $item->clean_url2 = explode($separator, $item->url);
                $item->clean_url = $item->clean_url2[0];
            }

            if(strpos(Route::currentRouteName(), $item->clean_url) === 0){
                return true;
            }
       }
        if (!empty($item->children)) {
            foreach ($item->children as $child) {
                $child->clean_url = $child->url;
                if (strpos($child->url, $separator)) {
                     // $child->clean_url = explode($separator, $child->url, -1);
                    $child->clean_url2 = explode($separator, $child->url);
                    $child->clean_url = $child->clean_url2[0];
                }
                if (strpos(Route::currentRouteName(), $child->clean_url) === 0) {
                    return true;
                }
            }
        }

        // start nesting active
        $pattern = "/./i";
        if(preg_match($pattern, $item->clean_url)){
            $url_strings = (explode(".", Route::currentRouteName()));
            $url_string = '';
            for ($i = 0; $i < count($url_strings) - 1; $i++) {
                $url_string = $url_string.'.'.$url_strings[$i];
            }
            $item_url_strings = (explode(".", $item->clean_url));
            $item_url_string = '';
            for ($i = 0; $i < count($item_url_strings) - 1; $i++) {
                $item_url_string = $item_url_string.'.'.$item_url_strings[$i];
            }
            // end nesting ative
            if($item_url_string === $url_string)
                return true;
        }
        return false;
    }
}
