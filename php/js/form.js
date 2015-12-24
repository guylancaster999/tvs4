 function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
function count_digits(s)
{
	var ctr=0, c="", i=0;
	for (i=0;i<s.length;i++)
	{
		c = s.charAt(i);
	    if (c>="0" && c<="9" )
		   	{ctr++;}
	}
return ctr;
}

function count_letters(s)
{
	var ctr=0, c="", i=0;

	for (i=0;i<s.length;i++)
	{
		c = s.charAt(i);
	    if ((c>="a" && c<="z" )||(c>="A" && c<="Z" ))
		   	{ctr++;}
	}
return ctr;
}

$(document).ready(function(){
  $("#tick1").hide();
  $("#cross1").hide();
  $("#tick2").hide();
  $("#cross2").hide();  
  $("#tick3").hide();
  $("#cross3").hide();  
  $("#tick4").hide();
  $("#cross4").hide(); 
  $("#tick5").hide();
  $("#cross5").hide();
  $("#sname").css("background-color","#EEE");
  $("#subject").css("background-color","#EEE");
  $("#phone").css("background-color","#EEE");
  $("#email").css("background-color","#EEE");
  $("#message").css("background-color","#EEE");
  $("#sname").mouseover(function(){
     $("#sname").css("background-color","white");
  }); 
  $("#sname").mouseleave(function(){
	sname=$(this).val();
	if( count_letters(sname) <2) 
	{
		$("#tick1").hide();
		$("#cross1").show();
		$("#error").text("Surname required");
    }
	else
	{
		$("#error").text("");
		$("#tick1").show();
		$("#cross1").hide();
	}
    $("#sname").css("background-color","#EEE");
  });
  
  $("#subject").mouseover(function(){
      $("#subject").css("background-color","white");
  }); 
  $("#subject").mouseleave(function(){
     if($(this).val().length <5) 
	{
		$("#tick4").hide();
		$("#cross4").show();
		$("#error").text("Subject required");
    }
	else
	{
		$("#tick4").show();
		$("#cross4").hide();
		$("#error").text("");
	}
   $("#subject").css("background-color","#EEE");
  });
  $("#phone").mouseover(function(){
     $("#phone").css("background-color","white");
  }); 
  $("#phone").mouseleave(function(){
		phone=$(this).val();
		digits=count_digits(phone);
		if(digits <7) 
		{
			$("#tick3").hide();
			$("#cross3").show();
            $("#error").text("Phone number required");
        }
		else
		{
			$("#tick3").show();
			$("#cross3").hide();
			$("#error").text("");
		}
    $("#phone").css("background-color","#EEE");
  });
  $("#email").mouseover(function(){
    $("#email").css("background-color","white");
  }); 
  $("#email").mouseleave(function(){
	email = $(this).val();
	if( !IsEmail(email))  
	{
		$("#tick2").hide();
		$("#cross2").show();
		$("#error").text("Valid email required");
    }
	else
	{
		$("#error").text("");
    	$("#tick2").show();
		$("#cross2").hide();
	}
    $("#email").css("background-color","#EEE");
   });
   $("#message").mouseover(function(){
      $("#message").css("background-color","white");
   }); 

   $("#message").mouseleave(function(){
	 if(count_letters($(this).val()) <3) 
	{
		$("#tick5").hide();
		$("#cross5").show();
		$("#error").text("Message required");
    }
	else
	{
	   $("#error").text("");
	   $("#tick5").show();
	   $("#cross5").hide();
	}
    $("#message").css("background-color","#EEE");
  });
});