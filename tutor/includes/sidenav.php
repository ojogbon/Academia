	<!--/sidebar-menu-->
    <div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
								<ul id="menu" >
										<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
<!-- 										
                                    <li id="menu-academico" ><a href="addNewStaff.php"><i class="fa fa-user-plus nav_icon"></i><span>Add new Admin</span><div class="clearfix"></div></a></li>
                                    <li id="menu-academico" ><a href="addNewBlog.php"><i class="fa fa-plus nav_icon"></i><span>Add new Blog</span><div class="clearfix"></div></a></li>
									<li><a href="viewStudent.php"><i class="fa fa-user" aria-hidden="true"></i><span>View student </span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="viewTutor.php"><i class="fa fa-book"></i><span>View Tutor</span><div class="clearfix"></div></a></li>
                                    <li><a href="viewAdmin.php"><i class="fa fa-user" aria-hidden="true"></i>  <span>View Admin</span><div class="clearfix"></div></a></li>
                                    <li><a href="viewBlog.php"><i class="fa fa-list" aria-hidden="true"></i>  <span>View Blog</span><div class="clearfix"></div></a></li> -->
							      	</ul>
									</li>
								  </ul>
						   </div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>