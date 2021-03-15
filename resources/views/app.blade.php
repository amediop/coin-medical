<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('aimeos_header')
	<title>Aimeos on Laravel</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4/dist/css/bootstrap.min.css">
	<style>
		/* Theme: Black&White */
		/* body {
			--ai-primary: #000; --ai-primary-light: #000; --ai-primary-alt: #fff;
			--ai-bg: #fff; --ai-bg-light: #fff; --ai-bg-alt: #000;
			--ai-secondary: #555; --ai-light: #D0D0D0;
		} */
		body { color: #000; color: var(--ai-primary, #000); background-color: #fff; background-color: var(--ai-bg, #fff); }
		.navbar, footer { color: #555; color: var(--ai-primary-alt, #555); background-color: #f8f8f8; background-color: var(--ai-bg-alt, #f8f8f8); }
		.navbar a, .navbar a:before, .navbar span, footer a { color: #555 !important; color: var(--ai-primary-alt, #555) !important; }
		.content { margin: 0 5% } .catalog-stage-image { margin: 0 -5.55% }
		.sm { display: block } .sm:before { font: normal normal normal 14px/1 FontAwesome; padding: 0 0.2em; font-size: 225% }
		.facebook:before { content: "\f082" } .twitter:before { content: "\f081" } .instagram:before { content: "\f16d" } .youtube:before { content: "\f167" }
	</style>
	@yield('aimeos_styles')
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light">
	<a class="navbar-brand" href="/">
	<img style="width: 110px;
                           height: 90px;
						   right:  20px;
						   opacity:0.7;" src="{{asset('image/index.jpeg')}}" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				@if (Auth::guest())
					<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
					<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
				@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="nav-link" href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="Profile">Profile</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a class="nav-link" href="javascript: document.getElementById('logout').submit();">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
			@yield('aimeos_head')
		</div>
	</nav><br><br>
	<div class="content">

		@yield('aimeos_stage')
		@yield('aimeos_nav')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
	</div>
	<section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          Coin Medical
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              A propos
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Adresse
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="images/i-1.jpg" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="images/i-2.jpg" alt="">
                  </div>
                </a>
              </div>

              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="images/i-3.jpg" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="images/i-4.jpg" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="images/i-5.jpg" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="images/i-6.jpg" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; 2021 All Rights Reserved By Guisse/Amadou
        <a href="https://html.design/">Coin Medical</a>
      </p>
    </div>
  </section>
	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/combine/npm/jquery@3,npm/bootstrap@4"></script>
	@yield('aimeos_scripts')
	</body>
</html>