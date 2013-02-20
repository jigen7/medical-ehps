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
.style50 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #2C3091;
}
.style51 {font-size: 16px}
.style52 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; font-size: 16px; }
</style>
</head>

<body onLoad="startTime()">
<?php
include 'config/config.php';
include 'config/opendb.php';
$id = $_GET['id'];
$sql = "SELECT * from tblempinfo WHERE EmployeeNo ='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
//print_r($row);

$sql="SELECT * FROM dependents WHERE EmployeeNo ='$id'";
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
<table width="899" height="1581" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>MEDICAL PROFILE CARD
          <input name="empnum" type="hidden" id="empnum" value="<?=$_GET['id']?>" />
</strong></p>
    </div></td>
  </tr>
  
  <tr>
    <td height="1542" valign="top" bordercolor="#B9E7F9" background="images1/bg.jpg" class="style50" scope="col">
	<table width="884" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="842" scope="col"><div align="right">
            <input name="vew" type="button" class="style31" id="vew3" onclick="javascript:window.location='medical_search.php'" value="Back to Employee Search"/>
        </div></th>
        <th width="42" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td scope="col"><span class="style51">Add Employee Medical Information</span></td>
        <td scope="col">&nbsp;</td>
      </tr>
    </table>
	<br>
	<FORM  action="medical_card_insert.php" method="post" enctype="multipart/form-data" name="medical">
<table width="100%" border="1" align="center">
  <tr>
    <td colspan="6" align="center"><strong>
      <input name="empnum" type="hidden" id="empnum" value="<?=$_GET['id']?>" />
    </strong></td>
  </tr>
  <tr>
    <td width="14%" class="style52">Name:</td>
    <td width="29%"><?=$row['LastName']?>, 
      <?=$row['FirstName']?> <?=$row['MidName']?></td>
    <td width="14%" class="style52">Age:</td>
    <td width="13%"><?=$row['Age']?></td>
    <td width="12%" class="style52">Sex:</td>
    <td width="18%"><?=$row['Sex']?></td>
  </tr>
  <tr>
    <td class="style52">BirthDate:</td>
    <td><?=$row['Birthdate']?></td>
    <td class="style52">Civil Status:</td>
    <td><?=$row['CivilStatus']?></td>
    <td class="style52">Blood Type:</td>
    <td><select name="blood_type" id="blood_type">
      <option value="" selected="selected"></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
    </select></td>
  </tr>
  <tr>
    <td class="style52">Address:</td>
    <td colspan="5"><?=$row['Address']?></td>
  </tr>
  <tr>
    <td class="style52">Section:</td>
    <td><input name="section" type="text" class="style50" id="section" size="40" /></td>
    <td class="style52">Position:</td>
    <td colspan="3"><input name="position" type="text" class="style50" id="position" size="40" /></td>
  </tr>
  <tr>
    <td class="style52">Contact No.</td>
    <td><input name="contact_no" type="text" class="style50" id="contact_no" size="20" /></td>
    <td class="style52">Landline No.</td>
    <td><input name="landline_no" type="text" class="style50" id="landline_no" size="20" /></td>
    <td class="style52">Mobile No:</td>
    <td><input name="mobile_no" type="text" class="style50" id="mobile_no" size="20" /></td>
  </tr>
  <tr>
    <td class="style52">Email Address:</td>
    <td colspan="5"><input name="email" type="text" class="style50" id="email" size="20" /></td>
  </tr>
  <tr bgcolor="#B9E7F9">
    <td colspan="6" class="style52">CONTACT PERSON/S IN CASE OF EMERGENCY</td>
  </tr>
  <tr>
    <td class="style52">Name:</td>
    <td><input name="contact_person_name" type="text" class="style50" id="contact_person_name" size="40" /></td>
    <td colspan="4" class="style52">Contact No. : 
      <input name="contact_person_no" type="text" class="style50" id="contact_person_no" size="40" /></td>
  </tr>
</table>
<table width="100%" border="1" align="center">
  <tr>
    <td width="26%" align="center" class="style52">Name of Dependents</td>
    <td width="24%" align="center" class="style52">Relationship</td>
    <td width="13%" align="center" class="style52">Age</td>
    <td width="14%" align="center" class="style52">Sex</td>
    <td width="11%" align="center" class="style52">Birthday</td>
    <td width="12%" align="center" class="style52">Action</td>
  </tr>
  <tr>
    <td align="center"><input name="dependent_name" type="text" class="style50" id="dependent_name" size="30" /></td>
    <td align="center"><input name="dependent_relationship" type="text" class="style50" id="dependent_relationship" size="30" /></td>
    <td align="center"><input name="dependent_age" type="text" class="style50" id="dependent_age" size="10" /></td>
    <td align="center"><select name="sex" class="style50" id="sex">
      <option value="" selected="selected"></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select></td>
    <td align="center"><input name="birthdate" type="text" class="style50" id="birthdate" size="15" /></td>
    <td align="center"><input name="button" type="submit" class="style31" id="button" value="Add Dependents" /></td>
  </tr>
  <?php 
  if($result2) {
  while($rows=mysql_fetch_array($result2)){ ?>
  <tr>
    <td align="center" class="style50"><?php echo $rows['name']?></td>
    <td align="center" class="style50"><?php echo $rows['relationship']?></td>
    <td align="center" class="style50"><?php echo $rows['age']?></td>
    <td align="center" class="style50"><?php echo $rows['sex']?></td>
    <td align="center" class="style50"><?php echo $rows['birthdate']?></td>
    <td align="center"><input name="button2" type="button" class="style31" onclick="javascript: if (confirm('Are you sure you want to delete this Information?')) window.location='medical_delete.php?id=<?= $rows['id']?>&amp;empnum=<?= $row['EmployeeNo']?>'" value="Delete" /></td>
  </tr>
    <?php } } ?>
</table>
<table width="100%" border="1" align="center">
  <tr bgcolor="#B9E7F9">
    <td colspan="4" align="left" class="style52">PERSONAL DOCTOR ( Cardiologist, Surgeon,Dermatologist, etc..)</td>
  </tr>
  <tr>
    <td colspan="4" class="style50"><?=$row['PersonalDoctor']?></td>
  </tr>
  <tr class="style52">
    <td colspan="2">A. MAINTENANCE MEDICINES TAKEN(include OTC drugs)</td>
    <td colspan="2">B. IMMUNIZATION / VACCINATION HX</td>
  </tr>
  <tr class="style50">
    <td colspan="2"><textarea name="maintenance_remarks" id="maintenance_remarks" cols="50" rows="5"></textarea></td>
    <td colspan="2"><textarea name="immunization_remarks" id="immunization_remarks" cols="50" rows="5"></textarea></td>
  </tr>
  <tr class="style52">
    <td colspan="2">C. HOSPITAL CONFINEMENT</td>
    <td colspan="2">D. SURGICAL OPERATION</td>
  </tr>
  <tr class="style50">
    <td colspan="2"><textarea name="hospital_remarks" id="hospital_remarks" cols="50" rows="5"></textarea></td>
    <td colspan="2"><textarea name="surgical_remarks" id="surgical_remarks" cols="50" rows="5"></textarea></td>
  </tr>
  <tr class="style52">
    <td colspan="2">E. HISTORY OF TRAUMA/ ACCIDENT</td>
    <td colspan="2">F. HISTORY OF BLOOD TRANSFUSION</td>
  </tr>
  <tr class="style50">
    <td colspan="2"><textarea name="trauma_remarks" id="trauma_remarks" cols="50" rows="5"></textarea></td>
    <td colspan="2"><textarea name="blood_remarks" id="blood_remarks" cols="50" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" class="style52">G. ALLERGIES ( FOODS/DRUGS/PETS)</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" class="style50"><textarea name="allergies_remarks" id="allergies_remarks" cols="60" rows="5"></textarea></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" class="style52">H. MEDICAL ILLNESSES(Put check if with Family Hx)</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="2%"><input name="chk_diabetes" type="checkbox" id="chk_diabetes" value="YES" /></td>
    <td width="52%">Diabetes Mellitus(DM)</td>
    <td width="2%"><input name="chk_myocardial" type="checkbox" id="chk_myocardial" value="YES" /></td>
    <td width="44%">Myocardial Infarction</td>
  </tr>
  <tr>
    <td><input name="chk_hypertension" type="checkbox" id="chk_hypertension" value="YES" /></td>
    <td>Hypertension</td>
    <td><input name="chk_peptic" type="checkbox" id="chk_peptic" value="YES" /></td>
    <td>Peptic Ulcer Disease</td>
  </tr>
  <tr>
    <td><input name="chk_heart" type="checkbox" id="chk_heart" value="YES" /></td>
    <td>Heart Disease</td>
    <td><input name="chk_kidney" type="checkbox" id="chk_kidney" value="YES" /></td>
    <td>Kidney Disease</td>
  </tr>
  <tr>
    <td><input name="chk_arthritis" type="checkbox" id="chk_arthritis" value="YES" /></td>
    <td>Arthritis I.e gout, rheumatoid</td>
    <td><input name="chk_congective" type="checkbox" id="chk_congective" value="YES" /></td>
    <td>Congective Heart Failure</td>
  </tr>
  <tr>
    <td><input name="chk_pulmonary" type="checkbox" id="chk_pulmonary" value="YES" /></td>
    <td>Pulmonary Tuberculosis (PTB)</td>
    <td><input name="chk_cancer" type="checkbox" id="chk_cancer" value="YES" /></td>
    <td>Cancer</td>
  </tr>
  <tr>
    <td><input name="chk_hepatitis" type="checkbox" id="chk_hepatitis" value="YES" /></td>
    <td>Hepatitis</td>
    <td><input name="chk_bleeding" type="checkbox" id="chk_bleeding" value="YES" /></td>
    <td>Bleeding Disorder</td>
  </tr>
  <tr>
    <td><input name="chk_thyroid" type="checkbox" id="chk_thyroid" value="YES" /></td>
    <td>Thyroid Disease</td>
    <td><input name="chk_stroke" type="checkbox" id="chk_stroke" value="YES" /></td>
    <td>Stroke (CVA)</td>
  </tr>
  <tr>
    <td><input name="chk_astma" type="checkbox" id="chk_astma" value="YES" /></td>
    <td>Asthma</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1" align="center">
  <tr bgcolor="#B9E7F9">
    <td colspan="2" class="style52">OB/GYNE HISTORY (FEMALE EMPLOYEE)</td>
    </tr>
  <tr>
    <td colspan="2" class="style52">LMP: 
      <input name="lmp" type="text" class="style50" id="lmp" size="40" /></td>
    </tr>
  <tr class="style52">
    <td colspan="2"><input name="no_pregnancy" type="text" class="style50" id="no_pregnancy" size="5" />
      # OF PREGNANCY:</td>
    </tr>
  <tr class="style52">
    <td colspan="2"><input name="no_livebirth" type="text" class="style50" id="no_livebirth" size="5" />
      # OF LIVE BIRTH:</td>
    </tr>
  <tr class="style52">
    <td width="29%">History of Contraceptive use </td>
    <td width="71%">&nbsp;</td>
  </tr>
  <tr class="style52">
    <td colspan="2"><input name="contraceptive" type="radio" id="radio" value="YES" />
YES
<input name="contraceptive" type="radio" id="radio2" value="NO" checked="checked" />
NO</td>
    </tr>
  <tr class="style52">
    <td colspan="2">WHEN?
      <input name="contraceptive_when" type="text" class="style50" id="contraceptive_when" size="40" /></td>
    </tr>
  <tr class="style52">
    <td colspan="2">TYPE ?    
      <input name="contraceptive_type" type="text" class="style50" id="contraceptive_type" size="40" /></td>
    </tr>
</table>
<table width="100%" border="1" align="center">
  <tr>
    <td bgcolor="#B9E7F9" class="style52">PERSONAL/SOCIAL HISTORY </td>
    </tr>
  <tr>
    <td class="style52"><input name="chk_smoking" type="checkbox" id="chk_smoking" value="YES" />
      SMOKING 
        
        <input name="smoking_sticks" type="text" id="smoking_sticks" size="2" />
        # Of Sticks/day
<input name="smoking_years" type="text" id="smoking_years" size="2" /> 
      # of Years </td>
    </tr>
  <tr>
    <td class="style52"><input name="chk_alcohol" type="checkbox" id="chk_alcohol" value="YES" /> 
      ALCOHOL BEVERAGE DRINKER 
        <input name="chk_beer" type="checkbox" id="chk_beer" value="YES" />
Beer  
<input name="chk_hard_drinks" type="checkbox" id="chk_hard_drinks" value="YES" />
Hard drinks
<input name="chk_wine" type="checkbox" id="chk_wine" value="YES" />
Wine <br />
Frequency / week
<input name="alcohol_frequency" type="text" class="style50" id="alcohol_frequency" size="30" /></td>
    </tr>
  <tr>
    <td class="style52"><input name="chk_drugs" type="checkbox" id="chk_drugs" value="YES" /> 
      Illicit Drug Use  (Specify what kind)
      <input name="drugs_specify" type="text" class="style50" id="drugs_specify" size="100" /></td>
  </tr>
  <tr>
    <td class="style52"><input type="checkbox" name="chk_physical" id="chk_physical" /> 
      Any forms of Physical Activity ( Pls. Describe)      </td>
  </tr>
  <tr>
    <td class="style52"><textarea name="physical_describe" cols="100" rows="2" class="style50" id="physical_describe"></textarea></td>
  </tr>
  <tr>
    <td class="style52"><input name="chk_diet" type="checkbox" id="chk_diet" value="YES" />  DIET ( PLS. DESCRIBE YOUR DIET)</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;
<input name="chk_diet_balance" type="checkbox" id="chk_diet_balance" value="YES" />
Well Balanced;each meal composed of meat/fish,vegetables and fruits.</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;
<input name="chk_diet_vegetarian" type="checkbox" id="chk_diet_vegetarian" value="YES" />
 Vegetarian</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="chk_diet_fish" type="checkbox" id="chk_diet_fish" value="YES" />
Mostly fish</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;
<input name="chk_meat" type="checkbox" id="chk_meat" value="YES" />
Mostly meat</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;
<input name="chk_lowfat" type="checkbox" id="chk_lowfat" value="YES" />
Low Fat, Low Salt</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;
<input name="chk_diabetic" type="checkbox" id="chk_diabetic" value="YES" />
 Diabetic Diet</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;OTHERS:
      <input name="diet_others" type="text" class="style50" id="diet_others" size="100" /></td>
  </tr>
  <tr>
    <td align="center"><input name="button" type="submit" class="style31" id="button" value="Submit Medical Profile Card" /></td>
  </tr>
</table>
</FORM></td>
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
