<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php 
print hdr("Gallery - IT");
$gpics='{"gallery":[
	{"picLarge":"itLearners.jpg","picSmall":"itLearners_140.jpg","picTtl":"24 school leavers coming to the end of two weeks IT studycamp"},
	{"picLarge":"tvsit.jpg","picSmall":"tvsit_140.jpg","picTtl":"Students at PCs 2015"},
	{"picLarge":"it2.jpg","picSmall":"it2_140.jpg","picTtl":"Adult IT Classes"},
	{"picLarge":"it3.jpg","picSmall":"it3_140.jpg","picTtl":"IT Certificates"},
	{"picLarge":"it4.jpg","picSmall":"it4_140.jpg","picTtl":"IT Certificates"},
	{"picLarge":"it5.jpg","picSmall":"it5_140.jpg","picTtl":"New laptops"},
	{"picLarge":"it6.jpg","picSmall":"it6_140.jpg","picTtl":"IT Class"},
	{"picLarge":"it7.jpg","picSmall":"it7_140.jpg","picTtl":"Dyamala IT lab"},
	{"picLarge":"it8.jpg","picSmall":"it8_140.jpg","picTtl":"Dyamala IT lab"},
	{"picLarge":"it9.jpg","picSmall":"it9_140.jpg","picTtl":"Students at PCs"},
	{"picLarge":"it10.jpg","picSmall":"it10_140.jpg","picTtl":"students at PCs"},
	{"picLarge":"it11.jpg","picSmall":"it11_140.jpg","picTtl":"students at PCs"},
	{"picLarge":"studycamps004.jpg","picSmall":"studycamps004_140.jpg","picTtl":"Students at PCs"}, 
	{"picLarge":"it2014.jpg","picSmall":"it2014_140.jpg","picTtl":"PC use at 2014 Study camp"},
	{"picLarge":"it1.jpg","picSmall":"it1_140.jpg","picTtl":"Adults at PCs"},
	{"picLarge":"upgradingcomputerlab2011.png","picSmall":"upgradingcomputerlab2011_140.png", "picTtl":"Upgrading computer lab 2011"},
	{"picLarge":"mabandla2011.jpg","picSmall":"mabandla2011_140.jpg","picTtl":"Stephany with pupils at Mabandla Primary School 2011"},	{"picLarge":"NcerezantsiPrimarySchoolIT.jpg","picSmall":"NcerezantsiPrimarySchoolIT_140.jpg","picTtl":"Ncera Zantsi Primary School IT"},
	{"picLarge":"tvsIt2014-1.jpg","picSmall":"tvsIt2014-1.jpg","picTtl":"Students at PCs 2014"},
	{"picLarge":"tvsIt-2.jpg","picSmall":"tvsIt-2.jpg","picTtl":"Students at PCs 2014"}
	]}';
session_start();
$_SESSION["gpics"]	= $gpics;	
$pgTtl				= "IT Teaching";
$pgUrl				= "gallery_it.php";
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
				$colctr= 0;
				$x = json_decode($gpics,true);
				$sz= count($x["gallery"]); 
 				print '<div class="row">';
				for ($i=0;$i<$sz;$i++)
				{
					$colctr++;
					if ($colctr>4)
					{
						print '</div>';
						print '<div class="row">';
						$colctr=1;
					}
					print '<div class="col-sm-3 col-md-3">';
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
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js";></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/code.js"></script>
</body>
</html>