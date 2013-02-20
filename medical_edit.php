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
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #23B6EA;
	text-decoration: none;
}
a:active {
	color: #FFFFFF;
	text-decoration: none;
}
.style46 {
	color: #282B96;
	font-size: 14px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style48 {color: #282B96; font-size: 16; }
.style50 {
	font-size: 16px;
	font-weight: bold;
}
.style52 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; font-size: 16px; }
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #2C3091; }
-->
</style>
</head>

<body onLoad="startTime()">

<?php
include 'config/config.php';
include 'config/opendb.php';

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
<table width="899" height="1581" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>EMPLOYEE MEDICAL INFORMATION </strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="1542" valign="top" background="images1/bg.jpg" class="style46" scope="col"><table width="853" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th colspan="2" scope="col"><div align="right">
            <input name="vew" type="button" class="style31" id="vew3" onclick="javascript:window.location='medical_search.php'" value="Back to Employee Search"/>
        </div></th>
        <th width="11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td width="72" scope="col">&nbsp;</td>
        <td width="770" class="style48" scope="col">Edit Employee Medical Information</td>
        <td scope="col">&nbsp;</td>
      </tr>
    </table><br>      <form action="medical_update.php" method="post" enctype="multipart/form-data" name="medical" id="medical">
        <table width="80%"  border="1" align="center" bordercolor="#B9E7F9" background="images1/bg.jpg" style="border-width: 2px 2px 2px 2px;border-spacing: 1px;
	border-style: solid solid solid solid;border-color: #B9E7F9 #B9E7F9 #B9E7F9 #B9E7F9;
	border-collapse: collapse;background-color: white;">
          <tr>
            <td width="340" class="style52"><input type="hidden" name="hiddenId" id="hiddenId" value="<?=$row['id']?>"/>
                <input name="empnum" type="hidden" id="empnum" value="<?=$_GET['empnum']?>" /></td>
            <td width="231" align="center"><img src="show.php?id=<?=$row['id']?>" /> </td>
          </tr>
          <tr>
            <td class="style52">Height (cm)</td>
            <td><input name="height" type="text" class="style46" id="mname5" value="<?=$row['height']?>" size="10" /></td>
          </tr>
          <tr>
            <td class="style52">Weight (kg)</td>
            <td><input name="weight" type="text" class="style46" id="mname6" value="<?=$row['weight']?>" size="10"/></td>
          </tr>
          <tr>
            <td class="style52">Blood Type</td>
            <td><select name="blood_type" class="style46" id="blood_type">
                <option value="A" <? if($row['blood_type'] == "A"){ echo "selected='selected'"; } ?>>A</option>
                <option value="B" <? if($row['blood_type'] == "B"){ echo "selected='selected'"; } ?>>B</option>
                <option value="AB" <? if($row['blood_type'] == "AB"){ echo "selected='selected'"; } ?>>AB</option>
                <option value="O" <? if($row['blood_type'] == "O"){ echo "selected='selected'"; } ?>>O</option>
            </select></td>
          </tr>
          <tr>
            <td class="style52">Chest Xray ( N-normal or I-Impression )</td>
            <td><select name="chest_xray" class="style46" id="chest_xray">
                <option value="Normal" <? if($row['chest_xray'] == "Normal"){ echo "selected='selected'"; } ?>>Normal</option>
                <option value="Impression" <? if($row['chest_xray'] == "Impression"){ echo "selected='selected'"; } ?>>Impression</option>
            </select></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;</td>
            <td><textarea name="chest_xray_remarks" cols="50" rows="3" class="style46" id="chest_xray_remarks"><?=$row['chest_xray_remarks']?>
      </textarea></td>
          </tr>
          <tr>
            <td class="style52">ECG (N-Normal or R-Remarks)</td>
            <td><select name="ecg" class="style46" id="ecg">
                <option value="Normal" <? if($row['ecg'] == "Normal"){ echo "selected='selected'"; } ?>>Normal</option>
                <option value="Remarks" <? if($row['ecg'] == "Remarks"){ echo "selected='selected'"; } ?>>Remarks</option>
            </select></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;</td>
            <td><textarea name="ecg_remarks" cols="50" rows="3" class="style46" id="ecg_remarks"><?=$row['ecg_remarks']?>
      </textarea></td>
          </tr>
          <tr>
            <td class="style52">FBS (mg/dl)</td>
            <td><input name="fbs" type="text" class="style46" id="mname7" value="<?=$row['fbs']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">Total Cholesterol (mg/dl)</td>
            <td><input name="total_cholesterol" type="text" class="style46" id="mname8" value="<?=$row['total_cholesterol']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">ALT(SGOT) (U/L)</td>
            <td><input name="alt_sgot" type="text" class="style46" id="mname9" value="<?=$row['alt_sgot']?>" size="15"/></td>
          </tr>
          <tr>
            <td class="style52">ALT(SGPT) (U/L)</td>
            <td><input name="alt_sgpt" type="text" class="style46" id="mname10" value="<?=$row['alt_sgpt']?>" size="15"/></td>
          </tr>
          <tr>
            <td class="style52">Urinalysis N- normal</td>
            <td><input name="urinalysis" type="text" class="style46" id="mname11" value="<?=$row['urinalysis']?>" size="15"/></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Albumin</td>
            <td><input name="albumin" type="text" class="style46" id="mname12" value="<?=$row['albumin']?>" size="15"/></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glucose</td>
            <td><input name="glucose" type="text" class="style46" id="mname13" value="<?=$row['glucose']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RBC (hpf)</td>
            <td><input name="rbc" type="text" class="style46" id="mname14" value="<?=$row['rbc']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pus Cells (hpf)</td>
            <td><input name="pus_cells" type="text" class="style46" id="mname15" value="<?=$row['pus_cells']?>" size="15"/></td>
          </tr>
          <tr>
            <td class="style52">Fecalysis (Yes- ova or parasite seen or No- no ova or parasite seen)</td>
            <td><select name="fecalysis" class="style46" id="fecalysis">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select></td>
          </tr>
          <tr>
            <td class="style52">CBC</td>
            <td><input name="cbc" type="text" class="style46" id="mname16" value="<?=$row['cbc']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">HDL/CHOL (mg/dl)</td>
            <td><input name="hdl_chol" type="text" class="style46" id="mname25" value="<?=$row['hdl_chol']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">LDL/CHOL (mg/dl)</td>
            <td><input name="ldl_chol" type="text" class="style46" id="mname26" value="<?=$row['ldl_chol']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">TRIGLYCERIDES (mg/dl)</td>
            <td><input name="triglycerydes" type="text" class="style46" id="mname27" value="<?=$row['triglycerydes']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">URIC ACID (mg/dl)</td>
            <td><input name="uric_acid" type="text" class="style46" id="mname28" value="<?=$row['albumin2']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">UREA (mg/dl)</td>
            <td class="style46"><input name="urea" type="text" class="style46" id="mname29" value="<?=$row['urea']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">CREATININE (mg/dl)</td>
            <td class="style46"><input name="creatinine" type="text" class="style46" id="mname30" value="<?=$row['creatinine']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">Pulmonary Function Test (PFT) ( N-normal or I- Interpretation)</td>
            <td class="style46"><select name="pft" class="style46" id="pft">
                <option value="Normal" <? if($row['pft'] == "Normal"){ echo "selected='selected'"; } ?>>Normal</option>
                <option value="Impression" <? if($row['pft'] == "Impression"){ echo "selected='selected'"; } ?>>Impression</option>
            </select></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;</td>
            <td class="style46"><textarea name="pft_remarks" cols="50" rows="3" class="style46" id="pft_remarks"><?=$row['pft_remarks']?>
      </textarea></td>
          </tr>
          <tr>
            <td class="style52">Audiometric Exam (N-normal or R-remarks)</td>
            <td class="style46"><select name="audiometric" class="style46" id="audiometric">
                <option value="Normal" <? if($row['audiometric'] == "Normal"){ echo "selected='selected'"; } ?>>Normal</option>
                <option value="Remarks" <? if($row['audiometric'] == "Remarks"){ echo "selected='selected'"; } ?>>Remarks</option>
            </select></td>
          </tr>
          <tr>
            <td class="style52">&nbsp;</td>
            <td class="style46"><textarea name="audiometric_remarks" cols="50" rows="3" class="style46" id="audiometric_remarks"><?=$row['audiometric_remarks']?>
      </textarea></td>
          </tr>
          <tr>
            <td class="style52">Tetanus Toxoid</td>
            <td class="style46"><input name="tetanus" type="text" class="style46" id="mname32" value="<?=$row['tetanus']?>" size="15" /></td>
          </tr>
          <tr>
            <td class="style52">Hepa B</td>
            <td class="style46"><input name="hepa" type="text" class="style46" id="mname33" value="<?=$row['hepa']?>" size="15"/></td>
          </tr>
          <tr>
            <td class="style52">Flu Vaccine</td>
            <td class="style46"><input name="flu" type="text" class="style46" id="mname34" value="<?=$row['flu']?>" size="15"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="style31"><input name="button" type="submit" class="style31" id="button" value="Update" /></td>
          </tr>
          <tr bgcolor="#B9E7F9">
            <td class="style31"><span class="style50">Note: Normal Range</span></td>
            <td>&nbsp;</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">FBS 70-110 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">Total Cholesterol 150-200 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">HDL/CHOL 26-67 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">LDL/CHOL 0-130 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">TRIGLYCERIDES 30-135 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">URIC ACID 3.7-7.6 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">UREA 8-20 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">CREATININE 0.8-2.0 mg/dl</td>
          </tr>
          <tr class="style46">
            <td colspan="2" class="style56">ALT(SGPT) 0-42 UNITS</td>
          </tr>
        </table>
    </form>      <p>&nbsp;</p></td>
  </tr>
</table>
<table width="900" height="105">
  <tr>
    <th height="65" background="images1/tab02.jpg" class="style33" scope="col"><p>Copyright 2011 . HJuzSolutions </p>
        <p><a href="http://www.hjuzsolutions.web.officelive.com">www.hjuzsolutions.web.officelive.com</a></p></th>
  </tr>
</table>
<br />
<script type="text/javascript">

var frmvalidator  = new Validator("medical");
/*
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("fname","req","Please enter First Name");
frmvalidator.addValidation("lname","req","Please enter Last Name");
frmvalidator.addValidation("mname","req","Please enter Middle Name");
 
frmvalidator.addValidation("birthdate","req","Please enter BirthDate!!");
frmvalidator.addValidation("birthdate","regexp=(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2}","Invalid Date Format MM/DD/YYYY");
*/

 </script>
</body>
</html>
