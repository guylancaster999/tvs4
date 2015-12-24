<?php require "function/functions.php";
    
function school($school="",$photo="",$principal="",$link="",$principallink="",$phone="",$email="",$address="",
         $contact="",$roll="",$description="")
{
	$school.=" School";
	$ret='<tr>';
	$ret.='<td><span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;</td>';
	$ret.='<td colspan="3"><b>'.$school.'</b></td>';
	if(strlen($photo)>0)
	{
		$ret.='<td rowspan="7">';
		$ret.='<img src="img/'.$photo.'" alt="'.$school.'" class="img-responsive   img-rounded  picright" />';
		$ret.='</td>';
	}	
	else
	{
		$ret.='<td>&nbsp;</td>';
	}	
	$ret.='</tr>';
	
	if (strlen($principal)>0)
	{
		$ret.='<tr>
					<td></td>
					<td>Principal</td>
					<td>&nbsp;:&nbsp;</td>
					<td'.(strlen($photo)==0? ' colspan="2" ':' ').'>'.$principal.'</td>
				</tr>';
	}	
	if (strlen($link)>0)
	{
		$ret.='<tr>
					<td></td>
					<td>Link teacher</td>
					<td>&nbsp;:&nbsp;</td>
					<td '.(strlen($photo)==0? ' colspan="2" ':' ').'>'.$link.'</td>
			</tr>';
	}
	if (strlen($principallink)>0)
	{
		$ret.='<tr>
					<td></td>
					<td>Principal&nbsp;&amp;&nbsp;Link&nbsp;Teacher</td>
					<td>&nbsp;:&nbsp;</td>
					<td'.(strlen($photo)==0? ' colspan="2" ':' ').'>'.$principallink.'</td>
				</tr>';
	}
if (strlen($phone)>0)
{
	$ret.='	<tr>
				<td></td>
				<td>Phone</td>
				<td>&nbsp;:&nbsp;</td>
				<td'.(strlen($photo)==0? ' colspan="2" ':' ').'>'.$phone.'</td>
			</tr>';
}
/*
if (strlen($email)>0)
{
	$ret.='	<tr>
				<td></td>
				<td>Email</td>
				<td>&nbsp;:&nbsp;</td>
				<td'.(strlen($photo)==0? ' colspan="2" ':' ').'><a href="mailto:'.$email.'" title="Email '.$school.'" >'.$email.'</a></td>
			</tr>';
}
*/
	$ret.='<tr>
				<td>&nbsp;</td>
				<td>Address</td>
				<td>&nbsp;:&nbsp;</td>
				<td '.(strlen($photo)==0 ? ' colspan="2" ':' ').'>'.$school.', '.$address.', Eastern Cape, South Africa</td>
			</tr>';
	/*
	$ret.='<tr>
				<td>&nbsp;</td>
				<td>Contact by</td>
				<td>&nbsp;:&nbsp;</td>
				<td'.(strlen($photo)==0? ' colspan="2" ':' ').'>'.$contact.'</td>
			</tr>';
	*/
	$ret.='<tr>
				<td>&nbsp;</td>
				<td>Roll</td>
				<td>&nbsp;:&nbsp;</td>
			    <td'.(strlen($photo)==0? ' colspan="2" ':' ').'>'.$roll.'</td>
				</tr>';
	$ret.='	<tr>
				<td>&nbsp;</td>
				<td colspan="4">'.$description.'</td>
			</tr>';
	$ret.='	<tr><td>&nbsp;</td></tr>';
	print $ret;
	return;
}
?>
<!doctype html>
<html lang="en">
<?php print hdr("School Links - Tyume Valley");?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
     	   <?php print menu("Partnerships");?>
    </div>
    </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php print top_bit("School Links - Tyume Valley schools seeking partnerships with a UK school");?>
                 <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 block">
Because internet connections in Tyume are not always reliable, please contact Jim Lewis <a href="mailto:">headlewis2001@yahoo.co.uk</a> 0114 2509174 for help in contacting a Tyume Valley School.
<br/><br/>
					<table>
						<?php 
						school("Amabhele SS","photo1_140.jpg","Mr T E Mlumbi (acting)","Zama A Grootboom – grade 12 teacher, ages 17 - 23","","0027-732686508","27823028758@vodamail.co.za","P O Box 259, Alice 5700","Post &amp; Email","70 pupils, aged 13-23","The school was established in 1962 and has falling rolls but good academic results. The school describes how it wishes to expose learners to &quot;New pastures of knowledge...&quot;");

						school("Auckland Primary","auckland2015_140.jpg","","","Mr S M Chitha","0027-837494676","smchitha@webmail.co.za","P O Box 1114, Alice 5700","Email","136 pupils, Reception to Grade 7 (aged 5-12)","The school is keen on sports and has access to six laptops but none permanently at the school. The pupils are keen on a variety of sports.");
						
    					school("Binfield Park Primary","","Sonwabo Dianga","Somdaka Nombuzo (Grade 4 teacher- 9-10 year olds)","","0027-837261511","sdiango@gmail.com","P O Box 841, Alice 5700","Email","101 pupils, Reception to Grade 7","The school encourages skills leadership and has class representatives. They engage in a variety of sports.	They have poor facilities; recently the kitchen area was destroyed in a storm.");

						school("Dyamala Primary","photo3_140.jpg","","","Mr C Makasi","0027-739639860", "clivemakhasi@gmail.com","P O Box 726, Alice 5700","Email","45 pupils, Reception to Grade 7","The school has access to a library/resource centre and a computer suite. The new principal is keen to make changes and improvements. The school has poor toilet facilities.");

						school("Eluthu L/H Primary","","",""," Ms Boniswa Mashibini","0027-833678940","boniswa.mashibini@gmail.com","P O Box 724, Alice 5700","Email","80 pupils, Reception to Grade 7","Maths and science are the schools’ priorities and they also wish to develop learners’ IT skills");

						school("Enkenkwezini SS","","","","Mrs N N Jacobs","0027-824228718","enkwenkwezisss@gmail.com","P O Box 726, Alice 5700","Email","127 pupils, aged 13-18","The school has good academic results. It has help from student teachers who are studying at the nearby Fort Hare University in Alice. The school promotes sport and seeks to develop its IT work.");

						school("George Mqalo Secondary","georgemqalo_140.jpg","T T Mblele","Mrs B F Mabubebuse (Grade 12 teacher ages 16-22)","","0027-765643744","ndlelathabile@gmail.com","P O Box 457, Alice 5700","Email","98 pupils, aged 13-22","The school is experiencing falling roles. It had a link with a UK school but lost this through staffing changes. A link would help to raise the morale of staff through exchange of ideas and contact with teachers in the UK. Pupils would also learn more about global issues. The school is poorly resourced. Click <A href='https://www.youtube.com/watch?v=OAwcgUBs47c'>here</a> for Youtube.");       

						school("Gqumahasha Combined","GqumahashePrimarySchool_140.jpg","","","Ms Lulu Pinda","0027-837699382","lulu.pinda@gmail.com","P O Box 1028, Alice 5700","Email","168 pupils, aged 5 -16","The school is proud of its partnership between staff, governors and pupils. The school is involved in extra-curricular activities aimed at preserving traditional culture. It has access to an amphitheatre constructed nearby.");

						school("Hopefield L/H Primary","Picture-21.jpg","","","T D Qoma","0027-722020219","tobi@employite.co.za","P O Box 2168, King Williams Town 5700","Post or Email","50 pupils, Reception to Grade 7","The school is in a very deprived village. The main incomes are pensions and child grants. The school has started to develop a computer lab but hail storms damaged the roof a year ago. Facilities are poor.");

						school("Mabandla Primary","mabandla2011_140.jpg","Vuyelwa Viola Guzana","Saki Quinette","","0027-406531378","","P O Box 201, Alice 5700","Post","60 pupils, Reception to Grade 7","The school is especially proud of the achievements of Grade 3 (age 8-9). Pupils take part in a number of sports activities. The school has poor facilities, for example its’ pit toilets are dangerous. It wishes to improve students’ learning in IT.");

						school("Melani L/H Primary","","Michael Peter Mthuthuzeli","Miss T O Mguni (Grade 4 teacher, aged 9-10)","","0027-725818570","27823048263@vodamail.co.za","P O Box 745, Alice 5700","Email","108 pupils, aged 5-14",
						"The school pursues cultural activities, for example dance and drama. It also pursues a range of sporting activities");

						school("Ncera Primary","","","","Miss Lulama (Lulu) Koni","0027-835948258","lulamakoni@gmail.com","P O Box 72, Alice 5700","Email","64 pupils, aged 4-13","The school undertakes extra-curricular activities, including participation in music competitions. The school wishes to develop students’ IT skills");

						school("Ncera Zantsi Primary","ncerazantsi_140.jpg","C N Sijako","C A Mandla (Grade 3 teacher ages 8-9)","",
						"0027-83234027","ncerezantsi.pschool@gmail.com","P O Box 355, Alice 5700","Post","70 pupils, aged 5 -13","Pupils are interested in athletics and cricket. The school has competed in maths, reading and drama competitions. There are staff shortages that make it difficult to deliver all subjects");

						school("Novumee Junior Primary","","N. Mabandla", "N G Masekwana (Grade 4 teacher ages 9-12)","","0027-837582676","","P O Box 136, Alice 5700","Post","48 pupils, aged 5-12","The school undertakes traditional music and dance. The facilities are poor; it has no running water, toilets, playground or electricity. Their motto is &quot;The Sky is the limit&quot;.");

						school("Nqwiliso Tyal L/H Primary","","Miss N L Nqini","Mrs N L Sodlaka (Grade 4 teacher, ages 9-10)","","0027-835249720","200200649@edu.ecprov.gov.za","P O Box 993, Alice 5700","Post","79 pupils","The school supports sports and indigenous games and is aiming to start a vegetable garden.");

						school("Ntulikazi Primary","","Mrs Manga (acting)","Mr X A Calana","","0027-825180194,0027-836641926","(200)200065@vodamail.co.za","P O Box 39, Alice 5700","Email","280 pupils, aged 4 to 14 years","The school has in the past been linked with a school in the UK and Mr Calana has been on an exchange visit. The school is one of the largest in the Valley and recently suffered severe damage when a tornado ripped off the roof");

						school("Thembani L/H Primary","","","","Noluthando A Nqini","0027-826630222","","P O Box 168, Alice 5700",
						"Post","40 pupils, aged 5-14","The school is small; three grades are taught in one room. The school teaches mini cricket and takes part in sports fixtures with other schools.");
						?>
					</table>
					<?php print foot();?> 	
				</div>
			</div>                  
           </div>
        </div>
        </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="js/code.js"></script>
</body>
</html>