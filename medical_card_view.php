<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical Profile Card</title>
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
var dn="AM" 
if (h>12)
{
dn="PM"
h=h-12
//this is so the hours written out is 
//in 12-hour format, instead of the default //24-hour format.
}
if (h==0)
h=12
//this is so the hours written out 
//when hours=0 (meaning 12a.m) is 12
if (m<=9)
m="0"+m
if (s<=9)
s="0"+s
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s+" "+dn;
t=setTimeout('startTime()',1000);
}

function checkTime(i)
{
if (i<10)
  {
  i=i;
  }
return i;
}
</script>
<style type="text/css">
input {
 background-color: lightblue;
}
textarea {
	 background-color: lightblue;
}
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style10 {font-size: x-small}
.style17 {	font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman";
	color: #FFFFFF;
}
.style19 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-small;
	color: #FFFFFF;
}
.style20 {font-size: small}
.style21 {font-size: xx-small}
.style24 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"}
.style25 {color: #06029D}
.style27 {font-size: small; font-family: Verdana, Arial, Helvetica, sans-serif; color: #06029D; }
.style28 {font-size: x-small; font-family: Verdana, Arial, Helvetica, sans-serif; color: #282B96; }
.style29 {font-size: x-small; color: #282B96; }
.style30 {color: #282B96}
.style31 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; }
.style33 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: #FFFFFF; }
.style35 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; color: #FFFFFF; font-weight: bold; }
.style43 {font-size: 24px}
.style9 {color: #2C3091; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
body {
	margin-left: 50px;
	margin-top: 0px;
	margin-right: 50px;
	margin-bottom: 0px;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #0CB1F3;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style44 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style45 {color: #2C3091}
.style47 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; font-size: 16px; }
</style>
</head>

<body onLoad="startTime()">
<?php
include 'config/config.php';
include 'config/opendb.php';
include 'checkval.php';
$id = $_GET['id'];

$sql = "SELECT * from cards WHERE id ='$id'";
$result = mysql_query($sql);
$rowCards = mysql_fetch_assoc($result);

$empid = $rowCards['EmployeeNo'];
$sql = "SELECT * from tblempinfo WHERE EmployeeNo ='$empid'";
$result3 = mysql_query($sql);
$row = mysql_fetch_assoc($result3);
//print_r($row);

$sql="SELECT * FROM dependents WHERE EmployeeNo ='$empid'";
$result2=mysql_query($sql);

?>
<table width="900" background="images1/banner1.jpg">
  <tr>
    <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
    <th height="21" scope="col">&nbsp;</th>
    <th width="13" height="21" scope="col">&nbsp;</th>
    <th width="179" scope="col"><div align="right" class="style19"><a href="homepage.php">Home</a></div></th>
    <th width="180" scope="col"><div align="left" class="style19"><a href="logout.php">| Logout</a></div></th>
    <th width="88" scope="col"><div align="left"></div></th>
  </tr>
  <tr>
    <th height="94" colspan="7" scope="col">&nbsp;</th>
  </tr>
  <tr class="style21">
    <th width="159" height="24" scope="col"><div align="left" class="style28">
        <?php
	$tomorrow = mktime(0,0,0,date("m"),date("d"));
	echo(date("l F d, Y") );
	?>
    </div></th>
    <td width="11" align="left" class="style27" scope="col"><div align="center" class="style29">|</div></td>
    <td width="236" align="left" class="style9" scope="col"><div align="left">
        <div id="txt">
          <div align="right">
            <div id="txt">
              <div align="right"><span class="style1"><span class="style10"><span class="style20"><span class="style24"><span class="style25"><span class="style30"></span></span></span></span></span></span></div>
            </div>
          </div>
        </div>
    </div></td>
    <td colspan="4" align="left" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="903" cellpadding="0">
  <tr class="style17" background="images1/tab01.jpg">
    <td width="150" height="28" scope="col"><div align="center"><span class="style35"><a href="cardex.php">Employee Cardex</a> </span></div></td>
    <td width="250" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"><a href="medical_search.php">Health Profile and Records</a> </div>
        <div align="center"></div></td>
    <td width="200" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"><a href="insert_emp.php">Employee Information</a> </div></td>
    <td width="140" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"></div>
        <div align="center"><a href="utilities.php">Utilities</a></div></td>
    <td width="141" background="images1/tab01.jpg" class="style35" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="899" height="1397" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>MEDICAL PROFILE CARD </strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="1358" valign="top" background="images1/bg.jpg" class="style44" scope="col">
	<table width="884" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="842" scope="col"><div align="right">
            <input name="vew" type="button" class="style31" id="vew3" onclick="javascript:window.location='medical_search.php'" value="Back to Employee Search"/>
        </div></th>
        <th width="42" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td scope="col">&nbsp;</td>
        <td scope="col">&nbsp;</td>
      </tr>
    </table>
  	<form  action="medical_card_insert.php" method="post" enctype="multipart/form-data" name="medical" class="style44 style1 style45" id="medical">
      <table width="100%" border="1" align="center" bordercolor="#B9E7F9">
        <tr>
          <td colspan="6" align="center">            <input name="empnum" type="hidden" id="empnum" value="<?=$_GET['id']?>" />          </td>
        </tr>
        <tr>
          <td width="14%" class="style47">Name:</td>
          <td width="29%"><?=$row['LastName']?>
            ,
              <?=$row['FirstName']?>
              <?=$row['MidName']?></td>
          <td width="14%" class="style47">Age:</td>
          <td width="13%"><?=$row['Age']?></td>
          <td width="12%" class="style47">Sex:</td>
          <td width="18%"><?=$row['Sex']?></td>
        </tr>
        <tr>
          <td class="style47">BirthDate:</td>
          <td><?=$row['Birthdate']?></td>
          <td class="style47">Civil Status:</td>
          <td><?=$row['CivilStatus']?></td>
          <td class="style47">Blood Type:</td>
          <td><?=$rowCards['blood_type']?></td>
        </tr>
        <tr>
          <td class="style47">Address:</td>
          <td colspan="5"><?=$row['Address']?></td>
        </tr>
        <tr>
          <td class="style47">Section:</td>
          <td><?=$rowCards['section']?></td>
          <td class="style47">Position:</td>
          <td colspan="3"><?=$rowCards['position']?></td>
        </tr>
        <tr>
          <td class="style47">Contact No.</td>
          <td><?=$rowCards['contact_no']?></td>
          <td class="style47">Landline No.</td>
          <td><?=$rowCards['landline_no']?></td>
          <td class="style47">Mobile No:</td>
          <td><?=$rowCards['mobile_no']?></td>
        </tr>
        <tr>
          <td class="style47">Email Address:</td>
          <td colspan="5"><?=$rowCards['email']?></td>
        </tr>
        <tr bgcolor="#B9E7F9">
          <td colspan="6" class="style47">CONTACT PERSON/S IN CASE OF EMERGENCY</td>
        </tr>
        <tr>
          <td class="style47">Name:</td>
          <td><?=$rowCards['contact_person_name']?></td>
          <td colspan="4" class="style47">Contact No. :
              <?=$rowCards['contact_person_no']?></td>
        </tr>
      </table>
      <table width="100%" border="1" align="center" bordercolor="#B9E7F9">
        <tr bgcolor="#B9E7F9" class="style47">
          <td width="26%" align="center">Name of Dependents</td>
          <td width="24%" align="center">Relationship</td>
          <td width="13%" align="center">Age</td>
          <td width="14%" align="center">Sex</td>
          <td width="11%" align="center">Birthday</td>
        </tr>
        <?php 
  if($result2) {
  while($rows=mysql_fetch_array($result2)){ ?>
        <tr>
          <td align="center" class="style45"><?php echo $rows['name']?></td>
          <td align="center" class="style45"><?php echo $rows['relationship']?></td>
          <td align="center" class="style45"><?php echo $rows['age']?></td>
          <td align="center" class="style45"><?php echo $rows['sex']?></td>
          <td align="center" class="style45"><?php echo $rows['birthdate']?></td>
        </tr>
        <?php } } ?>
      </table>
      <table width="100%" border="1" align="center" bordercolor="#B9E7F9">
        <tr>
          <td colspan="4" align="left" class="style47">PERSONAL DOCTOR ( Cardiologist, Surgeon,Dermatologist, etc..)</td>
        </tr>
        <tr>
          <td colspan="4"><?=$row['PersonalDoctor']?></td>
        </tr>
        <tr>
          <td colspan="2" class="style47">A. MAINTENANCE MEDICINES TAKEN(include OTC drugs)</td>
          <td colspan="2" class="style47">B. IMMUNIZATION / VACCINATION HX</td>
        </tr>
        <tr>
          <td colspan="2"><?=$rowCards['maintenance_remarks']?></td>
          <td colspan="2"><?=$rowCards['immunization_remarks']?></td>
        </tr>
        <tr>
          <td colspan="2" class="style47">C. HOSPITAL CONFINEMENT</td>
          <td colspan="2" class="style47">D. SURGICAL OPERATION</td>
        </tr>
        <tr>
          <td colspan="2"><?=$rowCards['hospital_remarks']?></td>
          <td colspan="2"><?=$rowCards['surgical_remarks']?></td>
        </tr>
        <tr class="style47">
          <td colspan="2">E. HISTORY OF TRAUMA/ ACCIDENT</td>
          <td colspan="2">F. HISTORY OF BLOOD TRANSFUSION</td>
        </tr>
        <tr>
          <td colspan="2"><?=$rowCards['trauma_remarks']?></td>
          <td colspan="2"><?=$rowCards['blood_remarks']?></td>
        </tr>
        <tr>
          <td colspan="2" class="style47">G. ALLERGIES ( FOODS/DRUGS/PETS)</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><?=$rowCards['allergies_remarks']?></td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="style47">H. MEDICAL ILLNESSES(Put check if with Family Hx)</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="2%"><?=$rowCards['chk_diabetes']?></td>
          <td width="52%">Diabetes Mellitus(DM)</td>
          <td width="2%"><?=$rowCards['chk_myocardial']?></td>
          <td width="44%">Myocardial Infarction</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_hypertension']?></td>
          <td>Hypertension</td>
          <td><?=$rowCards['chk_peptic']?></td>
          <td>Peptic Ulcer Disease</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_heart']?></td>
          <td>Heart Disease</td>
          <td><?=$rowCards['chk_kidney']?></td>
          <td>Kidney Disease</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_arthritis']?></td>
          <td>Arthritis I.e gout, rheumatoid</td>
          <td><?=$rowCards['chk_congective']?></td>
          <td>Congective Heart Failure</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_pulmonary']?></td>
          <td>Pulmonary Tuberculosis (PTB)</td>
          <td><?=$rowCards['chk_cancer']?></td>
          <td>Cancer</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_hepatitis']?></td>
          <td>Hepatitis</td>
          <td><?=$rowCards['chk_bleeding']?></td>
          <td>Bleeding Disorder</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_thyroid']?></td>
          <td>Thyroid Disease</td>
          <td><?=$rowCards['chk_stroke']?></td>
          <td>Stroke (CVA)</td>
        </tr>
        <tr>
          <td><?=$rowCards['chk_astma']?></td>
          <td>Asthma</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="100%" border="1" align="center" bordercolor="#B9E7F9">
        <tr bgcolor="#B9E7F9">
          <td colspan="2" class="style47">OB/GYNE HISTORY (FEMALE EMPLOYEE)</td>
        </tr>
        <tr class="style47">
          <td colspan="2">LMP:
              <?=$rowCards['lmp']?>
          </td>
        </tr>
        <tr class="style47">
          <td colspan="2"><?=$rowCards['no_pregnancy']?>
        # OF PREGNANCY:</td>
        </tr>
        <tr class="style47">
          <td colspan="2"><?=$rowCards['no_livebirth']?>
        # OF LIVE BIRTH:</td>
        </tr>
        <tr class="style47">
          <td width="23%">History of Contraceptive use </td>
          <td width="77%">&nbsp;</td>
        </tr>
        <tr class="style47">
          <td colspan="2"><?=$rowCards['contraceptive']?></td>
        </tr>
        <tr class="style47">
          <td colspan="2">WHEN ?
              <?=$rowCards['contraceptive_when']?></td>
        </tr>
        <tr class="style47">
          <td colspan="2">TYPE ?
              <?=$rowCards['contraceptive_type']?></td>
        </tr>
      </table>
      <table width="100%" border="1" align="center" bordercolor="#B9E7F9">
        <tr>
          <td bgcolor="#B9E7F9" class="style47">PERSONAL/SOCIAL HISTORY </td>
        </tr>
        <tr>
          <td class="style47"><?=$rowCards['chk_smoking']?>
        SMOKING
          <?=$rowCards['smoking_sticks']?>
        # Of Sticks/day
        <?=$rowCards['smoking_years']?>
        # of Years </td>
        </tr>
        <tr>
          <td class="style47"><?=$rowCards['chk_alcohol']?>
        ALCOHOL BEVERAGE DRINKER
          <?=$rowCards['chk_beer']?>
        Beer
        <?=$rowCards['chk_hard_drinks']?>
        Hard drinks
        <?=$rowCards['chk_wine']?>
        Wine <br />
        Frequency / week
        <?=$rowCards['alcohol_frequency']?></td>
        </tr>
        <tr>
          <td class="style47"><?=$rowCards['chk_drugs']?>
        Illicit Drug Use (Specify what kind)
          <?=$rowCards['drugs_specify']?></td>
        </tr>
        <tr>
          <td class="style47"><?=$rowCards['chk_physical']?>
        Any forms of Physical Activity ( Pls. Describe) </td>
        </tr>
        <tr>
          <td class="style47"><?=$rowCards['physical_describe']?></td>
        </tr>
        <tr>
          <td class="style47"><?=$rowCards['chk_diet']?>
        DIET ( PLS. DESCRIBE YOUR DIET)</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;
              <?=$rowCards['chk_diet_balance']?>
        Well Balanced;each meal composed of meat/fish,vegetables and fruits.</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;
              <?=$rowCards['chk_diet_vegetarian']?>
        Vegetarian</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;
              <?=$rowCards['chk_diet_fish']?>
        Mostly fish</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;
              <?=$rowCards['chk_meat']?>
        Mostly meat</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;
              <?=$rowCards['chk_lowfat']?>
        Low Fat, Low Salt</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;
              <?=$rowCards['chk_diabetic']?>
        Diabetic Diet</td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;OTHERS:
              <?=$rowCards['diet_others']?></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<table width="900" height="105">
  <tr>
    <th height="65" background="images1/tab02.jpg" class="style33" scope="col"><p>Copyright 2011 . HJuzSolutions </p>
        <p><a href="http://www.hjuzsolutions.web.officelive.com">www.hjuzsolutions.web.officelive.com</a></p></th>
  </tr>
</table>
<br />
</body>
</html>
