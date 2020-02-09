@extends('layouts.mainlayout')

@section('content')


    

  <!-- News Block -->
  <section class="container g-pt-50 g-pb-70">
  @if (Auth::user() && Auth::user()->id == '1')
<div class="row g-pb-70">
      <div class="col-md-12">
      <div class="text-center">
          <a class="btn u-btn-primary g-rounded-50 g-pl-25 g-pr-20 g-py-12 g-px-25" href="\projects\create">
         
            
            <span class="g-pos-center  ">Create New Project</span>
            
          </a>
        </div>
      </div>
      </div>
      @endif
     

      <div class="row justify-content-center g-mb-60">
        <div class="col-lg-7">
          <!-- Heading -->
          <div class="text-center mb-4">
            <h2 class="h3 text-uppercase mb-3">Recent Projects</h2>
            <div class="d-inline-block g-width-60 g-height-1 g-bg-black mb-2"></div>
            <p class="lead mb-0">All these projects are made with love in NAWDEV</p>
          </div>
          <!-- End Heading -->
        </div>
      </div>
      
      <div class="row">
      
      
      @foreach($projects as $project)
        <div class="col-lg-4 g-mb-30">
        
          <!-- Article -->
          <article class="u-shadow-v1-4">
            <img style="height:250px;width:100%" src="images/{{$project['filename']}}" alt="Image Description">

            <div class="g-pa-25">
              

              <h3 class="h2 g-font-weight-300 g-mb-40">
                  <a class="u-link-v5 g-color-main g-color-primary--hover g-text-underline--none--hover" href="{{action('ProjectController@show', $project->id)}}">{{$project['name']}}</a>
                </h3>

              
                <div class="media-body align-self-center">
                  <a class="u-link-v5 g-color-main  text-uppercase" href="#">{{ Str::limit($project->summary, 50) }}</a>
                </div>
                <tr>
                @if (Auth::user() && Auth::user()->id == '1')
          <form action="{{action('ProjectController@destroy', $project['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endif
              </div>
             
            </div>


            
          </article>
          <!-- End Article -->
          @endforeach
          
        </div>
        
       
        </div>
       
        <div class="text-xs-center justify-content-center">
      {{ $projects->links() }}
      </div>

      </div>
    </section>
    <!-- End News Block -->

@endsection