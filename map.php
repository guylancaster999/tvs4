<?php require "function/functions.php";?>
<!Doctype html>
<html lang="en">
<?php
print hdr("Where we work");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu();?>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
			<?php print top_bit("Where we work");?>
                 <div class="row">
                      <div class="col-sm-8 block">
                       <img src="img/valleyMap.jpg" alt="Tyume Valley Schools Map" class="img-responsive img-rounded img_center"/>
                         <?php print foot();?>
                       	</div>
					  <div class="col-sm-4 block">
                      <div class='xlatestnews'>Map</div>
				
 &nbsp;<a href="https://www.google.co.uk/maps/place/32%C2%B040'18.8%22S+26%C2%B053'47.3%22E/@-32.5128576,26.9370445,10z/data=!4m2!3m1!1s0x0:0x0?hl=en"">
    <img src="img/map1.png" alt="Tyume Valley."  class="img-responsive img-rounded img_center" /></a>
<br/> Click <a href="https://www.google.co.uk/maps/place/32%C2%B040'18.8%22S+26%C2%B053'47.3%22E/@-32.5128576,26.9370445,10z/data=!4m2!3m1!1s0x0:0x0?hl=en">here</a> for  Google Map.
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
