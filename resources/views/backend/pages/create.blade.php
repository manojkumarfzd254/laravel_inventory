@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.pages.management') . ' | ' . trans('labels.backend.pages.create'))


{{-- @section('content')
<div class=" p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">

    {{ Form::open(['route' => 'admin.pages.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-page']) }}
        {{ Form::token() }}

        @include("backend.pages.form")
      <div class="row ">
        <div class="col-12 text-center">
            {{ link_to_route('admin.pages.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md over-danger']) }}

            {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
        </div>
      </div>
    {{ Form::close() }}

    </div>
</div>
@endsection --}}


@section('content')
<div class=" p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
        <div class="row text-dark">
            <div class="col-md-6"><b>{{ trans('labels.backend.pages.create') }}</b></div>
            <div class="col-md-6">
                @include('backend.pages.partials.pages-header-buttons')
            </div>
        </div>
        <hr />
    {{ Form::open(['route' => 'admin.pages.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission']) }}

        <div class="box box-info">
            <div class="box-body">
                @include('backend.pages.form')
                <div class="edit-form-btn">
                    <div class="row ">
                        <div class="col-12 text-center">
                            {{ link_to_route('admin.pages.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                            {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
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
@section("bottom-scripts")
    <script type="text/javascript">
        Backend.Pages.init('{{ config('locale.languages.' . app()->getLocale())[1] }}');
    </script>
    <style>
textarea#description {
    visibility: visible !important;
}
textarea#seo_description {
    visibility: visible !important;
}
        </style>
@endsection
