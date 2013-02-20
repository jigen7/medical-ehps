<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical Information</title>
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
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #0CB0F7;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style44 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #2C3091;
	font-size: 12px;
}
.style46 {color: #282B96; font-size: 16px; }
.style53 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; font-size: 16px; }
.style54 {color: #282B96; font-size: 14px; }
-->
</style>
</head>

<body>
&nbsp;
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
<table width="899" height="1484" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>EMPLOYEE MEDICAL INFORMATION </strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="1445" valign="top" background="images1/bg.jpg" class="style44" scope="col"><table width="853" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th colspan="2" scope="col"><div align="right">
            <input name="vew" type="button" class="style31" id="vew3" onclick="javascript:window.location='medical_search.php'" value="Back to Employee Search"/>
        </div></th>
        <th width="11" scope="col">&nbsp;</th>
      </tr>
      <tr class="style1">
        <td width="72" scope="col">&nbsp;</td>
        <td width="770" class="style46" scope="col">Add Employee Medical Information</td>
        <td scope="col">&nbsp;</td>
      </tr>
    </table>&nbsp;
      <form action="medical_insert.php" method="post" enctype="multipart/form-data" name="medical" id="medical">
        <table width="80%"  border="1" align="center" bordercolor="#B9E7F9" background="images1/bg.jpg" style="border-width: 2px 2px 2px 2px;border-spacing: 1px;
	border-style: solid solid solid solid;border-color: #B9E7F9 #B9E7F9 #B9E7F9 #B9E7F9;
	border-collapse: collapse;background-color: white;">
          <tr>
            <td width="340" class="style53">Height (cm)</td>
            <td width="231"><input name="height" type="text" class="style44" id="mname5" size="10" />
                <input name="empnum" type="hidden" id="empnum" value="<?=$_GET['id']?>" /></td>
          </tr>
          <tr>
            <td class="style53">Weight (kg)</td>
            <td><input name="weight" type="text" class="style44" id="mname6" size="10" /></td>
          </tr>
          <tr>
            <td class="style53">Blood Type</td>
            <td><select name="blood_type" class="style44" id="blood_type">
                <option value="" selected="selected"></option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select></td>
          </tr>
          <tr>
            <td class="style53">Chest Xray ( N-normal or I-Impression )</td>
            <td><select name="chest_xray" class="style44" id="chest_xray">
                <option value="" selected="selected"></option>
                <option value="Normal">Normal</option>
                <option value="Impression">Impression</option>
            </select></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;</td>
            <td><textarea name="chest_xray_remarks" cols="50" rows="3" class="style44" id="chest_xray_remarks"></textarea></td>
          </tr>
          <tr>
            <td class="style53">ECG (N-Normal or R-Remarks)</td>
            <td><select name="ecg" class="style44" id="ecg">
                <option value="" selected="selected"></option>
                <option value="Normal">Normal</option>
                <option value="Remarks">Remarks</option>
            </select></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;</td>
            <td><textarea name="ecg_remarks" cols="50" rows="3" class="style44" id="ecg_remarks"></textarea></td>
          </tr>
          <tr>
            <td class="style53">FBS (mg/dl)</td>
            <td><input name="fbs" type="text" class="style44" id="mname7" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">Total Cholesterol (mg/dl)</td>
            <td class="style44"><input name="total_cholesterol" type="text" id="mname8" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">ALT(SGOT) (U/L)</td>
            <td class="style44"><input name="alt_sgot" type="text" id="mname9" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">ALT(SGPT) (U/L)</td>
            <td class="style44"><input name="alt_sgpt" type="text" id="mname10" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">Urinalysis N- normal</td>
            <td class="style44"><input name="urinalysis" type="text" id="mname11" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Albumin</td>
            <td class="style44"><input name="albumin" type="text" id="mname12" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Glucose</td>
            <td class="style44"><input name="glucose" type="text" id="mname13" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RBC (hpf)</td>
            <td class="style44"><input name="rbc" type="text" id="mname14" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pus Cells (hpf)</td>
            <td class="style44"><input name="pus_cells" type="text" id="mname15" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">Fecalysis (Yes- ova or parasite seen or No- no ova or parasite seen)</td>
            <td class="style44"><select name="fecalysis" id="fecalysis">
                <option value="" selected="selected"></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select></td>
          </tr>
          <tr>
            <td class="style53">CBC</td>
            <td class="style44"><input name="cbc" type="text" id="mname16" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">HDL/CHOL (mg/dl)</td>
            <td class="style44"><input name="hdl_chol" type="text" id="mname25" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">LDL/CHOL (mg/dl)</td>
            <td class="style44"><input name="ldl_chol" type="text" id="mname26" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">TRIGLYCERIDES (mg/dl)</td>
            <td class="style44"><input name="triglycerydes" type="text" id="mname27" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">URIC ACID (mg/dl)</td>
            <td class="style44"><input name="uric_acid" type="text" id="mname28" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">UREA (mg/dl)</td>
            <td class="style44"><input name="urea" type="text" id="mname29" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">CREATININE (mg/dl)</td>
            <td class="style44"><input name="creatinine" type="text" id="mname30" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">Pulmonary Function Test (PFT) ( N-normal or I- Interpretation)</td>
            <td class="style44"><select name="pft" id="pft">
                <option value="" selected="selected"></option>
                <option value="Normal">Normal</option>
                <option value="Impression">Impression</option>
            </select></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;</td>
            <td class="style44"><textarea name="pft_remarks" id="pft_remarks" cols="50" rows="3"></textarea></td>
          </tr>
          <tr>
            <td class="style53">Audiometric Exam (N-normal or R-remarks)</td>
            <td class="style44"><select name="audiometric" id="audiometric">
                <option value="" selected="selected"></option>
                <option value="Normal">Normal</option>
                <option value="Remarks">Remarks</option>
            </select></td>
          </tr>
          <tr>
            <td class="style53">&nbsp;</td>
            <td class="style44"><textarea name="audiometric_remarks" id="audiometric_remarks" cols="50" rows="3"></textarea></td>
          </tr>
          <tr>
            <td class="style53">Tetanus Toxoid</td>
            <td class="style44"><input name="tetanus" type="text" id="mname32" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">Hepa B</td>
            <td class="style44"><input name="hepa" type="text" id="mname33" size="15" /></td>
          </tr>
          <tr>
            <td class="style53">Flu Vaccine</td>
            <td class="style44"><input name="flu" type="text" id="mname34" size="15" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center" class="style31"><input name="button" type="submit" class="style31" id="button" value="Submit" /></td>
          </tr>
          <tr bgcolor="#B9E7F9">
            <td class="style53">Note: Normal Range</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">FBS 70-110 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">Total Cholesterol 150-200 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">HDL/CHOL 26-67 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">LDL/CHOL 0-130 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">TRIGLYCERIDES 30-135 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">URIC ACID 3.7-7.6 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">UREA 8-20 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">CREATININE 0.8-2.0 mg/dl</td>
          </tr>
          <tr>
            <td colspan="2" class="style54">ALT(SGPT) 0-42 UNITS</td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p></td>
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
frmvalidator.EnableMsgsTogether();
/*
frmvalidator.addValidation("fname","req","Please enter First Name");
frmvalidator.addValidation("lname","req","Please enter Last Name");
frmvalidator.addValidation("mname","req","Please enter Middle Name");
 
frmvalidator.addValidation("birthdate","req","Please enter BirthDate!!");
frmvalidator.addValidation("birthdate","regexp=(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2}","Invalid Date Format MM/DD/YYYY");

frmvalidator.addValidation("sex","dontselect=''","Please enter Gender");
frmvalidator.addValidation("status","dontselect=''","Please enter Status");
*/
</script>
</body>
</html>
