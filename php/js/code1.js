 $(document).ready(function()
{
	$("#photobutton").hide();
	 $("#wills").hide();
	 $("#activitybutton").hide();
	 $("#guide").hide();
	 $("#setup").hide();
	 $("#seeking").hide();
	 $("#resources").hide();
	 $("#settle").hide();
	 
      hrf = window.location.href;
      
	 if (hrf.search("gallery") != -1) 
		{ $("#photobutton").show(); }
	 if  (hrf.search("photo") != -1)
		{ $("#photobutton").show(); }
	 if (hrf.search("fundraising") != -1) 
	    {  $("#wills").show();	}
  	 if (hrf.search("wills") != -1)
	 	 { $("#wills").show(); }
	 
  	 if ((hrf.search("setup") != -1)||
	     (hrf.search("guide") != -1)||
	     (hrf.search("seeking") != -1)||
    	 (hrf.search("settle") != -1)||
		 (hrf.search("partnerships") != -1)||
	     (hrf.search("resources") != -1))		 
	 	 { 
		   $("#setup").show(); 
  	 	   $("#guide").show(); 
		   $("#seeking").show();
	 	   $("#settle").show(); 
	 	   $("#resources").show(); 
		  }
	
    if  (hrf.search("activities") != -1)
	 	{ $("#activitybutton").show(); 	}	 
		$("#homepage").mouseover(function()
	    {$("#activitybutton").hide();
     	$("#wills").hide();
		$("#guide").hide();
        $("#setup").hide();
		$("#seeking").hide();
		$("#settle").hide();
		$("#resources").hide();
	    $("#photobutton").hide();   });
		
	$("#map").mouseover(function()
	    {$("#activitybutton").hide();
		$("#wills").hide();
		 $("#setup").hide();
	     $("#guide").hide();
		$("#seeking").hide();
		$("#settle").hide();
		$("#resources").hide();
	    $("#photobutton").hide(); });

	 $("#aboutus").mouseover(function()
	   {$("#activitybutton").hide();
	   $("#wills").hide();
		 $("#setup").hide();
	   $("#guide").hide();
		$("#seeking").hide();
		$("#settle").hide();
		$("#resources").hide();
	   	$("#photobutton").hide();   });
	
	$("#news").mouseover(function()
	   {$("#activitybutton").hide();
	   $("#wills").hide();
		 $("#setup").hide();
	   $("#guide").hide();
		$("#seeking").hide();
		$("#settle").hide();
		$("#resources").hide();
	   $("#photobutton").hide();   });
	
	$("#newsletters").mouseover(function()
	  {$("#activitybutton").hide();
	  $("#wills").hide();
		$("#guide").hide();
	    $("#setup").hide();
		$("#seeking").hide();
		$("#settle").hide();
		$("#resources").hide();
	   $("#photobutton").hide();  });
 
     $("#links").mouseover(function()
	  {$("#activitybutton").hide();
	  $("#wills").hide();
		 $("#setup").hide();
		$("#seeking").hide();
	   $("#guide").hide();
	   $("#settle").hide();
		$("#resources").hide();
	   $("#photobutton").hide();  });
	   
	$("#fundraising").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").show();
		$("#guide").hide();
		$("#seeking").hide();
	    $("#setup").hide();
		$("#settle").hide();
		$("#resources").hide();
	   $("#photobutton").hide();   });
	      
	$("#partnerships").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").hide();
		$("#guide").show();
		$("#seeking").show();
 	    $("#setup").show();
		$("#settle").show();
		$("#resources").show();
	    $("#photobutton").hide();   });
	$("#guide").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").hide();
		$("#guide").show();
		$("#seeking").show();
 	    $("#setup").show();
		$("#settle").show();
		$("#resources").show();
	    $("#photobutton").hide();   });
		
		$("#settle").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").hide();
		$("#guide").show();
		$("#seeking").show();
 	    $("#setup").show();
		$("#settle").show();
		$("#resources").show();
	    $("#photobutton").hide();   });
		
		$("#setup").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").hide();
		$("#guide").show();
		$("#seeking").show();
 	    $("#setup").show();
		$("#settle").show();
		$("#resources").show();
	    $("#photobutton").hide();   });
		
	 $("#volunteering").mouseover(function()
	  { $("#activitybutton").hide();
	  $("#wills").hide();
		 $("#setup").hide();
	   $("#guide").hide();
	   		$("#seeking").hide();
			$("#settle").hide();
		$("#resources").hide();
	  $("#photobutton").hide();   });
$("#resources").mouseover(function()
	  {$("#activitybutton").hide();
	    $("#wills").hide();
		$("#guide").show();
		$("#seeking").show();
 	    $("#setup").show();
		$("#settle").show();
		$("#resources").show();
	    $("#photobutton").hide();   });
  $("#committee").mouseover(function()
	 { $("#activitybutton").hide();
	 $("#wills").hide();
		$("#guide").hide();
	   $("#setup").hide();
	    $("#seeking").hide();
		 $("#settle").hide();
		$("#resources").hide();
	   $("#photobutton").hide();   });

  $("#contact").mouseover(function()
	{$("#activitybutton").hide();
	$("#wills").hide();
		$("#guide").hide();
		 $("#setup").hide();	
	$("#settle").hide();
		$("#resources").hide();
		$("#seeking").hide();
	$("#photobutton").hide();	 });

  $("#activities").mouseover(function()
	    {$("#activitybutton").show(); 
		$("#wills").hide();
		$("#guide").hide();
		 $("#setup").hide();
	   		$("#seeking").hide();
        $("#settle").hide();
		$("#resources").hide();
		$("#photobutton").hide();});
       $("#photobutton").mouseover(function()
	 {$("#photobutton").show(); 
	 $("#wills").hide();
		$("#guide").hide();
				$("#seeking").hide();
        $("#settle").hide();
		$("#resources").hide();
     $("#activitybutton").hide();});
 $("#setup").hide();
	   
	$("#photos").mouseover(function()
	 {$("#photobutton").show();
	 $("#wills").hide(); 
 $("#setup").hide();
 		$("#seeking").hide();
$("#settle").hide();
		$("#resources").hide();
	   		$("#guide").hide();
	 $("#activitybutton").hide(); });
}); 