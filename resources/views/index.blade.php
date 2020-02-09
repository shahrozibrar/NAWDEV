@extends('layouts.mainlayout')

@section('content')
 
<section id="home" class="g-pos-rel">
        <div class="js-carousel u-bg-overlay g-bg-black-opacity-0_2--after"
             data-autoplay="true"
             data-infinite="true"
             data-fade="true"
             data-speed="5000">
          <div class="js-slide g-bg-img-hero g-height-100vh g-min-height-600" style="background-image: url(img/background1.jpg);"></div>

          <div class="js-slide g-bg-img-hero g-height-100vh g-min-height-600" style="background-image: url(img/background2.jpg);"></div>
        </div>

        <div class="u-bg-overlay__inner g-absolute-centered w-100">
          <div class="container text-center g-color-white">
            <h2 class="text-uppercase u-heading-v3__title g-letter-spacing-1 g-font-weight-700 g-font-size-18 g-brd-3 g-brd-red g-pb-5 g-mb-20">IT SOLUTIONS FOR ALL</h2>
            <h3 class="text-uppercase g-line-height-1_4 g-letter-spacing-5 g-font-weight-700 g-font-size-40 g-font-size-55--md g-mb-20">Making Your Business Grow By Taking It Online</h3>

            <ul class="list-inline g-font-size-16 g-mb-30">
              <li class="list-inline-item g-mx-20 g-mb-10 g-mb-0--md">
                <i class="et-icon-global g-font-size-24 g-color-red g-valign-middle g-mr-5"></i>
                <strong class="g-font-weight-700 g-valign-middle">Networking</strong>
                
              </li>
              <li class="list-inline-item g-mx-20 g-mb-10 g-mb-0--md">
                <i class="et-icon-phone g-font-size-24 g-color-red g-valign-middle g-mr-5"></i>
                <strong class="g-font-weight-700 g-valign-middle">App Development</strong>
               
              </li>
              <li class="list-inline-item g-mx-20 g-mb-10 g-mb-0--md">
                <i class="et-icon-laptop g-font-size-24 g-color-red g-valign-middle g-mr-5"></i>
                <strong class="g-font-weight-700 g-valign-middle">Web Development</strong>
              
             
            </ul>

            <a href="#" class="btn btn-md text-uppercase u-btn-outline-white g-letter-spacing-1 g-font-weight-700 g-font-size-11 g-color-white--hover g-theme-bg-gray-dark-v1--hover g-theme-brd-gray-dark-v1--hover g-rounded-50 g-px-35 g-py-14">Learn More</a>
          </div>
        </div>
      </section>


<!-- About Our Company -->
<section class="1g-bg-secondary g-py-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center g-mb-100 g-mb-0--lg">
            <header class="u-heading-v2-3--bottom g-brd-red g-mb-20">
              <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">About Our Company</h2>
            </header>

            <p class="g-font-size-16 g-mb-30">Are you looking for professional team of IT engineers to design your website, create your application
            ,or design the networking structure of your company. Congrats, You have landed on the perfect place we have got solution for all your needs checked. </p>

            <ul class="list-unstyled g-color-gray-dark-v4 mb-0">
              <li class="d-flex g-mb-10">
                <i class="icon-check g-color-red g-mt-5 g-mr-10"></i> Website Development
              </li>
              <li class="d-flex g-mb-10">
                <i class="icon-check g-color-red g-mt-5 g-mr-10"></i> Web Application Development
              </li>
              <li class="d-flex g-mb-10">
                <i class="icon-check g-color-red g-mt-5 g-mr-10"></i> App Development
              </li>
              <li class="d-flex g-mb-10">
                <i class="icon-check g-color-red g-mt-5 g-mr-10"></i> Networking
              </li>
              <li class="d-flex g-mb-10">
                <i class="icon-check g-color-red g-mt-5 g-mr-10"></i> Search Engine Optimization
              </li>
            </ul>
          </div>

          <div class="col-lg-6 g-bg-img-hero g-pos-rel" style="background-image: url(img/index/about.jpg);">
            
          </div>
        </div>
      </div>
    </section>
    <!-- End About Our Company -->

@endsection