<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
  <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>RentingContainers</title>
</head>

<body>
  <!-- Start Header -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset ('image/logo-301x192.png')}}" alt="Logo" style="width:100px;"
          height="50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ContactUs') }}">ContactUs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('AboutUs') }}">AboutUs</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Service</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('TradingContainers') }}">TradingContainers</a></li>
              <li><a class="dropdown-item" href="{{ route('Freight') }}">Freight</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </div>
  <!-- End Header -->
  <!-- Content -->
  <div class="container mt-3">
    <div class="row">
      <div class="col">
      <img src="{{ asset ('image/C4.jpg')}}" alt="aa" width="100%" height="500px">
    </div>
    <div class="col">
      <h5>Renting containers is a cost-effective solution for businesses and individuals who need temporary storage or transportation for goods. These containers come in a variety of sizes, such as 20ft and 40ft, and can be used for a variety of purposes such as storage, transportation, and even as a temporary office or retail space. Renting a container can be a great option for businesses that experience seasonal fluctuations in storage or transportation needs, or for individuals who are remodeling their homes or moving. It also offers a flexible and convenient solution for those who are running out of storage space. Renting a container typically involves a short-term contract, and the containers can be delivered to a location of your choice. Additionally, most rental companies offer various add-on services such as transportation, installation, and maintenance. In summary, renting containers can be a cost-effective and flexible solution for businesses and individuals who need temporary storage or transportation for goods. With a variety of sizes and add-on services available, renting a container can be tailored to meet specific needs and requirements.</h5>
    </div>
    </div>
  </div>
  <!-- End Content -->
  <!-- Start Footer -->
  <nav class="navbar navbar-expand-sm bg-dark justify-content-center mt-2">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-facebook-64.png')}}" alt="face" height="50px"
            width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-instagram-64.png')}}" alt="insta" height="50px"
            width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-twitter-circled-64.png')}}" alt="twitter" height="50px"
            width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-youtube-logo-64.png')}}" alt="youtube" height="50px"
            width="50px"></a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <h5 class="text-center"> © Copyright 2020 Ajyad-Containers. All Rights Reserved. </h5>
  </div>
  <!-- End Footer -->


</body>

</html>