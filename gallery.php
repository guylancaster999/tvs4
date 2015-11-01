<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php print hdr("Gallery"); ?>
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
               <?php print top_bit("Photo Gallery");?>
                <div class="row">
                      <div class="col-sm-9 block">
                           <ul>
                              <li><a href="gallery_englishlanguage.php">English Language Teaching</a></li>
                              <li><a href="gallery_englishTraining.php">English Language Training</a></li>
                              <li><a href="gallery_fundraising.php">Fundraising</a></li>
                              <li><a href="gallery_general.php">General Photos</a></li>
                              <li><a href="gallery_it.php">IT Training</a></li>
                              <li><a href="gallery_studycamps.php">Study Camp / Hobbiton</a></li>
                          </ul>
                          <?php print foot();?>
                       	</div>
					  <div class="col-sm-3">
					<img src="img/forthare2011_230.jpg" alt="Fort Hare 2011" class="img-responsive img-rounded block" />
					<?php display("gallery.php","Photo Gallery","photo22.jpg","photo22_230.jpg","School","gallery_general_pic.php");
				   display("gallery.php","Photo Gallery","photo25.jpg","photo25_230.jpg","Hobbiton","gallery_general_pic.php");
				   ?>
 						<img src="img/hobbiton_230.jpg" alt="Hobbiton"  alt=""  class="img-responsive img-rounded"/>
						<img src="img/tvsfb_230.jpg" alt="Tyume Valley Class"   class="img-responsive img-rounded block"/>
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
