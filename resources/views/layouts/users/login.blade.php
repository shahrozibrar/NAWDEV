@extends('layouts.mainlayout')

@section('content')

<form method="POST" action="{{url('user/do-login')}}" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">

@csrf

  <div class="form-group g-mb-25">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control rounded-0 form-control-md" name="email" placeholder="Enter email">
   
  </div>

  <div class="form-group g-mb-25">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control rounded-0 form-control-md" id="exampleInputPassword1" placeholder="Password">
  </div>

  

  
  
  <button type="submit" class="btn btn-md u-btn-primary rounded-0">Submit</button>
</form>
<!-- End General Controls -->

@endsection