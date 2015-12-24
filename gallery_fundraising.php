<?php require "function/functions.php";
$pgTtl				="Fundraising";
$pgUrl				="gallery_fundraising.php";
?>
<!doctype html>
<html lang="en">
<?php 
print hdr("Gallery - ".$pgTtl);
$gpics='{"gallery":[
	{"picLarge":"fundraising5.jpg","picSmall":"fundraising5_140.jpg","picTtl":"Karen Barker and Nic Suggit on great south run 2014"},     
    {"picLarge":"tvsfundraising2015.jpg","picSmall":"tvsfundraising2015x_140.jpg","picTtl":"London Marathon for Tyume Valley Schools celebration"},
    {"picLarge":"fundraising4.jpg","picSmall":"fundraising4_140.jpg","picTtl":"Professors Caroline Glendinning and Gillian Parker"},
    {"picLarge":"fundraising3.jpg","picSmall":"fundraising3_140.jpg","picTtl":"Geraldine Palmer receives a cheque on behalf of TVS at St.Augustines"},
    {"picLarge":"fundraising2015_1.jpg","picSmall":"fundraising2015_1_140.jpg","picTtl":"Fundraising 2015"},    {"picLarge":"fundraising2015_3.jpg","picSmall":"tvsfundraising2015_140.jpg","picTtl":"Croquet in 2015"},    {"picLarge":"fundraising2015_4.jpg","picSmall":"fundraising2015_4_140.jpg","picTtl":"Cake 2015"},    {"picLarge":"fundraising2015_2.jpg","picSmall":"fundraising2015_2_140.jpg","picTtl":"Fundraising 2015"},    {"picLarge":"fundraising6.jpg","picSmall":"fundraising6_140.jpg","picTtl":"Fundraising 2015"},    {"picLarge":"BannerFundraising.png","picSmall":"BannerFundraising_140.png","picTtl":"Fundraising 2014"},
	{"picLarge":"pinmar.png","picSmall":"pinmar_140.png","picTtl":"Pinmar Golf Tournament, Palma de Mallorca 2011"},	{"picLarge":"portsmouth2012.jpg","picSmall":"portsmouth2012_140.jpg","picTtl":"Great South Run : Portsmouth 2012"},
    {"picLarge":"marathon2015.png","picSmall":"marathon2015_140.png","picTtl":"Karen at Marathon 2015"}
   	]}';	
session_start();
$_SESSION["gpics"]	=$gpics;	
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Photos");?>
       </div>
    </div>
        <!-- /#sidebar-wrapper -->
      <div id="page-content-wrapper">
         <div class="container-fluid">
			<?php print top_bit("Photo Gallery - ".$pgTtl);?>
			<div class="row">
				<div class="col-sm-12">                       
				<?php
					$colctr		= 0;
					$x 			= json_decode($gpics,true);
					$sz			= count($x["gallery"]); 
					print '<div class="row">';
					
					for ($i=0; $i<$sz; $i++)
					{
						$colctr++;
						if ($colctr>4)
						{
							print '</div>';
							print '<div class="row">';
							$colctr=1;
						}
						print '<div class="col-sm-3 col-md-3 col-3 col-lg-3">';
							displayPic($pgUrl,$pgTtl,$i); 	
						print '</div>';
					}
					print '</div>';
					print clickPhotos();
				print foot();
				?>
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