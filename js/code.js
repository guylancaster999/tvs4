 $(document).ready(function()
{
	var  hrf = window.location.href; 
	var partnership_flag = false;
	var activity_flag =false;
	var photo_flag = false;
	var fundraising_flag =false;
	if (hrf.search("gallery") != -1) 		 
	{ 
        photo_flag=true;
	}
	 
	if (hrf.search("activities") != -1) 		 
	{ 
        activity_flag=true;
	}
	  
	if (hrf.search("partnership") != -1) 		 
	 	 { partnership_flag=true;}
	  
	  if (hrf.search("will") != -1) 		 
	 	 { fundraising_flag=true;}
	  if (hrf.search("fundraising") != -1) 		 
	 	 { fundraising_flag=true;}
		 
	$("#fundraising").mouseover(function()
	  {      
	     fundraising_flag=true;
	  });
	
	if (partnership_flag)
    { 
		$("#partnership_button").show();
	}	
    else
    { 
		$("#partnership_button").hide();
	}
	if (activity_flag)  
	{	
      $("#activity_button").show();
	}
    else
    {
		$("#activity_button").hide();
	}
    if (fundraising_flag)
    { 
      $("#fundraising_button").show();
	}
    else
    {
		$("#fundraising_button").hide();
	}
    if (photo_flag)
	{
			$("#photo_button").show();
	}
    else
    {		
           $("#photo_button").hide();
    }
}); 

	$("#fundraising").mouseover(function()
	  {
	    $("#wills").show();
	   });
	   
	   
	   
	   $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-50854439-1', 'auto');
	ga('require', 'linkid');
	ga('send', 'pageview');
 