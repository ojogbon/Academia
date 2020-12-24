<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="AI Group Developers' - Adejoju Jeremiah">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia O</title>
    <link rel="shortcut icon" href="../img/favIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- ................Fonts...................... -->
    <link rel="stylesheet" href="fonts/Trebuchet MS/Trebuchet-MS.ttf">
</head>



<body>
<!-- ...........................Navbar Section.................................. -->
<div class="orange py-5"  style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('../img/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
<!-- bRAND NAMe -->
<div class="container-fluid pt-5"  id="home">
  <p class="display-3 pt-5 pb-0 mb-0 text-center myTextColor font-weight-bold"><img class="mb-3" height= 70px; width= 70px; src="../img/favIcon.png">Academia O</p>
  <div id="motto" class="container w-25 text-center lead text-danger font-italic h6 font-weight-bold">...aid for excellence!</div>
</div>
<!-- .....nav Item Links...... -->
<nav class="navbar navbar-expand-lg navbar-light mt-5 pb-5">
    <div class="container">

      <button id="navButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
         
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navList" class="nav navbar-nav navbar-right mx-auto ul-nav-bl lead py-3">
          <!-- Triggers The Modal -->
          <li class="nav-item mx-5"><a id="myBtn" class="nav-link font-weight-bold text-danger" href="#form">LOGIN</a></li>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content-login">


                <!-- ...................................................Login-Form........................................................... -->
                <div id="formCasing" class="container-fluid p-5">
                    <div id="formCasing-sm" class="container w-50 orange border border-danger" style="border-top-right-radius:50px; border-bottom-left-radius:50px">
                      
                        <form action="login.php" method="GET" class="p-5 col-12 shadow">
                          <div class="formContent">
                          
                          <div class="container imgLoginClose w-25 pb-3 text-center">
                            <span class="text-center close-login"><img height= 70px; width= 70px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg"></span>
                          </div>

                          <h3 class="text-center text-danger pb-3">Login to your account</h3>
                          <p class="lead text-center text-dark">Enter your email and password to access your account</p>
                          <br>

                            <div class="form-group">
                                <input type="email" id="email" class="form-control shadow" name="con_email" placeholder="Email">
                            </div>
                            <br>
                            
                            <div class="form-group shadow">
                                <input type="text" id="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br>

                            <input class="btn btn-lg btn-outline-danger btn-block shadow" type="submit" name="login_button" value="Log in">

                            <div id="formFooter" class="row my-3 container">
                                <div class="col-md-6">
                                    No account yet?
                                </div>
                                    
                                <div class="col-md-6">
                                    <a href="register-as-tutor.php" class="text-left text-dark">Register here!</a>
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
                          
                          </div>
                        </form>

                    </div>
                </div>

            </div>
          </div>
          </li>
          
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold text-danger" href="../o.pages/about.php">ABOUT</a></li>
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold text-danger" href="../o.pages/FAQs.php">FAQs</a></li>
          <li class="nav-item mx-5"><a class="nav-link font-weight-bold text-danger" href="../o.pages/consultancy.php">CONSULTANCY</a></li>
        </ul>
      </div>
        
    </div>
</nav>
</div>