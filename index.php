<?php
  include_once 'header.php';
?>

    <div class="home-carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-5 fw-bold lh-1 mb-3">A PLACE YOUR HEART DESIRES</h1>
          <p class="col-lg-10 fs-6">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, repellendus debitis! Dolorem cumque autem aliquid, iure animi iusto ipsam soluta quis obcaecati, 
             culpa blanditiis sint at accusantium similique, molestias ab.
          </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <img src="img/resort_logo.png" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-6 bg-body rounded mt-5" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark py-4">
        <div class="text-center pb-3">
          <h1 class="display-5 fw-bold lh-1 mb-3 text-white">OUR ROOMS</h1>
        </div>
        <div class="text-center">
          <a href="accommodation.php">
            <button type="button" class="btn btn-primary btn-lg fw-bold rounded-0">LEARN MORE</button>
          </a>
        </div>
    </div>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-md-10 mx-auto col-lg-7">
          <video autoplay muted loop class="w-100">
            <source src="img/video/beach_video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="col-lg-5 text-center text-lg-start">
          <h1 class="display-5 fw-bold lh-1 mb-3">Discover Breathtaking Place</h1>
          <p class="col-lg-12 fs-6">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ullam repellat facere mollitia, 
              tenetur sequi aspernatur quos culpa atque autem dolor aliquam assumenda nostrum expedita odit dignissimos corporis aliquid. Rem?
          </p>
          <div class="pt-2">
            <a href="facility.php">
              <button type="button" class="btn btn-primary btn-lg fw-bold rounded-0">THINGS TO DO</button>
            </a>
          </div>
        </div>
      </div>
    </div>
        
   
<?php
  include_once 'footer.php';
?>