<?php require "function/functions.php";?>
<!Doctype html>
<html lang="en">
<?php
print hdr("Contact us");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu();?>
    </div>
            </div>
        <!-- /#sidebar-wrapper -->
     
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                      <?php print top_bit("Contact us");?>
			   <div class="row">
                      <div class="col-sm-9 block">
                        <img src="img/BannerFundraising.png" alt="UK Fundraising - fun run" class="img-responsive img-rounded img_center" >
    
                        <h3> Thank-you for your enquiry &ndash; we will get back to you as soon as possible.</h3>
                        <br/>
                        <br/>
                           <div class="top">   <br/>
                               <a class="btn" href="#top"> Top <span class="glyphicon  glyphicon-circle-arrow-up"></span></a>
                           <br/>
                            </div>
                       	</div>
					  <div class="col-sm-3 block">
                         <img src="img/About-Us-Picture-4-230x170.jpg" alt="Teacher, volunteer and pupils"   class="img-responsive img-rounded"/>
 <br/>
  <img src="img/About-Us-Picture-3-230x170.jpg" alt="Class " class="img-responsive img-rounded"/>
 <br/>
<img src="img/About-Us-Picture-1-230x170.jpg" ALT="Students wall-painting","" class="img-responsive img-rounded" />
<br/>
<img src="img/About-Us-Picture-2-230x170.jpg" alt="Class" class="img-responsive img-rounded" />
						 
						</div>
					</div>                  
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<script src="js/code.js"></script>
</body>
</html>
