<!--

<?php 
require "function/functions.php";
$pgTtl		=$_REQUEST["pgTtl"];
$fromurl	=$_REQUEST["fromurl"];
$id			=$_REQUEST["id"];
session_start();
$gpics		= $_SESSION["gpics"];
$x 			= json_decode($gpics,true);
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
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>
-->