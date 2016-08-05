<?php require "function/functions.php";?>
<!doctype html> 
<html lang="en">
<?php  
print hdr("Gallery - General");
$gpics=
	'{"gallery":[ 
    {"picLarge":"huts.jpg","picSmall":"huts_140.jpg","picTtl":"Village Huts"},
    {"picLarge":"photo15.jpg","picSmall":"photo15_140.jpg","picTtl":"Village Life"}, 
    {"picLarge":"photo14.jpg","picSmall":"photo14_140.jpg","picTtl":"Village Life"},
    {"picLarge":"photo10.jpg","picSmall":"photo10_140.jpg","picTtl":"Tyume valley"},
	{"picLarge":"tyyumevalley.jpg","picSmall":"tyyumevalley_140.jpg","picTtl":"Looking towards Hogs back from the Tyume Valley"},
	{"picLarge":"photo3.jpg","picSmall":"photo3_140.jpg","picTtl":"Dyamala School"},
	{"picLarge":"fbphoto.jpg","picSmall":"fbphoto_140.jpg","picTtl":"Tyume Valley Village"},
	{"picLarge":"photo1.jpg","picSmall":"photo1_140.jpg","picTtl":"Amabhele SSS"},
	{"picLarge":"photo2.jpg","picSmall":"photo2_140.jpg","picTtl":"Braai at Mabandla"},
	{"picLarge":"photo4.jpg","picSmall":"photo4_140.jpg","picTtl":"Music Lessons"},	
	{"picLarge":"photo5.jpg","picSmall":"photo5_140.jpg","picTtl":"Music Lessons"},
    {"picLarge":"photo6.jpg","picSmall":"photo6_140.jpg","picTtl":"Pumla and Children"},
    {"picLarge":"photo7.jpg","picSmall":"photo7_140.jpg","picTtl":"School Celebrations"},
    {"picLarge":"photo8.jpg","picSmall":"photo8_140.jpg","picTtl":"School Celebrations"},
    {"picLarge":"photo9.jpg","picSmall":"photo9_140.jpg","picTtl":"School Celebrations"},
    {"picLarge":"photo11.jpg","picSmall":"photo11_140.jpg","picTtl":"School Celebrations"},
    {"picLarge":"photo12.jpg","picSmall":"photo12_140.jpg","picTtl":"Mbovane Primary School"},
    {"picLarge":"photo13.jpg","picSmall":"photo13_140.jpg","picTtl":"Village Life"},
	{"picLarge":"photo16.jpg","picSmall":"photo16_140.jpg","picTtl":"Vuvu and New Car"},
    {"picLarge":"photo17.jpg","picSmall":"photo17_140.jpg","picTtl":"Dyamala School"},
    {"picLarge":"photo18.jpg","picSmall":"photo18_140.jpg","picTtl":"Dyamala School"},
    {"picLarge":"photo19.jpg","picSmall":"photo19_140.jpg","picTtl":"Dyamala School"},
    {"picLarge":"photo21.jpg","picSmall":"photo21_140.jpg","picTtl":"School"},
	{"picLarge":"photo22.jpg","picSmall":"photo22_140.jpg","picTtl":"School"},
	{"picLarge":"photo23.jpg","picSmall":"photo23_140.jpg","picTtl":"School"},
	{"picLarge":"photo24.jpg","picSmall":"photo24_140.jpg","picTtl":"School"},
	{"picLarge":"photo25.jpg","picSmall":"photo27_140.jpg","picTtl":"Village"},
	{"picLarge":"photo26.jpg","picSmall":"photo26_140.jpg","picTtl":"School"},
	{"picLarge":"photo28.jpg","picSmall":"photo28_140.jpg","picTtl":"School"},
	{"picLarge":"photo29.jpg","picSmall":"photo29_140.jpg","picTtl":"Village"},
	{"picLarge":"schoolmeal.jpg","picSmall":"schoolmeal_140.jpg","picTtl":"school meal"},
	{"picLarge":"tvsfb.jpg","picSmall":"tvsfb_140.jpg","picTtl":"Class"},
	{"picLarge":"tvsclass2015_2.jpg", "picSmall":"tvsclass2015_2_140.jpg","picTtl":"Class"},
	{"picLarge":"forthare2011.jpg","picSmall":"forthare2011_140.jpg","picTtl":"Tyume learners at Fort Hare 2011"},
	{"picLarge":"primary.jpg", "picSmall":"primary_140.jpg","picTtl":"Primary 2013"},
	{"picLarge":"gwali.jpg", "picSmall":"gwali_140.jpg","picTtl":"Learners at Gwali school 2010"},
	{"picLarge":"mcfarlan.jpg", "picSmall":"mcfarlan_140.jpg","picTtl":"Learners at Mcfarlan school 2010"},
	{"picLarge":"photo27.jpg","picSmall":"photo27_140.jpg","picTtl":"School"},
	{"picLarge":"photo28.jpg","picSmall":"photo28_140.jpg","picTtl":"School"},
	{"picLarge":"schoolmeal.jpg","picSmall":"schoolmeal_140.jpg","picTtl":"school meal"},
	{"picLarge":"tvsfb.jpg","picSmall":"tvsfb_140.jpg","picTtl":"Class"},
	{"picLarge":"tvsclass2015_2.jpg", "picSmall":"tvsclass2015_2_140.jpg","picTtl":"Class"}, 
	{"picLarge":"ncerazantsi.jpg" ,"picSmall":"ncerazantsi_140.jpg ","picTtl":"Ncera Zantsi Primary"},
    {"picLarge":"ncerazantsi2.jpg" ,"picSmall":"ncerazantsi2_140.jpg ","picTtl":"Ncera Zantsi Primary"} 
	]}';
session_start();
$_SESSION["gpics"]	=$gpics;	
$pgTtl				="General Photos";
$pgUrl				="gallery_general.php";
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Photos");?>
       </div>
    </div>
      <div id="page-content-wrapper">
         <div class="container-fluid">
			<?php print top_bit("Photo Gallery - General");?>
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
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js";></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>