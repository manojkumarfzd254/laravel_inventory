<!--Action Button-->
@if(request()->is('admin/menus*'))
    <export-component></export-component>

{{--  header action buttons --}}
<div class="btn-group float-right">
<div class="dropdown">
    <button type="button" class="btn border mx-2 dropdown-toggle" data-toggle="dropdown">
    Action
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route( 'admin.menus.index' ) }}"><i class="fa fa-list-ul"></i> {{ trans( 'menus.backend.menus.all' ) }}</a>
        <a class="dropdown-item" href="{{ route( 'admin.menus.create' ) }}"><i class="fa fa-plus"></i> {{ trans( 'menus.backend.menus.create' ) }}</a>
         </div>
    </div>
</div>



@endif
