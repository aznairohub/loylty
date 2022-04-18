@extends('user.mainheader')
@section('main-body')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
            <h1 class="mb-0 bread">About us</h1>
          </div>
        </div>
      </div>
    </div>
    <br>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary" >
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Welcome to Bigmart an eCommerce website</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
            @foreach($res as $val) <p>
               {{$val->abouts}} 
              </p> @endforeach
							<p><a href="/login" class="btn btn-primary">Shop now</a></p>
						</div>

					</div>
				</div>
			</div>
		</section>

   
@endsection