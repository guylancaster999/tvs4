// JavaScript Document
var host="http://www.tvschools.org.uk/";
var x='<div class="menu" id="menu">';
x+='<div class="newbutton" id="homepage">';
x+='<a href="'+host+'index.php">Home Page</a>';
x+='</div>';
x+='<div class="newbutton" id="aboutus">';
x+='<a href="'.host+'aboutus.php" title="Origins&nbsp;&amp;&nbsp;Vision">Origins&nbsp;&amp;&nbsp;Vision</a>';
x+='</div>';
x+='<div class="newbutton" id="map">';
x+='<a href="'+host+'map.php" title="Maps">Where we work</a>';
x+='</div>';
x+='<div class="newbutton" id="activities">';
x+='<a href="'+host+'activities.php">Activities</a>';
x+='</div>';
x+='<div id="activitybutton">';
x+='<div class="redbutton">';
x+='<a href="'+host+'activities_resourcecentre.php">Resource centre</a>';
x+='</div>';
x+='<div class="redbutton">';
x+='<a href="'+host+'activities_studycamps.php" >Study&nbsp;Camps</a>';
x+='</div>';
x+='<div class="redbutton">';
x+='<a href="'+host+'activities_it.php" >IT</a>';
x+='</div>';
x+='<div class="redbutton">';
x+='<a href="'+host+'activities_englishlanguage.php" title="English Language teaching">English Language</a>';
		x+='</div>';
		x+='</div>';
		x+='<div class="newbutton" id="news">';
		x+='<a href="'+host+'news.php" title="Newsletters" >Newsletters</a>';
		x+='</div>';
	    x+='<div class="newbutton" id="volunteering">';
		x+='<a href="'+host+'volunteering.php" >Volunteering</a></div>';
        x+='<div class="newbutton" id="committee"><a href="'+host+'committee.php" >Committee</a>';
		x+='</div>';
		
        x+='<div class="newbutton" id="fundraising">';
		x+='<a href="'+host+'fundraising.php" >Fundraising</a>';
		x+='</div>';
x+='<div id="fundsbutton">';
	    x+='<div class="redbutton" id="wills">';
		x+='<a href="'+host+'wills.php" >Wills</a>';
		x+='</div>';
x+='</div>';


	    x+='<div class="newbutton" id="links">';
		x+='<a href="'+host+'links.php" >Links</a>';
		x+='</div>';
        x+='<div class="newbutton" id="contact">';
		x+='<a href="'+host+'contact.php">Contact&nbsp;us</a>';
		x+='</div> ';
      	x+='<div class="newbutton" id="photos">';
		x+='<a href="'+host+'gallery.php">Photo Gallery</a>';
		x+='</div>';
    	x+='<div id="photobutton">';
       	x+='<div class="redbutton">';
		x+='<a href="'+host+'gallery_general.php" title="General Photo">General</a>';
		x+='</div>';
       	x+='<div class="redbutton">';
		x+='<a href="'+host+'gallery_it.php" title="IT Training">IT</a>';
		x+='</div>';
       	x+='<div class="redbutton">';
x+='<a href="'+host+'gallery_studycamps.php" title="Syudy Camps Photos">Study Camp</a>';
x+='</div>';
x+='<div class="redbutton">';
x+='<a href="'+host+'gallery_englishlanguage.php" title="English Language teaching">English Language</a>';
		x+='</div>';
	    x+='</div>';
	   	document.write(x);