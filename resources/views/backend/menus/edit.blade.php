@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.menus.management') . ' | ' . trans('labels.backend.menus.edit'))


@section('content')
<div class=" p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
    {{ Form::model($menu, ['route' => ['admin.menus.update', $menu], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

        <div class="box box-info">

            <div class="row text-dark">
                <div class="col-md-6"><b>{{ trans('labels.backend.menus.edit') }}</b></div>
                <div class="col-md-6"> @include('backend.menus.partials.header-buttons')</div>
            </div>


            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("backend.menus.form")
                    <div class="edit-form-btn">
                        <div class="row ">
                            <div class="col-12 text-center">
                                {{ link_to_route('admin.menus.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                                {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ Form::close() }}
    @include("backend.menus.partials.modal")
    </div>
</div>
@endsection

