<?php require "function/functions.php";
$pgTtl				="Study Camps";
$pgUrl				="gallery_studycamps.php";
?>
<!doctype html>
<html lang="en">
<?php 
print hdr("Gallery - ".$pgTtl);
$gpics='{"gallery":[
	{"picLarge":"hobbiton2016.png","picSmall":"hobbiton2016_140.png","picTtl":"Hobbiton February 2016 &copy;Vicky Riley"},     
	{"picLarge":"studycamp2015.jpg","picSmall":"studycamp2015_140.jpg","picTtl":"Hobbiton February 2015"},     
	{"picLarge":"studycamp2015_1.jpg","picSmall":"studycamp2015_1_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #1"},     
	{"picLarge":"studycamp2015_2.jpg","picSmall":"studycamp2015_2_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #2"}, 
	{"picLarge":"studycamp2015_3.jpg","picSmall":"studycamp2015_3_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #3"}, 
	{"picLarge":"studycamp2015_4.jpg","picSmall":"studycamp2015_4_140.jpg","picTtl":"Hobbiton February 2015 - &copy;Vicky Riley #4"}, 
	{"picLarge":"studycamp2015_5.jpg","picSmall":"studycamp2015_5_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #5"}, 
	{"picLarge":"studycamps007.jpg","picSmall":"studycamps007_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #6"}, 
	{"picLarge":"studycamps008.jpg","picSmall":"studycamps008_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #7"}, 
	{"picLarge":"studycamps009.jpg","picSmall":"studycamps009_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #8"}, 
	{"picLarge":"studycamps010.jpg","picSmall":"studycamps010_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #9"}, 
	{"picLarge":"studycamps011.jpg","picSmall":"studycamps011_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #10"}, 
	{"picLarge":"studycamps012.jpg","picSmall":"studycamps012_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #11"}, 
	{"picLarge":"studycamps013.jpg","picSmall":"studycamps013_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #12"}, 
	{"picLarge":"studycamps015.jpg","picSmall":"studycamps015_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #13"}, 
	{"picLarge":"studycamps016.jpg","picSmall":"studycamps016_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #14"}, 
	{"picLarge":"studycamps017.jpg","picSmall":"studycamps017_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #15"}, 
	{"picLarge":"studycamps018.jpg","picSmall":"studycamps018_140.jpg","picTtl":"Hobbiton February 2015 &copy;Vicky Riley #16"}, 
	{"picLarge":"Englishlearnersdaytrip.jpg","picSmall":"Englishlearnersdaytrip_140.jpg", "picTtl":"English learners day trip"}, 
	{"picLarge":"Englishlearnersdaytrip2.jpg","picSmall":"Englishlearnersdaytrip2_140.jpg","picTtl":"English learners day trip"}, 
	{"picLarge":"Englishlearnersdaytrip4.jpg","picSmall":"Englishlearnersdaytrip4_140.jpg","picTtl":"English learners day trip"}, 
	{"picLarge":"Englishlearnersdaytrip3.jpg","picSmall":"Englishlearnersdaytrip3_140.jpg","picTtl":"English learners day trip"}, 
	{"picLarge":"Oct13Studycamp.jpg","picSmall":"Oct13Studycamp_140.jpg","picTtl":"October 13th trip"}, 
	{"picLarge":"Oct13Studycamp4.jpg","picSmall":"Oct13Studycamp4_140.jpg","picTtl":"October 13th trip"}, 
	{"picLarge":"camps5.jpg","picSmall":"camps5_140.jpg","picTtl":"Study Camp"}, 
	{"picLarge":"camps.jpg","picSmall":"camps_140.jpg","picTtl":"Study Camp"}, 
	{"picLarge":"Oct13Studycampfollowup.jpg","picSmall":"Oct13Studycampfollowup_140.jpg","picTtl":"Study Camp follow up"},
 	{"picLarge":"hobbiton1.jpg","picSmall":"hobbiton1_140.jpg","picTtl":"Hobbiton"},
	{"picLarge":"assaultcourse.jpg","picSmall":"assaultcourse_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse1.jpg","picSmall":"assaultcourse1_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse2.jpg","picSmall":"assaultcourse3_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse3.jpg","picSmall":"assaultcourse3_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse4.jpg","picSmall":"assaultcourse4_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse5.jpg","picSmall":"assaultcourse5_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse6.jpg","picSmall":"assaultcourse6_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"assaultcourse7.jpg","picSmall":"assaultcourse7_140.jpg","picTtl":"Assault Course"}, 
	{"picLarge":"studycamps003.jpg","picSmall":"studycamps003_140.jpg","picTtl":"Study Camp"}, 
	{"picLarge":"studycamp2015_10.jpg","picSmall":"studycamp2015_10_140.jpg","picTtl":"Study camp"}, 
	{"picLarge":"studycamps005.jpg","picSmall":"studycamps005_140.jpg","picTtl":"Students at PCs"}, 
	{"picLarge":"studycamps006.jpg","picSmall":"studycamps006_140.jpg","picTtl":"Students at PCs"}, 
	{"picLarge":"studycamp20151.jpg","picSmall":"studycamp20151_140.jpg","picTtl":"Students at Study camp"}, 
	{"picLarge":"studycamp20152.jpg","picSmall":"studycamp20152_140.jpg","picTtl":"Studycamp"}, 
	{"picLarge":"studycamp20153.jpg","picSmall":"studycamp20153_140.jpg","picTtl":"Study Camp"}, 
	{"picLarge":"studycamp2012.jpg","picSmall":"studycamp2012_140.jpg","picTtl":"Study camp 2012"}, 
	{"picLarge":"hobbitonbus2011.png","picSmall":"hobbitonbus2011_140.png","picTtl":"Hobbiton bus 2011"}								  
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
        <!-- /#page-content-wrapper -->
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js";></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>