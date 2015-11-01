<<<<<<< HEAD
<!--

<?php 
require "function/functions.php";
$pgTtl		=$_REQUEST["pgTtl"];
=======
<?php 
require "function/functions.php";
$pgTtl		=$_REQUEST["pgttl"];
>>>>>>> 6099f1d5d1437e2cdbf14d36c303b974522e1811
$fromurl	=$_REQUEST["fromurl"];
$id			=$_REQUEST["id"];
session_start();
$gpics		= $_SESSION["gpics"];
$x 			= json_decode($gpics,true);
<<<<<<< HEAD
$y 			= $x["gallery"][$id]; 
$picLarge	= $y["picLarge"];
$picTtl		= $y["picTtl"];
?>
<!doctype html>
<html lang="en">
<?php print hdr("Gallery - General"); ?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Photos");?>
    </div>
      </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
		         <div class="row">
                      <div class="col-sm-11">
                         <div class="h1"><a href="index.php">Tyume Valley Schools</a></div>
                         <div class="reg">Registered Charity Number 1103909</div>
                      </div><!--col-->
                      <div class="col-sm-1" title="Toggle menu">
                          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" title="Toggle menu"> 
                              <span class="glyphicon glyphicon-align-justify"></span> 
                          </a> 
                      </div><!--col-->
                  </div><!--row-->
                <div class="row">
                      <div class="col-sm-12">
                  			<h2><?php print $pgTtl." - ".$descr; ?></h2>
		              </div>
                </div>
                <div class="row">
                      <div class="col-sm-12 block">
						  <?php print '<a href="'.$fromurl.'" title="'.$picTtl.' &ndash; Click to return">';
						  print '<img src="'.$picLarge$pic.'" alt="'.$picTtl.'- click to return" class="img-responsive img-rounded img_center">';
						  print '</a></div>';
						  print clickRet();
						  print foot();?>
						</div>
				   </div>                  
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
=======
$y 			= $x["gallery"][$id];  
$picLarge	= $y["picLarge"];
$picTtl		= $y["picTtl"];

/*


$ctr		= count($x["gallery"]);
$left		= $right="";

if ($id>0)
{
	$yLeft 			= $x["gallery"][$id-1];  
	$picLargeLeft	= $yLeft["picLarge"];
	$picTtlLeft		= $yLeft["picTtl"];
	$left			='<a href="gallery_pic.php?id='.($id-1).'&pgTtl='.$pgTtl.'&fromurl='.$fromurl.'"> < <a>';
}
if ($id<$ctr-1)
{
	$yRight			= $x["gallery"][$id+1];  
	$picLargeRight	= $yRight["picLarge"];
	$picTtlRight	= $yRight["picTtl"];
	$right			='<a href="gallery_pic.php?id='.($id+1).'&pgTtl='.$pgTtl.'&fromurl='.$fromurl.'"> > <a>';
}
*/
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
			<?php print top_bit($pgTtl." - ".$picTtl);?>
                <div class="row">
                      <div class="col-sm-12 block">
						  <?php print '<a href="'.$fromurl.'" title="'.$picTtl.' &ndash; Click to return">';
						  print '<img src="img/'.$picLarge.'" alt="'.$picTtl.'- click to return" class="img-responsive img-rounded img_center">';
						  print '</a>'
						  print "<hr/>".$left."/".$right;
						  print '</div>';
						  print clickRet($left,$right);
						  print foot();?>
						</div>
				   </div>                  
				</div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js";></script>
>>>>>>> 6099f1d5d1437e2cdbf14d36c303b974522e1811
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
<<<<<<< HEAD
</html>
-->
=======
</html>
>>>>>>> 6099f1d5d1437e2cdbf14d36c303b974522e1811
