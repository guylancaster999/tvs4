 <?php
 function addSp($x)
 {
	return str_replace ("%20"," ",$x);
 }
 function removeSp($x)
 {
	return str_replace (" ","%20",$x);
 }
function hdr($t)
{
	 $ret='<head>
    <meta name="description" content="Tyume Valley Schools - Educational support in Eastern Cape, South Africa - '.$t.'"/>
    <meta name="author" content="Guy Lancaster"/>
    <meta name="keywords" content="South, Africa, Tyume, Tyhume,Schools, Valley, Eastern, Cape, TVS, RSA,'.$t.'"/>
    <title>Tyume Valley Schools - '.$t.'</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="css/main.css" rel="stylesheet"/>
    <script src="js/main.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
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
	 $ret='<a id="top"></a>';
	 $ret.='<div class="row">
                <div class="col-sm-11 col-11 col-md-11 col-lg-11">
                    <h1 class="h1"><a href="index.php">Tyume Valley Schools</a></h1>
                    <div class="reg">Registered Charity Number 1103909</div>
                </div>
                <div class="col-sm-1" title="Toggle menu">
                     <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" title="Toggle menu">
                          <span class="glyphicon glyphicon-align-justify"></span>
                     </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-12 col-md-12 col-lg-12">
          			<h2>'.addSp($t).'</h2>
                 </div>
            </div>';
	 return $ret;
 }
 function menu($button="Homepage")
 {
	 $ret='<div class="sidebar-nav">
           &nbsp;&nbsp;<img src="img/tvs.jpg" width="120" alt="Tyume Valley Schools, Eastern Cape, South Africa">&nbsp;
           <br/>
     	   <div class="newbutton" id="homepage"><a href="index.php" title="Tyume Valley Schools  Home page">Home Page</a></div>
	       <div class="newbutton" id="aboutus"><a href="aboutus.php" title="Tyume Valley Schools :Origins&nbsp;&amp;&nbsp;Vision">Origins&nbsp;&amp;&nbsp;Vision</a></div>
 	       <div class="newbutton" id="map"><a href="map.php" title="Tyume Valley Maps">Where&nbsp;we&nbsp;work</a></div>
       <div class="newbutton" id="activities"><a href="activities.php" title="Tyume Valley Schools Activities">Activities</a></div> ';

if($button=="Activities")
{
 $ret.='<div id="activity_button">
 	<div class="redbutton"><a href="activities_resourcecentre.php" title="Tyume Valley Schools  Resource centre">Resource&nbsp;centre</a></div>
 	<div class="redbutton"><a href="activities_studycamps.php" title="Tyume Valley Schools  Study camps" >Study&nbsp;Camps</a></div>
 	<div class="redbutton"><a href="activities_it.php" title="Tyume Valley Schools - IT teaching" >IT</a></div>
 	<div class="redbutton"><a href="activities_englishlanguage.php" title="Tyume Valley Schools - English Language teaching">English</a></div>
 	</div>';
}
$ret.='<div class="newbutton" id="news"><a href="news.php" title="Tyume Valley Schools Newsletters" >Newsletters</a></div>
  <div class="newbutton" id="partnerships"><a href="partnerships.php" title="Tyume Valley - School Links and Partnerships">School Links</a></div>';

if ($button=="Partnerships")
{
	$ret.='<div id="partnership_button">
 	  <div class="redbutton" ><a href="partnershipsPrinciples.php" title="Tyume Valley - schools links - Principles">Principles</a></div>
	  <div class="redbutton" ><a href="partnershipsSettingUp.php" title="Tyume Valley- Setting up a school partnership">Setting up</a></div>
	  <div class="redbutton" ><a href="partnershipsExchanges.php" title="Tyume Valley - schools links - Exchanges">Exchanges</a></div>
	  <div class="redbutton" ><a href="partnershipsActivities.php" title="Tyume Valley - schools links - Suggested partnership activities">Activities</a></div>
	  <div class="redbutton"><a href="partnershipsLinks.php" title="Tyume Valley Schools - Sources of help and support">Support</a></div>
	  <div class="redbutton"><a href="partnershipsSettle.php" title="Tyume Valley Schools links -  Settle/Kwezana">Settle–Kwezana</a></div>
	  <div class="redbutton" ><a href="partnershipsTyume.php" title="Tyume Valley - schools seeking partnership with a UK school">Tyume Schools</a></div>
</div>';
}
 $ret.='<div class="newbutton" id="volunteering"><a href="volunteering.php" title="Tyume Valley Schools - Volunteering in South Africa">Volunteering</a></div>';

if ($button=="Volunteering")
{
	$ret.='<div id="volunteering_button">
      <div class="redbutton" ><a href="volunteer2016.php" title="Tyume Valley Schools - volunteer in 2016">Volunteer 2016</a></div>
	  </div>';
}
 $ret.='<div class="newbutton" id="committee"><a href="committee.php" title="Tyume Valley Schools  Committee">Committee</a></div>
 <div class="newbutton" id="fundraising"><a href="fundraising.php" title="Tyume Valley  Fundraising">Fundraising</a></div>';

 if($button=='Fundraising')
 {
	  $ret.='<div id="fundraising_button">
    <div class="redbutton"><a href="books.php">Books</a></div>
    <div class="redbutton"><a href="2020walk.php">20 for 20 Walk</a></div>
    <div class="redbutton"><a href="wills.php">Wills</a></div>
    </div>';
}

$ret.='<div class="newbutton" id="links"  ><a href="links.php" title="Tyume Valley Schools -  Wills">Links</a></div>
 <div class="newbutton" id="photos"  ><a href="gallery.php" title="TVS Photos">Photo&nbsp;Gallery</a></div>';

 if($button=='Photos')
 {
	  $ret.='<div id="photo_button">
  <div class="redbutton"><a href="gallery_englishlanguage.php" title="TVS - English Language teaching photos">English teaching</a></div>
  <div class="redbutton"><a href="gallery_englishTraining.php" title="TVS - English Language Training">English training</a></div>
  <div class="redbutton"><a href="gallery_fundraising.php" title="TVS - Fundraising">Fundraising</a></div>
  <div class="redbutton"><a href="gallery_general.php" title="TVS -General  Photo">General</a></div>
  <div class="redbutton"><a href="gallery_it.php" title="TVS - IT Training photos">IT</a></div>
  <div class="redbutton"><a href="gallery_studycamps.php" title="TVS - Study Camps Photos">Study&nbsp;Camps</a></div>
 </div>';
 }
 $ret.='<div class="newbutton" id="contact"><a href="contact.php" title="Tyume Valley Schools - contact us">Contact&nbsp;us</a></div>
   <div class="newbutton" id="sitemap" ><a href="sitemap.php" title="Tyume Valley Schools  Sitemap">Sitemap</a></div> ';
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
 <br/>
<div class="g-plusone" data-annotation="inline" data-width="200" data-href="http://www.tvschools.org.uk"></div>';
 return $ret;
 }
 function clickPhotos()
 {
	 return '<div class="row">
              <div class="col-sm-12 col-md-12 clickphoto">
                   Click on Photos to view full size.
               </div>
         </div>';
 }
 function arrows($left="",$right="")
 {
	 $ret ='<div class="row">';
  	 $ret.='<div class="col-sm-1 col-md-1">'.$left.'</div>';
 	 $ret.='<div class="col-sm-10 col-md-10">&nbsp;</div>';
   	 $ret.='<div class="col-sm-1 col-md-1" >'.$right."</div>";
     $ret.='</div>';
	 return $ret;
 }
 function clickRet()
 {
	 $ret ='<div class="row">';
  	 $ret.='<div class="col-sm-1 col-md-1">&nbsp;</div>';
 	 $ret.='<div class="col-sm-10 col-md-10 clickphoto">Click on Photo to return</div>';
  	 $ret.='<div class="col-sm-1 col-md-1" >&nbsp;</div>';
     $ret.='</div>';
	 return $ret;
 }
 function foot()
 {
	 $ret='<div class="top">
				<a href="#top" id="topButton">
					Top&nbsp;<span class="glyphicon glyphicon-circle-arrow-up"></span>
				</a>
				<br/>
			</div>';
 return $ret;
 }
 function display($srcf,$srcd,$pbig,$psmall,$d,$tgtUrl)
{
	$ret ='<a href="'.$tgtUrl;
 	$ret.='?grp='.$srcd;
    $ret.='&amp;fromurl='.$srcf;
    $ret.='&amp;pic=img/'.$pbig;
    $ret.='&amp;descr='.$d.'" ';
    $ret.=' title="'.$d.' - Click for full-sized Picture">';
	$ret.='<img src="img/'.$psmall.'" ';
    $ret.=' alt="'.$d.'" ';
    $ret.=' class="img-responsive img-rounded block " />';
    $ret.='</a>';
    print($ret);
 }
  function displayPic($retUrl,$pgTtl,$id)
{
	$x 			= json_decode($_SESSION["gpics"],true);
 	$y 			= $x["gallery"][$id];
 	$picSmall	= $y["picSmall"];
	$picTtl		= $y["picTtl"];
	$ret 		='<a href="gallery_pic.php';
 	$ret		.='?pgttl='.removeSp($pgTtl);
    $ret		.='&amp;fromurl='.$retUrl;
    $ret		.='&amp;id='.$id.'" ' ;
    $ret		.=' title="'.addSp($picTtl.' - Click for full-sized Picture').'">';
	$ret		.='<img src="img/'.$picSmall.'" ';
    $ret		.=' alt="'.addSp($picTtl).'" ';
    $ret		.=' class="img-responsive img-rounded block " />';
    $ret		.='</a>';
	print($ret);
}
?>
