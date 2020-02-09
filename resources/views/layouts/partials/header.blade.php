<!-- Header -->
<header id="js-header" class="u-header  u-header--static">
 <!-- Top Bar -->
 <div class="u-header__section u-header__section--hidden u-header--sticky-top u-header__section--dark g-bg-black-opacity-0_9 g-transition-0_3 g-py-10">
        <div class="container">
          <div class="row flex-column flex-sm-row justify-content-between align-items-center text-uppercase g-font-weight-600 g-color-white g-font-size-12 g-mx-0--lg">
            <div class="col-auto">
              <ul class="list-inline mb-0">
                
                <li class="list-inline-item">
                  <a href="#" class="g-color-white g-color-red--hover g-pa-3">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
                
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/nawdev-company-9b42151a0/" class="g-color-white g-color-red--hover g-pa-3">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="g-color-white g-color-red--hover g-pa-3">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-auto">
              <i class="fa fa-phone g-font-size-18 g-valign-middle g-color-red g-mr-10 g-mt-minus-2"></i>
              +91 98 106 658 39
            </div>

            <div class="col-auto">
              <i class="fa fa-clock-o g-font-size-18 g-valign-middle g-color-red g-mr-10 g-mt-minus-2"></i>
              Mon-Fri: 7 AM - 4 PM
            </div>

            <div class="col-auto g-pos-rel">
              <ul class="list-inline g-overflow-hidden g-pt-1 g-mx-minus-4 mb-0">
                <li class="list-inline-item g-mx-4">
                  <i class="icon-globe-alt g-font-size-18 g-valign-middle g-color-red g-pos-rel g-top-minus-2 g-mr-10"></i>
                  
                 
                </li>
               
                @if(Auth::guest())
                  <li class="list-inline-item g-mx-4">
                  <a class="g-color-white g-color-primary--hover g-text-underline--none--hover" href="/contact-us">Inquiry</a>
                </li>
                
                @else
                <li class="list-inline-item g-mx-4">
                  <a class="g-color-white g-color-primary--hover g-text-underline--none--hover" href="/logout">LogOut</a>
                </li>

                @endif
                
               
              </ul>
            </div>

            
          </div>
        </div>
      </div>
      <!-- End Top Bar -->
      <div class="u-header__section  u-header--sticky-top u-header__section--light g-transition-0_3 g-py-10" >
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="/" class="navbar-brand d-flex">
            <img height="100px" width="120px" src="{{asset('img/logo.png')}}" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                <!-- Intro -->
                @if (Request::is('/'))
                <li class="nav-item active Red g-mx-10--lg g-mx-15--xl">
               <a href="/" class="nav-link g-color-red g-py-7 g-px-0">Home</a>
                @else
               <li class="nav-item g-mx-10--lg g-mx-15--xl">
               <a href="/" class="nav-link g-py-7 g-px-0">Home</a>
               @endif
              </li>

              @if (Request::is('projects'))
                <li class="nav-item active Red g-mx-10--lg g-mx-15--xl">
               <a href="/projects" class="nav-link g-color-red g-py-7 g-px-0">Our Work</a>
                @else
               <li class="nav-item g-mx-10--lg g-mx-15--xl">
               <a href="/projects" class="nav-link g-py-7 g-px-0">Our Work</a>
               @endif
              </li>

              @if (Request::is('blog'))
                <li class="nav-item active Red g-mx-10--lg g-mx-15--xl">
               <a href="/blogs" class="nav-link g-color-red g-py-7 g-px-0">Blog</a>
                @else
               <li class="nav-item g-mx-10--lg g-mx-15--xl">
               <a href="/blogs" class="nav-link g-py-7 g-px-0">Blog</a>
               @endif
              </li>

              @if (Request::is('contact'))
                <li class="nav-item active Red g-mx-10--lg g-mx-15--xl">
               <a href="/contact-us" class="nav-link g-color-red g-py-7 g-px-0">Contact US</a>
                @else
               <li class="nav-item g-mx-10--lg g-mx-15--xl">
               <a href="/contact-us" class="nav-link g-py-7 g-px-0">Contact US</a>
               @endif
              </li>
               
                
               

                

                   
              </ul>
            </div>
            <!-- End Navigation -->

           
        </nav>
      </div>
    </header>
    <!-- End Header -->

