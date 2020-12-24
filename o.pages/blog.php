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
            <h1 class="pt-5 mt-3 pb-0 mb-0 text-center myTextColor font-weight-bold">ACADEMIA <img class="mb-2" height= 35px; width= 35px; src="../img/favIcon.png">' Blog</h1>
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
                    <div class="modal-content-login">


                        <!-- ...................................................Login-Form........................................................... -->
                        <div id="formCasing" class="container-fluid p-5">
                            <div id="formCasing-sm" class="container w-50 orange border border-danger" style="border-top-right-radius:50px; border-bottom-left-radius:50px">
                            
                                <form action="login.php" method="GET" class="p-5">
                                <div class="container w-25 pb-3">
                                    <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg"></span>
                                </div>

                                <h3 class="text-center text-danger pb-3">Login to your account</h3>
                                <p class="lead text-center text-dark">Enter your email and password to access your account</p>
                                <br>

                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control" name="con_email" placeholder="Email">
                                    </div>
                                    <br>
                                    
                                    <div class="form-group">
                                        <input type="text" id="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <br>

                                    <input class="btn btn-lg btn-outline-danger btn-block" type="submit" name="login_button" value="Log in">

                                    <div class="row my-3 container">
                                        <div class="col-md-6">
                                            <input type="checkbox"><p class="d-inline text-dark">Remember me</p>
                                        </div>
                                            
                                        <div class="col-md-6">
                                            <a class="text-dark" href="reset-password.php">Forgot password?</a>
                                        </div>
                                    </div>

                                    <div class="row container">
                                        <div class="col-md-6">
                                            <a href="register-as-tutor.php" class="text-dark">Create an account</a>
                                        </div>
                                            
                                        <div class="col-md-6">
                                            <a class="text-left text-dark" href="help.php">Can't log in?</a>
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
                        <img src="../img/bg5.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 11, 2015</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">GET TO KNOW THE BEST UNIVERSITIES IN THE WORLD</h5>
                        <p class="text-muted lead">Top 10 Universities in the World <br> Top 10 African Universities <br> Top 6 Universities in Nigeria</p>
                            
                        <a href="blogSingle.php #bestUni" class="btn btn-outline-warning">Read full post</a>
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
                                    <small class="text-muted d-block pt-1">December 11, 2015</small>
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
                                    <small class="text-muted d-block pt-1">December 11, 2015</small>
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
                                    <small class="text-muted d-block pt-1">December 11, 2015</small>
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
                                    <small class="text-muted d-block pt-1">December 11, 2015</small>
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
            <h3 class="font-weight-bold mt-5 pt-5">Trending <span class="myTextColor">Posts</span></h3>
            <hr class="blog"> 
 
            <!-- .....contentFor_heading_cOlumn2..... -->
            <!-- .....col-3.... -->
            <div class="col-m-12 ml-lg-3">

                <div class="col-md-12">
                    <h4 class="text-muted float-left pr-3">01.</h4>
                    <a href="../o.pages/blogSingle.php" class="lead font-weight-bold text-dark tdn">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a>
                    <p class="lead pl-5">Posted by Admin <small class="text-muted d-block pt-0">December 11, 2015</small></p>
                </div>

                <div class="container">
                    <hr class="gradient">
                </div>

                <div class="col-md-12">
                    <h4 class="text-muted float-left pr-3">02.</h4>
                    <a href="../o.pages/blogSingle.php" class="lead font-weight-bold text-dark tdn">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a>
                    <p class="lead pl-5">Posted by Admin <small class="text-muted d-block pt-0">December 11, 2015</small></p>
                </div>

                <div class="container">
                    <hr class="gradient">
                </div>

                <div class="col-md-12">
                    <h4 class="text-muted float-left pr-3">03.</h4>
                    <a href="../o.pages/blogSingle.php" class="lead font-weight-bold text-dark tdn">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a>
                    <p class="lead pl-5">Posted by Admin <small class="text-muted d-block pt-0">December 11, 2015</small></p>
                </div>

                <div class="container">
                    <hr class="gradient">
                </div>

                <div class="col-md-12">
                    <h4 class="text-muted float-left pr-3">04.</h4>
                    <a href="../o.pages/blogSingle.php" class="lead font-weight-bold text-dark tdn">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a>
                    <p class="lead pl-5">Posted by Admin <small class="text-muted d-block pt-0">December 11, 2015</small></p>
                </div>

            </div>
            <!-- //.....contentFor_heading_cOlumn2..... -->

        </div> 
        <!-- //.....heading_cOlumn2..... -->

    </div>
    <!-- //.....heading_rowEnd..... -->

</div>


<!-- ...............Updates................. -->
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
                        <img src="../img/coding1.jpg" alt="" class="card-img radius-img" />
                    </div>
                
                </div>

                <!-- subColumn -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">

                    <div class="mb-5 pt-2">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 11, 2015</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">HOW TO READ AND ASSIMILATE FASTER: 10 TIPS</h5>
                        <p class="text-muted lead">Study in a quiet environment, <br> Take good diet and...
                        <br> 
                            <a href="blogSingle.php #bestUni" class="myTextColor tdn">Read more</a>
                        </p>
                    </div>
                
                </div>
            
            </div>


            <div class="row">

                <!-- .....col-2.... -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">
                    
                    <div class="card-header p-0 mb-5">
                        <img src="../img/coding1.jpg" alt="" class="card-img radius-img" />
                    </div>
                
                </div>

                <!-- subColumn -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">

                    <div class="mb-5 pt-2">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 11, 2015</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">HOW TO READ AND ASSIMILATE FASTER: 10 TIPS</h5>
                        <p class="text-muted lead">Study in a quiet environment, <br> Take good diet and...
                        <br> 
                            <a href="blogSingle.php #bestUni" class="myTextColor tdn">Read more</a>
                        </p>
                    </div>
                
                </div>
            
            </div>
            <!-- // ...Row Ends -->

            <div class="row">

                <!-- .....col-3.... -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">
                    
                    <div class="card-header p-0 mb-5">
                        <img src="../img/coding1.jpg" alt="" class="card-img radius-img" />
                    </div>

                </div>

                <!-- subColumn -->
                <div class="col-lg-6 col-md-6 col-sm-12 px-3">

                    <div class="mb-5 pt-2">
                        <div class="quote mt-1">
                            <img class="float-left" height= 80px; width= 80px; src="../img/showcase.jpg">
                            <div class="pt-2">Posted <span class="text-muted">by</span> Academia O <br> <span class="text-muted">December 11, 2015</span></div>
                        </div>

                        <h5 class="pt-4 font-weight-bold">HOW TO READ AND ASSIMILATE FASTER: 10 TIPS</h5>
                        <p class="text-muted lead">Study in a quiet environment, <br> Take good diet and...
                        <br> 
                            <a href="blogSingle.php #bestUni" class="myTextColor tdn">Read more</a>
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
                        <img src="../img/faqs.jpg" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">BUSINESS</a>
                </div>

                <hr class="gradient">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2 pt-2">
                    <div class="card-header p-0">
                        <img src="../img/fsh.jpg" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">FASHION</a>
                </div>

                <hr class="gradient">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2 pt-2">
                    <div class="card-header p-0">
                        <img src="../img/cook1.jpg" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">FOOD</a>
                </div>

                <hr class="gradient">

            <!-- ROW -->
                <div class="col-lg-12 col-md-8 col-sm-10 mx-auto mb-2 pt-2">
                    <div class="card-header p-0">
                        <img src="../img/hlt.jpg" height="170rem" alt="" class="card-img radius-img" />
                    </div>

                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">HEALTH</a>
                </div>

            </div>
            <!-- //.....contentFor_heading_cOlumn2..... -->

        </div> 
        <!-- //.....heading_cOlumn2..... -->

    </div>
    <!-- //.....heading_rowEnd..... -->

</div>



<!-- ...............Others................. -->
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
                <div class="col-lg-4 col-md-6 px-3">
                    
                    <div class="card-header p-0">
                        <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                    <h6 class="pt-4 font-weight-bold">Get to know the best Universties.</h6>
                        <img class="float-left mt-2" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="text-muted pt-2">By Admin <br> <span class="text-muted mb-3">December 11, 2015</span></small>
                        <br>                            
                        <a href="blogSingle.php #bestUni" class="tdn myTextColor">Read full post</a>
                    </div>
                    <hr>
                    <!-- .......................... -->
                    <div class="card-header p-0 mt-4">
                        <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                    <h6 class="pt-4 font-weight-bold">Get to know the best Universties.</h6>
                        <img class="float-left mt-2" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="text-muted pt-2">By Admin <br> <span class="text-muted mb-3">December 11, 2015</span></small>
                        <br>                            
                        <a href="blogSingle.php #bestUni" class="tdn myTextColor">Read full post</a>
                    </div>

                </div>

                <!-- .....col-2.... -->
                <div class="col-lg-4 col-md-6 px-3">
                    
                    <div class="card-header p-0">
                        <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                    <h6 class="pt-4 font-weight-bold">Get to know the best Universties.</h6>
                        <img class="float-left mt-2" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="text-muted pt-2">By Admin <br> <span class="text-muted mb-3">December 11, 2015</span></small>
                        <br>                            
                        <a href="blogSingle.php #bestUni" class="tdn myTextColor">Read full post</a>
                    </div>
                    <hr>
                    <!-- ......................... -->
                    <div class="card-header p-0 mt-4">
                        <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                    <h6 class="pt-4 font-weight-bold">Get to know the best Universties.</h6>
                        <img class="float-left mt-2" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="text-muted pt-2">By Admin <br> <span class="text-muted mb-3">December 11, 2015</span></small>
                        <br>                            
                        <a href="blogSingle.php #bestUni" class="tdn myTextColor">Read full post</a>
                    </div>

                </div>

                <!-- .....col-3.... -->
                <div class="col-lg-4 col-md-12 mx-auto px-3">
                    
                    <div class="card-header p-0">
                        <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                    <h6 class="pt-4 font-weight-bold">Get to know the best Universties.</h6>
                        <img class="float-left mt-2" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="text-muted pt-2">By Admin <br> <span class="text-muted mb-3">December 11, 2015</span></small>
                        <br>                            
                        <a href="blogSingle.php #bestUni" class="tdn myTextColor">Read full post</a>
                    </div>
                    <hr>
                    <!-- ........................ -->
                    <div class="card-header p-0 mt-4">
                        <img src="../img/bg.jpg" alt="" class="card-img radius-img" />
                    </div>

                    <div class="card-body p-0">
                    <h6 class="pt-4 font-weight-bold">Get to know the best Universties.</h6>
                        <img class="float-left mt-2" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="text-muted pt-2">By Admin <br> <span class="text-muted mb-3">December 11, 2015</span></small>
                        <br>                            
                        <a href="blogSingle.php #bestUni" class="tdn myTextColor">Read full post</a>
                    </div>

                </div>
              
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
                    <h5 class="text-muted font-weight-bold float-left pr-3">01.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">WHAT ARE YOU WAITING FOR?</a>
                    <p class="pl-5 mb-0 text-justify">
                        All your 3rd Term Topics will be treated skillfully and effectively by our experienced Tutors! FREE OF CHARGE!
                        <span class="myTextColor d-block">Click <a class="text-muted" href="https://chat.whatsapp.com/G06EmqGTBCd4aWq6sMhLoA">here</a> to register or participate</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 11, 2015</span></small>
                    </div>
                </div>

            <!-- ROW -->
                <div class="col-md-12 my-4">
                    <h5 class="text-muted font-weight-bold float-left pr-3">02.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">WHAT ARE YOU WAITING FOR?</a>
                    <p class="pl-5 mb-0 text-justify">
                        All your 3rd Term Topics will be treated skillfully and effectively by our experienced Tutors! FREE OF CHARGE!
                        <span class="myTextColor d-block">Click <a class="text-muted" href="https://chat.whatsapp.com/G06EmqGTBCd4aWq6sMhLoA">here</a> to register or participate</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 11, 2015</span></small>
                    </div>
                </div>

            <!-- ROW -->
                <div class="col-md-12">
                    <h5 class="text-muted font-weight-bold float-left pr-3">03.</h5>
                    <a href="../o.pages/blogSingle.php" class="font-weight-bold text-dark tdn">WHAT ARE YOU WAITING FOR?</a>
                    <p class="pl-5 mb-0 text-justify">
                        All your 3rd Term Topics will be treated skillfully and effectively by our experienced Tutors! FREE OF CHARGE!
                        <span class="myTextColor d-block">Click <a class="text-muted" href="https://chat.whatsapp.com/G06EmqGTBCd4aWq6sMhLoA">here</a> to register or participate</span>
                    </p>
                    <div class="pl-4">
                        <img class="float-left" height= 40px; width= 40px; src="../img/showcase.jpg">
                        <small class="">Posted by Admin <span class="text-muted d-block pt-0">December 11, 2015</span></small>
                    </div>
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