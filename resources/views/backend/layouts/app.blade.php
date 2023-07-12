<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     {{-- <link rel="icon" sizes="16x16" type="image/png" href="{{route('frontend.index')}}/img/favicon_icon/{{settings()->favicon}}"> --}}

     <title>@yield('title', app_name())</title>
     <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        <meta name="author" content="@yield('meta_author', 'Manoj Kumar')">
        @yield('meta')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito&family=Alata&display=swap" rel="stylesheet">
      <!-- font style fa fa anf google Material -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/panel.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/js/panel.js') }}" defer></script>

    <link href="{{ asset('css/bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatable.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/datatable.js') }}" ></script>
    <script src="{{ asset('js/bootstrap_bundle.js') }}" ></script>
    @stack('head-styles')
    @stack('head-scripts')

</head>
<body>
    <div id="app" >
       {{-- header --}}
        <main class="d-flex" >
            {{-- left side bar --}}
            <div class="sidebar-dynamic" style="">
                <div class="shadow-lg">
                <a class="navbar-brand w-100 pt-3 px-3 bg-white" href="{{ url('/') }}" style="font-family: Alata; color:#CB3300;">
                   <b class="sidebar-title d-none">Lb</b><b class="responsive">{{ config('app.name', 'Laravel') }}</b>
                </a>
                </div>
                <div class="scrollbar-lb sidebar-height bg-white">
                   @php $user = Auth::user();
                    $roles = $user->roles->first()->id;
                    @endphp
                    @if($roles == "2")
                       @include('backend.includes.sidebar')
                    @else
                    @include('backend.includes.sidebar-dynamic')
                    @endif
                </div>
            </div>
            {{-- right side bar --}}
            <div class="contentbar" style="">
            @include('backend.includes.header')
                <div style="width:100%;height:90vh;" class="scrollbar-lb">
                      @if(Breadcrumbs::exists())
                        {!! Breadcrumbs::render() !!}
                      @endif
                       @yield('page-header')
                    @yield('content')
                </div>
                {{-- footer --}}
                @include('backend.includes.footer')
                @include('sweetalert::alert')
            </div>
        </main>
    </div>

</body>
{{ Html::script('js/sweetalert2@11.js') }}
<script src="{{ asset('backend/js/lb.js') }}" defer></script>
   {{ Html::script('backend/js/backend-custom.js') }}
@yield('bottom-scripts')
</html>
