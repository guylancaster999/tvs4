<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php  
print hdr("Gallery - English Language Teaching");
$gpics='{"gallery":[
	{"picLarge":"englishclass2015_2.jpg","picSmall":"englishclass2015_2_140.jpg",
	"picTtl":"English Class 2015- learning to use a dictionary"},
	{"picLarge":"englishclass2015_1.jpg","picSmall":"englishclass2015_1_140.jpg","picTtl":"English Class 2015"},
 	{"picLarge":"EnglishTesting1.jpg","picSmall":"EnglishTesting1_140.jpg","picTtl":"English Testing"},
 	{"picLarge":"Englishtesting2.jpg","picSmall":"Englishtesting2_140.jpg","picTtl":"English testing"},
 	{"picLarge":"hobbitonenglishlearners2015.jpg","picSmall":"hobbitonenglishlearners2015_140.jpg","picTtl":"English Language group at Hobbiton"},   	{"picLarge":"Learnersengagedingroupactiviies.jpg","picSmall":"Learnersengagedingroupactiviies_140.jpg","picTtl":"Learners engaged in group activiies"},	{"picLarge":"Learnersinpostcourseassessment.jpg","picSmall":"Learnersinpostcourseassessment_140.jpg","picTtl":"Learners in post course assessment"},
	{"picLarge":"Englishcourselearners.jpg","picSmall":"Englishcourselearners_140.jpg","picTtl":"English course learners"},
	{"picLarge":"auckland2015.jpg","picSmall":"auckland2015_140.jpg","picTtl":"Very last english class at Auckland Primary school for 2015"},
    {"picLarge":"EnglishCertificates.jpg","picSmall":"EnglishCertificates_140.jpg","picTtl":"English Certificates"},
    {"picLarge":"EnglishCertificates2.jpg","picSmall":"EnglishCertificates2_140.jpg","picTtl":"English Certificates"},
    {"picLarge":"EnglishCertificates4.jpg","picSmall":"EnglishCertificates4_140.jpg","picTtl":"School Celebrations"},
    {"picLarge":"Englishlessons.jpg","picSmall":"Englishlessons_140.jpg","picTtl":"English lessons"},
    {"picLarge":"Englishlessons4.jpg","picSmall":"Englishlessons4_140.jpg","picTtl":"English lessons"},
    {"picLarge":"Englishlearners.jpg","picSmall":"Englishlearners_140.jpg","picTtl":"English learners"},
    {"picLarge":"Englishlearners1.jpg","picSmall":"Englishlearners1_140.jpg","picTtl":"English learners"},
    {"picLarge":"englishteaching2015.jpg","picSmall":"englishteaching2015_140.jpg","picTtl":"Learners 2015"},
  	{"picLarge":"library.jpg","picSmall":"library_140.jpg","picTtl":"library"},
	{"picLarge":"Library2.jpg","picSmall":"Library2_140.jpg","picTtl":"Library"},
	{"picLarge":"Englishclassresourcecentre.jpg","picSmall":"Englishclassresourcecentre_140.jpg","picTtl":"English class resource centre"},
	{"picLarge":"Englishteaching2015_2.jpg","picSmall":"Englishteaching2015_2_140.jpg","picTtl":"English Teaching"},
	{"picLarge":"libraryElukaynanesweniHS.jpg","picSmall":"libraryElukaynanesweniHS_140.jpg", "picTtl":"Library at Elukaynanesweni HS"},
	{"picLarge":"englishteaching2011.jpg","picSmall":"englishteaching2011_140.jpg","picTtl":"English teaching 2011"} 
 	]}';	
session_start();
$_SESSION["gpics"]	= $gpics;	
$pgTtl				= "English Language Teaching";
$pgUrl				= "gallery_englishlanguage.php";
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