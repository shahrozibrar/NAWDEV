@extends('layouts.mainlayout')

@section('content')


    

  
      



    <div class="container g-py-100">
   
      <div class="row justify-content-center">
      <div class="col-lg-7">
      @if (Auth::user() && Auth::user()->id == '1')
<div class="row g-pb-70">
      <div class="col-md-12">
      <div class="text-center">
          <a class="btn u-btn-primary g-rounded-50 g-pl-25 g-pr-20 g-py-12 g-px-25" href="\blogs\create">
         
            
            <span class="g-pos-center  ">Create New Blog</span>
            
          </a>
        </div>
      </div>
      </div>
      @endif
          <!-- Heading -->
          <div class="text-center mb-4">
            <h2 class="h3 text-uppercase mb-3">Recent Blogs</h2>
            <div class="d-inline-block g-width-60 g-height-1 g-bg-black mb-2"></div>
            <p class="lead mb-0">All these blogs are made with love in NAWDEV</p>
          </div>
          <!-- End Heading -->
        </div>
      
        <div class="col-lg-7">
        @foreach($blogs as $blog)
          <!-- Blog Minimal Blocks -->
          <article class="g-mb-100">
            <div class="g-mb-30">
              

              <img style="height:240px;width:100%" src="images/{{$blog['filename']}}" alt="Image Description">
              <h2 class="h4 g-color-black g-font-weight-600 mb-3">
                  <a class="u-link-v5 g-color-black g-color-primary--hover" href="{{action('BlogController@show', $blog->id)}}">{{$blog['name']}}</a>
                </h2>
              <p class="g-color-gray-dark-v4 g-line-height-1_8">{{ Str::limit($blog->summary, 50) }}</p>
              <a class="g-font-size-13" href="{{action('BlogController@show', $blog->id)}}">Read more...</a>
            </div>
            @if (Auth::user() && Auth::user()->id == '1')
          <form action="{{action('BlogController@destroy', $blog['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          @endif
            
          </article>
          <!-- End Blog Minimal Blocks -->

          
          
          
       
        @endforeach
        <div class="text-xs-center justify-content-center">
      {{ $blogs->links() }}
      </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <!-- End Blog Minimal Blocks -->


@endsection