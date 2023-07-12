@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.products.management') . ' | ' . trans('labels.backend.products.create'))


@section('content')
<div class=" p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">

    {{ Form::open(['route' => 'admin.products.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-product']) }}
        {{ Form::token() }}

        @include("backend.products.form")
      <div class="row ">
        <div class="col-12 text-center">
            {{ link_to_route('admin.products.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md over-danger']) }}

            {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
        </div>
      </div>
    {{ Form::close() }}

    </div>
</div>
@endsection

@section('bottom-scripts')
    <script type="text/javascript">
        //Put your javascript needs in here.
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
