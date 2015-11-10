<?php require "function/functions.php";?>
 <!doctype html>
<html lang="en">
<?php 
print hdr("Gallery - English Language Training");
$gpics='{"gallery":[
	{"picLarge":"EnglishCourseTeachertraining.jpg","picSmall":"EnglishCourseTeachertraining_140.jpg","picTtl":"English Course Teacher training"},    {"picLarge":"Teachertrainingwithlearnerparticipants.jpg","picSmall":"Teachertrainingwithlearnerparticipants_140.jpg","picTtl":"Teacher training with learner participants"},
	{"picLarge":"EnglishTraining2015.jpg","picSmall":"EnglishTraining2015_140.jpg","picTtl":"Teacher Training 2015"},
	{"picLarge":"EnglishTraining2015_2.jpg","picSmall":"EnglishTraining2015_2_140.jpg","picTtl":"Teacher Training 2015"},
	{"picLarge":"EnglishCourseTeachertraining2.jpg","picSmall":"EnglishCourseTeachertraining2_140.jpg","picTtl":"English Course Teacher training"},
	{"picLarge":"EnglishTraining2015_3.jpg","picSmall":"EnglishTraining2015_3_140.jpg","picTtl":"Teacher Training 2015"}
  	]}';	
session_start();
$_SESSION["gpics"]	=$gpics;	
$pgTtl				="English Language Training";
$pgUrl				="gallery_englishTraining.php";
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