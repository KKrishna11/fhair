<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- SEO Meta Tags for Franchise -->
  <meta name="description" content="Get in touch with Fhairsalons to learn more about our franchise opportunities. Whether you're interested in opening a new location or learning about our services, we're here to help you start your journey!" />
  <meta name="keywords" content="contact Fhairsalons, franchise inquiry, salon franchise opportunities, hair salon franchise contact, beauty franchise contact" />
  <meta name="author" content="fhairsalons" />

  <!-- Social Media Meta Tags -->
  <meta property="og:title" content="Contact Fhairsalons - Franchise Opportunities" />
  <meta property="og:description" content="Contact Fhairsalons to explore exciting franchise opportunities and start your own hair salon or beauty business. We're happy to answer any questions you have about joining our network!" />
  <meta property="og:image" content="https://www.fhairsalons.com/images/contact-franchise-og.jpg" />
  <meta property="og:url" content="https://www.fhairsalons.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Contact Fhairsalons - Franchise Opportunities" />
  <meta name="twitter:description" content="Reach out to Fhairsalons for information about our franchise opportunities. Learn how you can start your own salon or beauty business with expert support and training!" />

  <!-- Favicon -->
  <link rel="icon" href="https://www.fhairsalons.com/favicon.ico" type="image/x-icon" />



  <title>Fhairsalons</title>
  <link rel="stylesheet" href="css/contact-us.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
    integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Rubik&display=swap"
    rel="stylesheet" />


  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet" />
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3QG2M36KJ2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3QG2M36KJ2');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NH3WGC6M');</script>
<!-- End Google Tag Manager -->

</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH3WGC6M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="header paddingsection">
      <a href="./index.html" class="logo"> Fhairsalons </a>

      <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="hair-spa.html">Hair</a>
        <!-- <a href="spa-menu.html">Spa</a> -->
        <a href="nail-care.html">Nail</a>

        <a href="scalp-treatment.html">Korean Hair Spa</a>
        <a href="skin-care.html">Skin</a>

        <a href="franchise.php">Franchise</a>
        <a href="contact-us.php">Contact Us</a>
        <a href="https://florianhurelhaircouture.com/" class="logo"> <img src="./images/blackfhhcs-logo.PNG" alt="fhhcslogo"> </a>


      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
    </section>



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
          <a href="mailto:franchise@fhairsalons.com" class="fa fa-envelope"></a>
        </div>
      </div>

      <div class="box">
        <h3>Our Location</h3>
                <p>
            FLORIAN HUREL SALONS PRIVATE LIMITED <br>1st Floor, Haji Siddiqui
            Building,<br> Dr. Ambedkar Road, Dandpada,
            Khar (W),<br>Mumbai-400051, Maharashtra, India.
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