<div class="btn-group float-right">
<div class="dropdown">
    <button type="button" class="btn border mx-2 dropdown-toggle" data-toggle="dropdown">
    Action
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('admin.users.index')}}"><i class="fa fa-list-ul"></i> {{ trans('menus.backend.users.all') }}</a>
        <a class="dropdown-item" href="{{route('admin.users.create')}}"><i class="fa fa-plus"></i> {{ trans('menus.backend.users.create') }}</a>
        <a class="dropdown-item" href="{{route('admin.users.create')}}"><i class="fa fa-file"></i> {{ trans('menus.backend.users.import') }}</a>
    </div>
    </div>
</div>
