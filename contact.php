<?php session_start(); ?>

<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <title>Jonamjo Synergy| Contact</title>
  <!-- Stylesheets -->
  <?php include 'header_css.php' ?>

</head>

<body>

  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <?php include 'main_header.php' ?>

    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
      <div class=" auto-container">
        <h1>Get In Touch</h1>
        <ul class="page-breadcrumb">
          <li><a href="index.php">home</a></li>
          <li>Contact us</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->

    <!--Map Section-->
    <div class="map-section">
      <div class="auto-container">
        <!--Map Outer-->
        <div class="map-outer">
          <!--Map Canvas-->
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.82911328609!2d7.539960416313002!3d9.044958057336453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0944bb725ce1%3A0xf28fcf93739f0093!2sNAF%20Valley%20Estate!5e0!3m2!1sen!2sng!4v1718094955394!5m2!1sen!2sng"
              width="1300" height="550" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!--End Map Section-->

    <!--Contact Section-->
    <section class="contact-section">
      <div class="auto-container">
        <div class="row clearfix">

          <!--Info Column-->
          <div class="info-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="content-box">
                <h2>Do you want to reach at the next level of Business Success?</h2>
                <div class="title">Book a Complimentary Consultation by visiting or calling us!</div>
                <ul class="list-style-three">
                  <li><span class="icon fa fa-map-marker"></span>No 20 A S BADEH Street,NAF Valley Estate Asokoro
                    Abuja
                    FCT ●
                  </li>
                  <li><span class="icon fa fa-phone"></span>(+234) 8035530984 +2347013217232
                  </li>
                  <li><span class="icon fa fa-envelope"></span>onochienwaukor@gmail.com

                  </li>
                  <li><span class="icon fa fa-envelope"></span>onochienwaukor@yahoo.com

                  </li>
                  <li><span class="icon fa fa-clock-o"></span>Monday to Friday 9 am - 6 pm</li>
                </ul>
                <!--Social Boxed-->
                <ul class="social-boxed">
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                  <li><a href="#"><span class="fa fa-vimeo"></span></a></li>
                  <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                </ul>
              </div>
            </div>
          </div>

          <!--Form Column-->
          <div class="form-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <h2>Send a Message</h2>
              <div id="consultation" class="title">We are working with thousands of business companies around the
                globe
                &
                delivering
                ideas
                for their business success.</div>
              <!-- Contact Form -->
              <div class="contact-form">
                <!--Comment Form-->
                <form method="post" action="sendemail.php" id="contact-form">

                  <div class="form-group">
                    <input type="text" name="username" placeholder="Your Name" required>
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" placeholder="Email address" required>
                  </div>

                  <div class="form-group">
                    <input type="text" name="phone" placeholder="Phone" required>
                  </div>

                  <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" required>
                  </div>

                  <div class="form-group">
                    <textarea name="message" placeholder="Message"></textarea>
                  </div>

                  <div class="form-group">
                    <button class="theme-btn message-btn" type="submit" name="submitContact">send message</button>
                  </div>

                </form>

              </div>
              <!--End Comment Form -->
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--End Contact Section-->

    <!--Main Footer-->
    <?php include 'main_footer.php'  ?>

    <!--End Main Footer-->

  </div>
  <!--End pagewrapper-->
  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
  if (messageText != '') {
    Swal.fire({
      title: "Thank you",
      text: messageText,
      icon: "successs"
    });
    <?php unset($_SESSION['status']) ;?>
  }
  </script>


</body>

</html>