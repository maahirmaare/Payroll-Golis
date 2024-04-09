<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Payroll</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />
   </head>
   <body>
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Header Section -->
      <div class="Header" id="Home">
         <nav class="navbar fixed-top">
            

               <div class="logo-text-container">
    <img src="<?php echo base_url(); ?>assets/img/bg_whiate_logo-removebg-preview.png" style="width: 100px; height: 50px;">
    <a class="navbar-brand" href="<?php echo base_url('login');?>">Payroll </a>
</div>


               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav">
                     <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Website Information</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#site-heading">Services</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="#AboutMe">Team Work</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#footer-distributed">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login');?>">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2>Payroll <br> Employee</h2>
                        </div>
                        <p>This application was created to help companies in the employee payroll process</p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>assets/img/remoove.png');"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2>Website Information</h2>
               <div class="subHeading">
               The following is brief information about the employee payroll website
               </div>
            </div>

            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             <style> 
             #panel1, #flip1 {
               padding: 5px;
               text-align: center;
               background-color: #00BFD8;
               border: solid 1px #c3c3c3;
               cursor: pointer;
             }

             #panel1 {
               padding: 10px;
               display: none;
             }
             </style>
            <div class="content">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/tentang.svg"></div>
                        <div class="body">
                           <div class="title">About Website</div>
                           <div id="flip1">Read More</div>
                           <div id="panel1">This application was created to help companies in the employee payroll process</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip2").click(function(){
                       $("#panel2").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel2, #flip2 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                     cursor: pointer;
                   }

                   #panel2 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/administrator.svg"></div>
                        <div class="body">
                           <div class="title">Admin Page</div>
                           <div id="flip2">Read More</div>
                           <div id="panel2">Administrators can use the website to manage data on the website, the administrator page has a dashboard / brief information about data data, there is employee data for employee management, there is job data for position management, there is transaction data that has a sub menu of attendance data, salary deduction settings, data salary, there is a data report that has a sub menu of attendance reports, salary reports, print salary slips.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip3").click(function(){
                       $("#panel3").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel3, #flip3 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                   }

                   #panel3 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/karyawan.svg"></div>
                        <div class="body">
                           <div class="title">Employee Page</div>
                           <div id="flip3">Read More</div>
                           <div id="panel3">The employee page contains information about employees and prints salary slips.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                  $(document).ready(function(){
                     $("#flip4").click(function(){
                       $("#panel4").slideToggle("slow");
                     });
                  });
                  </script>
                  <style> 
                   #panel4, #flip4 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                  }

                   #panel4 {
                     padding: 10px;
                     display: none;
                  }
                  .Team .content .TeamInfo .Name{
                    margin: 10px 0;
                    font-size: 18px;
                    font-weight: 900;
                  }
                  @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

*{
	padding:0;
	margin:0;
}

html{
	background-color: #eaf0f2;
}

body{
	font:16px/1.6 Arial,  sans-serif;
}

header{
	text-align: center;
	padding-top: 100px;
	margin-bottom:190px;
}

header h1{
	font: normal 32px/1.5 'Open Sans', sans-serif;
	color: #3F71AE;
	padding-bottom: 16px;
}

header h2{
	color: #F05283;
}

header span{
	color: #3F71EA;
}


/* The footer is fixed to the bottom of the page */

footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color: #00BFD8;
}
.footer-distributed .footer-left a:hover{
   color: #00BFD8;
}
/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #00BFD8;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}


.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}      
.footer-icons a:hover{
   color: #00BFD8;
} 
section {
    padding: 60px 0;
    min-height: 100vh;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}.bg-gray {
    background-color: #f9f9f9;
}

.site-heading h2 {
  display: block;
  font-weight: 700;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.site-heading h2 span {
  color: #00BFD8;
}

.site-heading h4 {
  display: inline-block;
  padding-bottom: 20px;
  position: relative;
  text-transform: capitalize;
  z-index: 1;
}

.site-heading h4::before {
  background: #00BFD8 none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 2px;
  left: 50%;
  margin-left: -25px;
  position: absolute;
  width: 50px;
}

.site-heading {
  margin-bottom: 60px;
  overflow: hidden;
  margin-top: -5px;
}

.carousel-shadow .owl-stage-outer {
  margin: -15px -15px 0;
  padding: 15px;
}

.we-offer-area .our-offer-carousel .owl-dots .owl-dot span {
  background: #ffffff none repeat scroll 0 0;
  border: 2px solid;
  height: 15px;
  margin: 0 5px;
  width: 15px;
}

.we-offer-area .our-offer-carousel .owl-dots .owl-dot.active span {
  background: #00BFD8 none repeat scroll 0 0;
  border-color: #00BFD8;
}

.we-offer-area .item {
  background: #ffffff none repeat scroll 0 0;
  border-left: 2px solid #00BFD8;
  -moz-box-shadow: 0 0 10px #cccccc;
  -webkit-box-shadow: 0 0 10px #cccccc;
  -o-box-shadow: 0 0 10px #cccccc;
  box-shadow: 0 0 10px #cccccc;
  overflow: hidden;
  padding: 30px;
  position: relative;
  z-index: 1;
}

.we-offer-area.text-center .item {
  background: #ffffff none repeat scroll 0 0;
  border: medium none;
  padding: 67px 40px 64px;
}

.we-offer-area.text-center .item i {
  background: #00BFD8 none repeat scroll 0 0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  color: #ffffff;
  font-size: 40px;
  height: 80px;
  line-height: 80px;
  position: relative;
  text-align: center;
  width: 80px;
  z-index: 1;
  transition: all 0.35s ease-in-out;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  margin-bottom: 25px;
}

.we-offer-area.text-center .item i::after {
  border: 2px solid #00BFD8;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  content: "";
  height: 90px;
  left: -5px;
  position: absolute;
  top: -5px;
  width: 90px;
  z-index: -1;
  transition: all 0.35s ease-in-out;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
}

.we-offer-area.item-border-less .item {
  border: medium none;
}

.we-offer-area .our-offer-items.less-carousel .equal-height {
  margin-bottom: 30px;
}

.we-offer-area.item-border-less .item .number {
  font-family: "Poppins",sans-serif;
  font-size: 50px;
  font-weight: 900;
  opacity: 0.1;
  position: absolute;
  right: 30px;
  top: 30px;
}

.our-offer-carousel.center-active .owl-item:nth-child(2n) .item,
.we-offer-area.center-active .single-item:nth-child(2n) .item {
  background: #00BFD8 none repeat scroll 0 0;
}

.our-offer-carousel.center-active .owl-item:nth-child(2n) .item i,
.our-offer-carousel.center-active .owl-item:nth-child(2n) .item h4,
.our-offer-carousel.center-active .owl-item:nth-child(2n) .item p,
.we-offer-area.center-active .single-item:nth-child(2n) .item i,
.we-offer-area.center-active .single-item:nth-child(2n) .item h4,
.we-offer-area.center-active .single-item:nth-child(2n) .item p {
  color: #ffffff;
}

.we-offer-area .item i {
  color: #00BFD8;
  display: inline-block;
  font-size: 60px;
  margin-bottom: 20px;
}

.we-offer-area .item h4 {
  font-weight: 600;
  text-transform: capitalize;
}

.we-offer-area .item p {
  margin: 0;
}

.we-offer-area .item i,
.we-offer-area .item h4,
.we-offer-area .item p {
  transition: all 0.35s ease-in-out;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
}

.we-offer-area .item::after {
  background: #00BFD8 none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: -100%;
  position: absolute;
  top: 0;
  transition: all 0.35s ease-in-out;
  -webkit-transition: all 0.35s ease-in-out;
  -moz-transition: all 0.35s ease-in-out;
  -ms-transition: all 0.35s ease-in-out;
  -o-transition: all 0.35s ease-in-out;
  width: 100%;
  z-index: -1;
}

.we-offer-area .item:hover::after {
  left: 0;
}

.we-offer-area .item:hover i,
.we-offer-area .item:hover h4,
.we-offer-area .item:hover p {
  color: #ffffff !important;
}

.we-offer-area.text-center .item:hover i::after {
  border-color: #ffffff !important;
}

.we-offer-area.text-center .item:hover i {
  background-color: #ffffff !important;
  color: #00BFD8 !important;
}

.we-offer-area.text-left .item i {
  background: #00BFD8 none repeat scroll 0 0;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  color: #ffffff;
  display: inline-block;
  font-size: 60px;
  height: 100px;
  line-height: 100px;
  margin-bottom: 30px;
  position: relative;
  width: 100px;
  z-index: 1;
  text-align: center;
}

.we-offer-area.text-left .item i::after {
  border: 2px solid #00BFD8;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  content: "";
  height: 120px;
  left: -10px;
  position: absolute;
  top: -10px;
  width: 120px;
}
                  </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/others-fitur.svg"></div>
                        <div class="body">
                           <div class="title">More Features</div>
                           <div id="flip4">Read More</div>
                           <div id="panel4">Print payslips, forget passwords, login employees</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Our Services -->
      <div class="services" id="site-heading">
      <section class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>What we <span>Offer</span></h2>
                        <h4>Get Every Service With a Golis Sim Card</h4>
                    </div>
                </div>
            </div>
                <div class="row our-offer-items less-carousel">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                        <i class="fas fa-sim-card"></i>
                            <h4>Sahal</h4>
                            <p>
                            This service will enable all Golis subscribers to pay through their mobile phone it is similar to the debit card. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-dharmachakra"></i>
                            <h4>PREPAID & POSTPAID</h4>
                            <p>
                            With a prepaid phone plan you buy your airtime, data, minutes, and bundles before you are able to use them.</p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-tasks"></i>
                            <h4>FIXED INTERNET PACKAGES</h4>
                            <p>
                            Fixed wireless internet is a high-speed, reliable internet service for rural and underserved areas                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-tachometer-alt"></i>
                            <h4>LANDLINE</h4>
                            <p>
                            As for the usage fees it depends on the user’s preferences. they can either pay the money or make the caller pay for their call.</p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-recycle"></i>
                            <h4>VAS PERSONAL</h4>
                            <p>
                            Kayd (contacts backup) Back-up your SIM contacts with Golis and easily recover all your contacts whenever your SIM card gets lost.</p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-headset"></i>
                            <h4>24/7 Support</h4>
                            <p>
                            Please do not hesitate to contact us. Let me know if you have further questions on this matter.  <br> <b>Feel Free!</b>
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
        </div>
    </section>
      <!-- Team Section -->
      <div class="Team" id="AboutMe">
         <div class="Section">
            <div class="text-center">
               <h2>Developers</h2>
               <div class="subHeading">
               Here's brief information about the website builders
               </div>
            </div>
            <div class="content">
               <div class="team row">
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="card">
                        <div class="TopImg">
                           <img src="<?php echo base_url(); ?>assets/landing/img/maahir_sawir-removebg-preview-modified.png" class="rounded-circle w-100 d-block">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">Maahir Maare</div>
                           <div class="Job">FullStack Developer</div>
                           <div class="social_links">
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-github" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="card">
                        <div class="TopImg">
                           <img src="<?php echo base_url(); ?>assets/landing/img/mohamed2.png" class="rounded-circle w-100 d-block">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">Mohamed Abdullahi</div>
                           <div class="Job">Front End Developer</div>
                           <div class="social_links">
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-github" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="card">
                        <div class="TopImg">
                           <img src="<?php echo base_url(); ?>assets/landing/img/yahya2.png" class="rounded-circle w-100 d-block">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">Yahya Mohamed</div>
                           <div class="Job">UI & UX Designer</div>
                           <div class="social_links">
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-github" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="team-memeber col-md-6 col-lg-4 col-xl-3">
                     <div class="card">
                        <div class="TopImg">
                           <img src="<?php echo base_url(); ?>assets/landing/img/abdalla2.png" class="rounded-circle w-100 d-block">
                        </div>
                        <div class="TeamInfo text-center">
                           <div class="Name">Abdullahi Farah</div>
                           <div class="Job">UI & UX Designer</div>
                           <div class="social_links">
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-github" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="social">
                                 <a class="" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Section -->
      <div class="text-center">
         <br>
               <h2>Get In Touch With Us Today</h2>
               <div class="subHeading">
               Feel free to talk to our online representative any time.
               </div>
            </div>
      <div class="footer" id="footer-distributed">
		<footer class="footer-distributed">

<div class="footer-left">
 <img src="assets/landing/img/golis2.png">
   <h3>The Best<span>Choice</span></h3>

   <p class="footer-links">
      <a href="#">Home</a>
      |
      <a href="#">Blog</a>
      |
      <a href="#">About</a>
      |
      <a href="#">Contact</a>
   </p>

   <p class="footer-company-name">© 2022 IF'19 Internship Students. &#127480; &#127476;</p> 
</div>

<div class="footer-center">
   <div>
      <i class="fa fa-map-marker"></i>
        <p><span>- Biyo kulule road,</span>
        Bosaso Puntland, Somalia.</p>
   </div>

   <div>
      <i class="fa fa-phone"></i>
      <p>+252 05 822001</p>
   </div>
   <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:info@golis.so">info@golis.so</a></p>
   </div>
</div>
<div class="footer-right">
   <p class="footer-company-about">
      <span>About the company</span>
      We offer the best quality telecommunications and information products services..</p>
   <div class="footer-icons">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
   </div>
</div>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
   </body>
</html>