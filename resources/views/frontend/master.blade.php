<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Telecom</title>

  <link href="{{asset('frontendtemplate/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontendtemplate/vendor/bootstrap/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{asset('frontendtemplate/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Telecom Services</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" class="text-white">
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}" style="color: white;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tvc')}}" style="color: white;">TVC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('package')}}" style="color: white;">Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}" style="color: white;">Blogs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Log In</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('frontendtemplate/images/2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('frontendtemplate/images/1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('frontendtemplate/images/3.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <div class="container-fluid">
    @yield('content')
  </div>

  <div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h3>Spie</h3>
          <p class="pr-5 text-white-50">We'll live FOREVER!</p>
          <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
        </div>
        <div class="col-lg-3 col-xs-12 links">
          <h4 class="mt-lg-0 mt-sm-3">Links</h4>
          <ul class="m-0 p-0">
            <li>- <a href="#">www.spie.com</a></li>
            <li>- <a href="#">www.mktn.com</a></li>
            <li>- <a href="#">www.lauching.com</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Location</h4>
          <p>Bhone Gyee Street, Latha Township, Yangon</p>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>09 428313071</p>
          <p><i class="fa fa-envelope-o mr-3"></i>info@spie.com</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col copyright">
          <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
