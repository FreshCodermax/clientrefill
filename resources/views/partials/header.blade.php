<header class="site-navbar py-1" role="banner">
    <div class="container">
         <div class="row align-items-center">
             <div class="col-6 col-xl-2">
                <h1 class="mb-0"><a href="{{url('/')}}" id="link" class="text-black h2 mb-0">Client<strong>refill</strong></a></h1></div>
                <div class="col-10 col-xl-10 d-none d-xl-block">
                    <nav class="site-navigation text-right" role="navigation">
                        <nav class="site-navigation text-right" role="navigation">
                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active menu-left"><a href="index.html">Home</a></li>
                                <li class="menu-left"><a href="#">Products Category</a> </li>
                                <li class="menu-left"><a href="{{route('jobcate')}}">Jobs Category</a></li>
                                @if(Auth::check())
                                    <li><a href="{{url('dashboard/')}}">Dashboard</a></li>
                                @else
                                        <li><a href="{{route('login')}}">Log In</a></li>
                                        <li><a href="{{route('signup')}}">Sign Up</a></li>
                                @endif
                                
                                <li><a href="{{route('viewads')}}"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post Ad</span></a></li>
                            </ul>
                        </nav>
                    </div>
        <div class="col-6 col-xl-2 text-right d-block">
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>


