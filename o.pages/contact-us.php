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
    <title>Contact Us | Academia O</title>
    
    <?php require_once '../includes/header.php'; ?>
    
    <!-- page detail - active -->
    <div class="text-center">
      <div id="current-page-detail" class="border border-warning rounded shadow container-fluid w-25">
        <a class="myTextColor tdn text-center h4" href="../index.php">Home</a>
        <div class="animate d-inline"> >>> </div>
        <a class="myTextColor tdn text-danger text-center h4" href="#">Contact</a>
      </div>
    </div>
   
</div>

<!-- ............................................Contact-Us Form.................................. -->
<div class="container-fluid pb-5 mb-5">
  <div class="container">
    <p class="display-3 ct text-center text-danger mt-5 pt-5" id="Contact">Contact <span class="myTextColor">Us</span></p>
    <hr class="styled mb-3">

    <div class="row py-5 shadow">
        <div class="col-md-6 mt-3">
          <p class="lead font-weight-bold shadow text-danger border rounded text-center py-4">Behind Adeline Ogunlade Memorial (AOM) school, <br> Off Fajol Hotel, Obantoko, <br> Abeokuta, Ogun State. <br> <a class="text-danger" href="tel:07087767178"><img src="../img/icons/call.png">(+234) 708 776 7178</a> <br> <a class="text-danger" href="tel:08137579913"><img src="../img/icons/call.png">(+234) 813 757 9913</a></p>
        </div>

        <div class="col-md-6">
            <ul class="list-group container font-weight-bold text-center text-danger">
              <li class="lead shadow font-weight-bold list-group-item myTextColor">Opening days
                <li class="list-group-item shadow">Mondays-Fridays: 8:00am to 6:00pm</li>
                <li class="list-group-item shadow">Saturdays: 10:00am to 4:00pm</li>
                <li class="list-group-item shadow">Sundays: We are closed. You can always reach us on our social platforms.</li>
              </li>
            </ul>
        </div>
    </div>

  </div>

  <div class="container cf shadow w-75 my-5 p-5 orange border border-danger myContainer" style="border-top-right-radius:50px; border-bottom-left-radius:50px">
    <form action="" method="POST" enctype="text/plain" class="mb-5 shadow p-3 border border-warning rounded">

        <div class="text-center pb-3">
          <img height= 100px; width= 100px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg">
        </div>

        <p class="h1 fontStyle text-danger text-center pb-3 frd">What's your message?</p>
        <div class="form-group border border-danger rounded">
          <input type="text" id="fullName" class="form-control font-italic shadow" name="con_fullName" placeholder="Enter your full name..." required>
        </div>

        <br>

        <div class="form-group border border-danger rounded">
          <input type="text" id="phoneNumber" class="form-control font-italic shadow" name="phone-number" placeholder="Enter your phone number...">
        </div>
        
        <br>

        <div class="form-group">
          <div class="border border-danger rounded">
            <input type="email" id="email" class="form-control font-italic shadow" name="con_email" placeholder="Enter your email here..." required>
          </div>  
          <small class="text-white">We respect your privacy, and we promise not share your email with a third party or spam you.</small>
        </div>
        
        <div class="form-group border border-danger rounded">
          <input type="text" id="subject" class="form-control font-italic shadow" name="subject" placeholder="Subject:" required>
        </div>
        
        <br>
        <div class="form-group border border-danger rounded">
          <textarea name="message" id="" class="form-control font-italic shadow" rows="5" placeholder="Your Message..." required></textarea>
        </div>
        
        <br>
        <input type="submit" value="Send Message" class="btn btn-outline-danger shadow btn-block">

    </form>
  </div>
</div>
</div>

<?php require_once '../includes/footer.php'; ?>