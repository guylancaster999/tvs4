<?php
require "function/functions.php";
print pageclass::hdr('Contact us'); 
?>
<script  src="js/form.js"></script>
<div class="mainbittop">
<table>
	<tr> 
		<td>Address:</td>
		<td>Tyume Valley Schools,<br/>
         51a Burnside Drive, <br/>
         Manchester<br/>
          M19 2LT</td>
	</tr>
	<tr>
		<td>Tel:</td>
		<td>07844 185 930.</td>
    </tr>
	<tr>
		<td>E-Mail:</td>
		<td><a href="mailto:office@tvschools.org.uk">office@tvschools.org.uk</a></td>
    </tr>
</table>
<br/> 
<h3>Your Message <span id="error" style="color:red"><?php print $_GET["error"];?>&nbsp;</span></h3>
<a  id="form"></a>
<form action="do_contact0.php" method="POST" title="Send us a message"> 
	<table>
		<tr>
			<td>Name:</td>
			<td>
            	<input type="text" id="sname" name="sname"  size="70" required value="<?php print $_GET["sname"]; ?>"/>
            </td>
        	<td>
        		<img  src="img/tick.jpg" alt="ok" id="tick1" height="16"/>
            	<img src="img/cross.jpg" alt="not ok" id="cross1" height="16"/></td>
        </tr>
		<tr>
			<td>Email:</td>
			<td>
            	<input type="email" required id="email" name="email" size="70" value="<?php print $_GET["email"]; ?>" />
            </td>
       		<td>
            	<img src="img/tick.jpg" alt="ok" id="tick2" height="16"/>
        		<img src="img/cross.jpg" alt="not ok" id="cross2" height="16"/>
           	</td>
		</tr>
		<tr>
			<td>Phone:</td>
			<td>
            	<input type="text" id="phone"  name="phone" size="70"  value="<?php print $_GET["phone"];?>"/>
            </td>
        	<td>
            	<img src="img/tick.jpg" alt="ok" id="tick3"  height="16"/>
        		<img src="img/cross.jpg" alt="not ok" id="cross3" height="16"/>
            </td>
		</tr>
		<tr>
			<td>Subject:</td>
			<td> 
            	<input type="text" id="subject"  name="subject" size="70" required  value="<?php print $_GET["subject"];?>" />			
            </td>
        	<td>
        		<img src="img/tick.jpg" alt="ok" id="tick4"  height="16"/>
        		<img src="img/cross.jpg" alt="not ok" id="cross4" height="16"/>
			</td>
		</tr>
		<tr>
			<td>Enquiry:</td>
			<td>
            	<textarea rows="6" cols="60" id="message" name="message" required>
				<?php print $_GET["message"];?>
                </textarea>
            </td>
        	<td >
      	  		<img src="img/tick.jpg" alt="ok" id="tick5"  height="16"/>
        		<img src="img/cross.jpg" alt="ok" id="cross5" height="16"/>
             </td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<th><input type="submit"  value="Send"/></th>
            <td></td>
		</tr>
	</table>
</form>
<div class="smallprint">* Your details will not be passed to any thrid parties.</div>
<?php print pageclass::foot0();?>

</div>
<?php
print pageclass::displayphoto("leftcol1","Teacher, volunteer and pupils","About-Us-Picture-4-230x170.jpg");
print pageclass::displayphoto("leftcol2","Class","About-Us-Picture-3-230x170.jpg");
print pageclass::displayphoto("leftcol3","Class","About-Us-Picture-2-230x170.jpg" );
print pageclass::displayphoto("leftcol4","Students wall-painting","About-Us-Picture-1-230x170.jpg");
print pageclass::foot();
?>