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
        <div class="px-4 text-white">

                <x-jet-validation-errors class="mb-4 text-danger" />

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="btn-danger">
                            {{ __('Reset Password') }}
                        </x-jet-button>

                    </div>
                </form>
        </div>
    </div>
</div>
@endsection

@section('bottom-scripts')
    {{-- link script page or code here --}}
@endsection
