@extends('layouts.mainlayout')

@section('content')


    
    <!-- Blog Single Item Blocks -->
    <div class="container-fluid px-0">
      <div class="row no-gutters">
        <div id="stickyblock-start" class="col-md-6">
          <div class="js-sticky-block g-sticky-block--md g-bg-img-hero g-min-height-100vh" data-bg-img-src="{{ URL::to('/') }}/images/{{$blogs['filename']}}" data-type="responsive" data-start-point="#stickyblock-start" data-end-point="#stickyblock-end"></div>
        </div>

        <div class="col-md-6">
          <div class="g-pa-50 g-pt-0 g-px-100--lg g-pb-100--lg">
            <div class="g-max-width-400--md g-pos-rel g-z-index-1 g-pt-100 g-pl-50 g-pl-0--md g-ml-minus-50--lg mb-4">
              <h1 class="h2 g-color-black g-font-weight-600">{{$blogs->name}}</h1>
            </div>

            <div class="mb-5">
              <p class="g-color-black g-font-weight-600 g-font-size-16">{{$blogs->headline}}</p>
            </div>

            <p class="g-font-size-16 g-mb-20" style="white-space: pre-line" >{{$blogs->summary}}</p>
              

            
            </div>

            
          </div>
        </div>
      </div>
      <div class="text-center">
          <a class="btn u-btn-lightred g-rounded-50 g-pl-25 g-pr-20 g-py-12 g-px-25" href="\blogs">
         
            
            <span class="g-pos-center  ">Back</span>
            
          </a>
        </div>
    </div>
    <!-- End Blog Single Item Blocks -->
    

@endsection