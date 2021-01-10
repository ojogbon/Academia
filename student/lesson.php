<?php 

  include "../controllers/central.php";
  include "../controllers/Student.php";

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Student | Complete Process</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <?php include "./includes/head.php";?>
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"> Complete Process</i></li>
            </ol>
<!--four-grids here-->
	
<!--grid-->
<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">	Days per week</label>
              <input class="form-control" type="number" name="daysperweek" placeholder="Days per week..." required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Hours Per Day</label>
              <input type="text" class="form-control" name="hoursperday" placeholder="Hours Per Day..." required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">From What time</label>
              <input type="text" class="form-control" name="fromwhattime" placeholder="From What time" required="">
            </div>

            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">How long(hours)</label>
              <input type="number" class="form-control" name="howlong" placeholder="How long..." required="">
            </div>
            
           
             <div class="clearfix"> </div>
             
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Start When</label>
              <input type="time" class="form-control" name="startwhen" placeholder="Start When..." required="">
            </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Intended Tutorial location</label>
              <input type="text" name="intendedtutoriallocation" placeholder="!ntended Tutorial location" required="">
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">	Tutorial location</label>
              <input type="text" name="tutoriallocation" placeholder="Relationship With Learner" required="">
            </div>
            <div class="clearfix"> </div>
            
            </div>
             <div class="clearfix"> </div>

             <div class="vali-form">
            
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Nearest Bus Stop</label>
              <input type="text" name="nearestbusstop" placeholder="Nearest Bus Stop" required="">
            </div>
            <div class="clearfix"> </div>

            
            </div>
             <div class="clearfix"> </div>
          
            </div>
          
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="saveitforme" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
          <?php 
          
              if(isset($_POST["saveitforme"])){
                      
                        $daysperweek = $_POST["daysperweek"];
                        $hoursperday = $_POST["hoursperday"];
                        $fromwhattime = $_POST["fromwhattime"];
                        $nearestbusstop = $_POST["nearestbusstop"];
                        $howlong = $_POST["howlong"]; 
                        $startwhen = $_POST["startwhen"];
                        $intendedtutoriallocation = $_POST["intendedtutoriallocation"];
                        $tutoriallocation = $_POST["tutoriallocation"];


                        $key = "1234567opiuyt";
                     
                        saveMoreStudentInfo_($student,$key, $student_Online_id, $daysperweek, $hoursperday, $fromwhattime,$howlong
                        ,$startwhen,$intendedtutoriallocation,$tutoriallocation,$nearestbusstop);
                   
              }
          
          ?>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2021 | Design by  <a href="3" target="_blank">W</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<?php  include "./includes/sidenav.php"; ?>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>