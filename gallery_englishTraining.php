<?php require "function/functions.php";?>
<!Doctype html>
<html lang="en">
<?php print hdr("Gallery - English Language Training");?>
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
              <?php print top_bit("Gallery - English Language Training");?>
                    <div class="row">
                      <div class="col-sm-12 ">
                         <!---------------------row1------------------------------------------------>
                         <div class="row">
                            <div class="col-sm-3 col-md-3">
                        	    <script>display("gallery_englishTraining.php","English Language Training","EnglishCourseTeachertraining.jpg","EnglishCourseTeachertraining_140.jpg","English Course Teacher training","gallery_general_pic.php");</script>
                             </div>
                             <div class="col-sm-3 col-md-3">
                               <script>
                         	     display("gallery_englishTraining.php","English Language Training","Teachertrainingwithlearnerparticipants.jpg","Teachertrainingwithlearnerparticipants_140.jpg","Teacher training with learner participants","gallery_general_pic.php");
                               </script>
                            </div>
                           <div class="col-sm-3 col-md-3">
                                 <script>display("gallery_englishTraining.php","English LanguageTraining","EnglishTraining2015.jpg",
                                 "EnglishTraining2015_140.jpg","Teacher Training 2015","gallery_general_pic.php");</script>
                           </div>
                           <div class="col-sm-3 col-md-3">
                                  <script>display("gallery_englishTraining.php","English Language Training","EnglishTraining2015_2.jpg",
                                  "EnglishTraining2015_2_140.jpg","Teacher Training 2015","gallery_general_pic.php");</script>
                                  </div>
                                </div>

                                <div class="row">
                                <div class="col-sm-3 col-md-3">
                                 <script>display("gallery_englishTraining.php","English Language Training","EnglishCourseTeachertraining2.jpg","EnglishCourseTeachertraining2_140.jpg","English Course Teacher training","gallery_general_pic.php");</script>
                                 </div>
                                 <div class="col-sm-3 col-md-3">
                                        <script>display("gallery_englishTraining.php","English Language Training","EnglishTraining2015_3.jpg",
                                        "EnglishTraining2015_3_140.jpg","Teacher Training 2015","gallery_general_pic.php");</script>
                                </div>
                                </div>
                             <?php						
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
    <!-- Menu Toggle Script -->
<script src="js/code.js"></script>
</body>
</html>
