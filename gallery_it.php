<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php print hdr("Gallery - IT");?>
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
                  			<h2>Photo Gallery - IT</h2>
                      </div>
                </div>
                <div class="row">
                      <div class="col-sm-12">
					<!---------row1------------------------------------------------>
						   <div class="row">
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching Photos","tvsit.jpg","tvsit_140.jpg","Students at PCs 2015","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching Photos","it2.jpg","it2_140.jpg","Adult IT Classes","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
							 <script> display("gallery_it.php","IT Teaching Photos","it3.jpg","it3_140.jpg","IT Certificates","gallery_general_pic.php");</script>
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <script> display("gallery_it.php","IT Teaching Photos","it4.jpg","it4_140.jpg","IT Certificates","gallery_general_pic.php");</script>
							 </div>
						   </div>
						   <br/>
							 <!---------------------row2------------------------------------------->
						   <div class="row">
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching Photos","it5.jpg","it5_140.jpg","New laptops","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching Photos","it6.jpg","it6_140.jpg","IT Class","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
							 <script> display("gallery_it.php","IT Teaching Photos","it7.jpg","it7_140.jpg","Yamala IT lab","gallery_general_pic.php");</script>
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <script> display("gallery_it.php","IT Teaching Photos","it8.jpg","it8_140.jpg","Yamala IT lab","gallery_general_pic.php");</script>
							 </div>
						   </div>
							  <br/>
							 <!---------------------row3-------------------------------------------->
						   <div class="row">
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching Photos","it9.jpg","it9_140.jpg","Students at PCs ","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching Photos","it10.jpg","it10_140.jpg","students at PCs","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
							 <script> display("gallery_it.php","IT Teaching Photos","it11.jpg","it11_140.jpg","students at PCs","gallery_general_pic.php");</script>
						   </div>
						   <div class="col-sm-3 col-md-3">
							   <script> display("gallery_it.php","IT Teaching Photos","it1.jpg","it1_140.jpg","Adults at PCs","gallery_general_pic.php");</script>
							 </div>
						   </div>
						    <!---------------------row4----------------------------------->
						   <div class="row">
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching","upgradingcomputerlab2011.png","upgradingcomputerlab2011_140.png","Upgrading computer lab 2011","gallery_general_pic.php");</script>
							</div>
						   <div class="col-sm-3 col-md-3">
						   <script> display("gallery_it.php","IT Teaching","mabandla2011.jpg","mabandla2011_140.jpg","Stephany with pupils at Mabandla Primary School 2011","gallery_general_pic.php");</script>
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
<script src="js/code.js"></script>
</body>
</html>