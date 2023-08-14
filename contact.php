<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';
?>

  <div class="container col-xl-10 col-xxl-8 px-4">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h4 class="display-5 fw-bold lh-1 mb-3">CONTACT INFORMATION</h4>
        <p class="col-lg-10 fs-6">
            Bookings for The Resort are available online. 
            Our Reservation Team is here to assist you from 9 AM to 10 PM daily with booking enquiries and personal requests.
            <br><br>
            Let us know if we can help you with any further information.
            Looking forward to hearing from you!
        </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5 shadow-lg">
        <form class="p-4 p-md-5 bg-light">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email Address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Phone Number</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
            <label for="floatingTextarea2">Message</label>
          </div>
          <div class="mt-4 text-center">
            <button class="w-50 btn btn-lg btn-primary" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container col-xl-10 col-xxl-8 px-4 py-1">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-10 mx-auto col-lg-7">
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18906.129712753736!2d6.722624160288201!3d60.12672284414915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463e997b1b6fc09d%3A0x6ee05405ec78a692!2sJ%C4%99zyk%20trola!5e0!3m2!1spl!2spl!4v1672239918130!5m2!1spl!2spl" class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-5 text-center text-lg-start">
        <h1 class="display-5 fw-bold lh-1 mb-3 pt-3">LOCATION</h1>
        <p class="col-lg-10 fs-6">
          <span class="fw-bold">Address: </span> Phillipines
          <br>
          <span class="fw-bold">Text or Call: </span>0928-6011-856 or 09273574286
          <br>
          <span class="fw-bold">Email: </span>theresort@gmail.com
        </p>
      </div>
    </div>
  </div>
   
<?php
  include_once 'footer.php';
?>