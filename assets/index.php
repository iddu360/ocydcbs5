<?php

use PHPMailer\PHPMailer\PHPMailer;

include('./assets/config.php');
if (isset($_POST['submit'])) {
  $name = $_POST['yname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['body'];

  require_once "./PHPMailer/PHPMailer.php";
  require_once "./PHPMailer/SMTP.php";
  require_once "./PHPMailer/Exception.php";

  $mail = new PHPMailer();

  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "idduemmanuel19@gmail.com";
  $mail->Password = 'eufecsflajdkgjca';
  $mail->Port = 465;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->isHTML(true);
  $mail->setFrom($email, $name);

  $mail->addAddress("legacybronsels@gmail.com");
  $mail->Subject = ("$email ($subject)");
  $mail->Body = $body;

  if ($mail->send()) {
    echo "mail sent";
    if (!$sql) {
      die("MySQL query failed.");
    } else {
      echo "send Success";
    }
  } else {
    echo "error";
  }
}
;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="iddu emmanuel, Ehmah_CodeIt, daemon507">
  <meta name="description"
    content="We are a Vibrant Christian Community passionate about the gospel and more earnest to share Love, Hope and Faith. We welcome all individuals to come grow with us spiritually and impact positively other people they connect with...">
  <meta name="keywords"
    content="otubanga, ebenezer, aliba, obongi, nursery, primary, blog, online church, pentecostal church group, jesus christ, salvation">
  <meta name="generator" content="iddu">
  <link rel="shortcut icon" href="./assets/churchlogo.png" type="image/x-icon">
  <link rel="icon" href="./assets/churchlogo.png">
  <title>Otubanga Pentecostal Assemblies of God</title>
  <?php

  include './head.php'

    ?>
</head>

<body class="index">
  <div class="headerx">
    <nav class="navbar navbar-expand-sm navbar-dark bg-prima fixed-top" id="nav">
      <div class="container">
        <div>
          <a class="navbar-brand" href="#"><img src="./assets/churchlogo.png" alt="" loading="lazy" class="w-25"></a>
        </div>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="./Otubanga_Pentecostal_Assemblies_of_God" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#programs">Programs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#our_gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" style="cursor: pointer;">Our Community</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="./Otubanga_child_and_youth_development_center">Otubanga CYDC</a>
                <a class="dropdown-item" href="./Otubanga_Pentecostal_Assemblies_of_God">Otubanga PAG</a>
                <a class="dropdown-item" href="./Ebenezer_nursery_and_primary_school">Ebenezer School</a>
              </div>
            </li>
          </ul>
          <form class="d-flex my-2 my-lg-0">
            <button class="btn btn-outline-light my-2 my-sm-0" type="button" data-bs-toggle="modal"
              data-bs-target="#donateModal">Donate</button>
          </form>
        </div>

      </div>
    </nav>
    <div class="row">
      <div class="py-md-5 introx">
        <div class="container text-left py-5  my-md-5">
          <h3 class="fw-bolder display-3 py-md-5 animate__animated animate__slideInDown">OTUBANGA <br> PENTECOSTAL
            ASSEMBLIES OF GOD</h3>
          <h5 class=" animate__animated animate__slideInLeft">"A FAMILY OF GOD SHARING LOVE"</h5>
          <h6 class="text-secondary animate__animated animate__slideInRight">HEBREWS 10:25</h6>
        </div>
        <div class="row p-md-5 p-sm-2 p-xs-1">
          <div class="col-md-5">

          </div>
          <div class="vision-mission text-center py-md-5 rounded-4 text-light col-md-7 col-sm-10 shadow me-0" >
            <h3 class=" animate__animated animate__slideInDown fw-bold">VISION</h3>
            <hr class="mx-5 animate__animated animate__slideInDown">
            <p class=" animate__animated animate__slideInDown">A HEALTHY COMMITTED COMMUNITY BASED LOCAL CHURCH REACHING
              OUT
              WITH THE LOVE OF GOD IN CHRIST JESUS</p>
            <h3 class=" animate__animated animate__slideInUp fw-bold">MISSION</h3>
            <hr class="mx-5 animate__animated animate__slideInDown">
            <p class=" animate__animated animate__slideInDown">HOLISTICALLY TRANSFORMING LIVES OF MEMBERS AND THE
              COMMUNITY
              THROUGH DEMONSTRATIVE LOVE OF JESUS.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main class="bg-lighta container-fluid">
    <div class="as" data-bs-spy="scroll" data-bs-target="#nav" id="aboutus">
      <div class="container" id="about" data-aos="fade-right">
        <h4 class="display-4 fw-bold">About Us</h4>
        <hr class="about-hr">
        <p>We are a Vibrant Christian Community passionate about the gospel and more earnest to share Love, Hope and
          Faith. <br> We welcome all individuals to come grow with us spiritually and impact positively other people
          they
          connect with!!</p>
        <small class="text-secondary">You are welcome to Fellowship with Otubanga Pentecostal assemblies of God</small>
      </div>
    </div>
    <div class="about">
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="First slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="./assets/image-1.jpg" class="w-100 d-block" loading="lazy" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 data-aos="fade-down">A God fearing generation! </h3>
              <p data-aos="fade-down">Otubanga Pentecostal Assemblies of God church supports children ministry to
                nurture the young generation into Christian adults who can holistically impact the society. <br> We
                believe that we can extend the great commission to a great part of the world with everyone involved.</p>
              <a href="#our_gallery" class="btn btn-outline-light" data-aos="fade-up">Browse Gallery</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/image2.jpg" class="w-100 d-block" loading="lazy" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="animate__animated animate__slideInDown" data-aos="fade-down">WE GROW DAILY</h3>
              <p class="animate__animated animate__zoomIn" data-aos="fade-in">Otubanga Pentecostal Assemblies of God has
                grown into a large community that shares and expresses the
                love of God in unision with other church organisations.</p>
              <a href="#community" class="btn btn-outline-light animate__animated animate__slideInUp"
                data-aos="fade-up">View our Community</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/image5.jpg" class="w-100 d-block" loading="lazy" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="animate__animated animate__slideInDown">SMALL BEGININGS</h3>
              <p class="animate__animated animate__zoomIn">From just two members in 2009, The ministry has grown to a
                big family of God that shares Love to the
                community through holistic approach.

              </p>
              <a href="#infosm" class="btn btn-outline-light animate__animated animate__slideInUp">Learn More</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container" id="programs">
      <div class="row my-5">
        <div class="text-center">
          <h4 class="card-title" data-aos="fade-up">Prayer</h4>
          <hr class="mx-5" data-aos="fade-in">
          <p class="card-text" data-aos="fade-in">For anything you ask in my name shall be granted unto you</p>
          <h4 data-aos="fade-up">You are Welome to <b>Fellowship</b> with us at Otubanga Pentecostal Assemblies of God
            Church!</h4>
        </div>
        <div class="col-md-10 col-sm-12 col-lg-6 rounded m-auto my-md-3">
          <h3 class="text-center" data-aos="fade-in">Our Weekly Programmes</h3>
          <div class="table-responsive rounded shadow" data-aos="fade-up">
            <table class="table table-light table-striped table-hover">
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
                  <!-- <td scope="row">Sunday</td> -->
                  <td>Main Service</td>
                  <td>9:00-11:00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="infosm">
      <div class="blur-text">
        <div class="blur-bg"></div>
        <div class="col-md-7 col-sm-11 text-center m-auto blur-txt p-3 text-light rounded-3 shadow" data-aos="fade-up">
          <div data-aos="fade-in">
            <h2 class="fw-bold">OTUBANGA PAG</h2>
            <h3>From Small Beginnings</h3>
            <h4>
              From Just The start of two members in 2009, Otubanga Pentecostal Assemblies Of God has grown to a large
              family of children, Youth and Elders moving the realms to the fullest in the glory of the most high God.
              Otubanga PAG has grown to have children's ministry and also a community that consists of a school and a
              Child and Youth development Center
            </h4>
            <h6>Matthew 21:16</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="container partnerx" id="community">
      <div data-aos="fade-in">
        <h2 class="text-center mt-3 pt-3 fw-bold" data-aos="fade-in">Our Partners</h2>
        <p class="text-center" data-aos="fade-up">The church has entered into partnership with other Christian
          ministries in order to
          fulfill
          her mission. These organizations include Compassion international, Volks mission, here is life.</p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 my-1">
          <div class="card h-100 shadow" data-aos="fade-right">
            <div class="blur-load" style="background-image: url(./assets/Picture1-small.png);">
              <img class="card-img-top img-fluid w-100 m-auto rounded" loading="lazy" src="./assets/Picture1.png"
                alt="Compassion international">
            </div>
            <div class="card-body text-center">
              <h4 class="card-title fw-bold">COMPASSION INTERNATIONAL</h4>
              <p class="card-text">With Compassion International, the church holistically supports 305 children in areas
                of spiritual, education, Health, socio emotional and physical development</p>
              <a href="Otubanga_child_and_youth_development_center" class="btn btn-outline-light">View CDC</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 my-1">
          <div class="card h-100 shadow" data-aos="fade-up">
            <div class="blur-load" style="background-image: url(./assets/Picture2-small.png);">
              <img class="card-img-top w-100 m-auto rounded" src="./assets/Picture2.png" loading="lazy" alt="volks mission">
            </div>
            <div class="card-body text-center">
              <h4 class="card-title fw-bold">VOLKS MISSION</h4>
              <p class="card-text">With support from Volks Mission- Germany, the church has a school that she runs and
                this has enabled the valuable children in the community to receive cheap affordable education, which
                otherwise would be impossible</p>
              <a href="./Ebenezer_nursery_and_primary_school" class="btn btn-outline-light">View School</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 my-1">
          <div class="card h-100 shadow" data-aos="fade-left">
            <div class="blur-load" style="background-image: url(./assets/Picture3-small.png);">
              <img class="card-img-top w-100 m-auto rounded" src="./assets/Picture3.png" loading="lazy" alt="here is life">
            </div>
            <div class="card-body text-center">
              <h4 class="card-title fw-bold">HERE IS LIFE</h4>
              <p class="card-text">With trainings from <b>here is life</b>, the church trains her members to engage in
                Income
                generating activities, positive parenting, child protection and community transformation.</p>
              <a href="#our_gallery" class="btn btn-outline-light">View Activity</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fs-3" id="donateModalLabel">Leave a heart <i class="bx bx-heart"></i></h5>
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

    <div class="container py-md-5" id="our_gallery">
      <h2 class="text-center fw-bold py-3 gallery-headx my-md-4" data-aos="fade-up">Our Photo Gallery</h2>

      <div class="row d-flex gallery-row">

        <?php
        require_once('./assets/config.php');

        $sql3 = 'Select * from gallery where commty like "%Church%"';
        $query = $conn->prepare($sql3);
        $query->execute();
        $result = $query->fetchAll();
        foreach ($result as $row) {

          ?>
          <div class="col-md-3 col-sm-4 col-xs-6 p-1">
            <div class="card p-0">
              <div class="blur-load" style="background-image: url(./assets/<?php echo $row['imgthumg'] ?>);">
                <img src="./assets/<?php echo $row['img']; ?>" alt="gallery image" loading="lazy" class="img-fluid w-100 rounded"
                  style="height:100%;" data-aos="fade-in">
              </div>
              <div class="card-infox text-center">
                <p>
                  <?php echo $row['caption']; ?>
                </p>
                <small>
                  <?php echo $row['illustration']; ?>
                </small>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
    <div class="container my-md-4 py-md-5 align-items-center" id="contact">
      <h2 class="fw-bold text-center py-md-5">Contact</h2>
      <div class="d-md-flex mt-3 align-items-center">
        <div class="contact-side-1 col-md-4 col-sm-12">
          <div class=" bg-light p-md-3 rounded shadow" data-aos="fade-right">
            <h3 class="mt-md-5"><i class="bx bx-map"></i> Our Location</h3>
            <hr class="me-5">
            <p> Otubanga Village</p>
            <p>Ewafa Subcounty</p>
            <p>Obongi District</p>
            <p>WestNile, Uganda</p>
          </div>
          <div class="my-3 d-flex">
            <div class="col-6">
              <div class="card me-1 p-md-2 text-center py-md-4 shadow h-100" data-aos="fade-right">
                <i class="bx bx-phone py-3"></i>
                <p>+256786976063</p>
              </div>
            </div>
            <div class="col-6">
              <div class="card ms-1 p-md-2 text-center py-md-4 shadow h-100" data-aos="fade-up">
                <i class="bx bx-envelope py-3"></i>
                <p>pagotubanga@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <form action="" class="col-md-7 col-sm-12 m-auto bg-light p-3 rounded contact shadow" method="POST"
          data-aos="fade-left">
          <h3 class="text-center">Get In Touch with Us</h3>
          <Label for="yname">Your Name</Label>
          <input type="text" class="form-control" name="yname" id="yname">
          <Label for="email">Email ID</Label>
          <input type="text" class="form-control" name="email" id="email">
          <Label for="contact">Contact Number</Label>
          <input type="text" class="form-control" name="contact" id="contact">
          <Label for="subject">Subject</Label>
          <input type="text" class="form-control" name="subject" id="subject">
          <Label for="body">Your Name</Label>
          <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
          <input type="submit" class="btn btn-info my-2 text-center" name="submit" id="submit" value="Send"></input>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="m-auto rounded">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.3706996683845!2d31.55416737488583!3d3.257761696717267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x176dff49931b00c1%3A0x38f0896f8f3b7db4!2sOTUBANGA%20PENTECOSTAL%20ASSEMBLIES%20OF%20GOD!5e0!3m2!1sen!2sug!4v1697365751639!5m2!1sen!2sug"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </main>
  <footer class="bg-prima">
    <div class="container py-5">
      <div class="row mt-5">
        <div class="col-md-6">
          <h5>About Us</h5>
          <p>Otubanga Pentecostal Assemblies of God is one of the churches under Pentecostal Assemblies of God Uganda.
            It is located in West Nile Region of Uganda, Obongi District, Ewafa Subcounty, and Otubanga Village.
            Otubanga Pentecostal Assemblies of God was started in 2009, with two members. This ministry was started to
            share the love of God to the community through Holistic approach</p>
        </div>
        <div class="col-md-6 col-lg-3">
          <h5>PARTNER WITH US</h5>
          <ul>
            <li><i class="bx bx-donate-heart"></i> Support ministry and outreach</li>
            <li><i class="bx bx-heart-circle"></i> Help build the Church community</li>
            <li><i class="bx bx-dollar-circle"></i> Support the church finances</li>
            <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#donateModal">Support</button>
          </ul>
          <h5>Reach US</h5>
          <ul>
            <li><i class="bx bx-phone"></i> 0781484104</li>
            <li><i class="bx bx-phone"></i> 0775600705</li>
            <li><i class="bx bx-phone"></i> 0770706466</li>
            <li><a href="mailto:"></a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3">
          <h5>VIEW OUR COMMUNITY</h5>
          <ul>
            <li><a href="./Otubanga_child_and_youth_development_center"><i class="bx bx-home"></i> Otubanga Child
                Development Center</a></li>
            <li><a href="./Ebenezer_nursery_and_primary_school"><i class="bx bxs-home"></i>Ebenezer Nursery and Primary
                School</a></li>
          </ul>
        </div>
      </div>
      <div class="row pt-md-5">
        <p class="text-center">©Copyright Ehmah_CodeIt</p>
      </div>
    </div>
  </footer>


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