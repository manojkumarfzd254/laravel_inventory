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
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#sign-in" data-toggle="tab">Sign In</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" >Create One</a>
                </li>
            </ul>

            <div class="tab-content py-4">
                <div id="sign-in" class="tab-pane active">
                    @if($message = Session::has('error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ $message }}
                            @php Session::forget('error'); @endphp
                        </div>
                    @endif
                    @if($message = Session::has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ $message }}
                            @php Session::forget('success'); @endphp
                        </div>
                    @endif
                    <form  action="{{ route('login') }}" method="POST" autocomplete="off">
                        @csrf

                        <div class="form-group">
                            <label>USER ID</label>
                            <input type="email" class="form-control border-0 rounded-0 company-estd @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" class="form-control border-0 rounded-0 company-password  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                            <label class="float-right">
                                {{-- start forget password --}}
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-white hover:text-white-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                                 {{-- start forget password --}}
                            </label>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror
                        </div>

                        <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="form-group mt-4">

                            <button class="btn btn-danger rounded-0 float-left" type="submit">
                                <i class="fa fa-sign-in"></i>
                                {{ __('Login') }}
                            </button>

                        </div>
                    </form>
                </div>
                {{-- end login form --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom-scripts')
    {{-- link script page or code here --}}
@endsection
