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
  
  <title>TradingContainers</title>
</head>

<body>
  <!-- Start Header -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset ('image/logo-301x192.png') }}" alt="Logo" style="width:100px;"
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
              <li><a class="dropdown-item" href="{{ route('RentingContainers') }}">RentingContainers</a></li>
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
      <img src="{{ asset ('image/C2.jpg') }}" alt="aa" width="100%" height="800px">
    </div>
    <div class="col">
      <h5>Trading containers are large, standardized shipping units that are used to transport goods by sea, rail, and truck. They are made of durable materials such as steel or aluminum and are designed to be easily loaded and unloaded at ports and other transport hubs. The standardization of containers allows for the efficient movement of goods between different modes of transportation, as well as the efficient use of space on ships and in warehouses. Containers have revolutionized the shipping industry by making it possible to transport goods more efficiently and at a lower cost. The use of containers has increased the speed and reliability of international trade, and has made it possible for small businesses to participate in global trade. This has led to increased economic growth and a rise in the standard of living for people around the world. The use of containers has also led to the development of container terminals, which are specialized ports that are designed to handle the loading and unloading of containers. These terminals have become important hubs for the movement of goods, and have led to the development of new trade routes and the expansion of existing ones. Containers come in different size and types such as 20ft, 40ft, reefer containers and open top containers. They are also being modified to be used as offices, accommodation, storage, and even as a retail space. In recent years, the use of containers has also been extended to other areas such as disaster relief and humanitarian aid. Containers can be quickly converted into emergency housing, medical clinics, and other facilities, and can be shipped to remote locations around the world. Overall, trading containers have had a significant impact on the global economy and have made it possible for businesses of all sizes to participate in international trade. They have also led to increased efficiency and reduced costs in the shipping industry, and have played a vital role in promoting economic growth and improving the standard of living for people around the world.</h5>
    </div>
    </div>
  </div>
  <!-- End Content -->
  <!-- Start Footer -->
  <nav class="navbar navbar-expand-sm bg-dark justify-content-center mt-2">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-facebook-64.png') }}" alt="face" height="50px"
            width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-instagram-64.png') }}" alt="insta" height="50px"
            width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-twitter-circled-64.png') }}" alt="twitter" height="50px"
            width="50px"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="{{ asset ('image/icons8-youtube-logo-64.png') }}" alt="youtube" height="50px"
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