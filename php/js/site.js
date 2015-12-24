function site()
{
	return  "http://www.tvschools.org.uk/";
}

function hdr(ttl)
	{
		ret='<!DOCTYPE html>';
		ret+='<html>';
		ret+='<head>';
		ret+='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		ret+='<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		ret+='<title>Tyume Valley Schools (TVS) South Africa - '+ttl+'</title>';
		ret+='<link rel="stylesheet" href="css/main.css" type="text/css" />';
		ret+='<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />';
		ret+='<link rel="icon" href="favicon.ico" type="image/x-icon" />';
		ret+='<meta name="keywords" content="South , Africa , Tyume, Schools, Valley, Eastern, Cape, TVS, RSA,'+ttl+' "/>';			
		ret+='<meta name="description" content="Tyume Valley Schools (TVS) - Educational support in Eastern Cape, South Africa"/>';
		ret+='<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
		ret+='<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>';
		ret+="</head>";
	 	ret+="<body >";
		ret+="<a name='top'></a>";
		ret+='<div class="logopos1" title="Tyume Valley Schools, Eastern Cape, South Africa"><img src="img/logo.jpg" alt="Tyume Valley Schools, Eastern Cape, South Africa" width="130" /></div>';
	 	ret+='<h1>Tyume&nbsp;Valley&nbsp;Schools</h1>';
		ret+='<h2>'+ttl+'</h2>';
		ret+='<div class="topbanner1">Registered&nbsp;Charity&nbsp;Number&nbsp;1103909</div>';
        return ret;
}
function menu()
{
		ret='<div class="menu" id="menu">';
		ret+='<div class="newbutton" id="homepage"><a href="'+site()+'index.php">Home Page</a></div>';
        ret+='<div class="newbutton" id="aboutus"><a href="'+site()+'aboutus.php" title="Origins&nbsp;&amp;&nbsp;Vision">Origins&nbsp;&amp;&nbsp;Vision</a></div>';
        ret+='<div class="newbutton" id="map"><a href="'+site()+'map.php" title="Maps">Where we work</a></div>';
        ret+='<div class="newbutton" id="activities"><a href="'+site()+'activities.php" id="activities">Activities</a></div>';
		ret+='<div id="activitybutton">';
       	ret+='<div class="redbutton"><a href="'+site()+'activities_resourcecentre.php" >Resource centre</a></div>';
       	ret+='<div class="redbutton"><a href="'+site()+'activities_studycamps.php" >Study&nbsp;Camps</a></div>';
       	ret+='<div class="redbutton"><a href="'+site()+'activities_it.php" >IT</a></div>';
       	ret+='<div class="redbutton"><a href="'+site()+'activities_englishlanguage.php" title="English Language teaching">English </a></div>';
		ret+='</div>';
		ret+='<div class="newbutton" id="news"><a href="'+site()+'news.php" title="Newsletters" >Newsletters</a></div>';
	    ret+='<div class="newbutton" id="volunteering"><a href="'+site()+'volunteering.php" >Volunteering</a></div>';
        ret+='<div class="newbutton" id="committee"><a href="'+site()+'committee.php" >Committee</a></div>';
        ret+='<div class="newbutton" id="fundraising"><a href="'+site()+'fundraising.php" >Fundraising</a></div>';
    	ret+='<div id="wills">';
        ret+='<div class="redbutton" id="wills"><a href="'+site()+'wills.php" >Wills</a></div>';
    	ret+='</div>';
		ret+='<div class="newbutton" id="links"><a href="'+site()+'links.php" >Links</a></div>';
        ret+='<div class="newbutton" id="contact"><a href="'+site()+'contact.php">Contact&nbsp;us</a></div> ';
      	ret+='<div class="newbutton" id="photos"><a href="'+site()+'gallery.php">Photo Gallery</a></div>';
    	ret+='<div id="photobutton">';
       	ret+='<div class="redbutton"><a href="'+site()+'gallery_general.php" title="General Photo">General</a></div>';
       	ret+='<div class="redbutton"><a href="'+site()+'gallery_it.php" title="IT Training">IT</a></div>';
       	ret+='<div class="redbutton"><a href="'+site()+'gallery_studycamps.php" title="Syudy Camps Photos">Study Camp</a></div>';
       	ret+='<div class="redbutton"><a href="'+site()+'gallery_englishlanguage.php" title="English Language teaching">English</a></div>';
		ret+='</div>';
	    return ret;
	}