<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu list-group" id="sidebar-menu">
            <span aria-expanded="true" style="border-top:2px solid #ccc;padding:1px;"></span>
            <li aria-expanded="{{ Request::is('admin/dashboard') ? 'true' : 'false' }}"><a href="{{ route('admin.dashboard') }}" class="list-group-item"  aria-expanded="{{ Request::is('admin/dashboard') ? 'true' : 'false' }}"><i class=" fa fa-dashboard" aria-hidden="true"></i><span class="responsive"> &nbsp; @lang('menus.backend.sidebar.dashboard')</span></a></li>
            @permission('manage-user')
            <li aria-expanded="{{ Request::is('admin/users') ? 'true' : 'false' }}"><a href="{{ route('admin.users.index') }}" class="list-group-item"  aria-expanded="{{ Request::is('admin/users') ? 'true' : 'false' }}"><i class=" fa fa-men" aria-hidden="true"></i><span class="responsive"> &nbsp; @lang('User Management ll')</span></a></li>
            @endauth
            @permission('manage-setting')
            <li aria-expanded="{{ Request::is('admin/settings') ? 'true' : 'false' }}"><a href="{{ route('admin.settings.edit?setting=1') }}" class="list-group-item"  aria-expanded="{{ Request::is('admin/settings') ? 'true' : 'false' }}"><i class=" fa fa-gear" aria-hidden="true"></i><span class="responsive"> &nbsp; @lang('Setting Management ll')</span></a></li>
            @endauth
        </ul>
    </section>
</aside>
