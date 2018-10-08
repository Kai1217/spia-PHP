<!DOCTYPE html>
<html lang="en-AU">
<title>Suicide Prevention Inititave Australia</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-red">Close
    <i class="fa fa-remove"></i>
  </a>
  <br>
  <div class="parentElement">
  <button type="button" class="btn btn-default btn-work btn-primary" id="myBtn">ML</button>
  </div>
  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-size: 17px;">The Machine Learning Application is currently under development. For us to fully realise this project. We will need to know if users are interested in the project. To show that you support this inititave, please click <strong><a href="assets/pages/survey.html">Here</a></strong></p>
  </div>
</div>

  <div class="parentElement">
  <button type="button" class="btn btn-default btn-work btn-primary" id="myBtn2" style="text-align:center">Software</button>
</div>
  <div id="myModal2" class="modal2">
    
    <div class="modal-content2">
      <span class="close2">&times;</span>
      <p style="font-size: 17px;">Both founders have made an abundance of software. To view their repositories, please click the following;</p>
      <ul><a href="https://github.com/Kai1217?tab=repositories" target="_blank"><b>Kai's Repositories</b></a></ul>
      <ul><a href="https://github.com/OllieLollie1?tab=repositories" target="_blank"><b>Oliver's Repositories</b></a></ul>
    </div>
  </div>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-black w3-hover-blue"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Team</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Work</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Contact</a>
  <a href="assets/pages/survey.html" class="w3-bar-item w3-button w3-hide-small w3-hover-blue">Survey</a>
    <div class="w3-dropdown-hover w3-hide-small">
   <!-- <button class="w3-button" title="Notifications"><i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div> -->
  </div>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="assets/pages/survey.html" class="w3-bar-item w3-button">Survey</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/images/logo.png" alt="health" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">
  </div>
</div>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<h2><b>OUR TEAM</b></h2>
<p>Meet the team:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="assets/images/kaimatolat.png" alt="Kai" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kai Matolat</h3>
  <p>Software Developer</p>
</div>

<div class="w3-quarter">
  <img src="assets/images/oliverstrong.png" alt="Oliver" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Oliver Strong</h3>
  <p>Software Developer</p>
</div>
</div>
</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2><b>Our Work</b></h2>
<p>We are currently in development of creating a machine learning solution to help lower the amount of suicidal attempts in the society.</p>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-orange"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- <div class="w3-container w3-center vid-container" id="video">
  <h2>Video</h2>

</div> -->

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"><b>Contact Us</b></span></div>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Brisbane, Australia</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  <a href="mailto:kaimatolat@hotmail.com?Subject=Hello" target="_top">kaimatolat@hotmail.com</a></p>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="location">
  <div class="shadow-lg p-3 mb-5 bg-black rounded">
  <div class="resp-container">
  <div class="w3-row">
    <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar"></span></div>
        <iframe class="resp-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.987995830557!2d152.98310101515204!3d-27.50074878287789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915058e734abbf%3A0x68fbc78b205e9dda!2sIndooroopilly+State+High+School!5e0!3m2!1sen!2sau!4v1534424086840" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-green" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-green" href="javascript:void(0)" title="Instagram"><i class="fa fa-instagram"></i></a>
  <a href="https://github.com/Kai1217" target="_blank" class="w3-button w3-large w3-green w3-hide-small" href="javascript:void(0)" title="GitHub"><i class="fa fa-github"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>, <a href="https://getbootstrap.com/" target="_blank">BootstrapCDN</a> and <a href="https://js.tensorflow.org/" target="_blank">TensorFlowJS</a></p>
  <br>
  <p>&copy; Suicide Prevention Inititave Australia</p>
  <p><a href="assets/pages/license.html" class="text-dark">LICENSES</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-green w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<!-- Scripts -->
<script src="assets/js/all.js"></script>

</body>
</html>
