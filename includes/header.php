    <link rel="shortcut icon" href="../img/favIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/owl.theme.css" type="text/css" media="all">

    <!-- ................Fonts...................... -->
      <!-- Trebuchet MS -->
      <link rel="stylesheet" href="../fonts/Trebuchet MS/Trebuchet-MS.ttf">

      <style>
        .tutor-can-do-it {
              display:none;
        }

        .tutor-can-do-it , .student-can-do-it{
          padding: 2em;

        }

        .changePane {
    margin-top: 10px;
    border: 1px solid #fff;
    padding: 2px;
    background-color: #fff;
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    box-shadow: 1px 1px 1px 1px;
    cursor: pointer;
        }
      </style>
</head>



<body>
<!-- .................Navbar Section.................. -->
<div class="py-5" style="background-image: linear-gradient(rgba(0,0,0,0.95), rgba(0,0,0,0.95)), url('../img/bg.jpg'); background-size: cover; background-repeat: no-repeat;">

<!-- Brand -->
<div id="home" class="container-fluid pt-5">
  <p id="text" class="display-2 brand pt-3 pb-0 mb-0 text-center myTextColor font-weight-bold"><img class="mb-3 mr-3" height= 90px; width= 90px; src="../img/favIcon.png"> A</p>
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
          <li class="nav-item mx-5"><a id="myBtn" class="nav-link font-weight-bold h4 text-danger" href="#formCasing">LOGIN</a></li>

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
                            <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg"></span>
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
                                    <a href="./get-a-tutor.php" class="text-left text-dark">Register here!</a>
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
                            <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg"></span>
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
                                    <a href="./become-a-tutor.php" class="text-left text-dark">Register here!</a>
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
          
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold h4 text-danger" href="../o.pages/about.php">ABOUT</a></li>
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold h4 text-danger" href="../o.pages/FAQs.php">FAQs</a></li>
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold h4 text-danger" href="../o.pages/blog.php">BLOG</a></li>
        </ul>
      </div>
        
    </div>
</nav>