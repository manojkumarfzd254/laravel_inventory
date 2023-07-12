@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.pages.management') . ' | ' . trans('labels.backend.pages.edit'))


@section('content')
<div class=" p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"><b>{{ trans('labels.backend.pages.edit') }}</b></div>
            <div class="col-md-6">
                @include('backend.pages.partials.pages-header-buttons')
            </div>
        </div>
        <hr />
    {{ Form::model($page, ['route' => ['admin.pages.update', $page], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

        <div class="box box-info">
            <div class="box-body">
                @include('backend.pages.form')
                <div class="edit-form-btn">
                    <div class="row ">
                        <div class="col-12 text-center">
                            {{ link_to_route('admin.pages.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                            {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    {{ Form::close() }}
</div>
</div>
@endsection

