
<div class="small-user-login">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-login">
                    <ul>
                        <li><a href=""><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bottom footer start -->
<div class="small-bottom-navbar" id="bottom-navbar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bottom-navbar">
                    <ul>
                        <li><a href="{{route('Homepage')}}"><i class="fas fa-home small-btn-active"></i></a></li>
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        @if(Auth::check())
                            <li><a href="{{route('login')}}"><i class="fas fa-user text-success"></i></a></li>
                        @else
                            <li><a href="{{route('login')}}"><i class="fas fa-user text-danger"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bottom footer end -->
<header class="large-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="logo">
                <img src="{{asset('frontend/assets/img/Busuu_Logo.png')}}" alt="">
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li class="active"><a href="{{route('Homepage')}}">Home</a></li>
                        <li><a href="#">About</a></li>

                    </ul>
                </nav>
            </div>
            <div class="menu-right">
                <ul>
                    @if(Auth::check())
                        <li><a href="{{route('login')}}"><i class="fas fa-user text-success"></i></a></li>
                    @else
                        <li><a href="{{route('login')}}"><i class="fas fa-user text-danger"></i></a></li>
                    @endif
                    <li><a href=""><i class="fas fa-bell"></i></a></li>
                    <li><a href=""><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="small-menu">
    <div class="container">
        <nav class="lara-navbar">
            <div class="hamburger-menu">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
            <ul class="lara-nav-list clearfix">
                <li class="lara-nav-item"><a class="lara-nav-link" href="{{route('Homepage')}}">Home</a></li>
                <li class="lara-nav-item"><a class="lara-nav-link" href="{{route('Homepage')}}">Services</a></li>
                <li class="lara-nav-item"><a class="lara-nav-link" href="">About</a></li>
            </ul>
        </nav>
    </div>
</div>
