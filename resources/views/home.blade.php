@extends('layouts.main')
@section('container')
<!doctype html>
<html lang="en">
  <head>
    
    <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <div class="featurette-divider">
      <a>
        <center>
          <h1 class="featurette-heading"><b>WELCOME</b></h1>
        </center>
      </a>
      <div class="row featurette">

        <center>
          <p class="font"> <b> FAR COCO Indonesia</b> strives to channel and contribute to the world to meet the global demand for coconut products. <br>
            Indonesia is known as a country rich in natural resources. One of its mainstay sectors is agriculture and plantations. <br>Indonesia is <b>the largest coconut producing country</b> in the world, so that it is able to contribute to fulfilling the world's coconut demand. <br>
            Coconut has many health benefits such as <b>forming red blood cells, as well as selenium, an important antioxidant that protects your cells</b>, etc. <br>So that coconut products can be an alternative choice for a better life.
            </br>
        </center>


      </div>
    </div>
    <br> <br> <br>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col"><center>
        <img class="bd-placeholder-img rounded-circle" src="../img/LOGO - Quality.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

        <h2>Quality</h2>
        <p>Quality is the main feature that becomes a benchmark for good cooperation by providing satisfaction to customers and meeting investors' expectations</p>
        </center>
      </div><!-- /.col-lg-4 -->
      <div class="col"><center>
        <img class="bd-placeholder-img rounded-circle" src="../img/LOGO - Comittment.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h2>Commitment</h2>
        <p>Commitment is very important in improving the quality provided in every product offered</p>
       </center>
      </div><!-- /.col-lg-4 -->
      

    </div><!-- /.row -->
    <br> <br> <br>
    <div class="row">
        <div class="col"><center>
          <img class="bd-placeholder-img rounded-circle" src="../img/LOGO - Integrity.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
  
          <h2>Integrity</h2>
          <p>Integrity is very important in all matters, so that all activities can be carried out honestly and responsibly</p>
          </p></center>
        </div><!-- /.col-lg-4 -->
        <div class="col"><center>
          <img class="bd-placeholder-img rounded-circle" src="../img/LOGO - Innovation.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
  
          <h2>Innovation</h2>
          <p>We always make developments in our products and services to give preference and take a role in meeting customer needs</p>
          </p></center>
        </div><!-- /.col-lg-4 -->
        
  
      </div><!-- /.row -->
      <br> <br> <br>
      </div>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 50%">
            <div class="row featurette">
              <div class="col-md-7">
                <div class="Integrity">
                  <h2 class="lok"> <b> Quality</b></span></h2>
                  <p class="lead">Quality is the main feature that becomes a benchmark for good cooperation by providing satisfaction to customers and meeting investors' expectations</p>
                </div>
              </div>
              <div class="col-md-5">
                <center> <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/photo-gallery-1.jpg" alt="ppp" style="border-radius: 10%" width="300" height="500" bor aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </center>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="height: 50%">
            <div class="row featurette">
              <div class="col-md-7">
                <div class="Integrity">
                  <h2 class="lok"> <b> Quality</b></span></h2>
                  <p class="lead">Quality is the main feature that becomes a benchmark for good cooperation by providing satisfaction to customers and meeting investors' expectations</p>
                </div>
              </div>
              <div class="col-md-5">
                <center> <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/photo-gallery-3.jpg" alt="ppp" style="border-radius: 10%" width="300" height="500" bor aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </center>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="height: 50%"> 
            <div class="row featurette">
              <div class="col-md-7">
                <div class="Integrity">
                  <h2 class="lok"> <b> Quality</b></span></h2>
                  <p class="lead">Quality is the main feature that becomes a benchmark for good cooperation by providing satisfaction to customers and meeting investors' expectations</p>
                </div>
              </div>
              <div class="col-md-5">
                <center> <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/photo-gallery-2.jpg" alt="ppp" style="border-radius: 10%" width="300" height="500" bor aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </center>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</main>




      
  </body>
</html>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection