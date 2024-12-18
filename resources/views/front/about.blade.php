@extends('layouts.app')

@section('content')

  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
      <div class="overlay overlay-bg"></div>
      <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
              <div class="about-content col-lg-12">
                  <h1 class="text-white">
                      About Us				
                  </h1>	
                  <p class="text-white link-nav"><a href="{{ route('index') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('about') }}"> About Us</a></p>
              </div>											
          </div>
      </div>
  </section>
  <!-- End banner Area -->	

  <!-- Start quote Area -->
  <section class="quote-area pt-100">
      <div class="container">				
          <div class="row">
              <div class="col-lg-6 quote-left">
                  <h1>
                      <span>Music</span> gives soul to the universe, <br>
                      wings to the <span>mind</span>, flight <br>
                      to the <span>imagination</span>.
                  </h1>
              </div>
              <div class="col-lg-6 quote-right">
                  <p>
                    Museums are not just places of history, they are sanctuaries of knowledge, where every exhibit
                    tells a story. <br>
                    Each artifact is a window into the past, providing insight, wonder, and a deeper understanding
                    of humanity’s journey.
                  </p>
              </div>
          </div>
      </div>	
  </section>
  <!-- End quote Area -->			

  <!-- Start about info Area -->
  <section class="section-gap info-area" id="about">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="menu-content pb-40 col-lg-8">
                  <div class="title text-center">
                      <h1 class="mb-10">Few words about our Museum</h1>
                      <p>Who are in extremely love with eco friendly system.</p>
                  </div>
              </div>
          </div>					
          <div class="single-info row mt-40">
              <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                  <div class="info-thumb">
                      <img src="img/pages/about-img.jpg" class="img-fluid" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 no-padding info-rigth">
                  <div class="info-content">
                      <h2 class="pb-30">We Realize that <br>
                      there are reduced <br>
                      Wastege Stand out</h2>
                      <p>
                          inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
                      </p>
                      <br>
                      <p>
                          inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.									
                      </p>
                      <br>
                      <p>
                          inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
                      </p>
                      </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End about info Area -->
@endsection
