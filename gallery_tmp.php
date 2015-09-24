<?php 
require "function/functions.php";
print pageclass::hdr( 'Photo Gallery:English Language Teaching',"Y"); 
?>
<script language="javascript" src="js/main.js"></script>
 <script language="javascript">
  mainfulltop(190);
</script> 
<table >
<tr>

<script language="javascript">
    w=($(window).width()-230)/4;
	display_gallery_thumbnail("library.jpg","library_140.jpg","Library",w);
	display_gallery_thumbnail("Library2.jpg","Library2_140.jpg","Library",w);
	display_gallery_thumbnail("Teachertrainingwithlearnerparticipants.jpg","Teachertrainingwithlearnerparticipants_140.jpg","English Course Teacher Training",w);
 	display_gallery_thumbnail("Englishclassresourcecentre.jpg",            "Englishclassresourcecentre_140.jpg","English class resource centre",w);
</script>
 </tr>
<tr>
<script language="javascript">
	display_gallery_thumbnail("Learnersengagedingroupactiviies.jpg","Learnersengagedingroupactiviies_140.jpg","Learners engaged in Group activiies",w);
	display_gallery_thumbnail("Learnersengagedingroupactiviies.jpg","Learnersinpostcourseassessment_140.jpg","Learners in post-course assessment",w);
	display_gallery_thumbnail("Englishcourselearners.jpg","Englishcourselearners_140.jpg","English course learners",w);
	display_gallery_thumbnail("EnglishCourseTeachertraining.jpg","EnglishCourseTeachertraining_140.jpg","English Course Teacher training",w);
</script>
</tr>
<tr>
<script language="javascript">
	display_gallery_thumbnail("EnglishCertificates.jpg","EnglishCertificates_140.jpg","English Certificates",w);
	display_gallery_thumbnail("EnglishCertificates2.jpg","EnglishCertificates2_140.jpg","English Certificates",w);
	display_gallery_thumbnail("EnglishCertificates4.jpg","EnglishCertificates4_140.jpg","English Certificates",w);
 	display_gallery_thumbnail("Englishlessons.jpg","Englishlessons_140.jpg","English Lessons",w);
 </script>
</tr>
<tr>
<script language="javascript">
 	display_gallery_thumbnail("Englishlessons4.jpg","Englishlessons4_140.jpg","English Lessons",w);
 	display_gallery_thumbnail("EnglishCourseTeachertraining2.jpg","EnglishCourseTeachertraining2_140.jpg","English Course Teacher training",w);
 	display_gallery_thumbnail("Englishlearners.jpg","Englishlearners_140.jpg","English Lessons",w);
 	display_gallery_thumbnail("Englishlearners1.jpg","Englishlearners1_140.jpg","English Lessons",w);
 </script>
</tr>
<tr>
<script language="javascript">
 	display_gallery_thumbnail("EnglishTesting1.jpg","EnglishTesting1_140.jpg","English Testing",w);
 	display_gallery_thumbnail("Englishtesting2.jpg","Englishtesting2_140.jpg","English Testing",w);
 </script>
 </tr>
</table> 
<div align="center">Click on images to view full size</div>
</div>
<?php
print pageclass::foot();?>

