<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php
print hdr("School Links - Settle/Kwezana");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Partnerships");?>
    </div>
            </div>
        <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
			  <?php print top_bit("School Links &ndash; Settle-Kwezana Schools Partnership");?>
			    <div class="row">
                      <div class="col-sm-9 block">    

One successful partnership is that between Settle CofE Primary School, North Yorkshire, and Kwezana Primary School in Tyume. 
The partnership has led to teacher exchanges between the schools. 
<ul>
<li>You can find further details of the Settle partnership and teacher exchanges <a href="http://www.settle-pri.n-yorks.sch.uk/global-learning/">here</a>.</li>
<li>You can find examples of childrens’ letters to each other <a href="https://settlekwezana.wordpress.com/">here</a>.</li>
</ul>
Newsletters:
<ul>
<li><a href="doc/Kwezana_newsletter_03.pdf">Newsletter 3 - July 2014</a></li>
<li><a href="doc/Kwezana_newsletter_04.pdf">Newsletter 4 - December 2014</a></li>
<li><a href="doc/Kwezana_newsletter_05.pdf">Newsletter 5 - March 2015</a></li>
<li><a href="doc/Kwezana_newsletter_06.pdf">Newsletter 6 - July 2015</a></li>
</ul>
<br/>
                       <?php print foot();?>
                       	</div>
					  <div class="col-sm-3 block">
					  <a href="https://settlekwezana.wordpress.com/" title="Kwezana school, Tyume Valley , Western Cape, South Africa"><img src="img/kwezana1.jpg" alt="Kwezana"  class="img-responsive img-rounded"/></a>
                         <br/>
					<a href="http://www.settle-pri.n-yorks.sch.uk/" title="Settle Church of England Primary School"><img src="img/settle1.jpg" alt="Settle Church of England Primary School"  class="img-responsive img-rounded"/></a> 
				  <br/>
				 <a  href="doc/Kwezana_newsletter_03.pdf" title="Friends of Kwezana Primary - Newsletter 3"><img src="img/fkp2.jpg" class="img-responsive" alt="Friends of Kwezana Primary"></a>
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
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<script src="js/code.js"></script>
</body>
</html>
