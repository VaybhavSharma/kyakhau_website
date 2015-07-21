<?php
if(isset($_POST['submit'])){
$selected_radio = $_POST['food'];

	if($selected_radio =="veg"){
		header('location:veg.php');
	}elseif ($selected_radio =="non-veg") {
		header('location:non-veg.php');
	}
	else{
		echo "please choose";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kya Khau</title>

    <link rel="icon" href="images/food1.jpg" type="image/png" sizes="16x16" />
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>


    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- For slider -->
    <script type="text/javascript" src="js/slider_ext.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
  

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

  </head>

  <body>

<div class="social">
<p>
    Follow Us
</p>

<svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M18.258,3.266c-0.693,0.405-1.46,0.698-2.277,0.857c-0.653-0.686-1.586-1.115-2.618-1.115c-1.98,0-3.586,1.581-3.586,3.53c0,0.276,0.031,0.545,0.092,0.805C6.888,7.195,4.245,5.79,2.476,3.654C2.167,4.176,1.99,4.781,1.99,5.429c0,1.224,0.633,2.305,1.596,2.938C2.999,8.349,2.445,8.19,1.961,7.925C1.96,7.94,1.96,7.954,1.96,7.97c0,1.71,1.237,3.138,2.877,3.462c-0.301,0.08-0.617,0.123-0.945,0.123c-0.23,0-0.456-0.021-0.674-0.062c0.456,1.402,1.781,2.422,3.35,2.451c-1.228,0.947-2.773,1.512-4.454,1.512c-0.291,0-0.575-0.016-0.855-0.049c1.588,1,3.473,1.586,5.498,1.586c6.598,0,10.205-5.379,10.205-10.045c0-0.153-0.003-0.305-0.01-0.456c0.7-0.499,1.308-1.12,1.789-1.827c-0.644,0.28-1.334,0.469-2.06,0.555C17.422,4.782,17.99,4.091,18.258,3.266"></path>
            </svg>

            <svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M11.344,5.71c0-0.73,0.074-1.122,1.199-1.122h1.502V1.871h-2.404c-2.886,0-3.903,1.36-3.903,3.646v1.765h-1.8V10h1.8v8.128h3.601V10h2.403l0.32-2.718h-2.724L11.344,5.71z"></path>
            </svg>

            <svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M9.426,7.625h0.271c0.596,0,1.079-0.48,1.079-1.073V4.808c0-0.593-0.483-1.073-1.079-1.073H9.426c-0.597,0-1.079,0.48-1.079,1.073v1.745C8.347,7.145,8.83,7.625,9.426,7.625 M9.156,4.741c0-0.222,0.182-0.402,0.404-0.402c0.225,0,0.405,0.18,0.405,0.402V6.62c0,0.222-0.181,0.402-0.405,0.402c-0.223,0-0.404-0.181-0.404-0.402V4.741z M12.126,7.625c0.539,0,1.013-0.47,1.013-0.47v0.403h0.81V3.735h-0.81v2.952c0,0-0.271,0.335-0.54,0.335c-0.271,0-0.271-0.202-0.271-0.202V3.735h-0.81v3.354C11.519,7.089,11.586,7.625,12.126,7.625 M6.254,7.559H7.2v-2.08l1.079-2.952H7.401L6.727,4.473L6.052,2.527H5.107l1.146,2.952V7.559z M11.586,12.003c-0.175,0-0.312,0.104-0.405,0.204v2.706c0.086,0.091,0.213,0.18,0.405,0.18c0.405,0,0.405-0.451,0.405-0.451v-2.188C11.991,12.453,11.924,12.003,11.586,12.003 M14.961,8.463c0,0-2.477-0.129-4.961-0.129c-2.475,0-4.96,0.129-4.96,0.129c-1.119,0-2.025,0.864-2.025,1.93c0,0-0.203,1.252-0.203,2.511c0,1.252,0.203,2.51,0.203,2.51c0,1.066,0.906,1.931,2.025,1.931c0,0,2.438,0.129,4.96,0.129c2.437,0,4.961-0.129,4.961-0.129c1.117,0,2.024-0.864,2.024-1.931c0,0,0.202-1.268,0.202-2.51c0-1.268-0.202-2.511-0.202-2.511C16.985,9.328,16.078,8.463,14.961,8.463 M7.065,10.651H6.052v5.085H5.107v-5.085H4.095V9.814h2.97V10.651z M9.628,15.736h-0.81v-0.386c0,0-0.472,0.45-1.012,0.45c-0.54,0-0.606-0.515-0.606-0.515v-3.991h0.809v3.733c0,0,0,0.193,0.271,0.193c0.27,0,0.54-0.322,0.54-0.322v-3.604h0.81V15.736z M12.801,14.771c0,0,0,1.03-0.742,1.03c-0.455,0-0.73-0.241-0.878-0.429v0.364h-0.876V9.814h0.876v1.92c0.135-0.142,0.464-0.439,0.878-0.439c0.54,0,0.742,0.45,0.742,1.03V14.771z M15.973,12.39v1.287h-1.688v0.965c0,0,0,0.451,0.405,0.451s0.405-0.451,0.405-0.451v-0.45h0.877v0.708c0,0-0.136,0.901-1.215,0.901c-1.08,0-1.282-0.901-1.282-0.901v-2.51c0,0,0-1.095,1.282-1.095S15.973,12.39,15.973,12.39 M14.69,12.003c-0.405,0-0.405,0.45-0.405,0.45v0.579h0.811v-0.579C15.096,12.453,15.096,12.003,14.69,12.003"></path>
            </svg>

            <svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M8.937,10.603c-0.383-0.284-0.741-0.706-0.754-0.837c0-0.223,0-0.326,0.526-0.758c0.684-0.56,1.062-1.297,1.062-2.076c0-0.672-0.188-1.273-0.512-1.71h0.286l1.58-1.196h-4.28c-1.717,0-3.222,1.348-3.222,2.885c0,1.587,1.162,2.794,2.726,2.858c-0.024,0.113-0.037,0.225-0.037,0.334c0,0.229,0.052,0.448,0.157,0.659c-1.938,0.013-3.569,1.309-3.569,2.84c0,1.375,1.571,2.373,3.735,2.373c2.338,0,3.599-1.463,3.599-2.84C10.233,11.99,9.882,11.303,8.937,10.603 M5.443,6.864C5.371,6.291,5.491,5.761,5.766,5.444c0.167-0.192,0.383-0.293,0.623-0.293l0,0h0.028c0.717,0.022,1.405,0.871,1.532,1.89c0.073,0.583-0.052,1.127-0.333,1.451c-0.167,0.192-0.378,0.293-0.64,0.292h0C6.273,8.765,5.571,7.883,5.443,6.864 M6.628,14.786c-1.066,0-1.902-0.687-1.902-1.562c0-0.803,0.978-1.508,2.093-1.508l0,0l0,0h0.029c0.241,0.003,0.474,0.04,0.695,0.109l0.221,0.158c0.567,0.405,0.866,0.634,0.956,1.003c0.022,0.097,0.033,0.194,0.033,0.291C8.752,14.278,8.038,14.786,6.628,14.786 M14.85,4.765h-1.493v2.242h-2.249v1.495h2.249v2.233h1.493V8.502h2.252V7.007H14.85V4.765z"></path>
            </svg>
</div> <!-- end of div social -->

<div class="header">
<div class="container-fluid ">

     <div class="col-md-2 col-xs-6">
        <div class="logo">
           <img src="images/food1.jpg" >
        </div>
     </div>

     <div class="col-md-8">
      <h style="font-size: 50px; padding-left: 320px;">KYA KHAU?</h>
     </div>

     <div class="col-md-2 col-xs-6">
       <ul>
       
         <li><svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M12.443,9.672c0.203-0.496,0.329-1.052,0.329-1.652c0-1.969-1.241-3.565-2.772-3.565S7.228,6.051,7.228,8.02c0,0.599,0.126,1.156,0.33,1.652c-1.379,0.555-2.31,1.553-2.31,2.704c0,1.75,2.128,3.169,4.753,3.169c2.624,0,4.753-1.419,4.753-3.169C14.753,11.225,13.821,10.227,12.443,9.672z M10,5.247c1.094,0,1.98,1.242,1.98,2.773c0,1.531-0.887,2.772-1.98,2.772S8.02,9.551,8.02,8.02C8.02,6.489,8.906,5.247,10,5.247z M10,14.753c-2.187,0-3.96-1.063-3.96-2.377c0-0.854,0.757-1.596,1.885-2.015c0.508,0.745,1.245,1.224,2.076,1.224s1.567-0.479,2.076-1.224c1.127,0.418,1.885,1.162,1.885,2.015C13.961,13.689,12.188,14.753,10,14.753z M10,0.891c-5.031,0-9.109,4.079-9.109,9.109c0,5.031,4.079,9.109,9.109,9.109c5.031,0,9.109-4.078,9.109-9.109C19.109,4.969,15.031,0.891,10,0.891z M10,18.317c-4.593,0-8.317-3.725-8.317-8.317c0-4.593,3.724-8.317,8.317-8.317c4.593,0,8.317,3.724,8.317,8.317C18.317,14.593,14.593,18.317,10,18.317z"></path>
            </svg><a href="pages/login.php"><span>REGISTER</span></a></li> 
 
         <li><svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z"></path>
              <path fill="none" d="M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z"></path>
            </svg><a href="pages/login.php"><span>LOGIN</span></a></li>
       </ul>
    </div>  

</div> <!-- end of container-fluid div -->
</div> <!-- end of heder div -->



 <div id="slider1_container" style="position: relative; margin: 0 auto;
       top: 0px; left: 0px; width: 1300px; height: 464px; overflow: hidden;">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 401px; overflow: hidden;">
            <div>
                <img u="image" src="images/f1.jpg" />
            </div>
             <div>
               <img u="image" src="images/f2.jpg" />
            </div>
             <div>
              <img u="image" src="images/f3.jpg" />
            </div>
           </div>
  </div> <!-- End of slider area -->
<div class="container">        
   <div class="row ">
        <div class="events_img">
              <div class="img-responsive col-md-4 col-sm-4 col-xs-12">                
                    <div class="img_over grid-block">
                       <div class="caption">
                              <h3>Famous Sites for Recipies</h3>
                              <p>Click here to checkout 50 famous Indian dishes and their recipies!</p>
                              <p><a href="http://indian.food.com/" class="learn-more">Learn more</a></p>
                         </div>  <!-- end of caption div -->
                         <img src="images/f11.jpeg">
                    </div>  <!-- end of img1 grid-block div -->
                    <p></p>
              </div>
              <div class="img-responsive col-md-4 col-sm-4 col-xs-12">
                    <div class="img_over grid-block">
                         <div class="caption">
                             <h3>Food Place Check-In</h3>
                              <p>Click here to see the best restaurants in India! </p>
                              <p><a href="http://www.tripadvisor.in/Restaurants-g293860-India.html" class="learn-more">Learn more</a></p>
                         </div>  <!-- end of caption div -->
                         <img src="images/f12.jpeg">
                    </div>  <!-- end of img1 grid-block div -->             
                <p></p>
              </div>
              <div class="img-responsive col-md-4 col-sm-4 col-xs-12">
                    <div class="img_over grid-block">
                        <div class="caption">
                              <h3>Best Chefs in India</h3>
                              <p>Click here to view best chefs in India!</p>
                              <p><a href="http://www.todaytoptrends.com/2014/07/top-10-best-chefs-of-india/" class="learn-more">Learn more</a></p>
                         </div>  <!-- end of caption div -->
                         <img src="images/f13.jpeg">
                    </div>  <!-- end of img1 grid-block div -->       
                <p></p>
             </div>
       </div> <!-- End of events_img div -->
   </div> <!-- End of row div -->
</div> <!-- End of container div -->
<div class="free"></div>

<div style="left: 50%; position: relative;">
		<form action="index.php" method="POST">
		<input type="radio" name="food" value="veg"><h3>Veg</h3><br />
		<input type="radio" name="food" value="non-veg"><h3>Non-Veg</h3><br />
		<h1><input type="submit" name="submit" value="Choose Food"></h1>
	</form>
</div>



<div class="row">
  <div class="container">
    <div class="more">
        <p>Register now </p>
    </div> <!--end of more class -->
  </div>
</div>
<div class="foot">
   <div class="container">
      <div class="col-md-6">
        <p style="margin: 10px;">&copy;Copyright - AVDEVELOPERS</p>
      </div>

      <div class="col-md-6">
        <ul>
          <li>About</li>
          <li>Food Recipie</li>
          <li>Famous Chefs</li>
          <li>Contact Us</li>
          <li class="con">Help Us</li>

        </ul>
      </div>
  </div>

</div> <!-- end of foot div -->


</body>
</html>
