<?php require "function/functions.php";?>
<!doctype html>
<html lang="en">
<?php print hdr("Fundraising - Books for Tyume Valley Schools");?>
<body>
<script>
function recalc()
{
	book1   = parseInt(document.getElementById("book1").value);
	if (isNaN(book1))book1=0;
	document.getElementById("book1").value=book1;
	book1tot= book1 * 10;
	document.getElementById("book1tot").innerHTML = " £ "+book1tot;
	book2   = parseInt(document.getElementById("book2").value);
	if (isNaN(book2))book2 = 0;
	document.getElementById("book2").value=book2;
	book2tot = book2 * 10;
	document.getElementById("book2tot").innerHTML =" £ "+book2tot;
	book3   = parseInt(document.getElementById("book3").value);
	if (isNaN(book3))book3 = 0;
	document.getElementById("book3").value=book3;
	book3tot= book3 * 10;
	document.getElementById("book3tot").innerHTML =" £ "+ book3tot;
    booktot = book1tot + book2tot + book3tot;
	document.getElementById("booktot").innerHTML = " £ "+booktot;
	donation  = parseInt(document.getElementById("donation").value);
	if (isNaN(donation))donation=0;
	document.getElementById("donation").value=donation;
	grandtot=(booktot + 5 + donation);
	document.getElementById("grandtot").innerHTML = " £ "+grandtot;
 return;
}
</script>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Fundraising");?>
    </div>
      </div>
           <div id="page-content-wrapper" >
		    <?php print top_bit("Fundraising - Books for Tyume Valley Schools");?>
             
<table>
<tr>
<td><img src="doc/bk1.jpg" alt="Growing up in a Xhosa Village"/></td>
<td>&nbsp;</td>
<td><h3>Growing up in a Xhosa Village</h3><br/>
Archie Sibeko with Joyce Leeson<br/>
<br/>
TVS' president Archie Sibeko (Zola Zembe) has written a fascinating account of his childhood in Kwezana, one of the villages in Tyume Valley.
Kwezana is one of the schools that TVS works with.
<br/>
<br/>
Archie has written the book so that younger generations  can understand the traditional ways of Xhosa life - the seasonal rhythems of farming, the homesteads and the celebrations that bought villagers together.
It is a unique and fascinating account of a fast-disappearing world - as Archie says 'it is a piece of our history  that should not be lost and forgotten'.
<br/>
&pound;10  plus &pound;5 p+p (within the UK).</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td valign="top"><img src="doc/bk2.jpg" alt="Freedom in our Lifetime"/></td>
<td>&nbsp;</td>
<td valign="top"><h3>Freedom in our Lifetime</h3><br/>
Archie Sibeko with Joyce Leeson<br/>
<br/>
This is Archie's Autobiography. 
It describes the South Africa he grew up in; his involvement in the liberation movement  before the ANC sent him into exile.
He was a commander in MK, the ANC liberation before he took up  the struggle against apartheid through the British and international trades union movement.
<br/>
<br/>
&pound;10  plus &pound;5 p+p (within the UK).</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td valign="top"><img src="doc/bk3.jpg" alt="A fighting Union"/></td>
<td>&nbsp;</td>
<td valign="top"><h3>A Fighting Union</h3><br/>
Margaret Kiloh and Archie Sibeko<br/>
<br/>
An oral history of the South African Railway and Harbout Workers Union.
SARHWU is one of the oldest trades unions in South Africa.
It did not just fight for workers' rights &ndash; better wages and job security, for example.
Because the railway and harbour workers were employed by the state, the campaigns of their trade union were inextricably linked to the political struggle against apartheid.
No suprise then that many members and leaders of the SARHWUbecame members and leaders of the ANC.
<br/>
<br/>
&pound;10  plus &pound;5 p+p (within the UK).</td>
</tr>
</table>
		  <br/>
 		<div style="height			:56px;
	background-color:#00cc7b;
	color			:white;
	text-align		:center;
	font-size		:28pt;
	font-weight		:200;
	font-family		:Verdana, sans-serif;" >All proceeds go to Tyume Valley Schools</div>	<br/>
        	<div style="height			:56px;
	background-color:#00cc7b;
	color			:white;
	text-align		:center;
	font-size		:28pt;
	font-weight		:200;
	font-family		:Verdana, sans-serif;">Order Form</div>
			<div class="line1">I would like to order:</div>
			<BR/>
			<table cellpadding="20px" cellspacing="8px">
			<tr>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td class="line2">Growing up in a Xhosa Village&nbsp;</td>
				<td><input type="text" id="book1" size="4" value="0" onblur="recalc();"></td>
				<td class="line2">&nbsp;&nbsp;&nbsp;copies&nbsp;@&nbsp;&pound;10</td>
				<td id="book1tot"> £ 0</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>	
			<tr>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td  class="line2">Freedom in our Lifetime</td>
				<td><input type="text" id="book2" size="4" value="0"  onblur="recalc();" ></td>
				<td  class="line2">&nbsp;&nbsp;&nbsp;copies&nbsp;@&nbsp;&pound;10</td>
				<td id="book2tot"> £ 0</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td  class="line2">A Fighting Union</td>
				<td ><input type="text" id="book3" size="4" value="0"  onblur="recalc();" ></td>
				<td  class="line2">&nbsp;&nbsp;&nbsp;copies&nbsp;@&nbsp;&pound;10</td>
				<td id="book3tot"> £ 0</td>
			</tr>
			<TR>
				<td>&nbsp;</td>
			</TR>
 			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Subtotal</td>
				<td id="booktot"> £ 0</td>
			</tr>
			<TR>
				<td>&nbsp;</td>
			</TR>
 			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Donation&nbsp;to&nbsp;TVS&nbsp;&nbsp;</td>
				<td> £ <input type="text" id="donation" size="4"  onblur="recalc();" value="0" /></td>
			</tr>
			<TR>
				<td>&nbsp;</td>
			</TR>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Postage&nbsp;Packing&nbsp;&nbsp;</td>
				<td> £ 5</td>
			</tr>
			<TR>
				<td>&nbsp;</td>
			</TR>
			<tr>
				<td colspan="4">I&nbsp;enclose&nbsp;a&nbsp;cheque&nbsp;payable&nbsp;to&nbsp;TVS&nbsp;for&nbsp;&nbsp;</td>
				<td id="grandtot"> £ 5</td>
			</tr>
			</table>
			<br/>
<div class="line1">Delivery name &amp; address</div>
<table cellspacing="0" border="1">
<tr>
<td style = "width:600px;height:200px">&nbsp;
</td>
</tr>
</table>
            <br/>
<div class="line1">Telephone Number</div>
<table cellspacing="0" border="1">
<tr>
<td style = "width:600px;height:90px">&nbsp;
</td>
</tr>
</table>
<br/><br/>
<div class="line1">Please print and return the order form and cheque by post to:</div>
<blockquote>Tyume Valley Schools (TVS)
<br/>
51a Burnside Drive
<br/>
Manchester
<br/>
M19 2LT
</blockquote>	
		<div style="height			:56px;
	background-color:#00cc7b;
	color			:white;
	text-align		:center;
	font-size		:28pt;
	font-weight		:200;
	font-family		:Verdana, sans-serif;">Thankyou for your continued support</div>


			<?php print foot();?>
	     	</div>
       </div>
     </div>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>
