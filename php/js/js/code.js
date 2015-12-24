 $(document).ready(function()
{
	$("#photobutton").hide();
	 $("#wills").hide();
	 $("#activitybutton").hide();
      hrf = window.location.href;
     if (hrf.search("gallery") != -1) 
		{ $("#photobutton").show(); }
	 if  (hrf.search("photo") != -1)
		{ $("#photobutton").show(); }
	 if (hrf.search("fundraising") != -1) 
	  {  $("#wills").show();	}
  	 if (hrf.search("wills") != -1)
	 	 { $("#wills").show(); }
    if  (hrf.search("activities") != -1)
	 	{ $("#activitybutton").show(); 	}
	  		$("#homepage").mouseover(function()
	    {$("#activitybutton").hide();
     	$("#wills").hide();
	    $("#photobutton").hide();   });
		
	$("#map").mouseover(function()
	    {$("#activitybutton").hide();
		$("#wills").hide();
	    $("#photobutton").hide(); });

	 $("#aboutus").mouseover(function()
	   {$("#activitybutton").hide();
	   $("#wills").hide();
	   	$("#photobutton").hide();   });
	
	$("#news").mouseover(function()
	   {$("#activitybutton").hide();
	   $("#wills").hide();
	   $("#photobutton").hide();   });
	
	$("#newsletters").mouseover(function()
	  {$("#activitybutton").hide();
	  $("#wills").hide();
	   $("#photobutton").hide();  });
   
     $("#links").mouseover(function()
	  {$("#activitybutton").hide();
	  $("#wills").hide();
	   $("#photobutton").hide();  });
	   
	$("#fundraising").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").show();
	   $("#photobutton").hide();   });
	 
	 $("#volunteering").mouseover(function()
	  { $("#activitybutton").hide();
	  $("#wills").hide();
	  $("#photobutton").hide();   });

  $("#committee").mouseover(function()
	 { $("#activitybutton").hide();
	 $("#wills").hide();
	  $("#photobutton").hide();   });

  $("#contact").mouseover(function()
	{$("#activitybutton").hide();
	$("#wills").hide();
	$("#photobutton").hide();	 });

  $("#activities").mouseover(function()
	    {$("#activitybutton").show(); 
		$("#wills").hide();
		$("#photobutton").hide();});

   $("#photobutton").mouseover(function()
	 {$("#photobutton").show(); 
	 $("#wills").hide();
     $("#activitybutton").hide();});

	$("#photos").mouseover(function()
	 {$("#photobutton").show();
	 $("#wills").hide(); 
	 $("#activitybutton").hide(); });
}); 