<?php

namespace App\Models;

trait ModelTrait
{
    /**
     * @return string
     */
    public function getEditButtonAttribute($permission, $route)
    {
        if (accessAllow($permission)) {
            return '<a href="'.route($route, $this). '" class="btn btn-light border">
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="fa fa-pencil"></i>
                </a>';
        }
    }

    /**
     * @return string
     */
    public function getShowButtonAttribute($permission, $route)
    {
        if (accessAllow($permission)) {
            return '<a href="' . route($route, $this) . '" class="btn btn-light border">
                    <i  data-placement="top" title="Show" class="fa fa-eye "></i>
                </a>';
        }
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute($permission, $route)
    {
        if (accessAllow($permission)) {
            return '<a data-href="' . route($route, $this) . '"  
                    class="btn btn-light border lb_item_delete" data-method="delete"
                    data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                    data-trans-button-confirm="'.trans('buttons.general.crud.delete'). '" 
                    data-trans-title="' . trans('strings.backend.general.acan_not_revert') . '"
                    data-trans-title="'.trans('strings.backend.general.are_you_sure'). '" onclick="lbdelete(this);">
                        <i data-toggle="tooltip" data-placement="top" title="Delete" class="fa fa-trash"></i>

                </a>';
        }
    }
}
