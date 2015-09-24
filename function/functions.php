 <?php
 function hdr($t)
 {$ret='<head>
    <meta charset="utf-8">  
	<meta name="google-site-verification" content="Tj6-VKsJC5KuWsrl2eKbvK_C5Ga05ECCplULfzBr8Bo" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tyume Valley Schools - Educational support in Eastern Cape, South Africa - '.$t.' "/>
    <meta name="author" content="Guy Lancaster">
    <meta name="keywords" content="South, Africa, Tyume, Tyhume,Schools, Valley, Eastern, Cape, TVS, RSA,'.$t.'"/> 
    <title>Tyume Valley Schools - '.$t.'</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/main.css" rel="stylesheet">   
    <script src="js/main.js"></script>
 <script src="https://apis.google.com/js/platform.js" async defer></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script","facebook-jssdk"));
</script>
</head>';
return $ret;
 }
 function top_bit($t)
 {
	 $ret='<a name="top"></a>';
	 $ret.='<div class="row">
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
                  			<h2>'.$t.'</h2>
                      </div>
                </div>';
	 return $ret;
 }
 
 function foot()
 {$ret=' <div class="top">  	 
      <br/>
       <a class="btn" href="#top"> Top <span class="glyphicon  glyphicon-circle-arrow-up"></span></a>
      <br/>
       </div>';
 return $ret;
 }
 function menu($button="Homepage")
 {$ret='<div class="sidebar-nav">
           &nbsp;&nbsp;<img src="img/tvs.jpg" width="120" alt="Tyume Valley Schools">&nbsp; 
           <br/>
     	   <div class="newbutton" id="homepage"><a href="index.php" title="TVS Home page">Home Page</a></div> 
	       <div class="newbutton" id="aboutus"><a href="aboutus.php" title="Tyume Valley Schools :Origins&nbsp;&amp;&nbsp;Vision">Origins&nbsp;&amp;&nbsp;Vision</a></div> 
 	       <div class="newbutton" id="map"><a href="map.php" title="Tyume Valley Maps">Where&nbsp;we&nbsp;work</a></div> 
       <div class="newbutton" id="activities"><a href="activities.php" title="TVS Activities">Activities</a></div> ';

if($button=="Activities")
{	
 $ret.='<div id="activity_button">
 	<div class="redbutton"><a href="activities_resourcecentre.php" title="TVS Resource centre">Resource&nbsp;centre</a></div> 
 	<div class="redbutton"><a href="activities_studycamps.php" title="TVS Study camps" >Study&nbsp;Camps</a></div> 
 	<div class="redbutton"><a href="activities_it.php" title="TVS - IT teaching" >IT</a></div>
 	<div class="redbutton"><a href="activities_englishlanguage.php" title="TVS - English Language teaching">English</a></div> 
 	</div>';
}

$ret.='<div class="newbutton" id="news"><a href="news.php" title="TVS Newsletters" >Newsletters</a></div> 
       <div class="newbutton" id="partnerships"><a href="partnerships.php" title="TVS - School Links and Partnerships">School Links</a></div>'; 

if ($button=="Partnerships")
{
	$ret.='<div id="partnership_button">
      <div class="redbutton" ><a href="partnerships_aims.php" title="TVS - schools links - Aims">Aims</a></div>
	  <div class="redbutton" ><a href="partnerships_setup.php" title="TVS - schools links - Setting up Links">Setting up</a></div>
	  <div class="redbutton" ><a href="partnerships_seeking.php" title="TVS - schools links - Seeking Schools to link with">Seeking schools</a></div>	  
	  <div class="redbutton" ><a href="partnerships_exchanges.php" title="TVS - schools links - School Exchanges">Exchanges</a></div>
	  <div class="redbutton" ><a href="partnerships_topics.php" title="TVS - schools links - Topics">Topics</a></div>
	  <div class="redbutton" ><a href="partnerships_resources.php" title="TVS - schools links -  Links and Resources">Resources</a></div>
	  <div class="redbutton" ><a href="partnerships_settle.php" title="TVS - schools links -  Settle-Kwezana">Settle-Kwezana</a></div>
</div>';
}

 $ret.='<div class="newbutton" id="volunteering"><a href="volunteering.php" title="Tyume Valley Schools - Volunteering">Volunteering</a></div> 
 <div class="newbutton" id="committee"><a href="committee.php" title="TVS Committee">Committee</a></div>
 <div class="newbutton" id="fundraising"><a href="fundraising.php" title="TVS Fundraising"  >Fundraising</a></div>';
 
 if ($button=="Fundraising")
 {
	 $ret.='<div id="fundraising_button">
      <div class="redbutton" id="wills"><a href="wills.php" title="TVS Wills">Wills</a></div>
      </div>';
 }
 $ret.='<div class="newbutton" id="links"  ><a href="links.php" title="TVS Wills">Links</a></div>
 <div class="newbutton" id="photos"  ><a href="gallery.php" title="TVS Photos">Photo&nbsp;Gallery</a></div>';
 
 if($button=='Photos')
 {
	  $ret.='<div id="photo_button"> 
  <div class="redbutton"  ><a href="gallery_general.php" title="TVS -General Photo">General</a></div>
  <div class="redbutton"  ><a href="gallery_it.php" title="TVS - IT Training photos">IT</a></div>
  <div class="redbutton"  ><a href="gallery_studycamps.php" title="TVS - Study Camps Photos">Study&nbsp;Camp</a></div>
  <div class="redbutton"  ><a href="gallery_englishlanguage.php" title="TVS - English Language teaching photos">English</a></div>
 </div>';
 }
 
 $ret.='<div class="newbutton" id="contact"><a href="contact.php" title="TVS : contact us">Contact&nbsp;us</a></div>
   <div class="newbutton" id="sitemap" ><a href="sitemap.php" title="TVS Sitemap">Sitemap</a></div> ';
  $ret.='<br/>&nbsp;&nbsp;<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
&nbsp;&nbsp;<script>
!function(d,s,id)
{
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";
	if(!d.getElementById(id))
	 {
		 js=d.createElement(s);js.id=id;
		 js.src=p+"://platform.twitter.com/widgets.js";
		 fjs.parentNode.insertBefore(js,fjs);
	}
}
(document, "script","twitter-wjs");
</script>';
 $ret.="<br/>";
 $ret.='&nbsp;&nbsp;<div class="fb-share-button" data-href="http://www.tvschools.org.uk" data-layout="button_count"></div>
 <br/>
<div class="g-plusone" data-annotation="inline" data-width="200" data-href="http://www.tvschools.org.uk"></div>';
 return $ret;
 }
 ?>