<!doctype html>
<?php require "function/functions.php";?>
<html lang="en">
<?php print hdr("Gallery - General"); ?>
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
                  			<h2> <script>
	       document.write(querySt("grp"));</script> &ndash; <script>document.write(querySt("descr"));
        </script></h2>
                      </div>
                </div>
                <div class="row">
                      <div class="col-sm-12 block">
                       
   
   <script>
     var ret=''
      ret+='<a href="'+querySt("fromurl")+'" title="'+querySt("descr")+' &ndash; Click to return">';	  	 
	  ret+='<img src="'+querySt("pic")+'" alt="'+querySt("descr")+' - click to return" class="img-responsive img-rounded img_center">';
	  ret+='</a>';
      document.write(ret);
</script>
                           <div class="top">   <br/>
                               <a class="btn" href="#top"> Top <span class="glyphicon  glyphicon-circle-arrow-up"></span></a>
                           <br/>
                            </div>
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
