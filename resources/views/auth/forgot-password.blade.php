@extends('auth.layouts.app')

@section('title') Login @endsection

@push('head-styles')
<link rel="stylesheet" href="{{ asset('auth/style.css') }}">
@endpush

@push('head-scripts')
{{-- link script page or cdn --}}
@endpush

@section('content')
<div class="admin-auth d-flex justify-content-center align-items-center" >
    <div class="page py-4">
        <div class="branding">
            <div class="d-flex justify-content-center mb-1">
                <div class="preloader">
                    <div class="spinner"></div>
                    <div class="spinner-2"></div>
                </div>
            </div>
            <p class="text-white text-center"> &nbsp; LARAVEL PROJECT STARTUP</p>
        </div>
        <div class="px-4">

                <div class="mb-4 text-sm text-white">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-success">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" class="text-white" />
                        <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4 ">
                        <x-jet-button class="btn-danger">
                            {{ __('Email Password Reset Link') }}
                            <i class="fa fa-sign-in"></i>
                        </x-jet-button>
                    </div>
                </form>
            {{-- end send link reset password --}}
        </div>
    </div>
</div>
@endsection

@section('bottom-scripts')
    {{-- link script page or code here --}}
@endsection
