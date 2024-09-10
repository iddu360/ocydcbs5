<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="iddu emmanuel, Ehmah_CodeIt, daemon507">
  <meta name="description" content="Otubanga Pentecostal Assemblies of God has a community consisting of church, school and Child development Center. Browse our blog for latest news and more...Connect with us and let us hear from you!">
  <meta name="keywords" content="otubanga, ebenezer, aliba, obongi, nursery, primary, blog">
  <meta name="generator" content="iddu">
  <link rel="apple-touch-icon" sizes="180x180" href="">
  <link rel="shortcut icon" href="./assets/bloglogo.png" type="image/x-icon">
  <link rel="icon" href="./assets/bloglogo.png">
  <title>Otubanga Blog</title>
  <style>
    #spinner {
      opacity: 0;
      visibility: hidden;
      transition: opacity .5s ease-out, visibility 0s linear .5s;
      z-index: 99999;
    }

    #spinner.show {
      transition: opacity .5s ease-out, visibility 0s linear 0s;
      visibility: visible;
      opacity: 1;
    }

    .back-to-top {
      position: fixed;
      display: none;
      right: 45px;
      bottom: 45px;
      z-index: 99;
    }

    .card-img-overlay::after {
      content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, .6);
      left: 0;
      top: 0;
      border-radius: 5px;
      /* z-index: 15; */
    }

    .card-img-overlay>div {
      position: absolute;
      z-index: 99;
    }

    .theryt hr {
      height: 4px;
      font-weight: bold;
      background: #000;
      width: 90%;
      margin: auto;
      border-radius: 5px;
    }

    .table-responsive .table,
    .table-responsive .table thead,
    .table-responsive .table th,
    .table-responsive .table tbody,
    .table-responsive .table td {
      background: transparent;
    }

    .footer a {
      text-decoration: none;
      color: #e7e6ff;
      transition: .3s ease-in-out all;
    }

    .badx {
      background: linear-gradient(to right, rgba(0, 0, 0, .8), rgba(0, 0, 0, 0));
      /* -webkit-linear-gradient(top, rgba(255, 0, 0, 1), rgba(0, 255, 0, 1)), */
      /* -moz-linear-gradient(top, rgba(255, 0, 0, 1), rgba(0, 255, 0, 1)), */
      /* -o-linear-gradient(top, rgba(255, 0, 0, 1), rgba(0, 255, 0, 1)); */
      margin-top: -75%;
    }

    body {
      background: url(./assets/aimhigher.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
    }

    @media (max-width: 500px) {
      .badx {
        margin-top: -80%;
      }
    }
  </style>
  <script>
    // Sticky Navbar
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
        $('.sticky-top').addClass('shadow-sm').css('top', '0px');
      } else {
        $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
      }
    });

    // Spinner
    var spinner = function() {
      setTimeout(function() {
        if ($('#spinner').length > 0) {
          $('#spinner').removeClass('show');
        }
      }, 1);
    };
    spinner();

    // Back to top button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
    $('.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1500, 'easeInOutExpo');
      return false;
    });
  </script>

  <?php

  include './head.php';

  $pagemail = 'pagotubanga@gmail.com';

  include './assets/sendmail.php';

  ?>
</head>

<body>

  <div class="container-fluid m-0 p-0">
    
  <nav class="navbar navbar-expand-sm navbar-dark bg-prima sticky-top">
    <div class="container">
      <a class="navbar-brand" href="Otubanga_blog">Otubanga Community Blog</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="Otubanga_child_and_youth_development_center">Otubanga CYDC</a>
              <a class="dropdown-item" href="Otubanga_Pentecostal_Assemblies_of_God">Otubanga PAG</a>
              <a class="dropdown-item" href="Ebenezer_nursery_and_primary_school">Ebenezer School</a>
            </div>
          </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
          <input class="form-control me-sm-2" type="text" name="search" form="search" placeholder="Type here...">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Spinner Start -->
  <div id="spinner" class="position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->


  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 animate__animated animate__slideInLeft">
          <div class="d-flex flex-column">
            <img class="img-fluid w-75 align-self-end rounded" src="./assets/blog1.jpg" alt="Welcome to our Blog" loading="lazy">
            <div class="w-50 bg-prima p-md-5 p-sm-2 rounded" style="margin-top: -25%;">
              <h2 class="text-uppercase ">We count on</h2>
              <h2 class="text-uppercase text-light mb-0">You!</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 animate__animated animate__slideInRight">
          <p class="d-inline-block bg-prima text-light py-1 px-4 rounded" id="aboutus">About Us</p>
          <h1 class="text-uppercase mb-4">Welcome to Otubanga Community blog! We're glad you're here</h1>
          <p>We provide valuable insights and practical advice to help you make a positive impact in your community.From
            inspiring stories to giving, we'll together build successful communities.</p>
          <p class="mb-4">We believe that every community has the potential to thrive, and we're committed to helping
            you unlock that potential. Through our blog, we'll share our own experiences, as well as those of other
            community leaders and experts, to provide a comprehensive and diverse perspective on community empowerment.
          </p>
          <div class="row g-4">
            <div class="col-md-6">
              <h3 class="text-uppercase mb-3">Since 2009</h3>
              <p class="mb-0">The community started way back in 2009 with just two members...
              </p>
            </div>
            <div class="col-md-6">
              <h3 class="text-uppercase mb-3">A Big Family</h3>
              <p class="mb-0">Otubanga has grown to a big family that now comprises not only a church, but a school and
                a child development center too!
              </p>
            </div>
          </div>
          <a href="#cydc" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#donateModal">Donate</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- modal start -->

  <div class="container-fluid">
      <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-3" id="donateModalLabel">Leave a heart <i class="bx bx-heart"></i></h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex align-content-center">
                <div class="">
                  <form action="">
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="First Name" id="fname">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Last Name" id="lname">
                      </div>
                      <div class="col-12 my-1">
                        <input type="email" class="form-control" placeholder="Email address" id="emailaddr">
                      </div>
                      <hr>
                      <h4>Payment Details</h4>
                      <div>
                        <input type="radio" id="creditcard">
                        <label for="creditcard" checked="on">Credit Card</label>
                      </div>
                      <div>
                        <input type="radio" id="debitcard">
                        <label for="debitcard">Debit Card</label>
                      </div>
                      <div>
                        <input type="radio" id="visacard">
                        <label for="visacard">Visa Card</label>
                      </div>
                      <hr>
                      <h4>Card Details</h4>
                      <div class="my-1 d-flex">
                        <div class="col-sm-6 pe-1">
                          <input type="text" placeholder="Enter Name on Card" class="form-control" name="cardname">
                        </div>
                        <div class="col-sm-6">
                          <input type="text" placeholder="Enter Card Number" class="form-control" name="cardnumber">
                        </div>
                      </div>
                      <div class="my-1 d-flex">
                        <div class="col-sm-6 pe-1">
                          <input type="text" placeholder="Enter Expiration Date" class="form-control" name="edate">
                        </div>
                        <div class="col-sm-6">
                          <input type="text" placeholder="Enter CVV" class="form-control" name="cvv">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- modal end -->

  <!-- Scommunity Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <p class="d-inline-block bg-prima text-light py-1 px-4 rounded" data-aos="fade-in">The Family</p>
        <h2 class="text-uppercase" data-aos="fade-in">Our Community</h2>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-item position-relative overflow-hidden bg-prima d-flex h-100 p-5 ps-0 rounded shadow" data-aos="fade-right">
            <div class="bg-secondary d-flex flex-shrink-0 align-items-center justify-content-center rounded-end" style="width: 60px; height: 60px;">
              <i class="bx bx-chevron-down text-light display-3"></i>
            </div>
            <div class="ps-4">
              <h3 class="text-uppercase mb-3">Otubanga PAG</h3>
              <p>Welcome to Worship, Praise, and Pray with us and find solace in a christian community</p>
              <!-- <span class="text-uppercase text-dark">From $15</span> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-item position-relative overflow-hidden bg-prima d-flex h-100 p-5 ps-0 rounded shadow" data-aos="fade-up">
            <div class="bg-secondary d-flex flex-shrink-0 align-items-center justify-content-center rounded-end" style="width: 60px; height: 60px;">
              <i class="bx bx-chevron-down text-light display-3"></i>
            </div>
            <div class="ps-4">
              <h3 class="text-uppercase mb-3">Otubanga CYDC</h3>
              <p>At OCYDC, we care and provide for the Children that the Lord has blessed us with, to build them into
                adult Christians who can impact positive change!</p>
              <!-- <span class="text-uppercase text-dark">From $15</span> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="service-item position-relative overflow-hidden bg-prima d-flex h-100 p-5 ps-0 rounded shadow" data-aos="fade-left">
            <div class="bg-secondary d-flex flex-shrink-0 align-items-center justify-content-center rounded-end" style="width: 60px; height: 60px;">
              <i class="bx bx-chevron-down text-light display-3"></i>
            </div>
            <div class="ps-4">
              <h3 class="text-uppercase mb-3">Ebenezer School</h3>
              <p>AT Ebenezer, we are dedicated to providing a safe, supportive, and stimulating environment that fosters
                academic excellence, personal growth, and social development</p>
              <!-- <span class="text-uppercase text-dark">Fro</span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scommunity End -->

  <!-- Scommunity Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center" data-aos="fade-in">
        <h2>Latest News</h2>
        <p>Come check our latest news from here</p>
      </div>
      <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist" data-aos="fade-in">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#church" type="button" role="tab" aria-controls="home" aria-selected="true">Church</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#cydc" type="button" role="tab" aria-controls="profile" aria-selected="false">CYDC</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#school" type="button" role="tab" aria-controls="messages" aria-selected="false">School </button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <!-- church pane start -->

          <div class="tab-pane active" id="church" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
              <div class="row text-center">
                <p class="display-4 fw-bold py-3" data-aos="fade-in">Transforming Lives <br>Worldwide</p>
              </div>
              <div class="row py-3">
                <div class="col-md-4 col-sm-12" data-aos="fade-right">
                  <div class="card text-white">
                    <img class="card-img" src="./assets/blog2.jpg" alt="Prayer image" loading="lazy">
                    <div class="card-img-overlay justify-content-center text-center d-flex flex-column">
                      <div class="d-flex flex-column justify-content-center m-auto">
                        <h4 class="card-title">Come Pray with US!</h4>
                        <p class="card-text">Prayer is a powerful tool that can bring people closer to God and change
                          lives in profound ways. When we pray, we open ourselves up to the presence of God and allow
                          His love and grace to flow into our hearts and minds. Through prayer, we can find comfort in
                          times of sorrow, guidance in times of uncertainty, and strength in times of struggle.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12" data-aos="fade-up">
                  <div class="card text-white">
                    <img class="card-img" src="./assets/blog3.jpeg" alt="image for christian family" loading="lazy">
                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                      <div>
                        <h4 class="card-title">We are a Christian Family</h4>
                        <p class="card-text">Belonging to a family fosters collaboration, communication, and
                          accountability, essential for achieving success. With the overwhelming Christian Support, u can
                          be sure to grow in your spiritual walk at Otubanga PAG</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12" data-aos="fade-left">
                  <div class="card text-white">
                    <img class="card-img" src="./assets/blog4.jpeg" alt="image for outreaches" loading="lazy">
                    <div class="card-img-overlay justify-content-center text-center d-flex flex-column">
                      <div>
                        <h4 class="card-title">Outreaches</h4>
                        <p class="card-text">As a Christian Family, we embark on different outreach programs to reach
                          other people with the gospel of Christ so as to make Christ known to the world. Join us to share
                          the gospel is accordance with the great commision of our LOrd.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-9" data-aos="fade-in">
                  <h5 class="display-6 fw-bold py-3 text-center">Everyone is Welcome</h5>
                  <p class="fw-bold">
                    Our Mission is helping people find their Way back to God
                  </p>
                  <p class="py-3">Whether it's volunteering our time, donating resources, or simply offering a listening
                    ear, every act of kindness counts. By helping others, we create a ripple effect of positivity that
                    can spread far and wide, touching countless lives and leaving a lasting impact. So let us continue
                    to support and uplift one another, and in doing so, make the world a better place for all.</p>
                  <small class="py-3">Scripture</small>
                  <div class="row my-3">
                    <div class="col-md-6 col-sm-12" data-aos="fade-right">
                      <div class="blur-load rounded" style="background-image:url(./assets/blog5_small.jpg);">
                        <img src="./assets/blog5.jpg" alt="Program image" class="img-fluid rounded w-100 h-100" loading="lazy">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center">
                      <h3 class="display-6 fw-bold py-4">April, 2009</h3>
                      <small>Our birth, our roots</small>
                      <p class="py-3">We push ourselves to keep moving forward. But it's important to appreciate the
                        journey for the small victories, the moments of joy, and the
                        beauty of the present moment. Taking a moment to appreciate the little things can make all the
                        difference. Let's savor the sweetness
                        of life and not take anything for granted. And when we encounter obstacles, let's remember that
                        they are opportunities for growth and learning. With gratitude and appreciation, we can turn any
                        challenge into a stepping stone for success</p>
                      <button class="btn btn-outline-info">More</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="card m-1" data-aos="fade-up">
                    <div class="blur-load rounded" style="background-image:url(./assets/blog6_small.jpg)">
                      <img class="card-img-top img-fluid rounded" src="./assets/blog6.jpeg" alt="image loading" loading="lazy">
                    </div>
                    <!-- <div class="card-body p-2">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div> -->
                  </div>
                  <div class="card m-1" data-aos="fade-up">
                    <div class="blur-load rounded" style="background-image: url(./assets/blog7_small.jpg);">
                      <img class="card-img img-fluid rounded" src="./assets/blog7.png" alt="ebenezer" loading="lazy">
                    </div>
                    <!-- <div class="card-img-overlay d-flex flex-column justify-content-center text-center text-light">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div> -->
                  </div>
                  <div class="card m-1" data-aos="fade-up">
                    <div class="blur-load rounded" style="background-image: url(./assets/blog10_small.jpg);">
                      <img class="card-img-top img-fluid rounded" src="./assets/blog10.jpg" alt="happiness" loading="lazy">
                    </div>
                    <!-- <div class="card-body p-2">
                      <h4 class="card-title">Title</h4>
                      <p class="card-text">Text</p>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- church pane end -->
          <div class="tab-pane" id="cydc" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container p-0">
              <div class="row m-0 p-0" style="background-image:url(./assets/imagexxx.jpg); width:100%;height:100%; background-size:cover;background-position:center;" data-aos="fade-in">
                <h3 class="display-4 py-5 text-left text-light">Hello, Welcome to <br> <span class="fw-bold">OTUBANGA
                    CHILD AND YOUTH
                    DEVELOPMENT CENTER</span class="fw-bold"></h3>
                <hr class="text-light w-75 fw-bolder">
                <p class="fw-bold text-light">"God is Love"</p>
              </div>
              <div class="row">
                <p class="py-5 h3 text-center mx-auto col-md-10">A HEALTHY COMMITTED COMMUNITY BASED LOCAL CHURCH
                  REACHING OUT WITH THE LOVE OF GOD IN CHRIST JESUS!</p>
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-12" data-aos="fade-right">
                  <div class="d-flex flex-column">
                    <img class="img-fluid align-self-end rounded" src="./assets/blog8.jpg" alt="Image for about us" loading="lazy">
                    <div class="w-50 p-5 rounded badx" style="margin-left: 25%; border-top: #67b0d1 4px solid;border-left: #67b0d1 4px solid;border-bottom: #67b0d1 4px solid;">
                      <h2 class="text-uppercase text-light mb-3 display-4 fw-bolder" style="margin-left:25%;">About Us
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 col-sm-12" data-aos="fade-left">
                  <h3 class="display-6 fw-bold pt-md-1 pt-sm-5 mt-sm-5">Loving God and People</h3>
                  <hr class="text-info w-25">
                  <p class="fw-bold">
                    God's love is the foundation of faith.
                    The Bible teaches us that God's love is patient, kind, and forgiving, and that it endures forever.
                    God is love. he has loved us, and we love him
                  </p>
                  <p>
                    As Christians, we are called to follow in Jesus' footsteps and to love each other as he loved us.
                    This means showing compassion, kindness, and forgiveness to those around us, even when it's
                    difficult. It means being willing to put the needs of others before our own, and to sacrifice our
                    own interests for the sake of others.

                    Loving each other in this way brings us closer to God and to each other. When we show love and
                    kindness to others, we are reflecting the love and kindness of God, and we are building a community
                    that is based on mutual respect, trust, and understanding.
                  </p>
                  <small>1 John 4:8</small> <small>Mark 12:30-31</small>
                </div>
              </div>
              <div class="row py-5">
                <h3 class="display-6 fw-bold text-center pt-5" data-aos="fade-in">We Support <br> wholesome and all rounded <br>
                  development of an individual</h3>
                <div class="row">
                  <div class="col-md-3 col-sm-6 p-1" data-aos="fade-up">
                    <div class="card bg-dark text-white">
                      <img class="card-img" src="./assets/social.jpg" alt="social development" loading="lazy">
                      <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                        <div>
                          <h4 class="card-title">Social Development</h4>
                          <p class="card-text">We help our participants to relate with others</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 p-1" data-aos="fade-up">
                    <div class="card bg-dark text-white">
                      <img class="card-img" src="./assets/physical.jpg" alt="physical development" loading="lazy">
                      <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                        <div>
                          <h4 class="card-title">Physical development</h4>
                          <p class="card-text">By participating in various sports, our participants are physically fit</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 p-1" data-aos="fade-up">
                    <div class="card bg-dark text-white">
                      <img class="card-img" src="./assets/spiritual.jpg" alt="Spiritual development" loading="lazy">
                      <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                        <div>
                          <h4 class="card-title">Spiritual development</h4>
                          <p class="card-text">We help our participants grow in their spiritual walk.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 p-1" data-aos="fade-up">
                    <div class="card bg-dark text-white">
                      <img class="card-img" src="./assets/socioemotional.jpg" alt="Socio-emtional development" loading="lazy">
                      <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                        <div>
                          <h4 class="card-title">Socio-emotional development</h4>
                          <p class="card-text">Our Participants are aided in proper decision making</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12" data-aos="fade-right">
                  <small>We engage our participants</small>
                  <h2 class="display-3 fw-bold py-3">Our engagements</h2>
                  <small>W are always a family that relates and rejoices together</small>
                  <h5 class="fw-bold py-2">Weekly Center days</h5>
                  <p>we have activity packed weekly center days that bring together all our participants to socialise
                    and engage in various activities including classes, sports.</p>
                  <h5 class="fw-bold py-2">Health screenings</h5>
                  <p>Our participants' health is a prioty, and hence we regularly conduct health screening to ensure it
                    is in check.
                  </p>
                  <h5 class="fw-bold py-2">Letter writing</h5>
                  <p>Through scheduled letter writing sessions, our participants communicate with their sponsors!</p>
                  <h5 class="fw-bold py-2">Home Visits</h5>
                  <p>By conducting home visits, we can ascertain the needs of our beneficiaries</p>
                </div>
                <div class="col-md-6 col-sm-12" style="position:relative;" data-aos="fade-left">
                  <img src="./assets/bak2.jpg" alt="image-beneath" class="w-75 h-75 img-fluid rounded" loading="lazy">
                  <img src="./assets/bak1.jpg" alt="image-on-top" class="w-75 h-75 img-fluid rounded" style="position:absolute; right:0; bottom:0;" loading="lazy">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="school" role="tabpanel" aria-labelledby="messages-tab">
            <div class="container p-0">
              <div class="row">
                <div class="col-6 m-auto" data-aos="fade-in">
                  <h4 class="display-5 fw-bold text-center py-3">Ebenezer Nursery &amp; Primary School</h4>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-6" data-aos="fade-right">
                  <div class="blur-load" style="background-image: url(./assets/beginning_small.jpg)">
                    <img src="./assets/beginning.jpg" alt="our beginning" class="img-fluid h-100 rounded" loading="lazy">
                  </div>
                </div>
                <div class="col-6 theryt" data-aos="fade-left">
                  <hr>
                  <h4 class="display-6 fw-bold py-3">Our Beginning</h4>
                  <p>Ebenezer Nursery and Primary school was founded on the principles of excellence, inclusivity, and
                    innovation. We believe that every student has the potential to succeed and that education should be
                    accessible to all.
                    Our school was established with the vision of providing a world-class education that prepares
                    students for success in an ever-changing world.Our staff are dedicated
                    professionals who are passionate about teaching and learning. They work closely with students to
                    ensure that they receive the best possible education.
                    We are committed to creating a safe and supportive learning environment that fosters collaboration,
                    creativity, and critical thinking.</p>
                  <a href="" class="btn btn-outline-info">button one</a> <a href="" class="btn btn-outline-info">button
                    two</a>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-md-6 col-sm-12" data-aos="fade-right">
                  <div class="row">
                    <div class="col-6">
                      <div class="blur-load" style="background-image: url(./assets/library_small.jpg)">
                        <img src="./assets/library.jpg" alt="Our library" class="img-fluid h-100 rounded" loading="lazy">
                      </div>
                    </div>
                    <div class="col-6 ">
                      <hr>
                      <h4 class="display-6 fw-bold py-3">Our Library</h4>
                      <p>The school library is truly a gem, a treasure trove of knowledge and wonder. It is a place where students can come to learn, grow, and explore their passions. We are stocking our library with a vast array of books, periodicals, and other resources that cater to the diverse interests of the students.
                        we look forward to making sure it is the best that any student can ever get acces to!
                      </p>
                      <!-- <a href="">button one</a> <a href="">button two</a> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
                  <div class="row">
                    <div class="col-6">
                      <div class="blur-load" style="background-image: url(./assets/staff_small.jpg)">
                        <img src="./assets/staff.jpg" alt="our staff" class="img-fluid rounded" loading="lazy">
                      </div>
                    </div>
                    <div class="col-6 theryt">
                      <hr>
                      <h4 class="display-6 fw-bold py-3">Our Staff</h4>
                      <p>We prioritize the professional development of our staff, providing them with the training and support they need to be the best teachers they can be. Our staff are highly qualified and passionate about their work. They are dedicated to creating a positive and inclusive learning environment that fosters academic achievement and personal growth. They work closely with students to understand their individual needs and develop tailored learning plans that help them reach their full potential.</p>
                      <!-- <a href="">button one</a> <a href="">button two</a> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-md-6 col-sm-12" data-aos="fade-right">
                  <div class="row">
                    <div class="col-6">
                      <div class="blur-load" style="background-image: url(./assets/todate_small.jpg)">
                        <img src="./assets/todate.jpg" alt="to date" class="img-fluid h-100 rounded" loading="lazy">
                      </div>
                    </div>
                    <div class="col-6 theryt">
                      <hr>
                      <h4 class="display-6 fw-bold py-3">To Date</h4>
                      <p>At Ebenezer, we strive to make every aspect of teaching to solve the real world problems, in real time. Our teaching curricullum is the up to date curriculum, with extensive learning, rather than just teaching. <br> Our Systems are also made ease the running of the school, with an electronic school management set to place, which automates the running of various sections.</p>
                      <!-- <a href="">button one</a> <a href="">button two</a> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
                  <div class="row">
                    <div class="col-6">
                      <div class="blur-load" style="background-image: url(./assets/aimhigher_small.jpg)">
                        <img src="./assets/aimhigher.jpg" alt="aiming higher" class="img-fluid h-100 rounded" loading="lazy">
                      </div>
                    </div>
                    <div class="col-6 theryt">
                      <hr>
                      <h4 class="display-6 fw-bold py-3">Aiming higer</h4>
                      <p>Ebenezer Nursery and primary school is focused on raising the top flag in the region for the the best education, and we are aiming to extend it beyond just this, and expand our domination!

                        We are a team of Ambitious staff that is not settled for less, and we are attaining the heights
                      </p>
                      <!-- <a href="">button one</a> <a href="">button two</a> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row p-0" style="background:url(./assets/imagexxx.jpg);background-size:cover;background-repeat:none;background-position:center;background-attachment:fixed;height:45vh;width:100%;" data-aos="fade-up">
                <h3 class="display-5 fw-bold text-center text-light d-flex flex-column justify-content-center">A Center
                  of Excellence for you child!</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scommunity End -->

  <!-- progx Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-0">

        <div class="col-lg-6" data-aos="fade-right">
          <div class="h-100">
            <div class="blur-load" style="background-image: url(./assets/love_small.jpg)">
              <img class="img-fluid w-100 rounded-start h-100" src="./assets/love.jpg" alt="image for filled with love" loading="lazy">
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="bg-prima h-100 d-flex flex-column justify-content-center p-5 rounded-end">
            <p class="d-inline-flex bg-secondary text-light py-1 px-4 me-auto rounded">Filled with Love</p>
            <h3 class="text-uppercase mb-4">Join Us at <br> <span class="fw-bold">Otubanga Pentecostal Assemblies of
                God</span></h3>
            <p class="fw-bold">
              We are a church that Believes in Jesus and Loves God and People. We also have a spirit filled weekly
              program for you!
            </p>
            <div>
              <div class="table-responsive rounded">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Days</th>
                      <th scope="col">Programmes</th>
                      <th scope="col">Time and Duration</th>
                    </tr>
                  </thead>
                  <tbody class="rounded">
                    <tr class="">
                      <td scope="row">Monday</td>
                      <td>Children's Discipleship Classes</td>
                      <td>4:00-6:00pm</td>
                    </tr>
                    <tr class="">
                      <td scope="row">Wednesday</td>
                      <td>Home cells</td>
                      <td>4;00-5:30</td>
                    </tr>
                    <tr class="">
                      <td scope="row">Friday</td>
                      <td>Bible study and Worship Time</td>
                      <td>3:00- 5:00</td>
                    </tr>
                    <tr class="">
                      <td scope="row">Saturday</td>
                      <td>Youth Activities and Song practice</td>
                      <td>3:00-5:30</td>
                    </tr>
                    <tr class="">
                      <td scope="row" rowspan="2">Sunday</td>
                      <td>Children's Church</td>
                      <td>7:30- 8:30</td>
                    </tr>
                    <tr class="">
                      <td>Main Service</td>
                      <td>9:00-11:00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- progx End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-prima text-light footer mt-5 pt-5 mx-0 px-0">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-4 col-md-6" data-aos="fade-right">
          <h4 class="text-uppercase mb-4">Get In Touch</h4>
          <div class="d-flex align-items-center mb-2">
            <div class="btn-square flex-shrink-0 me-3">
              <span class="bx bx-map"></span>
            </div>
            <span>Aliba Obongi District, Uganda</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="btn-square flex-shrink-0 me-3">
              <span class="bx bx-phone"></span>
            </div>
            <span>+256786976063</span>
          </div>
          <div class="d-flex align-items-center">
            <div class="btn-square flex-shrink-0 me-3">
              <span class="bx bx-envelope-open"></span>
            </div>
            <span>pagotubanga@gmail.com</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-in">
          <h4 class="text-uppercase mb-4">Quick Links</h4>
          <a class="btn btn-link" href="#aboutus">About Us</a> <br>
          <a class="btn btn-link" href="">Contact Us</a> <br>
          <a class="btn btn-link" href="">Support</a>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-left">
          <h4 class="text-uppercase mb-4">Newsletter</h4>
          <div class="position-relative mb-4">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" name="email" id="email" type="text" placeholder="Your email" autocomplete="on">
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 shadow me-2">SignUp</button>
          </div>
          <div class="d-flex pt-1 text-light">
            <a class="btn btn-lg-square btn-dark m-1" href=""><i class="bx bxl-twitter"></i></a>
            <a class="btn btn-lg-square btn-dark m-1" href=""><i class="bx bxl-facebook-circle"></i></a>
            <a class="btn btn-lg-square btn-dark m-1" href=""><i class="bx bxl-youtube"></i></a>
            <a class="btn btn-lg-square btn-dark m-1" href=""><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container" data-aos="fade-in">
      <div class="copyright bg-secondary rounded-top">
        <div class="row mx-5 justify-content-center">
          <div class="col-md-6 text-center  mb-3 mb-md-0 mx-auto">
            Designed By <a class="border-bottom" href="">iddu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <div class="container-fluid">
    <a href="#" class="btn btn-info btn-lg-square back-to-top"><i class="bx bx-chevron-up"></i></a>
  </div>

  </div>



  <script>
    const blurDivs = document.querySelectorAll(".blur-load")
    blurDivs.forEach(div => {
      const img = div.querySelector("img");

      function loaded() {
        div.classList.add("loaded");
      }
      if (img.complete) {
        loaded();
      } else {
        img.addEventListener("load", loaded);
      }
    })
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>