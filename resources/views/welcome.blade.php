<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AGYAD</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="">
              <div class="card img-fluid">
                <img class="card-img-top" src="{{ asset('image/hero_bg-2.jpg') }}" alt="Card image" style="width:100%">
                <div class="card-img-overlay">
                  <nav class="navbar navbar-expand-sm navbar-dark text-muted" id="header">
                    <div class="container-fluid">
                      <div class="d-flex">
                        <div class="py-1 me-1"> <img src="{{ asset('image/logo-301x192.png') }}" alt="Logo" style="width:100px;" height="50px">
                        </div>
                        <div class="py-2 me-1"> <img src="{{ asset('image/apple.png') }}" alt="phone" width="30px" height="30px">856576576576</div>
                        <div class="py-2 me-1"> <img src="{{ asset('image/gmail.png') }}" alt="email" width="30px" height="30px">856576576576</div>
                        <div> </div>
                      </div>
                      <ul class=" navbar py-2">
                        <li class="nav-item">
                          @if (Route::has('login'))
                              <div class="hidden sm:block" style="z-index: 999">
                                  @auth
                                      <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Home</a>
                                  @else
                                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log in</a>
                                      @if (Route::has('register'))
                                          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>
                                      @endif
                                  @endauth
                              </div>
                          @endif
                        </li>
                        <li class="nav-item ">
                          <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                              aria-expanded="false">
                              Services </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item" href="{{ route('TradingContainers') }}">Trading
                                  Containers</a></li>
                              <li><a class="dropdown-item" href="{{ route('RentingContainers') }}">Renting Containers</a></li>
                              <li><a class="dropdown-item" href="{{ route('Freight') }}">Freight</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item mx-3">
                          <a class="nav-link" href="{{ route('contact.us.store') }}">ContactUs</a>
                        </li>      
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('AboutUs') }}">AboutUs</a>
                        </li>
                      </ul>
                      <form action="{{ route('search') }}" method="get" class="d-flex">
                        <input class="form-control" type="text" placeholder="Search">
                        <button class="btn" type="button"><img src="{{ asset('image/search-icon-transparent-images-vector-15.png') }}"
                            width="30px" height="30px"></button>
                      </form>
                      <div class="card-img-overlay" id="aa">
                        <h2 class="card-title text-light">WE ARE AGYAD </h2>
                        <h1 class="card-text text-light">NO#1 SOLUTION</h1>
                        <h1 class="card-text text-light">FOR TRANSORT</h1>
                        <a href="#" class="btn btn-primary">Services</a>
                      </div>
                    </div>
                </div>
              </div>
              </nav>
              <!-- end header -->
              <!-- Start typography -->
              <div class="container">
                <h3 id="head">Services</h3>
                <h6 id="details">Ajyad carry out all Export and Import customs clearance services, We take pride in being regarded
                  as one of the most reliable and affordable logistic and warehousing service providers in the country. We excel at
                  a range of logistic services, which includes trucking services, warehousing services and renting containers.</h6>
              </div>
              <div class="container">
                <h3 id="head">Gallery</h3>
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
            
                  <!-- Indicators/dots -->
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                  </div>
            
                  <!-- The slideshow/carousel -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('image/C4.jpg') }}" alt="Lq" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('image/C5.jpg') }}" alt="Cago" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('image/C6.jpg') }}" alt="1k" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('image/C7.jpg') }}" alt="1k" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('image/C1.jpg') }}" alt="1k" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('image/C2.jpg') }}" alt="1k" class="d-block" style="width:100%">
                    </div>
                  </div>
            
                  <!-- Left and right controls/icons -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </button>
                </div>
                <!-- End Typography -->
                <!-- Start Footer -->
                <nav class="navbar navbar-expand-sm bg-dark justify-content-center mt-2">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="{{ asset('image/icons8-facebook-64.png') }}" alt="face" height="50px"
                          width="50px"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="{{ asset('image/icons8-instagram-64.png') }}" alt="insta" height="50px"
                          width="50px"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="{{ asset('image/icons8-twitter-circled-64.png') }}" alt="twitter" height="50px"
                          width="50px"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><img src="{{ asset('image/icons8-youtube-logo-64.png') }}" alt="youtube" height="50px"
                          width="50px"></a>
                    </li>
                  </ul>
                </nav>
                <div class="container-fluid">
                  <h5 class="text-center"> © Copyright 2020 Ajyad-Containers. All Rights Reserved. </h5>
                </div>
                <!-- End Footer -->
              

              
            </div>
        </div>
    </body>
</html>
