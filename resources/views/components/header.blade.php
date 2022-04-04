<header class="navbar navbar-expand-lg navbar-light bg-light container-fluid hd">
    <div class="container">
        <!-- ====== BRAND ====== -->
        <a class="navbar-brand ms-9 brand" href="{{ route('home') }}">d<span class="worning">hr</span></a>

        <!-- ====== BURGER BUTTON | RESPONSIVE ====== -->
        <button class="navbar-toggler burger-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- ====== NAVIGATION BAR ====== -->
        <nav class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav">
                <li class="nav-item">
                    <a class="nav-link active nav-a1-li" aria-current="page" href="{{route('home')}}">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-a2-li" href="{{ route('jobs') }}">jobs</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link nav-a3-li" href="{{ route('partners') }}">partners</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-a1-li" href="{{ route('about') }}">about us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-a2-li" href="{{ route('contact') }}">contact us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-a3-li" href="{{ route('serveices') }}">our services</a>
                </li>
            </ul>

            <!-- ====== LOGIN AND SIGNUP ====== -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-5 ul-nav-reg">
                <li class="nav-item">
                    <a class="nav-link nav-log-li" href="{{ route('login') }}">login</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link nav-sign-li" href="{{ route('register') }}">signup</a>
                </li>
            </ul>
        </nav>
    </div>
</header>