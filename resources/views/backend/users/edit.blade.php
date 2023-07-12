@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.users.management') . ' | ' . trans('labels.backend.users.edit'))

@section('content')
<div class=" p-3">
    <div class="col-md-12 bg-white py-3 px-2 shadow-lg bordertop-5 ">
      {{ Form::model($user, ['route' => ['admin.users.update', $user], 'class' => 'form-horizontal pt-3', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-user','files' => true]) }}
       {{ Form::token() }}
        @include('backend.users.form')
        @php $id = $user->id; @endphp
         @include('backend.components.footer_buttons', [ 'cancelRoute' => 'admin.users.index' ])
        {{ Form::close() }}
    </div>
</div>
@endsection

@section('bottom-scripts')

@endsection
