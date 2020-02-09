<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials.head')
  </head>

  <body>
  @include('layouts.partials.header')
	
  @if(Session::has('flash_message'))
  <div class="alert alert-success">{{Session::get('flash_message')}}</div>
  @endif

  @if(Session::has('flash_error'))
  <div class="alert alert-success">{{Session::get('flash_error')}}</div>
  @endif


  
	@yield('content')

	@include('layouts.partials.footer')
	
	@include('layouts.partials.footer-scripts')


  </body>
</html>