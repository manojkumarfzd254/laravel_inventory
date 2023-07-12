<nav class="navbar navbar-expand-md navbar-light bg-white shadow-md" style="border-bottom:1px solid #ccc;">
    <div class="container-fluid">
        <div class="left-icon" id="cog" lbaction="full" style="margin-left:-15px;">
           <i class="fa fa-bars" style="font-size: 25px;" aria-hidden="true"></i>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    @include('backend.includes.partials.lang')
                </li>
                    </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                 <img style="width:40px; height:35px; border-radius: 50%;margin-right:10px;" src="{{ asset(Auth::user()->profile_photo_path) }}"/>
                    <li class="nav-item dropdown">
                        @include('backend.includes.partials.profile_dropdown')
                    </li>
                    <i class="fa fa-arrows-alt" aria-hidden="true" style="cursor:pointer;font-size: 25px;color:rgb(142, 106, 106); margin-top:5px; margin-right:-10px;margin-left:10px;" id="fullscreen" lbaction="full" ></i>
            </ul>
        </div>
    </div>
</nav>
