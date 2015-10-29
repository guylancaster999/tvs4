<?php require "function/functions.php";?>
<!Doctype html>
<html lang="en">
<?php print hdr("Gallery - Fundraising");?>
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
              <?php print top_bit("Gallery - Fundraising");?>
                  <div class="row">
                      <div class="col-sm-12">
                         <!---------------------row1------------------------------------------------>
                         <div class="row">
                          <div class="col-sm-3 col-md-3">
                            <script>display("gallery_fundraising.php","fundraising Photos",
                        	"fundraising5.jpg","fundraising5_140.jpg","Karen Barker and Nic Suggit on great south run 2014","gallery_general_pic.php");</script>
                            </div>
                            <div class="col-sm-3 col-md-3">
                              <script>display("gallery_fundraising.php","fundraising Photos",
                            "tvsfundraising2015.jpg","tvsfundraising2015x_140.jpg","London Marathon for Tyume Valley Schools celebration","gallery_general_pic.php");</script>
                              </div>
                                <div class="col-sm-3 col-md-3">
                                  <script>display("gallery_fundraising.php","Fundraising Photos",
                                "fundraising4.jpg","fundraising4_140.jpg","Professors Caroline Glendinning and Gillian Parker","gallery_general_pic.php");</script>
                                  </div>
                              <div class="col-sm-3 col-md-3">
                                <script>display("gallery_fundraising.php","Fundraising Photos",
                              "fundraising3.jpg","fundraising3_140.jpg","Geraldine Palmer receives a cheque on behalf of TVS at St.Augustines","gallery_general_pic.php");</script>
                                </div>
                             </div>
                                <!---------------------row2------------------------------------------------>
                                <div class="row">
                                 <div class="col-sm-3 col-md-3">
                                   <script>display("gallery_fundraising.php","Fundraising Photos",
                                 "fundraising2015_1.jpg","fundraising2015_1_140.jpg","Fundraising 2015","gallery_general_pic.php");</script>
                                   </div>
                                   <div class="col-sm-3 col-md-3">
                                     <script>display("gallery_fundraising.php","Fundraising Photos",
                                   "fundraising2015_3.jpg","tvsfundraising2015_140.jpg","Fundraising 2015","gallery_general_pic.php");</script>
                                     </div>
                                     <div class="col-sm-3 col-md-3">
                                     <script>display("gallery_fundraising.php","Fundraising Photos",
                                   "fundraising2015_4.jpg","fundraising2015_4_140.jpg","Fundraising 2015","gallery_general_pic.php");</script>
                                     </div>
                                     <div class="col-sm-3 col-md-3">
                                     <script>display("gallery_fundraising.php","Fundraising Photos",
                                   "fundraising2015_2.jpg","fundraising2015_2_140.jpg","Fundraising 2015","gallery_general_pic.php");</script>
                                     </div>
                               </div>
                               <!---------------------row3------------------------------------------------>
                               <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <script>display("gallery_fundraising.php","Fundraising Photos",
                                "fundraising6.jpg","fundraising6_140.jpg","Fundraising 2015","gallery_general_pic.php");</script>
                                  </div>
								 <div class="col-sm-6 col-md-6">
                                  <script>display("gallery_fundraising.php","Fundraising Photos",                          "BannerFundraising.png", "BannerFundraising_140.png","Fundraising 2014","gallery_general_pic.php");</script>
                                  </div>  
	                              <div class="col-sm-3 col-md-3">
                                  <script>display("gallery_fundraising.php","Fundraising Photos",
                                "marathon2015.png","marathon2015_140.png","Karen at Marathon 2015","gallery_general_pic.php");</script>
                                  </div>
								     </div>
										<!---------------------row4------------------------------------>
                               <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <script>display("gallery_fundraising.php","Fundraising",
                                "portsmouth2012.jpg","portsmouth2012_140.jpg","Great South Run : Portsmouth 2012","gallery_general_pic.php");</script>
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