<script src="js/main.js"></script>

<script>
  hdr("Activities - Contact Us");
</script>
<body>
<br/>
<div class="container">
  <div class="row">
    <div class="col-md-2">
         <img src="img/logo.jpg" alt="Tyume Valley Schools, Eastern Cape, South Africa" width="130" />
    </div>
    <div class="col-md-8" align="center" >
        <h1>Tyume Valley Schools</h1>
        <div class="reg">Registered&nbsp;Charity&nbsp;Number&nbsp;1103909.</div>
    </div> 
   </div>
   <div class="row">
    <div class="col-md-2">
         <script src="js/code.js"></script>
    </div>
    <div class="col-md-8">    
     <div class="col-md-10 greenhead">Contact Us</div>
        <img src="img/BannerFundraising.png" alt="UK Fundraising - fun run" class="img-responsive img-rounded" align='center'>
    
<div class="block">
   <table>
	<tr> 
		<td valign="top" class="pad4"><strong>Address&nbsp;:&nbsp;</strong></td>
		<td valign="top" class="pad4">Tyume Valley Schools <br/>
         51a Burnside Drive <br/>
         Manchester M19 2LT</td>
          <td>&nbsp;&nbsp;&nbsp;</td>
          <td valign="top" class="pad4"><strong>Treasurer&nbsp;:&nbsp;</strong></td>
 <td valign="top" class="pad4">Margaret Kiloh <br/>
2 Old Blackfriares 
Marley Lane<br/>
Battle TN33 0DQ.</td>
	</tr>
    <tr><td>&nbsp;</td></tr>
	 <tr>
		<td class="pad4"><strong>E-Mail&nbsp;:&nbsp;</strong></td>
		<td class="pad4"><a href="mailto:office@tvschools.org.uk">office@tvschools.org.uk</a></td>
    </tr>
</table>
<br/><img src="img/dash1400.gif" alt="" class="img-responsive " ><br/>
  
          
<a  id="form"></a>
<form action="do_contact.php" method="POST" title="Send us a message" class="form-horizontal" role="form"> 
	<table class="img-pad">
    <tr>
    <td></td>
    <td>
    <h3>Your Message <span   id="error" style="color:red"><?php print $_GET["error"];?>&nbsp;</span></h3>
		</td>
        </tr>
        <tr>
			<td class="pad4"> Name:</td>
			<td class="pad4">
  	              <div class="col-sm-8">
                <input type="text" id="sname" name="sname"  input class="form-control" id="inputdefault" required value="<?php print $_GET["sname"]; ?>"/>
</div>
                </div>
            </td>
        	<td class="pad4">
        		<img  src="img/tick.jpg" alt="ok" id="tick1" height="16"/>
            	<img src="img/cross.jpg" alt="not ok" id="cross1" height="16"/></td>
        </tr>
		<tr>
			<td class="pad4">Email&nbsp;:&nbsp;</td>
			<td class="pad4">
                 <div class="col-sm-8">
                 	<input type="email" required id="email" name="email"   value="<?php print $_GET["email"]; ?>" />
                 </div>
            </td>
       		<td class="pad4">
            	<img src="img/tick.jpg" alt="ok" id="tick2" height="16"/>
        		<img src="img/cross.jpg" alt="not ok" id="cross2" height="16"/>
           	</td>
		</tr>
		<tr>
			<td class="pad4">Phone&nbsp;:&nbsp;</td>
			<td class="pad4">
           <div class="col-sm-8">
            	<input type="text" id="phone"  name="phone" size="40" class="form-control" value="<?php print $_GET["phone"];?>"/>
                  </div>           
                   </td>
        	<td class="pad4">
            	<img src="img/tick.jpg" alt="ok" id="tick3"  height="16"/>
        		<img src="img/cross.jpg" alt="not ok" id="cross3" height="16"/>
            </td>
		</tr>
		<tr>
			<td class="pad4">Subject&nbsp;:&nbsp;</td>
			<td class="pad4"> 
                 <div class="col-sm-8">
      	                <input type="text" id="subject"  name="subject" size="40"  input class="form-control" id="inputdefault" required  value="<?php print $_GET["subject"];?>" />			
                 </div>
            </td>
        	<td class="pad4">
        		<img src="img/tick.jpg" alt="ok" id="tick4"  height="16"/>
        		<img src="img/cross.jpg" alt="not ok" id="cross4" height="16"/>
			</td>
		</tr>
		<tr>
			<td class="pad4" valign='top'>Enquiry&nbsp;:&nbsp;</td>
			<td class="pad4">
           <div class="col-sm-10">
            	<textarea rows="6"  input class="form-control" id="inputdefault" id="message" name="message" required>
				<?php print $_GET["message"];?>
                </textarea>
</div>            </td>
        	<td valign='top'>
      	  		<img src="img/tick.jpg" alt="ok" id="tick5"  height="16"/>
        		<img src="img/cross.jpg" alt="ok" id="cross5" height="16"/>
             </td>
		</tr>
        <tr><td>&nbsp;</td></tr>
		<tr>
			<td class="pad4">&nbsp;</td>
			<th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  value="Send Message"/></th>
            <td class="pad4"></td>
		</tr>
	</table>
</form>
<br/>
<div class="smallprint">* Your details will not be passed to any thrid parties.</div> 
 <script src="js/form.js"></script>
<script>
   foot();
</script>
</div>
</div>
 <div class="col-md-2 block">        
 <img src="img/About-Us-Picture-4-230x170.jpg" alt="Teacher, volunteer and pupils"   class="img-responsive img-rounded"/>
 <br/>
  <img src="img/About-Us-Picture-3-230x170.jpg" alt="Class " class="img-responsive img-rounded"/>
 <br/>
<img src="img/About-Us-Picture-1-230x170.jpg" ALT="Students wall-painting","" class="img-responsive img-rounded" />
<br/>
<img src="img/About-Us-Picture-2-230x170.jpg" alt="Class" class="img-responsive img-rounded" />
<br/>  </div>
    </div>
  </div>
</div>
</body>
</html>
