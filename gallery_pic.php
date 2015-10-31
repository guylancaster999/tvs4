<?php 
require "function/functions.php";
$pgttl		=$_REQUEST["pgttl"];
$fromurl	=$_REQUEST["fromurl"];
$id			=$_REQUEST["id"];
session_start();
$gpics		= $_SESSION["gpics"];
$x 			= json_decode($gpics,true);
$y 			= $x["gallery"][$id];  
$picLarge	= $y["picLarge"];
$picTtl		= $y["picTtl"];
$ctr		= count($x["gallery"]);
$left		= $right="";

if ($id>0)
{
	$yLeft 			= $x["gallery"][$id-1];  
	$picLargeLeft	= $yLeft["picLarge"];
	$picTtlLeft		= $yLeft["picTtl"];
	$left			='<a href="gallery_pic.php?id='.($id-1).'&pgttl='.$pgttl.'&fromurl='.$fromurl.'" title="Previous Picture">
						<span class="glyphicon glyphicon-arrow-left"></span>
					<a>';
}
if ($id<$ctr-1)
{
	$yRight			= $x["gallery"][$id+1];  
	$picLargeRight	= $yRight["picLarge"];
	$picTtlRight	= $yRight["picTtl"];
	$right			='<a href="gallery_pic.php?id='.($id+1).'&pgttl='.$pgttl.'&fromurl='.$fromurl.'" title="Next Picture">
						<span class="glyphicon glyphicon-arrow-right"></span>
					 <a>';
}
 ?>
<!doctype html>
<html lang="en">
<?php print hdr("Gallery - ".$pgTtl);?>
 <body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Photos");?>
       </div>
    </div>
        <!-- /#sidebar-wrapper -->
      <div id="page-content-wrapper">
         <div class="container-fluid">
			<?php print top_bit($pgttl." - ".$picTtl);?>
                <div class="row">
                      <div class="col-sm-12 block">
						  <?php 
   	    				  print arrows($left,$right);
						  print '<a href="'.$fromurl.'" title="'.$picTtl.' &ndash; Click to return">';
						  print '<img src="img/'.$picLarge.'" alt="'.$picTtl.'- click to return" class="img-responsive img-rounded img_center">';
						  print '</a>';
						  print '</div>';
						  print clickRet();
						  print foot();?>
						</div>
				   </div>                  
				</div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js";></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>