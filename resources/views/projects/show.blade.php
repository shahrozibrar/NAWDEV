@extends('layouts.mainlayout')

@section('content')
<section class="container g-pt-50 g-pb-40">
      <div class="row ">
     
        <div class="col-lg-12 flex-lg-first g-mb-30">
        <img style="height:350px;width:100%" src="{{ URL::to('/') }}/images/{{$projects['filename']}}" alt="Image Description">
            </div>
            
      
        
        <div class="col-lg-12 flex-lg-first g-mb-60">
            <header class="u-heading-v2-3--bottom g-brd-red g-mb-20">
              <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">{{$projects->name}}</h2>
            </header>

            <p class="g-font-size-16 g-mb-20" style="white-space: pre-line" >{{$projects->summary}}</p>

            
          </div>
          <div class="text-center">
          <a class="btn u-btn-lightred g-rounded-50 g-pl-25 g-pr-20 g-py-12 g-px-25" href="\projects">
         
            
            <span class="g-pos-center  ">Back</span>
            
          </a>
        </div>
      </div>
    </section>


@endsection