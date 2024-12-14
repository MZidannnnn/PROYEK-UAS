{{-- start header --}}
<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex mt-2">
          <div id="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('gallery') }}">Gallery</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header><!-- #header -->