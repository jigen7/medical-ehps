<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical Information</title>
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
<script src="js_validator.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style10 {font-size: x-small}
.style17 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman";
	color: #FFFFFF;
}
.style19 {font-family: Verdana, Arial, Helvetica, sans-serif;
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
.style51 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; font-size: 16px; }
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
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #05A7E8;
	text-decoration: none;
}
a:active {
	color: #FFFFFF;
	text-decoration: none;
}
-->
</style>
</head>

<body onLoad="startTime()">

<?php
include 'config/config.php';
include 'config/opendb.php';
include 'checkval.php';
$id = $_GET['id'];

$sql = "SELECT * from records WHERE id='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
//print_r($row);

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
<table width="899" height="514" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43">EMPLOYEE MEDICAL INFORMATION </p>
    </div></td>
  </tr>
  <tr>
    <td height="475" valign="top" background="images1/bg.jpg" class="style27" scope="col"><form action="medical_insert.php" method="post" enctype="multipart/form-data" name="medical" id="medical">
      <table width="853" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th width="842" scope="col"><div align="right">
              <input name="vew" type="button" class="style31" id="vew3" onclick="javascript:window.location='medical_search.php'" value="Back to Employee Search"/>
          </div></th>
          <th width="11" scope="col">&nbsp;</th>
        </tr>
      </table>&nbsp;
      <table width="80%"  border="1" align="center" bordercolor="#B9E7F9" background="images1/bg.jpg" style="border-width: 2px 2px 2px 2px;border-spacing: 1px;
	border-style: solid solid solid solid;border-color: #B9E7F9 #B9E7F9 #B9E7F9 #B9E7F9;
	border-collapse: collapse;background-color: white;">
        <tr>
          <td width="340" class="style51"></td>
          <td width="231" align="center"><img src="show.php?id=<?=$row['id']?>" /> </td>
        </tr>
        <tr>
          <td class="style51">Height (cm)</td>
          <td><?=$row['height']?></td>
        </tr>
        <tr>
          <td class="style51">Weight (kg)</td>
          <td><?=$row['weight']?></td>
        </tr>
        <tr>
          <td class="style51">Blood Type</td>
          <td><?=$row['blood_type']?></td>
        </tr>
        <tr>
          <td class="style51">Chest Xray ( N-normal or I-Impression )</td>
          <td><?=$row['chest_xray']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;</td>
          <td><?=$row['chest_xray_remarks']?></td>
        </tr>
        <tr>
          <td class="style51">ECG (N-Normal or R-Remarks)</td>
          <td><?=$row['ecg']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;</td>
          <td><?=$row['ecg_remarks']?></td>
        </tr>
        <tr>
          <td class="style51">FBS (mg/dl)</td>
          <td <?=checkval("fbs",$row['fbs'])?>><?=$row['fbs']?></td>
        </tr>
        <tr>
          <td class="style51">Total Cholesterol (mg/dl)</td>
          <td <?=checkval("total_cholesterol",$row['total_cholesterol'])?>><?=$row['total_cholesterol']?></td>
        </tr>
        <tr>
          <td class="style51">ALT(SGOT) (U/L)</td>
          <td><?=$row['alt_sgot']?></td>
        </tr>
        <tr>
          <td class="style51">ALT(SGPT) (U/L)</td>
          <td <?=checkval("alt_sgpt",$row['alt_sgpt'])?>><?=$row['alt_sgpt']?></td>
        </tr>
        <tr>
          <td class="style51">Urinalysis N- normal</td>
          <td><?=$row['urinalysis']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Albumin</td>
          <td><?=$row['albumin']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glucose</td>
          <td><?=$row['glucose']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RBC (hpf)</td>
          <td><?=$row['rbc']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pus Cells (hpf)</td>
          <td><?=$row['pus_cells']?></td>
        </tr>
        <tr>
          <td class="style51">Fecalysis (Yes- ova or parasite seen or No- no ova or parasite seen)</td>
          <td><?=$row['fecalysis']?></td>
        </tr>
        <tr>
          <td class="style51">CBC</td>
          <td><?=$row['cbc']?></td>
        </tr>
        <tr>
          <td class="style51">HDL/CHOL (mg/dl)</td>
          <td <?=checkval("hdl_chol",$row['hdl_chol'])?>><?=$row['hdl_chol']?></td>
        </tr>
        <tr>
          <td class="style51">LDL/CHOL (mg/dl)</td>
          <td <?=checkval("ldl_chol",$row['ldl_chol'])?>><?=$row['ldl_chol']?></td>
        </tr>
        <tr>
          <td class="style51">TRIGLYCERIDES (mg/dl)</td>
          <td <?=checkval("triglycerydes",$row['triglycerydes'])?>><?=$row['triglycerydes']?></td>
        </tr>
        <tr>
          <td class="style51">URIC ACID (mg/dl)</td>
          <td <?=checkval("uric_acid",$row['uric_acid'])?>><?=$row['uric_acid']?></td>
        </tr>
        <tr>
          <td class="style51">UREA (mg/dl)</td>
          <td <?=checkval("urea",$row['urea'])?>><?=$row['urea']?></td>
        </tr>
        <tr>
          <td class="style51">CREATININE (mg/dl)</td>
          <td <?=checkval("creatinine",$row['creatinine'])?>><?=$row['creatinine']?></td>
        </tr>
        <tr>
          <td class="style51">Pulmonary Function Test (PFT) ( N-normal or I- Interpretation)</td>
          <td><?=$row['pft']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;</td>
          <td><?=$row['pft_remarks']?></td>
        </tr>
        <tr>
          <td class="style51">Audiometric Exam (N-normal or R-remarks)</td>
          <td><?=$row['audiometric']?></td>
        </tr>
        <tr>
          <td class="style51">&nbsp;</td>
          <td><?=$row['audiometric_remarks']?></td>
        </tr>
        <tr>
          <td class="style51">Tetanus Toxoid</td>
          <td><?=$row['tetanus']?></td>
        </tr>
        <tr>
          <td class="style51">Hepa B</td>
          <td><?=$row['hepa']?></td>
        </tr>
        <tr>
          <td class="style51">Flu Vaccine</td>
          <td><?=$row['flu']?></td>
        </tr>
        <tr>
          <td colspan="2" align="center" class="style51">&nbsp;</td>
        </tr>
        <tr bgcolor="#B9E7F9">
          <td class="style51"><strong>Note: Normal Range</strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">FBS 70-110 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">Total Cholesterol 150-200 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">HDL/CHOL 26-67 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">LDL/CHOL 0-130 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">TRIGLYCERIDES 30-135 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">URIC ACID 3.7-7.6 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">UREA 8-20 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">CREATININE 0.8-2.0 mg/dl</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style27">ALT(SGPT) 0-42 UNITS</td>
          <td>&nbsp;</td>
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
