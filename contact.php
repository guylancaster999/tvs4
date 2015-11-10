<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php print hdr("Contact us"); ?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu();?>
		</div>
     </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <?php print top_bit("Contact us");?>
                <div class="row">
                      <div class="col-sm-9 block">
                        <img src="img/BannerFundraising.png" alt="UK Fundraising - fun run" class="img-responsive img-rounded img_center" >
                        <br/>
                         <table>
								<tr>
									<td class="pad4"><strong>Address&nbsp;:&nbsp;</strong></td>
									<td  class="pad4">Tyume Valley Schools <br/>
									 51a Burnside Drive <br/>
									 Manchester M19 2LT<br/>United Kingdom</td>
									  <td>&nbsp;&nbsp;&nbsp;</td>
									  <td class="pad4"><strong>Treasurer&nbsp;:&nbsp;</strong></td>
							 <td  class="pad4">Margaret Kiloh <br/>
							2 Old Blackfriars,
							Marley Lane<br/>
							Battle TN33 0DQ<br/>United Kingdom</td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								 <tr>
									<td class="pad4"><strong>E-Mail&nbsp;:&nbsp;</strong></td>
									<td class="pad4"><a href="mailto:office@tvschools.org.uk">office@tvschools.org.uk</a></td>
								</tr>
							</table>
							<br/><img src="img/dash1400.gif" alt="" class="img-responsive " ><br/>
							<a  id="form"></a>
								 <h3>Your Message <span   id="error" style="color:red"><?php print $_GET["error"];?>&nbsp;</span></h3>
							 <form class="form-horizontal" action="do_contact.php" method="POST" title="Send us a message">
								<div class="form-group">
								  <label class="control-label col-sm-2" for="sname">Name:</label>
								  <div class="col-sm-9">
									<input type="text" class="form-control" id="sname"  name="sname" placeholder="Enter your name" required value="<?php print $_GET["sname"]; ?>" />
									</div>
								</div>
								 <div class="form-group">
								  <label class="control-label col-sm-2" for="email">Email:</label>
								  <div class="col-sm-9">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required value="<?php print $_GET["email"]; ?>"/>
									</div>
								</div>
								 <div class="form-group">
								  <label class="control-label col-sm-2" for="phone">Phone:</label>
								  <div class="col-sm-9">
									<input type="text" class="form-control" id="phone"  name="phone" placeholder="Enter your phone" required value="<?php print $_GET["phone"]; ?>"/>
									</div>
								</div>
								 <div class="form-group">
								  <label class="control-label col-sm-2" for="subject">Subject:</label>
								  <div class="col-sm-9">
								  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter  Subject" required value="<?php print $_GET["subject"]; ?>"/>
								   </div>
								</div>
								<div class="form-group">
								  <label class="control-label col-sm-2" for="message">Message:</label>
								  <div class="col-sm-9">
									<textarea  class="form-control" id="message"  name="message" rows="6" placeholder="Enter  message" required > <?php print $_GET["message"]; ?> </textarea>
									</div>
								</div>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-default">Submit</button>
								</div>
							  </div>
							</form>
							<br/>
							<div class="smallprint">* Your details will not be passed to any thrid parties.</div>
                           <div class="top">   <br/>
                               <a class="btn" href="#top"> Top <span class="glyphicon  glyphicon-circle-arrow-up"></span></a>
                           <br/>
                            </div>
                       	</div>
					  <div class="col-sm-3">
                         <img src="img/About-Us-Picture-4-230x170.jpg" alt="Teacher, volunteer and pupils" class="img-responsive img-rounded block"/>
						<img src="img/About-Us-Picture-3-230x170.jpg" alt="Class " class="img-responsive img-rounded block"/>
						<img src="img/About-Us-Picture-1-230x170.jpg" ALT="Students wall-painting" class="img-responsive img-rounded block" />
						<img src="img/About-Us-Picture-2-230x170.jpg" alt="Class" class="img-responsive img-rounded block" />
						<img src="img/forthare2011_230.jpg" alt="Fort Hare 2011" class="img-responsive img-rounded block" />
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
