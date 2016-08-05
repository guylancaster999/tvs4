<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php print hdr("Activities"); ?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Activities");?>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php print top_bit("Activities");?>
			    <div class="row">
                      <div class="col-sm-9 block">
                        We support schools in the Tyume Valley through a range of activities; we are currently concentrating on English language teaching and basic IT skills. 
							These activities make use of the library and IT lab at the Yamala Resource Centre. 
							We follow up the regular teaching with additional activities for both teachers and students at our Study Camps at Hogsback.  
							We welcome volunteers and offers of help with any of these activities.
							<ul>
							<li><a href="activities_resourcecentre.php">Resource centre</a></li>
							<li><a href="activities_studycamps.php">Study camps</a> </li>
							<li><a href="activities_it.php">IT programme</a></li>
							<li><a href="activities_englishlanguage.php">English language programme</a> </li>
							</ul>
							<?php print foot();?>
					   	</div>
					  <div class="col-sm-3">
						 <img src="img/Picture-41-230x170.jpg" alt="Children"  class="img-responsive img-rounded block"/>
						  <img src="img/supschools3.jpg" alt="Children in Class" class="img-responsive img-rounded block"/>
						<img src="img/activities003.jpg" ALT="Class"  class="img-responsive img-rounded block" />
						<img src="img/Picture-21-230x170.jpg" ALT="Students with Stephanie Gallier"  class="img-responsive img-rounded block"/>
						</div>
					</div>                  
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>
