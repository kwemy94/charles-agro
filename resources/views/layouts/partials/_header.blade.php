<div class="header-top bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3">
                <a href="index.html" class="logo">
                    <img src="{{ asset('template/images/charles/logo/logo.png')}}"  style="height: 70px; width: 70px; border-radius: 50%;" alt="Logo" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-3 d-none d-lg-block">

                <div class="quick-contact-icons d-flex align-items-center">
                    <div class="icon align-self-center mt-3">
                        <span class="icon-room text-primary"></span>
                    </div>
                    <div class="text">
                        <span class="h4 d-block">Littoral</span>
                        <span class="caption-text">Région du littoral Cameroun</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="quick-contact-icons d-flex align-items-center">
                    <div class="icon align-self-center mt-3">
                        <span class="icon-phone text-primary"></span>
                    </div>
                    <div class="text">
                        <span class="h4 d-block">+237 6 76 15 27 95</span>
                        {{-- <span class="caption-text">Call us</span> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-3 d-none d-lg-block">
                <div class="quick-contact-icons d-flex align-items-center">
                    <div class="icon align-self-center mt-3">
                        <span class="icon-envelope text-primary"></span>
                    </div>
                    <div class="text">
                        <span class="h4 d-block">charleskamga85@gmail.com</span>
                        {{-- <span class="caption-text">Email us</span> --}}
                    </div>
                </div>
            </div>

            <div class="col-6 d-block d-lg-none text-right">
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                        class="icon-menu h3"></span></a>
            </div>
        </div>
    </div>



    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">

                <div class="mx-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            <li class="{{request()->routeIs('home')? 'active': ''}}">
                                <a href="{{route('home')}}" class="nav-link text-left">Accueil</a>
                            </li>

                            <li class="{{request()->routeIs('about-us.index')? 'active': ''}}">
                                <a href="{{route('about-us.index')}}" class="nav-link text-left">A propos</a>
                            </li>

                            <li class="{{request()->routeIs('our-services.index')? 'active': ''}}">
                                <a href="{{route('our-services.index')}}" class="nav-link text-left">Nos Services</a>
                            </li>

                            {{-- <li>
                                <a href="testimonials.html" class="nav-link text-left">Testimonials</a>
                            </li>
                            <li><a href="blog.html" class="nav-link text-left">Blog</a></li> --}}

                            <li class="{{request()->routeIs('contact-us.index')? 'active': ''}}">
                                <a href="{{route('contact-us.index')}}" class="nav-link text-left">Contact</a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>
        </div>

    </div>

</div>
