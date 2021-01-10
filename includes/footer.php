<!-- ...Back to Top... -->
<div class="text-right fixed-bottom mr-3">
  <a href="#home"><img src="../img/up.png"></a>
</div>


<!-- ......Pre-Footer...... -->
<div class="container-fluid orange py-5 shadow">

      <div class="text-center pb-3">
        <img height= 120px; width= 120px; style="border: 1px solid orange; border-radius: 70%;" src="../img/showcase.jpg">
      </div>

  <div class="row p-5 shadow container mx-auto">

        <div class="col-lg-4 col-md-6 shadow text-center p-3 mb-3" style="color: #f4f4f4;">
          <h4 class="text-danger">About Academia O'</h4>
          <p class="lead">Academia O is an academic organization. We provide adequate support for all academic pursuits in the country. We focus majorly  on the logistics and the aids necessary to  bringing about succeess in all fields and levels of Education.</p>
          <p class="shadow text-white lead text-center py-4">Behind Adeline (AOM) school, <br> Off Fajol Hotel,<br> Obantoko, Abeokuta, Ogun State. <br> <a class="text-danger" href="tel:07087767178"><img src="../img/icons/call.png"></a></p>
        </div>

        <div class="col-lg-4 addSHD col-md-6 mb-3 py-5 text-center" style="color: #f4f4f4;">
          <h4 class="text-danger">Quick links</h4>
          <hr class="footer">
          <ul class="list-unstyled lead">
            <li><a href="../index.php" class="animate">Home</a></li>
            <li><a href="../o.pages/blog.php" class="text-white">Blog</a></li>
            <li><a href="../o.pages/what-we-do.php" class="text-white">What We Do</a></li>
            <li><a href="../o.pages/get-a-tutor.php" class="text-white">Get A Tutor</a></li>
            <li><a href="../o.pages/become-a-tutor.php" class="text-white">Become A Tutor</a></li>
            <li><a href="../o.pages/contact-us.php" class="text-white">Contact Us</a></li>
            <li><a href="../o.pages/about.php" class="text-white">About Academia O'</a></li>
            <li><a href="../o.pages/terms-and-policies.php" class="text-white">Terms & Policies</a></li>
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

            <a class="mx-5" href="http://www.facebook.com/academiaOfb"><img class="helpSocial" src="../img/icons/fb1.jpg" style="border-radius: 50%;"></a>
						<a class="mx-5" href="https://api.whatsapp.com/send?phone=2347087767178"><img class="helpSocial" src="../img/icons/wa1.jpg" style="border-radius: 50%;"></a>
						<a class="mx-5" href="mailto:academiao.mail@gmail.com"><img class="helpSocial" src="../img/icons/gm1.jpg" style="border-radius: 50%;"></a>
          </div>
        </div>

  </div>

</div>


<!--.....Footer.....-->
<footer class="my-4">
      <p class="text-center text-muted lead font-weight-bold font-italic mb-0 pt-3 pb-3">&copy; Academia O' 2020. All rights reserved!</p>
    </div>
</footer>

    <script src="../js/text-typing.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/index.js"></script>

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