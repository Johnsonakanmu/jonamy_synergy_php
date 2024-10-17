<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Jonamjo Synergy | Gallary</title>
  <!-- Stylesheets -->

  <?php include 'header_css.php' ?>
  <style>
  .button-container {
    width: 100%;
  }

  .button-row {
    gap: 10px; /* Space between buttons */
  }

  /* Responsive adjustments for smaller screens */
  @media (max-width: 768px) {
    .button-row {
      justify-content: space-around; /* Ensure proper spacing */
      width: 100%;
    }

    .button-box {
      width: 45%; /* Make each button take 45% of the width to fit two per row */
    }

    .sec-title h2 {
      font-size: 1.5rem; /* Adjust font size for smaller screens */
    }
  }

  @media (max-width: 480px) {
    .button-box {
      width: 100%; /* For very small screens, stack the buttons fully */
    }
  }
</style>
</head>

<body>

  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <?php include 'main_header.php' ?>

    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title"
      style="background-image:url(images/stones/stone_2.jpg);background-size:cover;background-repeat:no-repeat;">
      <div class="auto-container">
        <h1>Jonamjo Synergy Gallary</h1>
        <ul class="page-breadcrumb">
          <li><a href="index">home</a></li>
          <!-- <li><a href="services-one.html">Our Services</a></li> -->
          <li>Stones</li>
        </ul>
      </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
  <div class="auto-container">

    <div class="button-container" style="display: flex; flex-direction: column;">
      <div class="button-row" style="display: flex; flex-wrap: wrap; width: 100%; gap: 10px;">
        <div class="button-box">
          <a href="contact" class="theme-btn btn-style-one" style="width: 150px; text-align: center ">Website</a>
        </div>
        <div class="button-box">
          <a href="contact" class="theme-btn btn-style-one" style="width: 150px; text-align: center;">Direction</a>
        </div>
        <div class="button-box">
          <a href="contact" class="theme-btn btn-style-one" style="width: 150px; text-align: center;">Save</a>
        </div>
        <div class="button-box">
          <a href="contact" class="theme-btn btn-style-one" style="width: 150px; text-align: center;">Call</a>
        </div>
      </div>
      <div class="sec-title" style="margin-top: 20px; ">
        <h2>Mining Company in Aso</h2>
      </div>

      <div style="margin-top: -50px; color: #443986;margin-bottom: 20px;">
      <ul class="list-style-one">
        <li style="font-weight: 500; margin-bottom: 20px; color: black"><span style="color: #443986; font-weight: 600;">Address:</span> NAF Valley Estate, 20, by AS Badeh St, ABACHA
         barracks, Asokoro, 099231, Federal Captial Territory
       </li>
        <li style="font-weight: 500; margin-bottom: 20px; color: black"><span style="color: #443986; font-weight: 600;">Hours:</span> Open 24 hours</li>
        <li style="font-weight: 500; margin-bottom: 20px; color: black"><span style="color: #443986; font-weight: 600;">Phone Number:</span> 0803 553 0984</li>
      </ul>
      </div>


      <div style=" color: #443986;margin-bottom: 20px;">
      <ul class="list-style-one">
        <h2 class="sec-title" style="font-weight: 500; margin-bottom: 10px; color: #443986">Question & Answer</h2>
        <li style="font-weight: 500; margin-bottom: 10px; color: black"> Be the first to ask question</li>
      </ul>
      </div>



  </div>
</div>


   

    <!--Call To Action Section-->
    <div class="call-to-action-section">
      <div class="outer-container">
        <div class="clearfix">

          <!--Left Column-->
          <div class="left-column clearfix">
            <div class="image-layer" style="background-image: url(images/background/1.jpg)"></div>
            <div class="inner-column">
              <h2>We help you to unlock & unleash the power <br> within your large scale Business</h2>
            </div>
          </div>

          <!--Right Column-->
          <div class="right-column">
            <div class="inner-column">
              <a href="contact.php#consultation" class="theme-btn btn-style-four">Book a Consultation</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--End Call To Action Section-->

    <!--Main Footer-->
    <?php include 'main_footer.php'  ?>

    <!--End Main Footer-->

  </div>
  <!--End pagewrapper-->
  <!--Scroll to top-->
  <?php include 'footer_content.php' ?>

</body>

</html>