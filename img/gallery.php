<?php 
require "function/functions.php";
print pageclass::hdr('Photo Gallery'); 
?>
<script language="javascript" src="js/main.js"></script>
<script language="javascript">
	mainbittop(440);  
</script>
<ul>
<li><a href="<?php print pageclass::host();?>gallery_general.php">General Photos</a>
<br/>
<br/>
</li>
<li><a href="<?php print pageclass::host();?>gallery_it.php">IT Training</a><br/>
<br/>
</li>
<li><a href="<?php print pageclass::host();?>gallery_studycamps.php">Hobbiton / Study Camps</a><br/>
<br/>
</li>
<li><a href="<?php print pageclass::host();?>gallery_englishlanguage.php">English Language Training</a><br/>
<br/>
</li>
</ul> 
</div>
<?php
print pageclass::displayphoto("leftcol1"," ","About-Us-Picture-1-230x170.jpg");
print pageclass::displayphoto("leftcol2","Hobbiton","hobbiton_230.jpg");
print pageclass::foot();
?>
 
 
