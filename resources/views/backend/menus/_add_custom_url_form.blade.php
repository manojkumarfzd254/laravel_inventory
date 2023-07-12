{{ Form::open(['class' => 'form-horizontal hidden', 'role' => 'form', 'method' => 'post', 'id' => 'menu-add-custom-url']) }}
    <div class="row my-3">
        {{ Form::label('name', trans('labels.backend.menu.field.name'), ['class' => 'col-lg-3 col-md-3 col-sm-3 control-label text-right required']) }}
        <div class="col-8">
          {{ Form::text('name', null, ['class' => 'form-control box-size mi-name', 'id' => '', 'placeholder' => trans('labels.backend.menu.field.name'), 'required' => 'required']) }}
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row my-3">
        {{ Form::label('url', trans('labels.backend.menu.field.url'), ['class' => 'col-lg-3 col-md-3 col-sm-3 control-label text-right']) }}
        <div class="col-8">
          {{ Form::text('url', null, ['class' => 'form-control box-size mi-url', 'placeholder' => trans('labels.backend.menu.field.url')]) }}
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row my-3">
        {{ Form::label('url', trans('labels.backend.menu.field.url_type'), ['class' => 'col-lg-3 col-md-3 col-sm-3 control-label text-right']) }}
        <div class="col-8">
          <div class="radio">
            <label class="radio-inline">{{ Form::radio('url_type', 'route', null, ['class' => 'mi-url_type_route']) }} {{ trans('labels.backend.menu.field.url_types.route') }}</label>
            <label class="radio-inline">{{ Form::radio('url_type', 'static', true, ['class' => 'mi-url_type_static']) }} {{ trans('labels.backend.menu.field.url_types.static') }}</label>
          </div>
          <div class="checkbox">
            {{ Form::hidden('open_in_new_tab', 0) }}
            <label>
              {{ Form::checkbox('open_in_new_tab', 1, false, ['class' => 'mi-open_in_new_tab']) }} {{ trans('labels.backend.menu.field.open_in_new_tab') }}
            </label>
          </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row my-3">
        {{ Form::label('icon', trans('labels.backend.menu.field.icon'), ['class' => 'col-lg-3 col-md-3 col-sm-3 control-label text-right', 'title' => trans('labels.backend.menu.field.icon_title')]) }}
        <div class="col-8">
          {{ Form::text('icon', null, ['class' => 'form-control box-size mi-icon', 'placeholder' => trans('labels.backend.menu.field.icon_title')]) }}
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row my-3 view-permission-block">
        {{ Form::label('view_permission_id', trans('labels.backend.menu.field.view_permission_id'), ['class' => 'col-lg-3 col-md-3 col-sm-3 control-label text-right']) }}
        <div class="col-8">
          {{ Form::text('view_permission_id', null, ['class' => 'form-control box-size mi-view_permission_id', 'placeholder' => trans('labels.backend.menu.field.view_permission_id')]) }}
        </div>
        <div class="col-1"></div>
    </div>
    {{ Form::hidden('id', null, ['class' => 'mi-id']) }}
    <div class="box-body">
        <div class="row my-3">
            <div class="col-12 text-center">
                  {{ Form::reset(trans('buttons.general.cancel'), ['class' => 'btn btn-default btn-md over-danger', 'data-dismiss' => 'modal']) }}
                  {{ Form::submit(trans('buttons.general.save'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
{{ Form::close() }}
