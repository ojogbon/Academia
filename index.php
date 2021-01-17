
<?php 

include "./controllers/central.php";
include "./controllers/Tutor.php";
include "./controllers/Student.php";

?>
<!-- 
  About  Author
  And some baic info 
  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="AI Group Developers' - Adejoju Jeremiah">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Academia O</title>

    <link rel="shortcut icon" href="img/favIcon.png" type="image/x-icon">

    <!-- Bootstrap & Custom CSS  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">

	  <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">

    <!-- ................Fonts...................... -->
      <!-- Trebuchet MS -->
      <link rel="stylesheet" href="fonts/Trebuchet MS/Trebuchet-MS.ttf">

      <style>
        .tutor-can-do-it {
              display:none;
        }

        .tutor-can-do-it , .student-can-do-it{
          padding: 2em;

        }

        .changePane {
            `margin-top: 10px;
            border: 1px solid #fff;
            padding: 2px;
            background-color: #fff;
            border-top-right-radius: 5px;
            border-bottom-left-radius: 5px;
            box-shadow: 1px 1px 1px 1px;
            cursor: pointer;`
        }
      </style>
</head>



<body>
<!-- .................Navbar Section.................. -->
<div class="py-5" style="background-image: linear-gradient(rgba(0,0,0,0.95), rgba(0,0,0,0.95)), url('img/bg.jpg'); background-size: cover; background-repeat: no-repeat;">

<!-- Brand -->
<div id="home" class="container-fluid pt-5">
  <p id="text" class="display-2 brand pt-3 pb-0 mb-0 text-center myTextColor font-weight-bold"><img class="mb-3 mr-3" height= 90px; width= 90px; src="img/favIcon.png"> A</p>
  <div id="motto" class="container w-25 text-center lead text-danger font-italic h1 font-weight-bold">...aid for excellence!</div>
</div>

<!-- .....Nav Links...... -->
<nav class="navbar navbar-expand-lg navbar-light mt-5 mb-4">
    <div class="container">

      <button id="navButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
         
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navList" class="nav navbar-nav navbar-right mx-auto ul-nav-bl lead py-3">
          <!-- Triggers The Modal -->
          <li class="nav-item mx-5"><a id="myBtn" class="nav-link font-weight-bold h4 text-danger" href="#form">LOGIN</a></li>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div id="mcl" class="modal-content-login">

                <!-- ...................................................Login-Form........................................................... -->
                 <div id="formCasing" class="container-fluid p-5">
                    <div id="formCasing-sm" class="container w-50 orange border border-danger" style="border-top-right-radius:50px; border-bottom-left-radius:50px">
                    <form class="student-can-do-it"  method="POST" class="p-5 col-12 shadow">
                          <div class="formContent">
                          
                          <div class="container imgLoginClose w-25 pb-3 text-center">
                            <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="img/showcase.jpg"></span>
                          </div>

                          <h3 class="text-center text-danger pb-3">Student Login to your account</h3>
                          <p class="lead text-center text-dark">Enter your email and password to access your account</p>
                          <br>

                            <div class="form-group">
                                <input type="text" id="email" class="form-control shadow" name="con_email" placeholder="Username...">
                            </div>
                            <br>
                            
                            <div class="form-group shadow">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br>

                            <input class="btn btn-lg btn-outline-danger btn-block shadow" type="submit" name="login_button-student" value="Log in">

                            <?php 
                            
                            if(isset($_POST["login_button-student"])){

                              $con_email = $_POST["con_email"];
                              $password = $_POST["password"];


                              $key = "1234567opiuyt" ;

                            
                               loginStudent($student,$key, $con_email,$password);
                            }
                        
                        ?>



                            <div id="formFooter" class="row my-3 container">
                                <div class="col-md-6">
                                    No account yet?
                                </div>
                                    
                                <div class="col-md-6">
                                    <a href="./o.pages/get-a-tutor.php" class="text-left text-dark">Register here!</a>
                                </div>
                            </div>

                            <div id="formFooter" class="row container">
                                <div class="col-md-6">
                                    <a class="text-dark" href="../Academia O/o.pages/reset-password.php">Forgot password?</a>
                                </div>
                                    
                                <div class="col-md-6">
                                    <a class="text-left text-dark" href="../Academia O/o.pages/help.php">Can't log in?</a>
                                </div>

                            </div>
                            <span class="changePane to-tutor">Tutor Pane!</span>
                          </div>
                        </form>

<!-----------||||||||||||||||||||||||||||||||||||----->

                        <form class="tutor-can-do-it"  method="post" class="p-5 col-12 shadow">
                          <div class="formContent">
                          
                          <div class="container imgLoginClose w-25 pb-3 text-center">
                            <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="img/showcase.jpg"></span>
                          </div>

                          <h3 class="text-center text-danger pb-3">Tutor Login to your account</h3>
                          <p class="lead text-center text-dark">Enter your email and password to access your account</p>
                          <br>

                            <div class="form-group">
                                <input type="email" id="email" class="form-control shadow" name="con_email" placeholder="Email">
                            </div>
                            <br>
                            
                            <div class="form-group shadow">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br>

                            <input type="submit" class="btn btn-lg btn-outline-danger btn-block shadow" type="submit" name="login_button" value="Log in">

                            <?php 
                            
                                if(isset($_POST["login_button"])){

                                  $con_email = $_POST["con_email"];
                                  $password = $_POST["password"];


                                  $key = "1234567opiuyt" ;

                                  loginTutor ($tutor,$key, $con_email,$password);
                                }
                            
                            ?>

                            <div id="formFooter" class="row my-3 container">
                                <div class="col-md-6">
                                    No account yet?
                                </div>
                                    
                                <div class="col-md-6">
                                    <a href="../o.pages/become-a-tutor.php" class="text-left text-dark">Register here!</a>
                                </div>
                            </div>

                            <div id="formFooter" class="row container">
                                <div class="col-md-6">
                                    <a class="text-dark" href="../Academia O/o.pages/reset-password.php">Forgot password?</a>
                                </div>
                                    
                                <div class="col-md-6">
                                    <a class="text-left text-dark" href="../Academia O/o.pages/help.php">Can't log in?</a>
                                </div>
                            </div>
                            <span class="changePane to-student">Student Pane!</span>
                          </div>
                        </form>


                    </div>
                </div>

            </div>
          </div>
          </li>
          
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold h4 text-danger" href="o.pages/about.php">ABOUT</a></li>
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold h4 text-danger" href="o.pages/FAQs.php">FAQs</a></li>
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold h4 text-danger" href="o.pages/blog.php">BLOG</a></li>
        </ul>
      </div>
        
    </div>
</nav>

</div>




<!-- ..........Basic Services............. -->
<div id="showCase-sm" class="container-fluid orange py-3" style="height: 550px;">
  <div class="py-5">

  <p class="display-4 animate text-center">You're weclome!</p>


    <h2 class="text-center heading pt-4 pb-2 font-weight-bold text-white">WHAT DO YOU <span class="text-danger">NEED HELP </span>WITH?</h2>
    <hr class="styled">

      <section id="mainMenu" class="container py-5 mb-5">
        <div class="row shadow colCont mx-lg-5">

          <div class="card shadow border border-light bg-danger px-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
                <div class="text-center">
                  <img src="img/icons/wwd.png" height="100px" width="100px">
                </div>

                <h4 class="card-title font-weight-bold text-white text-center">What We Do</h4>
                <p class="card-text text-white text-center  font-weight-bold">We offer both online and offline tutorials services. Simply tell us where you need help, and we'll here to give you the  best. Join a class now!</p>
                <a href="o.pages/what-we-do.php" class="mt-4 btn btn-block btn-sm btn-outline-light">See all</a>
            </div>
          </div>

          <div class="card shadow border border-light bg-success px-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card-body">
              <div class="text-center">
              <img class="pt-2" src="img/icons/gat.png" height="100px" width="100px">
              </div>
              
              <h4 class="card-title font-weight-bold text-white text-center">Get A Tutor</h4>
              <p class="card-text text-white text-center font-weight-bold">Are you seeking to get a professional home or online tutor for your child, with a flexible schedule? Tell us your child's need and get a tutor easily!</p>
              <a href="o.pages/get-a-tutor.php" class="btn btn-block btn-sm btn-outline-light">Get now!</a>
            </div>
          </div>

          <div class="card shadow border border-light bg-warning p-3 col-lg-4 col-md-6 cenLast">
            <div class="card-body">
              <div class="text-center">
              <img src="img/icons/tutorr.png" height="100px" width="100px">
              </div>

              <h4 class="card-title font-weight-bold text-white text-center">Become A Tutor</h4>
              <p class="card-text text-white text-center font-weight-bold">Do you want to earn more income (equal to your current salary rate or even more) doing what you love, teaching? Join our network of tutor.</p>
              <a href="o.pages/become-a-tutor.php" class="mt-4 btn btn-block btn-sm btn-outline-light">Register!</a>
            </div>
          </div>

        </div>
      </section>

  </div>
</div>



<!--......Advisory Board...... -->
<section class="team-main team-bg">
		<div class="team py-5">
			<div class="container py-lg-5">
        <div class="pt-5">
          <h1 class="text-center adB mt-5 pt-5 pb-2 myTextColor font-weight-bold">ADVISORY <span class="text-danger">BOARD</span></h1>
          <hr class="styled">
        </div>
					<div class="row team-row mt-5">
						<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">
							<a href="#"><img src="img/team/mr.jpg" class="team_member img-fluid" alt="Team Member"></a>
							<div class="team_info mt-3 position-absolute">
								<h3><a href="#" class="team_name">Mr Agboola Abdulganiu</a></h3>
								<span class="team_role">Education Officer, <br> Ogun State Ministry of Education, <br> Science and Technology.</span>
                <!-- <ul class="team-social mt-3">
									<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
								</ul> -->
							</div>
						</div>
				
							<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">
								<a href="#"><img src="img/team/md.jpg" class="team_member img-fluid" alt="Team Member"></a>
								<div class="team_info mt-3 position-absolute">
									<h3><a href="#" class="team_name">Mr Oklu Philip</a></h3>
									<span class="team_role">CEO / Director, <br> Academia O</span>
									<!-- <ul class="team-social mt-3">
										<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
									</ul> -->
								</div>
							</div>

              <div class="col-lg-4 col-sm-6 cenLast team-wrapper position-relative">
								<a href="#"><img src="img/team/mrs.jpg" class="team_member img-fluid" alt="Team Member"></a>
								<div class="team_info mt-3 position-absolute">
									<h3><a href="#" class="team_name">Dr. Mrs. Bolaji Popoola</a></h3>
									<span class="team_role">Education Officer, <br> Ogun State Ministry of Education, <br> Science and Technology.</span>
									<!-- <ul class="team-social mt-3">
										<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
									</ul> -->
								</div>
							</div>
              
				</div>
			</div>
	</section>


<!--............... Advert................ -->
<div class="p-5 container">
  <div class="m-5">

    <h1 class="text-danger font-weight-bold text-center mt-3 mb-2">Ongoing <span class="myTextColor">Registration</span> !!!</h1>
    <div class="container w-50">
    <hr class="footer">
    </div>

    <div class="row mt-5 pt-3 mx-auto">

      <div class="col-lg-6 col-md-12">
        <div class="text-center">

          <img class="border rounded shadow" src="img/neco.jpg" height="220rem" width="312rem">

          <h2 class="animate">NECO GCE 2020</h2>
          <h3 class="text-danger pb-2">Registration</h3>
          <p class="shadow text-white bg-danger mx-5 lead"><span class="orange mr-5 p-2">Deadline:</span> January 23, 2021.</p>
          
          <div class="container w-50">
            <a href="https://chat.whatsapp.com/2347087767178" class="shadow btn btn-block orange text-white mb-5">Register!</a>
          </div>
        
        </div>
      </div>

      <div class="col-lg-6">
        <div class="text-center">
          
          <img class="border rounded shadow" src="img/jamb.jpg" height="220rem">

          <h2 class="animate">JAMB-UTME CLASS</h2>
          <h3 class="text-danger pb-2">Tutorial</h3>
          <p class="shadow text-white bg-danger mx-5 lead"><span class="bg-info mr-5 p-2">Commences:</span> January 9, 2021.</p>
          
          <div class="container w-50">
            <a href="https://chat.whatsapp.com/2347087767178" class="shadow btn btn-block orange text-white mb-5">Join now!</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>


<!-- ....................Get Tutor............................ -->
<div class="row">

        <div class="col-md-6 p-0">
            <img height="100%" width="100%" src="img/home-tutor4.jpg">
        </div>

        <div class="col-md-6 orange px-5 pt-3">
            <h1 class="text-center fontStyle pt-5 text-danger">Get A<span class="text-white"> Professional</span> Tutor</h1>
            <hr class="styled">

          <div class="mt-5">
            <p class="lead my-5 font-weight-bold text-center text-light">Getting a Professional Home Tutor is easier than you think. Just click the button below and you're a step closer to getting the expert tutor you want for your child</p>
          </div>

          <div class="container w-50">
            <a href="#form" class="btn btn-block btn-lg btn-outline-light">Start now!</a>
          </div>
        </div>

</div>


<!-- Become Tutor -->
<div class="p-5" style="background: #f4f4f4;">
  <h1 class="text-center fontStyle pt-5 text-danger">Become<span class="myTextColor"> a Tutor</span></h1>
  <hr class="styled">

  <p class="lead font-weight-bold text-center text-muted pt-3">Academia O' provides an avenue for experienced teachers to manage and grow their home tutoring business. <br><br> Are you experienced in teaching?</p>

  <div class="container w-50">
    <a href="o.pages/become-a-tutor.php" class="btn btn-block btn-lg orange text-white mb-5">Apply now!</a>
  </div>
</div>


<!-- ........Request Consultation........ -->
<div id="consult" class="orange">
  <h2 class="text-center text-white pt-5 pb-2">Request <span class="text-danger">Consultation</span></h1>
  <hr class="styled">
    <div class="text-center">
      <h3 class="text-justify text-center text-white pl-5">
        Consult us on academic matters, and get the best advice you need.
        <img src="img/cntus.png" class="ml-5 mr-5 mb-3">
        <div class="text-center">   
          <a href="https://chat.whatsapp.com/2347087767178" class="btn btn-outline-light mb-5">Consult Us</a>
        </div>
      </h3>    
    </div>
</div>

<!-- ........Contact Us......... -->
<div class="container-fluid py-4">
  <div class="pt-5 container w-75">
      <h2 class="text-center myTextColor pb-2">Get In <span class="text-danger">Touch</span></h2>
      <hr class="styled">
      <h3 class="text-center myTextColor pt-4">Do you have question you'd love to ask?</h3>
      <br>
      <p class="text-center text-muted lead">Your feedbacks are very important to us as it can help us improve on our services. We'll also like to know how our tutors are doing.</p>    
  </div>
  <br>

  <div class="row container mx-auto pb-5">
    <div class="col-md-4">
    <a class="myTextColor lead font-weight-bold" href="tel:07087767178"><img class="shadow" src="img/icons/call.png">Give Us a Call</a>
    </div>
    <div class="col-md-4">
    <a class="text-success lead font-weight-bold" href="https://api.whatsapp.com/send?phone=2347087767178"><img class="shadow" src="img/icons/wa1.jpg" style="border-radius: 50%;">Chat Us on WhatsApp</a>
    </div>
    <div class="col-md-4">
    <a class="text-danger lead font-weight-bold" href="mailto:academiao.mail@gmail.com"><img class="shadow" src="img/icons/gm1.jpg" style="border-radius: 50%;">Send us a mail</a>
    </div>
  </div>
</div>


<!-- ...Back to Top... -->
<div class="text-right fixed-bottom mr-3 mb-3">
  <a href="#home"><img src="img/up.png"></a>
</div>


<!-- ......Pre-Footer...... -->
<div class="container-fluid orange py-5 shadow">

      <div class="text-center pb-3">
        <img height= 120px; width= 120px; style="border: 1px solid orange; border-radius: 70%;" src="img/showcase.jpg">
      </div>


  <div class="row p-5 shadow container mx-auto">

        <div class="col-lg-4 col-md-6 shadow text-center p-3 mb-3" style="color: #f4f4f4;">
          <h4 class="text-danger">About Academia O'</h4>
          <p class="lead">Academia O is an academic organization. We provide adequate support for all academic pursuits in the country. We focus majorly  on the logistics and the aids necessary to  bringing about succeess in all fields and levels of Education.</p>
          <p class="shadow text-white lead text-center py-4">Behind Adeline (AOM) school, <br> Off Fajol Hotel,<br> Obantoko, Abeokuta, Ogun State. <br> <a class="text-danger" href="tel:07087767178"><img src="img/icons/call.png"></a></p>
        </div>

        <div class="col-lg-4 addSHD col-md-6 mb-3 py-5 text-center" style="color: #f4f4f4;">
          <h4 class="text-danger">Quick links</h4>
          <hr class="footer">
          <ul class="list-unstyled lead">
            <li><a href="#mainMenu" class="text-white">Blog</a></li>
            <li><a href="#mainMenu" class="text-white">What We Do</a></li>
            <li><a href="#mainMenu" class="text-white">Get A Home Tutor</a></li>
            <li><a href="#mainMenu" class="text-white">Become An Academia O' Tutor</a></li>
            <li><a href="o.pages/contact-us.php" class="text-white">Contact Us</a></li>
            <li><a href="o.pages/about.php" class="text-white">About Academia O'</a></li>
            <li><a href="#consult" class="text-white">Consultancy</a></li>
            <li><a href="o.pages/terms-and-policies.php" class="text-white">Terms & Policies</a></li>
          </ul>
        </div>
            
        <div class="col-lg-4 col-md-8 cenLast shadow text-center p-3 mb-3" style="color: #f4f4f4;">
          <h4 class="text-danger">Contact Details</h4>
          <ul class="list-group container font-weight-bold text-center text-danger">
              <li class="lead shadow font-weight-bold list-group-item myTextColor">Opening days
                <li class="list-group-item shadow">Mondays-Fridays: 8:00am to 6:00pm</li>
                <li class="list-group-item shadow">Saturdays: 10:00am to 4:00pm</li>
                <li class="list-group-item shadow">Sundays: We are closed. You can always reach us on our social platforms below</li>
              </li>
            </ul>

          <div class="text-center pt-4">
            <p class="lead">Connect with us!</p>

            <a class="mx-5" href="http://www.facebook.com/academiaOfb"><img class="helpSocial" src="img/icons/fb1.jpg" style="border-radius: 50%;"></a>
						<a class="mx-5" href="https://api.whatsapp.com/send?phone=2347087767178"><img class="helpSocial" src="img/icons/wa1.jpg" style="border-radius: 50%;"></a>
						<a class="mx-5" href="mailto:academiao.mail@gmail.com"><img class="helpSocial" src="img/icons/gm1.jpg" style="border-radius: 50%;"></a>
          </div>
        </div>

  </div>

</div>


<!--.....Footer.....-->
<footer class="my-4">
      <p class="text-center text-muted lead font-weight-bold font-italic mb-0 pt-3 pb-3">&copy; Academia O' 2020. All rights reserved!</p>
    </div>
</footer>

    <script src="js/text-typing.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

    <script>

      function doTheChangeOver (){
          // alert (2323);
          
          document.querySelector(".to-tutor").addEventListener('click', event => {
            document.querySelector(".student-can-do-it").style = "display : none";
            document.querySelector(".tutor-can-do-it").style = "display : block";
          });

          document.querySelector(".to-student").addEventListener('click', event => {
            document.querySelector(".tutor-can-do-it").style = "display : none";
            document.querySelector(".student-can-do-it").style = "display : block";
          });
      }

  doTheChangeOver();

</script>

</body>
</html>