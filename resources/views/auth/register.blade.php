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
                    <a class="nav-link" href="{{ route('login') }}" >Sign In</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link active" href="#create-one" data-toggle="tab">Create One</a>
                </li>
            </ul>

            <div class="tab-content py-4">

                {{-- start register form --}}
                <div id="create-one" class="tab-pane active">
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
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="row">
                        @csrf
                         <div class="form-group col-md-6">
                            <label>First Name</label>
                            <input  type="text" class="form-control border-0 rounded-0 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" >
                            @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Last Name</label>
                            <input  type="text" class="form-control border-0 rounded-0 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" >
                            @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>Email ID</label>
                            <input type="email" class="form-control border-0 rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Mobile No</label>
                            <input type="text" class="form-control border-0 rounded-0 @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required >
                            @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Age</label>
                            <input type="number" class="form-control border-0 rounded-0 @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required >
                            @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control border-0 rounded-0 @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required >
                            @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label>Bio</label>
                            <textarea name="bio" id="bio" cols="30" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>PASSWORD</label>
                            <input type="password" class="form-control border-0 rounded-0 @error('password') is-invalid @enderror" name="password" required >
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label>RE PASSWORD</label>
                            <input type="password" class="form-control border-0 rounded-0 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required >
                             @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                        @endif

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-danger rounded-0 float-left">
                                <i class="fa fa-sign-in"></i>
                               {{ __('Register') }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom-scripts')
    {{-- link script page or code here --}}
@endsection
