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
	color: #02B4F2;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
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
.style45 {font-size: 12}
.style46 {color: #2C3091}
.style51 {color: #2C3091; font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-weight: bold; font-size: 16px; }
-->
</style></head>

<body onLoad="startTime()">

<?php
include 'config/config.php';
include 'config/opendb.php';
include 'checkval.php';
$id = $_GET['id'];

$sql = "SELECT * from tblempinfo WHERE EmployeeNo ='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
//print_r($row);

$sql="SELECT * FROM records WHERE EmployeeNo ='$id'";
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
      </table><br>
      <table width="80%"  border="1" align="center" bordercolor="#B9E7F9" background="images1/bg.jpg" style="border-width: 2px 2px 2px 2px;border-spacing: 1px;
	border-style: solid solid solid solid;border-color: #B9E7F9 #B9E7F9 #B9E7F9 #B9E7F9;
	border-collapse: collapse;background-color: white;">
    
	
		<tr>
          <td width="166" class="style51">Profile</td>
          <td width="529" align="center" class="style27"><img src="show.php?id=<?=$row['id']?>" /> </td>
        </tr>
        <tr>
          <td class="style51">Last Name</td>
          <td class="style27 style45 style1 style46">&nbsp;
             <?=$row['LastName']?>
          </td>
        </tr>
        <tr>
          <td class="style51">First Name</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['FirstName']?>
          </td>
        </tr>
        <tr>
          <td class="style51">Middle Name</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['MidName']?>
          </td>
        </tr>
        <tr>
          <td class="style51">Age</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['Age']?>
          </td>
        </tr>
        <tr>
          <td class="style51">Date of Birth</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['Birthdate']?>
          </td>
        </tr>
        <tr>
          <td class="style51">Sex</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['Sex']?>
         </td>
        </tr>
        <tr>
          <td class="style51">Status</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['CivilStatus']?>
         </td>
        </tr>
        <tr>
          <td class="style51">Address</td>
          <td class="style27 style45 style1 style46">&nbsp;
            <?=$row['Address']?>
          </td>
        </tr>
      </table>
      <br />
      <table width="80%"  border="1" align="center" bordercolor="#B9E7F9" style="border-width: 2px 2px 2px 2px;border-spacing: 1px;
	border-style: solid solid solid solid;border-color: #B9E7F9 #B9E7F9 #B9E7F9 #B9E7F9;
	border-collapse: collapse;background-color: white;">
        <tr>
          <td width="169" align="center" bgcolor="#B9E7F9" class="style51">Medical History</td>
          <td width="169" align="center" bgcolor="#B9E7F9" class="style51">Date Added</td>
          <td width="231" align="center" bgcolor="#B9E7F9"><input name="insert" type="button" class="style31" id="vew2" onclick="javascript:window.location='medical.php?id=<?=$row['EmployeeNo']?>'" value="Add Information"/></td>
        </tr>
        <?php 
  if($result2) {
  while($rows=mysql_fetch_array($result2)){ ?>
        <tr>
          <td align="center" class="style27"><?php echo $rows['EmployeeNo']?></td>
          <td align="center" class="style27"><?php echo date("m-d-Y",strtotime($rows['date_added']));?></td>
          <td align="center"><div align="center">
                <input name="view" type="button" class="style31" id="vew" onclick="javascript:window.location='medical_view.php?id=<?= $rows['id']?>'" value="View"/>
                <input name="edit" type="button" class="style31" id="edit" onclick="javascript:window.location='medical_edit.php?id=<?= $rows['id']?>&empnum=<?=$row['EmployeeNo']?>'" value="Edit"/>
                <input name="button2" type="button" class="style31" onclick="javascript: if (confirm('Are you sure you want to delete this Information?')) window.location='medical_delete.php?id=<?= $rows['id']?>&empnum=<?= $row['EmployeeNo']?>'" value="Delete" />
          </div></td>
        </tr>
        <?php } } ?>
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
