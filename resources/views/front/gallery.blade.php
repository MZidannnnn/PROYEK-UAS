@extends('layouts.app')

@section('content')

  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
      <div class="overlay overlay-bg"></div>
      <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
              <div class="about-content col-lg-12">
                  <h1 class="text-white">
                      Art Gallery				
                  </h1>	
                  <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
              </div>											
          </div>
      </div>
  </section>
  <!-- End banner Area -->	


  <!-- Start gallery Area -->
  <section class="gallery-area section-gap gallery-page-area" id="gallery">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">Our Exhibition Gallery</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
                  </div>
              </div>
          </div>						
          <div id="grid-container" class="row">
              <a class="single-gallery" href="img/g1.jpg"><img class="grid-item" src="img/g1.jpg"></a>
              <a class="single-gallery" href="img/g2.jpg"><img class="grid-item" src="img/g2.jpg"></a>
              <a class="single-gallery" href="img/g3.jpg"><img class="grid-item" src="img/g3.jpg"></a>
              <a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
              <a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
              <a class="single-gallery" href="img/g6.jpg"><img class="grid-item" src="img/g6.jpg"></a>
              <a class="single-gallery" href="img/g7.jpg"><img class="grid-item" src="img/g7.jpg"></a>
              <a class="single-gallery" href="img/g8.jpg"><img class="grid-item" src="img/g8.jpg"></a>
              <a class="single-gallery" href="img/g9.jpg"><img class="grid-item" src="img/g9.jpg"></a>
              <a class="single-gallery" href="img/g10.jpg"><img class="grid-item" src="img/g10.jpg"></a>
              <a class="single-gallery" href="img/g11.jpg"><img class="grid-item" src="img/g11.jpg"></a>
              <a class="single-gallery" href="img/g12.jpg"><img class="grid-item" src="img/g12.jpg"></a>
              <a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
              <a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>						
          </div>	
      </div>	
  </section>
  <!-- End gallery Area -->			

@endsection
