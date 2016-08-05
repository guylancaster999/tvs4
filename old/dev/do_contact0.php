<?php
$er="";
$sname=$_POST["sname"];
if (strlen( $sname)<2)
 {$er.=" *Short-name* ";}
$email=$_POST["email"];
if ( (strlen($email)<5) || (strpos ( $email, "@")=== false) )
  {$er.=" *Short-email* ";}
$phone=$_POST["phone"];
$subject=$_POST["subject"];
if (strlen( $subject)<2)
 {$er.=" *Subject-Required*";};
$message=$_POST["message"];
if (strlen( $message)<5)
 {$er.=" *Message-Required* ";}
if (strlen($phone)<7)
 {$er.=" *Phone-Required* ";}
else
{
	$nct = array();
    
	for ($i=0; $i<=9; $i++)
    {
		$c = chr(ord('0')+$i);
		$nct[$c]=0;
	}
	$dct=0;
    
	for ($i=0; $i<strlen($phone); $i++)
	{
		$c=substr($phone,$i,1);
		$nct[$c]++;
		$dct++;
	}
	if ($dct<7)
	{
		$er.=" *Valid-Phone-Required* ";
	}
	else
	{
		$difdigctr=0;
	
		for ($i=0; $i<=9; $i++)
		{
			$c=chr(ord('0')+$i);
			if ($nct[$c]>0)
			{
				$difdigctr++;
			}
		}
		if ($difdigctr<2)
      {
		 $er.=" *Valid-Phone-Required!* ";
	  }
	}
}

if (strlen($er)>0)
  {$link= 'Location: contact.php';
  $link.="?error=".$er;
  $link.="&sname=".$sname;
  $link.="&subject=".$subject;
  $link.="&email=".$email;
  $link.="&phone=".$phone;
  $link.="&message=".$message;
  header($link);
  exit;} 
$message =
"<html>
<head>
<title>Tyume Village Schools Email</title>
</head>
<body>
<table>
<tr><td>From&nbsp;&nbsp;</td><td>: ".$sname."</td></tr>
<tr><td>Email&nbsp;</td><td>: ".$email."</td></tr>
<tr><td>Phone&nbsp;</td><td>: ".$phone."</td></tr>
<tr><td>Message&nbsp;</td><td>: ".$message."</td></tr>
</table>
</body>
</html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <office@tvschools.org.uk>' . "\r\n";
//mail("office@tvschools.org.uk",$subject,$message,$headers);
mail("guylancaster@hotmail.com",$subject,$message,$headers);
//mail("caroline.glendinning@york.ac.uk",$subject,$message,$headers);
//mail("susancrichards@yahoo.co.uk",$subject,$message,$headers);
//mail("m.g.kiloh@open.ac.uk",$subject,$message,$headers);
header('Location: contact_ty.php');
exit;
?>