<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="row">
    <div class="large-4 medium-4 small-12 columns">
    <div id="logo"><a href="index.html"><img src="images/logo1.png" alt="Conmpany Name"></a></div>
    </div>
    <div class="large-8 medium-8 small-12 columns">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name"> </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="index1.html">Home</a></li>
      <li><a href="about-us.html">About Us</a></li>
      <li class="active"><a href="reg.html">Register</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="notes.html">Notes</a></li>
      <li><a href="contact.html">Contact us</a></li>
      </ul>
  </section>
</nav>
    </div>
    </div>


<div class="inner-banner">
  <img src="images/service2.jpg" alt="About Us"> </div>

 <div class="content-sec inner-sec">
 <div class="row">
 <div class="large-12 columns">
 <h2> REGISTER HERE</h2>
 </div>

 <!-- <form style="color:blue;text-align:left;" method="POST" action="mvalidate.php"> -->
   <form  action="mvalidate.php" method="post">

     Name: </h4>
  <input type="text"  name="firstname" required="">

  <br><br>

         College name: </h4>
  <input type="text" name="collegename" required="">
  <br><br>

         User name:</h4>
<input type="text" name="userid" required="">
<br><br>
     <h4  style="color:blue;text-align:left;" >
         User password: </h4>
      <input type="password" name="psw" required="">



  <h4 style="color:blue;text-align:left;">Gender: </h4>
  <input type="radio" name="gender" value="male" checked> Male<br><br>
  <input type="radio" name="gender" value="female"> Female<br><br>
  <input type="radio" name="gender" value="other"> Other  <br><br>
   Date of birth:
  <input type="date" name="bday">
  E-mail:
  <input type="email" name="email" required="">
   Contact:
  <input type="tel" name="usrtel" required="">


   <h4 style="color:blue;text-align:left;">Select Branch</h4>
  <select name="branch">
    <option value="comps">Comps</option>
    <option value="it">I.T</option>
    <option value="Extc">Extc</option>
    <option value="Etrx">Etrx</option>
  </select>
  <br><br>



  <input type="submit" value="Submit">
  <input type="reset" value="reset">
</form>
</style>



 </div>
 </div>



 <div class="newsletter">
 <div class="row">
 <div class="large-12 columns">
 <h2 class="white">Subscribe to our newsletter</h2>
 <p>Sign up for our mailing list to get latest updates and offers.</p>
 </div>
 <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>
 <div class="large-8 medium-8 small-12 columns">
 <form action="">
 <input placeholder="Email Address..." class="radius" type="text">
 <input name="" class="button radius" value="Subscribe" type="submit">
 </form>

 </div>
 <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>

 </div>
 </div>

 <div class="footer-sec">
 <div class="row">
 <div class="large-3 medium-3 small-12 columns">
 <div class="foot-1">
 <h4>Quick Links</h4>
 <ul>
 <li><a href="index1.html" title="Home">Home</a></li>
 <li><a href="about-us.html" title="About Us">About Us</a></li>
 <li><a href="reg.html" title="Register">Register</a></li>
 <li><a href="login.html" title="Services">Login</a></li>
     <li><a href="notes.html" title="notes">Notes</a></li>
 <li><a href="contact.html" title="Contact">Contact us</a></li>
 </ul>
 </div>
 </div>

 <div class="large-4 medium-3 small-12 columns">
 <div class="foot-1">
 <h4>Address</h4>
 <p>Somaiya Ayurvihar Complex, Eastern Express Highway, Near Everald Nagar, Sion EAst, MumbAi, Maharashtra, 400022<br>
     </p>
 <ul>
 <li><a href="mailto:info@companyname.com" target="_blank">info@studybuddy.com</a></li>
 <li><a href="tel:(01) 800 854 633" target="_blank">123-456-7890</a></li>
 </ul>
 </div>
 </div>

 <div class="large-2 medium-3 small-12 columns">
 <div class="foot-1">
 <h4>Follow Us</h4>
 <div class="social">
 <div class="facebook"><a href="#" class="facebook"></a></div>
 <div class="twitter"><a href="#" class="twitter"></a></div>
 <div class="gplus"><a href="#" class="gplus"></a></div>
 </div>
 </div>
 </div>

 </div>
 </div>
   <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script type="text/javascript" src="js/all.js"></script>

  </body>
</html>
