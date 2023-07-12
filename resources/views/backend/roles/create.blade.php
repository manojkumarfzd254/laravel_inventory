@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.roles.management') . ' | ' . trans('labels.backend.roles.create'))

@section('content')
<div class=" p-3">
    {{ Form::open(['route' => 'admin.roles.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-role']) }}

        <div class="box box-info">

            <div class="box-body">
                 <div class="row my-3">
                    {{ Form::label('name', trans('validation.attributes.backend.roles.name'), ['class' => 'col-lg-2 control-label  text-right required']) }}

                    <div class="col-lg-8">
                        {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.roles.name'), 'required' => 'required']) }}
                    </div>
                    <div class="col-lg-2"></div>
                </div><!--form control-->

                <div class="row my-3">
                    {{ Form::label('associated_permissions', trans('validation.attributes.backend.roles.associated_permissions'), ['class' => 'col-lg-2 control-label text-right']) }}

                    <div class="col-lg-8">
                        {{ Form::select('associated_permissions', array('all' => trans('labels.general.all'), 'custom' => trans('labels.general.custom')), 'all', ['class' => 'form-control select2 box-size']) }}

                        <div id="available-permissions" class="hidden mt-20" style="width: 800px; height: 200px; padding:20px; overflow-x: hidden; overflow-y: scroll;">
                            <div class="row">
                                <div class="col-xs-12">
                                    @if ($permissions->count())
                                        @foreach ($permissions as $perm)
                                        <div class="form-check">
                                            <label class="form-check-label" for="perm_{{ $perm->id }}">
                                            <input type="checkbox" class="form-check-input" name="permissions[{{ $perm->id }}]" value="{{ $perm->id }}" id="perm_{{ $perm->id }}" {{ is_array(old('permissions')) && in_array($perm->id, old('permissions')) ? 'checked' : '' }} />{{ $perm->display_name }}
                                            <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                            <br/>
                                        @endforeach
                                    @else
                                        <p>There are no available permissions.</p>
                                    @endif
                                </div><!--col-lg-6-->
                            </div><!--row-->
                        </div><!--available permissions-->
                    </div><!--col-lg-3-->
                    <div class="col-lg-2"></div>
                </div><!--form control-->

                <div class="row my-3">
                    {{ Form::label('sort', trans('validation.attributes.backend.roles.sort'), ['class' => 'col-lg-2 control-label text-right']) }}

                    <div class="col-lg-8">
                        {{ Form::text('sort', ($roleCount+1), ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.roles.sort')]) }}
                    </div>
                    <div class="col-lg-2"></div>
                </div><!--form control-->

                <div class="row my-3">
                    {{ Form::label('status', trans('validation.attributes.backend.roles.active'), ['class' => 'col-lg-2 control-label text-right']) }}

                    <div class="col-lg-8">
                        <div class="control-group">
                            <label class="control control--checkbox">
                                {{ Form::checkbox('status', 1, true) }}
                                <div class="control__indicator"></div>
                            </label>
                        </div>
                    </div><!--col-lg-3-->
                </div><!--form control-->
                <div class="edit-form-btn">
                    <div class="row ">
                        <div class="col-12 text-center">
                            {{ link_to_route('admin.roles.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                            {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
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
     <script type="text/javascript">
         Backend.Utils.documentReady(function(){
             Backend.Roles.init("rolecreate")
        });
    </script>
@endsection
