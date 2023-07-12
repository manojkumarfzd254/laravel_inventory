@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.roles.management') . ' | ' . trans('labels.backend.roles.edit'))


@section('content')
<div class=" p-3">
    {{ Form::model($role, ['route' => ['admin.roles.update', $role], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

        <div class="box box-info">

            <div class="box-body">
               <div class="row my-3">
                    {{ Form::label('name', trans('validation.attributes.backend.roles.name'), ['class' => 'col-lg-2 control-label  text-right required']) }}

                    <div class="col-lg-8">
                        {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.roles.name'), 'required' => 'required']) }}
                    </div><!--col-lg-8-->
                </div>
                <div class="col-lg-2"></div>

               <div class="row my-3">
                    {{ Form::label('associated_permissions', trans('validation.attributes.backend.roles.associated_permissions'), ['class' => 'col-lg-2 control-label text-right ']) }}

                    <div class="col-lg-8">
                        {{ Form::select('associated_permissions', ['all' => 'All', 'custom' => 'Custom'], $role->all ? 'all' : 'custom', ['class' => 'form-control select2 box-size']) }}

                        <div id="available-permissions" class="@if($role->all) hidden @endif mt-20" style="width: 700px; height: 200px; padding:20px; overflow-x: hidden; overflow-y: scroll;">
                            <div class="row">
                                <div class="col-xs-12">
                                    @if ($permissions->count())
                                        @foreach ($permissions as $perm)
                                        <label class="control control--checkbox">
                                            <input type="checkbox" name="permissions[{{ $perm->id }}]" value="{{ $perm->id }}" id="perm_{{ $perm->id }}" {{ is_array(old('permissions')) ? (in_array($perm->id, old('permissions')) ? 'checked' : '') : (in_array($perm->id, $rolePermissions) ? 'checked' : '') }} /> <label for="perm_{{ $perm->id }}">{{ $perm->display_name }}</label>
                                            <div class="control__indicator"></div>
                                            </label>
                                            <br/>
                                        @endforeach
                                    @else
                                        <p>There are no available permissions.</p>
                                    @endif
                                </div><!--col-lg-6-->
                            </div><!--row-->
                        </div><!--available permissions-->
                    </div><!--col-lg-3-->
                 </div>
                    <div class="col-lg-2"></div>

               <div class="row my-3">
                    {{ Form::label('sort', trans('validation.attributes.backend.roles.sort'), ['class' => 'col-lg-2 control-label text-right']) }}

                    <div class="col-lg-8">
                        {{ Form::text('sort', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.roles.sort')]) }}
                    </div><!--col-lg-8-->
                 </div>
                    <div class="col-lg-2"></div>
                <div class="edit-form-btn">
                    <div class="row ">
                        <div class="col-12 text-center">
                            {{ link_to_route('admin.roles.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                            {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    {{ Form::close() }}
</div>
@endsection

@section('bottom-scripts')
   {{ Html::script('backend/roles/script.js') }}
@endsection
