<!-- start Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu list-group" id="sidebar-menu">
            <span aria-expanded="true" style="border-top:2px solid #ccc;padding:1px;"></span>
            <li aria-expanded="{{ Request::is('admin/dashboard') ? 'true' : 'false' }}"><a href="{{ route('admin.dashboard') }}" class="list-group-item"  aria-expanded="{{ Request::is('admin/dashboard') ? 'true' : 'false' }}"><i class=" fa fa-dashboard" aria-hidden="true"></i><span class="responsive"> &nbsp; @lang('menus.backend.sidebar.dashboard')</span></a></li>
            {{ renderMenuItems(getMenuItems()) }}

        </ul>
    </section>
</aside>
<!-- end Left side column. contains the logo and sidebar -->
