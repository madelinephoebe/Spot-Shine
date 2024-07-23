<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>CarShine</title>
  <!--CSS Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <!--Fontawsome  -->
  <script src="https://kit.fontawesome.com/4002938454.js" crossorigin="anonymous"></script>
  <!--Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!--Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="carscript.js" defer></script>
  <style>
    .slidetext{
      padding-top: 70px;
    font-size: 90px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    text-align: left;
    color: rgb(79, 79, 79)  ;
    justify-content: left;
    margin: 0;
    margin-right: 650px;
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}

.wrapper{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: left;
    align-items: center;
}

.content {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    background:rgba(205, 205, 205, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 1;
    transition: 0.6s;
}
  </style>
</head>

<body>
<?php
          // Get user ID from the URL parameter
          $userId = $_GET['userId'];
          ?>
  <section class="colored-section" id="title">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href=""><a class="logo"><img src="images/SS.png" style="width: 150px;" alt="logo"></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" href="Lessons.php?userId=<?php echo $userId; ?>">Lessons</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="calendar.php?userId=<?php echo $userId; ?>">Schedule</a>            
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#pricing" >LTO</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              More
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#cta">About Us</a>
            <a class="dropdown-item" href="index.html">Logout</a>
            </div>
          </li>
          </ul>
        </div>
      </nav>
  </section>
  <div class="wrapper">
    <div class="carousel" data-carousel>
    <button class="carousel-button prev" data-carousel-button="prev" type="button" hidden>&#8656;</button>
    <button class="carousel-button next" data-carousel-button="next" type="button" hidden>&#8658;</button>
    <ul data-slides style="z-index: 0;">
        <div class="content" style="z-index: 4;">
            <h3 id="slidetext" class="slidetext"> Learn how to <br> detail your car <br> here with us!</h3>
        </div>
      <li class="slide" data-active>
        <img src="images/1.png" alt="car1">
     
      </li>
      <li class="slide">
        <img src="images/2.png" alt="car2">
      </li>
      <li class="slide">
        <img src="images/3.png" alt="car3">
   
          
      </li>
      <li class="slide">
        <img src="images/4.png" alt="car4">
      </li>
      <li class="slide">
        <img src="images/5.png" alt="car5">
      </li>
      <li class="slide">
        <img src="images/6.png" alt="car6">
      </li>
      <li class="slide">
        <img src="images/7.png" alt="car7">
        <div class="slide-text">
      </li>
      <li class="slide">
        <img src="images/8.png" alt="car8">
      </li>
      <li class="slide">
        <img src="images/9.png" alt="car9">
      </li>
      <li class="slide">
        <img src="images/10.png" alt="car10">
        <div class="slide-text">
      </li>
    </ul>

</div>
</div>
</div>
  <!-- Features -->
  <section class="white-section" id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="features-col col-lg-4">
          <i class="feature-icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Easy to Learn</h3>
          <p>The lessons are easy to understand and follow.</p>
        </div>
        <div class="features-col col-lg-4">
          <i class="feature-icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Affordable</h3>
          <p>The lessons are given and taught for free. No payment required.</p>
        </div>
        <div class="features-col col-lg-4">
          <i class="feature-icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Great Quality</h3>
          <p>The lessons are proven good and effective.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="colored-section" id="testimonials">
    <br><br><center><b><h1 style="font-weight: bold;">Famous Car Detailers</h1></b></center><br>
    <br><br>
        <div class="container-size">
          <img class="testimonial-img" src="images/pan.jpg" style="width: 200px;">
          <em><b>Pan</b> of <b>PANTHEORGANIZER</b> | Car Detailer & Social Media Influencer</em><br></div><br><br>
          
        <div class="container-size">
          <img class="testimonial-img" src="images/chris.jpg" style="width: 200px;">
          <em><b>Christopher Magello</b> of <b>ChrisFix</b> | Social Media Influencer & Content Creator</em><br></div><br>
        <div class="container-size">
          <img class="testimonial-img" src="images/mitch.jpg" style="width: 200px;">
          <em><b>Mitch</b> of <b>THE DETAIL GEEK</b> | Car Detailer & Social Media Influencer</em><br></div><br><br>
  </section>


<!-- Press -->
<section class="colored-section" id="press">
  <img class="press-logo" src="images/pto.png" alt="tc-logo">
  <img class="press-logo" src="images/dg.png" alt="tnw-logo" style="size: 0px;">
  <img class="press-logo" src="images/cf.png" alt="biz-insider-logo">

</section>

<!-- Pricing -->
<section class="white-section" id="pricing">
  <h2 class="section-heading">Don't have a driver's license yet? You can now apply online!</h2>
  <p>Click the link below to apply for driver's license!</p>
  <div class="row justify-content-center"> <!-- Center the row -->
    <div class="pricing-col col-lg-4 col-md-6 text-center">
      <div class="card">
        <div class="card-header">
          <h3>Apply for Driver's License</h3>
        </div>
        <div class="card-body text-center">
          <h2 class="price-text">For Free</h2>
          <p>Hassle-free LTO Online Registration</p>
          <p>Fill-up the Form</p>
          <p>Check your information easily</p>
          <p>Update your information online</p><br>
          <button type="button" class="btn btn-dark btn-block btn-lg" onclick="redirectToCreateAccount()">Apply Now</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
  <section class="colored-section" id="cta">
    <div class="container-fluid">
      <div class="container-color" id="cca">
      <h3 class="medium-heading"><b>Our Mission</b></h3>
            <label><br>At CarShine, our mission is to elevate the driving experience by emphasizing the importance and essentials of cleaning and protecting cars. We are committed to providing innovative and effective solutions that not only enhance the aesthetic appeal of vehicles but also contribute to the longevity and optimal performance of every car on the road. Our mission is to empower car owners with the knowledge and tools needed to preserve the beauty and functionality of their vehicles, ensuring a smooth and enjoyable journey for years to come.</label><br><br><br>
      <h3 class="medium-heading"><b>Our Vision</b></h3>
            <label><br>Our vision is to be a driving force in promoting a culture of car care that extends beyond the surface, emphasizing the intrinsic connection between cleanliness, protection, and the overall lifespan of a vehicle. We envision a future where every car owner recognizes the significance of regular maintenance, detailing, and protective measures in safeguarding their investment. Through continuous innovation and education, we aspire to set new standards in the automotive industry, fostering a community that values and prioritizes the well-being of their cars. CarShine envisions a world where every journey is a testament to the enduring beauty and resilience of well-maintained automobiles.</label>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="foot-icon fab fa-twitter"></i><label>@SpotShine</label><br>
      <i class="foot-icon fab fa-facebook-f"></i><label>SpotShine</label><br>
      <i class="foot-icon fab fa-instagram"></i><label>SpotShine</label><br>
      <i class="foot-icon fas fa-envelope"></i><label>SpotShine@gmail.com</label><br><br>
      <br><p>© Copyright 2023 SpotShine Inc.</p>
    </div>
  </footer>
</body>
<script src="bootstrap.bundle.min.js"></script>
</html>
<script>
  // Function to redirect to create_account.php
  function redirectToCreateAccount() {
      // Use window.location.href to navigate to the desired page
      window.location.href = 'LTO_Form.php?userId=<?php echo $userId; ?>'
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  