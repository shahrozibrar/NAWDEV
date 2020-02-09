@extends('layouts.mainlayout')

@section('content')

<!-- Google Map -->
<div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-400" data-type="custom" data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Agency" data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
    data-pin="true" data-pin-icon="../../assets/img/icons/pin/green.png">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1799.155168632564!2d85.21536913123647!3d25.594602006027728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5f65a81f299d%3A0x23dffd1b757a76ff!2sMount+Mercy+Academy!5e0!3m2!1sen!2sus!4v1563995810794!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- End Google Map -->

    <section class="container g-pt-100 g-pb-40">
      <div class="row justify-content-between">
        <div class="col-md-7 g-mb-60">
          <!-- Contact Form -->
          <form method="post" action="{{ route('contactus.store') }}">
          {{ csrf_field() }}

            <div class="row">
            
              <div class="col-md-6 form-group g-mb-20 {{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="g-color-gray-dark-v2 g-font-size-13">Name:</label>
                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="name"  placeholder="Your Name *"  required>
                @if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
				 @endif
              </div>

              <div class="col-md-6 form-group g-mb-20 {{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="g-color-gray-dark-v2 g-font-size-13">Email:</label>
                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" name="email"  type="email" placeholder="Your Email *"  required >
                @if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
							 @endif
              
              </div>

              <div class="col-md-6 form-group g-mb-20 {{ $errors->has('subject') ? ' has-error' : '' }}">
                <label class="g-color-gray-dark-v2 g-font-size-13">Subject:</label>
            <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15 " type="text" name="subject" placeholder="Subject *"  />
            @if ($errors->has('subject'))
										<span class="help-block">
											<strong>{{ $errors->first('subject') }}</strong>
										</span>
							 @endif
             
              </div>

              <div class="col-md-6 form-group g-mb-20 {{ $errors->has('number') ? ' has-error' : '' }}">
                <label class="g-color-gray-dark-v2 g-font-size-13">Phone:</label>
                <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15 " type="text" name="number" placeholder="Phone *"  />
                @if ($errors->has('number'))
										<span class="help-block">
											<strong>{{ $errors->first('number') }}</strong>
										</span>
							 @endif
              
              </div>

              <div class="col-md-12 form-group g-mb-40 {{ $errors->has('message') ? ' has-error' : '' }}">
                <label class="g-color-gray-dark-v2 g-font-size-13">Message:</label>
                <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="7" name="message" placeholder="Your Message"></textarea>
                @if ($errors->has('message'))
				<span class="help-block">
				<strong>{{ $errors->first('message') }}</strong>
				</span>
			    @endif
              
              </div>
              </div>
            

            <button class="btn u-btn-primary rounded-3 g-py-12 g-px-20"  name="btnSubmit" type="submit" role="button">Send Enquiry</button>
          </form> 
          <!-- End Contact Form -->
        </div>

        <div class="col-md-4">
          <h1 class="g-font-weight-300 mb-5">NAWDEV</h1>

          <div class="mb-4">
            <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Address:</h2>
            <p class="g-color-gray-dark-v4 g-font-size-16">Noon Ka Chauraha Rd,
              <br>Hazari Mohalla, Kali Asthan,
              <br>Patna, Bihar 800008</p>
          </div>

          <div class="mb-4">
            <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Email us:</h2>
            <p class="g-color-gray-dark-v4">Email: <a class="g-color-gray-dark-v2" href="#">nawdev23@gmail.com</a>
            </p>
          </div>

          <div class="mb-3">
            <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Call us:</h2>
            <p class="g-color-gray-dark-v4">Call: <span class="g-color-gray-dark-v2">09810665839</span>
            </p>
          </div>

          <div class="g-mb-30">
            <p class="g-color-gray-dark-v5 g-font-weight-600 g-font-size-16"><em>Monday - Friday: 7:00 AM to 4:00 PM</em>
            </p>
          </div>

          <!-- Figure Social Icons -->
          <ul class="list-inline">
            
            <li class="list-inline-item g-mx-4">
              <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-red--hover rounded-circle" href="#">
                <i class="g-font-size-default fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-4">
              <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-red--hover rounded-circle" href="#">
                <i class="g-font-size-default fa fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item g-mx-4">
              <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-red--hover rounded-circle" href="#">
                <i class="g-font-size-default fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
          <!-- End Figure Social Icons -->
        </div>
      </div>
    </section>






@endsection