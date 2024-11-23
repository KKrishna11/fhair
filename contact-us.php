<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta meta name="viewport" content="width=device-width, user-scalable=no" />

  <title>Fhairsalons</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="css/contact-us.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
    integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Rubik&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet" />
</head>

<body>
  <section class="header paddingsection">
    <a href="./index.html" class="logo"> Fhairsalons </a>

    <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="hair-spa.html">Hair</a>
      <a href="spa-menu.html">Spa</a>
      <a href="nail-care.html">Nail</a>

      <a href="scalp-treatment.html">Korean Hair Spa</a>
      <a href="skin-care.html">Skin</a>

      <a href="contact-us.php">Contact Us</a>
      <a href="franchise.php">Franchise</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <!-- START CONTACT SECTION -->
  <!-- <div class="section-contact">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <div class="header-section text-center">
          <h2 class="title">
            Get In Touch
            <span class="dot"></span>
            <span class="big-title">CONTACT</span>
          </h2>
          <p class="description">
            Interested in becoming a part of the fhairsalons family? Reach out
            to discuss franchise opportunities and join our mission to
            redefine beauty across the globe.
          </p>
        </div>
      </div>
    </div>
    <div class="form-contact">
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Enter Your Name" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Enter Your Email" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-phone"></i>
              <input type="text" name="phoneNumber" placeholder="Enter Your Phone Number" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-check"></i>
              <input type="text" name="subject" placeholder="Enter Your Subject" />
            </div>
          </div>
          <div class="col-12">
            <div class="single-input">
              <i class="fas fa-comment-dots"></i>
              <textarea placeholder="Enter Your Message"></textarea>
            </div>
          </div>
          <div class="col-12">
            <div class="submit-input text-center">
              <input type="submit" name="submit" value="SUBMIT NOW" />
            </div>
          </div>
        </div>
      </form>
    </div>
  </div> -->


  <div class="section-contact">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <div class="header-section text-center">
          <h2 class="title">
            Get In Touch
            <span class="dot"></span>
            <span class="big-title">CONTACT</span>
          </h2>
          <p class="description">
            Interested in becoming a part of the fhairsalons family? Reach out
            to discuss franchise opportunities and join our mission to
            redefine beauty across the globe.
          </p>
        </div>
      </div>
    </div>
    <div class="form-contact">
      <form id="contactForm" action="send-email.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-user"></i>
              <input type="text" id="name" name="name" placeholder="Enter Your Name"
                value="<?php echo htmlspecialchars($_SESSION['formData']['name'] ?? ''); ?>" />
              <small class="error-message"><?php echo htmlspecialchars($_SESSION['errors']['name'] ?? ''); ?></small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Enter Your Email"
                value="<?php echo htmlspecialchars($_SESSION['formData']['email'] ?? ''); ?>" />
              <small class="error-message"><?php echo htmlspecialchars($_SESSION['errors']['email'] ?? ''); ?></small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-phone"></i>
              <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Your Phone Number"
                value="<?php echo htmlspecialchars($_SESSION['formData']['phoneNumber'] ?? ''); ?>" />
              <small class="error-message"><?php echo htmlspecialchars($_SESSION['errors']['phoneNumber'] ?? ''); ?></small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="single-input">
              <i class="fas fa-check"></i>
              <input type="text" id="subject" name="subject" placeholder="Enter Your Subject"
                value="<?php echo htmlspecialchars($_SESSION['formData']['subject'] ?? ''); ?>" />
              <small class="error-message"><?php echo htmlspecialchars($_SESSION['errors']['subject'] ?? ''); ?></small>
            </div>
          </div>
          <div class="col-12">
            <div class="single-input">
              <i class="fas fa-comment-dots"></i>
              <textarea id="message" name="message" placeholder="Enter Your Message"><?php echo htmlspecialchars($_SESSION['formData']['message'] ?? ''); ?></textarea>
              <small class="error-message"><?php echo htmlspecialchars($_SESSION['errors']['message'] ?? ''); ?></small>
            </div>
          </div>
          <div class="col-12">
            <div class="submit-input text-center">
              <input type="submit" name="submit" value="SUBMIT NOW" />
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- / END CONTACT SECTION -->
  <section class="footer mt-3">
    <div class="box-container">
      <div class="box">
        <h3>Find us here</h3>
        <p>
          Stay connected with fhairsalons and explore our latest styles,
          trends, and services. Follow us on social media for updates, offers,
          and inspiration to make every day a good hair day!
        </p>
        <div class="share">
          <a href="./skin-care.html" class="fab fa-facebook-f"></a>
          <a href="./hair-spa.html" class="fab fa-instagram"></a>
          <a href="mailto:franchise@fhairsalons.com" class="fa fa-envelope"></a></div>
      </div>

      <div class="box">
        <h3>Our Location</h3>
        <p>
          Fhairsalons, Bandra West <br />
          Mumbai, India
        </p>
      </div>


      <div
        style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; text-align: justify;">
        <div style="font-size: 1.5rem; color: black; font-weight: 700; line-height: 1.8; padding: 1rem 0;">
          <p><strong>Zubair Khan</strong><br>DIRECTOR FRANCHISE</p>
          <p><a style="text-decoration:none;" href="tel:+919876543210">+91 98765 43210</a></p>
        </div>
        <div style="font-size: 1.5rem; color: black; font-weight: 700; line-height: 1.8; padding: 1rem 0;">
          <p><strong>Zarir Meherji</strong><br>DIRECTOR CEO</p>
          <p><a style="text-decoration:none;" href="tel:+919167077150">+91 91670 77150</a></p>
          <!-- Add the correct phone number in the href -->
        </div>
      </div>


    </div>

    <div class="credit">
      Created by
      <span><a href="./team.html">fhairsalons Franchise Team</a></span> |
      <a href="./terms-and-conditions.html">Terms and Conditions</a> | All
      rights reserved!
    </div>
  </section>


  <style>
    .error-message {
      color: red;
      font-size: 1.2rem;
      font-weight: bolder;
      margin-top: 3px;
      display: block;
      text-align: center;
    }
  </style>


  <?php
  // Clear session data after displaying errors
  unset($_SESSION['errors']);
  unset($_SESSION['formData']);
  ?>




  <script src="js/script.js"></script>
</body>

</html>