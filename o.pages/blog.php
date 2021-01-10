<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="AI Group Developers' - Adejoju Jeremiah">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Academia O</title>
    <link rel="shortcut icon" href="../img/favIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- ................Fonts...................... -->
    <link rel="stylesheet" href="fonts/Trebuchet MS/Trebuchet-MS.ttf">
</head>


<body>
<!-- ...........................Navbar Section.................................. -->
<div class="orange py-3 row shadow"  style="background-image: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)), url('../img/bg4.jpg'); background-size: cover; background-repeat: no-repeat;">
<!-- bRAND NAMe -->
    <div class="col-md-6">
        <div class="container-fluid"  id="home">
            <a href="../index.php"><h1 class="pt-5 mt-3 pb-0 mb-0 text-center myTextColor font-weight-bold">ACADEMIA <img class="mb-2" height= 35px; width= 35px; src="../img/favIcon.png">' Blog</h1></a>
            <div id="motto" class="container w-50 text-center lead text-danger font-italic h6 font-weight-bold">...aid for excellence!</div>
        </div>
    </div>

<!-- .....nav Item Links...... -->
    <div class="col-md-6">
        <nav class="navbar navbar-expand-lg navbar-light mt-5 pb-5">
            <div class="container">

            <button id="navButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="navList" class="nav navbar-nav navbar-right mx-auto ul-nav-bl lead py-3">
                 <!-- Triggers The Modal -->
                <li class="nav-item mx-3"><a id="myBtn" class="nav-link font-weight-bold text-danger" href="#form">LOGIN</a></li>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div id="mcl" class="modal-content-login">

                    <!-- ...................................................Login-Form........................................................... -->
                    <div id="formCasing" class="container-fluid p-5">
                        <div id="formCasing-sm" class="container w-50 orange border border-danger" style="border-top-right-radius:50px; border-bottom-left-radius:50px">
                            
                            <form action="login.php" method="GET" class="p-5 col-12 shadow">
                                <div class="formContent">
                                
                                <div class="container imgLoginClose w-25 pb-3 text-center">
                                <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg"></span>
                                </div>

                                <h3 class="text-center text-danger pb-3">Login to your account</h3>
                                <p class="lead dn text-center text-dark">Enter your email and password to access your account</p>
                                <br>

                                <div class="form-group">
                                    <input type="email" id="email" class="form-control shadow" name="email" placeholder="Email">
                                </div>
                                <br>
                                
                                <div class="form-group shadow">
                                    <input type="text" id="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <br>

                                <input class="btn btn-lg btn-outline-danger btn-block shadow" type="submit" name="login_button" value="Log in">

                                <div id="formFooter" class="row my-3 container">
                                    <div class="col-md-6 pad">
                                        No account yet?
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <a href="register.php" class="text-left text-dark">Register here!</a>
                                    </div>
                                </div>

                                <div id="formFooter" class="row container dib">
                                    <div class="col-md-6 pad">
                                        <a class="text-dark" href="reset-password.php">Forgot password?</a>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <a class="text-left text-dark" href="../o.pages/help.php">Can't log in?</a>
                                    </div>
                                </div>
                                
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                </div>
                </li>
                
                <li class="nav-item mx-3"><a class="nav-link font-weight-bold text-danger" href="../o.pages/about.php">ABOUT</a></li>
                <li class="nav-item mx-3"><a class="nav-link font-weight-bold text-danger" href="../o.pages/FAQs.php">FAQs</a></li>
                <li class="nav-item mx-3"><a class="nav-link font-weight-bold text-danger" href="../o.pages/contact-us.php">CONTACT</a></li>
                </ul>
            </div>
                
            </div>
        </nav>
    </div>

    <!-- page detail - active -->
    <div class="breadcrumb-agile">
		<nav aria-label="breadcrumb text-center">
			<ol class="breadcrumb m-0 text-center">
				<li class="breadcrumb-item text-center">
					<a class="myTextColor tdn h4" href="../index.php">Home</a>
				</li>
				<li class="breadcrumb-item text-danger h5" aria-current="page">Blog</li>
			</ol>
		</nav>
	</div>

</div>



<!-- ...............Recent News................. -->
<div class="container">

    <!-- .....heading..... -->
    <div class="row">

        <!-- ...heading_cOlumn1... -->
       <div class="col-lg-8 col-md-12">
            <h3 class="font-weight-bold mt-5 pt-5">RECENT <span class="myTextColor">NEWS</span></h3>
            <hr class="blog">
       
            <!-- .....contentFor_heading_cOlumn1..... -->
            <div class="row">
                
                <!-- .....col-1.... -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3 mb-5">
                    
                    <div class="card-header p-0">
                        <img src="../img/jamb-nimc.jpeg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Admin <br> <span class="text-danger">December 29, 2020</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold myTextColor">Prospective candidates of the 2021 UTME will have to link their applications to their National Identification Number (NIN).</h5>
                        <p class="lead">This is coming after the Joint Admissions and Matriculation Board (JAMB) and the National Identification and Management Commission (NIMC) entered into a partnership to have the NIN as part of JAMB's registration criteria.</p>
                            
                        <a href="#" class="btn btn-outline-warning">Read full post</a>
                    </div>

                </div>

                <!-- .....col-2.... -->
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <!-- ...subRow-1... -->
                    <div class="row">
                        <div class="col-6">
                            <div class="card-header p-0 float-left">
                                <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card-body p-0">
                                <a href="" class="myTextColor tdn d-block">There are many variations posted</a>
                                <img class="float-left mt-2" height= 45px; width= 45px; src="../img/showcase.jpg">
                                <div class="inf pt-2">
                                    <small class="pt-5">by Admin</small>
                                    <small class="text-muted d-block pt-1">December 30, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ...subRow-2... -->
                    <div class="row my-4">
                        <div class="col-6">
                            <div class="card-header p-0 float-left">
                                <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card-body p-0">
                                <a href="" class="myTextColor tdn d-block">There are many variations posted</a>
                                <img class="float-left mt-2" height= 45px; width= 45px; src="../img/showcase.jpg">
                                <div class="inf pt-2">
                                    <small class="pt-5">by Admin</small>
                                      <small class="text-muted d-block pt-1">December 30, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ...subRow-3... -->
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="card-header p-0 float-left">
                                <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card-body p-0">
                                <a href="" class="myTextColor tdn d-block">There are many variations posted</a>
                                <img class="float-left mt-2" height= 45px; width= 45px; src="../img/showcase.jpg">
                                <div class="inf pt-2">
                                    <small class="pt-5">by Admin</small>
                                    <small class="text-muted d-block pt-1">December 30, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ...subRow-4... -->
                    <div class="row">
                        <div class="col-6">
                            <div class="card-header p-0 float-left">
                                <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card-body p-0">
                                <a href="" class="myTextColor tdn d-block">There are many variations posted</a>
                                <img class="float-left mt-2" height= 45px; width= 45px; src="../img/showcase.jpg">
                                <div class="inf pt-2">
                                    <small class="pt-5">by Admin</small>
                                    <small class="text-muted d-block pt-1">December 30, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div>
                <!-- //.....cOlumn2..... -->
            </div>
            <!-- //.....contentFor_heading_cOlumn1..... -->


        </div>
        <!-- //...heading_cOlumn1... -->




        <!-- .....heading_cOlumn2..... -->
        <div class="col-lg-4 col-md-12">
            <h3 class="font-weight-bold mt-5 pt-5">Other <span class="myTextColor">Posts</span></h3>
            <hr class="blog"> 
 
            <!-- .....contentFor_heading_cOlumn2..... -->
            <!-- .....col-3.... -->
            <div class="col-m-12 ml-lg-3">

                <div class="col-md-12">
                    <h4 class="text-warning float-left pr-3">01.</h4>
                    <div class="text-left">
                        <a href="https//www.currentschoolnews.com/job/federal-government-recruitment/" class="lead font-weight-bold text-dark tdn">Fed Govt. Recruitment 2020/2021 Application Portal.</a>
                    </div>
                    <p class="lead pl-5 myTextColor">Posted by Admin <small class="text-danger d-block pt-0">December 29, 2020</small></p>
                </div>

                <div class="container">
                    <hr class="gradient">
                </div>

                <div class="col-md-12">
                    <h4 class="text-warning float-left pr-3">02.</h4>
                    <div class="text-left">
                        <a href="https://www.currentschoolnews.com/news/n-power-profile-npvn-npower-gov-ng-login/" class="lead font-weight-bold text-dark tdn">N-power Profile Login with Your Email Address.</a>
                    </div>
                    <p class="lead pl-5 myTextColor">Posted by Admin <small class="text-danger d-block pt-0">December 28, 2020</small></p>
                </div>

                <div class="container">
                    <hr class="gradient">
                </div>

                <div class="col-md-12">
                    <h4 class="text-warning float-left pr-3">03.</h4>
                    <div class="text-left">
                        <a href="https://www.myschoolgist.com/ng/airtel-nigeria-job-recruitment/" class="lead font-weight-bold text-dark tdn">Airtel Nigeria Job Recruitment.</a>
                    </div>
                    <p class="lead pl-5 myTextColor">Posted by Admin <small class="text-danger d-block pt-0">December 28, 2020</small></p>
                </div>

                <div class="container">
                    <hr class="gradient">
                </div>

                <div class="col-md-12">
                    <h4 class="text-warning float-left pr-3">04.</h4>
                    <div class="text-left">
                        <a href="../o.pages/blogSingle.php" class="lead font-weight-bold text-dark tdn">Schools Whose Post UTME Forms are Out 2020/2021.</a>
                    </div>
                    <p class="lead pl-5 myTextColor">Posted by Admin <small class="text-danger d-block pt-0">December 12, 2020</small></p>
                </div>

            </div>
            <!-- //.....contentFor_heading_cOlumn2..... -->

        </div> 
        <!-- //.....heading_cOlumn2..... -->

    </div>
    <!-- //.....heading_rowEnd..... -->

</div>



<!-- ...............UPDATES................. -->
<div class="container mb-5">

    <!-- .....heading..... -->
    <div class="row">

        <!-- ...heading_cOlumn1... -->
       <div class="col-lg-8 col-md-12">
            <h3 class="font-weight-bold mt-5 pt-5">UP<span class="myTextColor">DATES</span></h3>
            <hr class="blog">
       
            <!-- .....contentFor_heading_cOlumn1..... -->
            <div class="row">
                
                <!-- .....col-1.... -->
                <div class="col-lg-6 px-3">
                    
                    <div class="card-header p-0 mt-0">
                        <img src="../img/neco.jpg" alt="" class="card-img radius-img" height="248rem" />
                    </div>

                    <div class="card-body p-0 text-center">
                        <h2 class="animate">NECO GCE 2020</h2>
                        <h3 class="text-danger pb-2">Registration</h3>
                        <p class="shadow text-white bg-danger lead"><span class="orange mr-5 p-2">Deadline:</span> January 23, 2021.</p>
            
                        <div class="container w-50">
                            <a href="https://chat.whatsapp.com/2347087767178" class="shadow btn btn-block orange text-white mb-5">Register!</a>
                        </div>
                    </div>
                    <hr>
                    <!-- .......................... -->
                    <div class="card-header p-0 mt-4">
                        <img src="../img/utme.png" alt="" class="card-img radius-img" height="233rem" />
                    </div>

                    <div class="card-body p-0">
                        <h4 class="pt-4 pl-4 font-weight-bold myTextColor">Struggling with academics?</h4>
                        <p class="h5 container text-muted">
                            Let our competent tutors help you out. Simply click
                            <a href="../o.pages/get-a-tutor.php" class="myTextColor">here</a>
                            to get one.
                        </p>
                        <div class="quote ml-3 mt-1">
                            <img class="float-left" height= 60px; width= 50px; src="../img/showcase.jpg">
                            <div class="pt-2"><span class="text-muted">By</span> Admin <br> <span class="text-muted">December 29, 2020</span></div>
                        </div>                          
                    </div>

                </div>

                <!-- .....col-2.... -->
                <div class="col-lg-6 px-3">
                    
                    <div class="card-header p-0">
                        <img src="../img/jamb.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0 text-center">
                        <h2 class="animate">JAMB-UTME CLASS</h2>
                        <h3 class="text-danger pb-2">Tutorial</h3>
                        <p class="shadow text-white bg-danger lead"><span class="bg-info mr-5 p-2">Commences:</span> January 9, 2021.</p>
                        
                        <div class="container w-50">
                            <a href="https://chat.whatsapp.com/2347087767178" class="shadow btn btn-block orange text-white mb-5">Join now!</a>
                        </div>
                    </div>
                    <hr>
                    <!-- ......................... -->
                    <div class="card-header p-0 mt-4">
                        <img src="../img/onlineClass.jpg" alt="" class="card-img radius-img"  height="250rem"/>
                    </div>

                    <div class="card-body p-0">
                        <h5 class="pt-4 pl-4 font-weight-bold myTextColor">A day with a good teacher is better than a thousand days of a diligent student.</h5>
                        <p class="h5 container text-muted">
                            Simply click
                            <a href="../o.pages/get-a-tutor.php" class="myTextColor">here</a>
                            to know more.
                        </p>
                        <div class="quote ml-3 mt-1">
                            <img class="float-left" height= 60px; width= 50px; src="../img/showcase.jpg">
                            <div class="pt-2"><span class="text-muted">By</span> Admin <br> <span class="text-muted">December 29, 2020</span></div>
                        </div> 
                    </div>

                </div>
                <!-- col-lg-4 col-md-12 mx-auto px-3 -->
            </div>
            <!-- //.....contentFor_heading_cOlumn1..... -->

        </div>
        <!-- //...heading_cOlumn1... -->


        <!-- .....heading_cOlumn2..... -->
        <div class="col-lg-4 col-md-12 stickyTop">
            <h3 class="font-weight-bold mt-5 pt-5">Ad<span class="myTextColor">vert</span></h3>
            <hr class="blog"> 
 
            <!-- .....contentFor_heading_cOlumn2..... -->
            <!-- .....col-3.... -->
            <div class="col-md-12">

            <!-- ROW -->
                <div class="col-md-12">
                    <h5 class="text-warning font-weight-bold float-left pr-3">01.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold myTextColor tdn">WHAT ARE YOU WAITING FOR?</a>
                    <p class="pl-5 mb-0 text-justify">
                        All your 2nd Term Topics will be treated skillfully and effectively by our experienced Tutors! FOR JUST A TOKEN!
                        <span class="myTextColor d-block">Click <a class="text-danger" href="https://chat.whatsapp.com/2347087767178">here</a> to register.</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 30, 2020</span></small>
                    </div>
                </div>

            <!-- ROW -->
                <div class="col-md-12 my-4">
                    <h5 class="text-warning font-weight-bold float-left pr-3">02.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold myTextColor tdn">NECO GCE 2020!!!</a>
                    <p class="pl-5 mb-0 text-justify">
                        Do you know that the Neco GCE registration closes January 23rd? Register now!
                        <span class="myTextColor d-block">Click <a class="text-danger" href="https://chat.whatsapp.com/2347087767178">here</a> to register.</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 30, 2020</span></small>
                    </div>
                </div>

            <!-- ROW -->
                <div class="col-md-12">
                    <h5 class="text-warning font-weight-bold float-left pr-3">03.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold myTextColor tdn">HURRY! HURRY!! HURRY!!!</a>
                    <p class="pl-5 mb-0 text-justify">
                        Our JAMB-UTME classes commence by January 9, 2020. Don't lag behind, register here now!
                        <span class="myTextColor d-block">Click <a class="text-danger" href="https://chat.whatsapp.com/2347087767178">here</a> to register or participate</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 30, 2020</span></small>
                    </div>
                </div>

            <!-- ROW -->
                <div class="col-md-12 my-4">
                    <h5 class="text-warning font-weight-bold float-left pr-3">04.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold myTextColor tdn">STAY AHEAD OF OTHERS IN YOUR SCHOOL!!!</a>
                    <p class="pl-5 mb-0 text-justify">
                        Join the best Citadel of tutelage, and stay ahead of your class. Register here!
                        <span class="myTextColor d-block">Click <a class="text-danger" href="https://chat.whatsapp.com/2347087767178">here</a> to register.</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 30, 2020</span></small>
                    </div>
                </div>

            </div>
            <!-- //.....contentFor_heading_cOlumn2..... -->

        </div> 
        <!-- //.....heading_cOlumn2..... -->

    </div>
    <!-- //.....heading_rowEnd..... -->

</div>



<!-- ...............ARTICLES................. -->
<div class="container">

    <!-- .....heading..... -->
    <div class="row">

        <!-- ...heading_cOlumn1... -->
       <div class="col-lg-8 col-md-12">
            <h3 class="font-weight-bold mt-5 pt-5">ART<span class="myTextColor">ICLES</span></h3>
            <hr class="blog">
       
            <!-- .....contentFor_heading_cOlumn1..... -->
            <div class="row">
                
                <!-- .....col-1.... -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">
                    
                    <div class="card-header p-0 mb-5">
                        <img src="../img/ssce.png" alt="" class="card-img radius-img" />
                    </div>
                
                </div>

                <!-- subColumn -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">

                    <div class="mb-5 pt-2">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 9, 2020</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">HOW TO READ AND ASSIMILATE FASTER</h5>
                        <p class="text-muted lead">Study in a quiet environment, <br> Take good diet and not junks...
                        <br> 
                            <a href="#" class="myTextColor tdn">Read more</a>
                        </p>
                    </div>
                
                </div>
            
            </div>


            <div class="row">

                <!-- .....col-2.... -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">
                    
                    <div class="card-header p-0 mb-5">
                        <img src="../img/faqs.png" alt="" class="card-img radius-img" />
                    </div>
                
                </div>

                <!-- subColumn -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">

                    <div class="mb-5 pt-2">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 14, 2020</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">HOW TO READ AND ASSIMILATE FASTER: 10 TIPS</h5>
                        <p class="text-muted lead">Scan the material for keywords before studying, <br> Create an outline of the material before studying...
                        <br> 
                            <a href="#" class="myTextColor tdn">Read more</a>
                        </p>
                    </div>
                
                </div>
            
            </div>
            <!-- // ...Row Ends -->

            <div class="row">

                <!-- .....col-3.... -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">
                    
                    <div class="card-header p-0 mb-5">
                        <img src="../img/exam.jpg" alt="" class="card-img radius-img" />
                    </div>

                </div>

                <!-- subColumn -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">

                    <div class="mb-5 pt-2">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 23, 2020</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">HREAD AND ASSIMILATE FASTER WITH THESE 10 TIPS</h5>
                        <p class="text-muted lead">Teach yourself by reading the material out, <br> Take notes or make a new note...
                        <br> 
                            <a href="#" class="myTextColor tdn">Read more</a>
                        </p>
                    </div>

                </div>

            </div>
            <!-- // ...Row Ends -->
        
        </div>
        <!-- //...heading_cOlumn1... -->


        <!-- .....heading_cOlumn2..... -->
        <div class="stickyTop col-lg-4 mx-auto">
            <h3 class="font-weight-bold mt-5 pt-5">Top <span class="myTextColor">Categories</span></h3>
            <hr class="blog"> 
 
            <!-- .....contentFor_heading_cOlumn2..... -->
            <!-- .....col-3.... -->
            <div class="col-md-12">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2">
                    <div class="card-header p-0">
                        <img src="../img/bg4.jpg" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="#" class="font-weight-bold text-dark tdn">PAST QUESTIONS</a>
                </div>

                <hr class="gradient">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2 pt-2">
                    <div class="card-header p-0">
                        <img src="../img/utmep.jpeg" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="#" class="font-weight-bold text-dark tdn">JAMB(UTME) & POST UTME</a>
                </div>

                <hr class="gradient">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2 pt-2">
                    <div class="card-header p-0">
                        <img src="../img/teach-more1.png" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="#" class="font-weight-bold text-dark tdn">COMPETITION</a>
                </div>

                <hr class="gradient">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2 pt-2">
                    <div class="card-header p-0">
                        <img src="../img/use1.png" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="#" class="font-weight-bold text-dark tdn">SCHOLARSHIP</a>
                </div>

            </div>
            <!-- //.....contentFor_heading_cOlumn2..... -->

        </div> 
        <!-- //.....heading_cOlumn2..... -->

    </div>
    <!-- //.....heading_rowEnd..... -->

</div>



<!-- Pagination -->
<nav>
    <ul class="pagination justify-content-center mb-5">
        <li class="page-item disabled"><a class="page-link" href="#url">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#url">1</a></li>
        <li class="page-item"><a class="page-link" href="#url">2</a></li>
        <li class="page-item"><a class="page-link" href="#url">3</a></li>
        <li class="page-item"><a class="page-link" href="#url">4</a></li>
        <li class="page-item"><a class="page-link" href="#url">5</a></li>
        <li class="page-item"><a class="page-link" href="#url">Next</a></li>
    </ul>
</nav>

<?php require_once '../includes/footer.php'; ?>