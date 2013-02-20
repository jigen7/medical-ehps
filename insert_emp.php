<html>
<head>
<title>Employee Information</title>
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	color: #0CB8F8;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style44 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style46 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #FF0000; }
.style47 {font-size: 12px}
-->
</style>
</head>
<body onLoad="startTime()">
<table width="900" background="images1/banner1.jpg">
  <tr>
    <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
    <th height="21" scope="col">&nbsp;</th>
    <th width="13" height="21" scope="col">&nbsp;</th>
    <th width="179" scope="col"><div align="right" class="style19"><a href="index.php">Home</a></div></th>
    <th width="180" scope="col"><div align="left" class="style19">| <a href="index.php">Logout</a></div></th>
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
<table width="899" height="633" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9" class="style31">
  <tr>
    <td width="558" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>EMPLOYEE INFORMATION </strong></p>
    </div></td>
    <td width="329" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><a href="editdelete_emp.php">Update and Delete Employee Information </a></td>
  </tr>
  <tr>
    <td height="594" colspan="2" valign="top" background="images1/bg.jpg" class="style31" scope="col">    
      <table width="900" border="0" cellpadding="0" cellspacing="0" class="style1">
        <tr>
          <th height="18" colspan="3" align="left" class="style1" scope="col"><span class="style46">
 
<?php


if(isset($_POST['add']))
{

include 'config/config.php';
include 'config/opendb.php';

$query = "INSERT INTO tblempinfo (employeeno, lastname, firstname, midname, sex, birthdate, age, civilstatus, department, position, address, email, landline, mobile, contactperson, contactno, personaldoctor) VALUES ('$_POST[employeeno]', '$_POST[lastname]', '$_POST[firstname]', '$_POST[midname]', '$_POST[sex]', '$_POST[birthdate]', '$_POST[age]', '$_POST[civilstat]', '$_POST[departments]', '$_POST[position]', '$_POST[address]', '$_POST[email]', '$_POST[landline]', '$_POST[mobile]', '$_POST[contact]', '$_POST[contactno]', '$_POST[doctor]')";
mysql_query($query) or die('Error, insert query failed');

$query = "FLUSH PRIVILEGES";
mysql_query($query) or die('Error, insert query failed');

include 'config/closedb.php';
echo "New Employee Information added";
}
else
{
}

?>
          </span></th>
        </tr>
        <tr>
          <th width="147" height="18" align="left" class="style1" scope="col">&nbsp;</th>
          <td width="609" align="left" class="style28 style47" scope="col">Add new Employee Information. </td>
          <th width="144" align="left" class="style1" scope="col">&nbsp;</th>
        </tr>
      </table>
	  
      <form method="post" enctype="multipart/form-data" class="style31">
        <table width="612" border="0" align="center" cellpadding="2" cellspacing="1" class="style31">
          <tr>
            <td width="209" class="style31">Employee Number:</td>
            <td><input name="employeeno" type="text" class="style44" id="employeeno"></td>
          </tr>
          <tr>
            <td width="209" class="style31">LastName:</td>
            <td><input name="lastname" type="text" class="style44" id="lastname"></td>
          </tr>
          <tr>
            <td width="209" class="style31">FirstName:</td>
            <td><input name="firstname" type="text" class="style44" id="firstname"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Middle Name:</td>
            <td><input name="midname" type="text" class="style44" id="midname"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Sex:</td>
            <td><span class="style44">
              <input type="radio" name="sex" value="Male">
        Male <br>
        <input type="radio" name="sex" value="Female">
        Female </span><br>
            </td>
          </tr>
          <tr>
            <td width="209" class="style31">Birthdate:</td>
            <td><input name="birthdate" type="text" class="style44" id="birthdate" value="mm/dd/yy"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Age:</td>
            <td><input name="age" type="text" class="style44" id="age"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Civil Status:</td>
            <td><select name="civilstat" class="style44" id="civilstat">
                <option>Single</option>
                <option>Married</option>
                <option>Widowed</option>
              </select>
            </td>
          </tr><td width="209" class="style31">
    
	<?php
		include 'config/config.php';
		include 'config/opendb.php';
		$query="SELECT DeptName FROM departments";
		$result = mysql_query ($query);
		echo "<tr>";
		echo "<td>";
		echo "Department: " . "</td>";
		echo "<td>";
		echo "<select name=departments id=departments value=''>Department:</option>";
		while($nt=mysql_fetch_array($result)){
			echo "<option value=$nt[DeptName]>$nt[DeptName]</option>";
		}
		echo "</select>";
		echo "</td>";
		echo "</tr>";
		include 'config/closedb.php';
	?>
    
	<?php
		include 'config/config.php';
		include 'config/opendb.php';
		$query="SELECT Description FROM positions";
		$result = mysql_query ($query);
		echo "<tr>";
		echo "<td>";
		echo "Position: " . "</td>";
		echo "<td>";
		echo "<select name=position id=position value=''>Position:</option>";
		while($nt=mysql_fetch_array($result)){
			echo "<option value=$nt[Description]>$nt[Description]</option>";
		}
		echo "</select>";
		echo "</td>";
		echo "</tr>";
		include 'config/closedb.php';
	?>
        </td>  <tr>
            <td width="209" class="style31">Address:</td>
            <td><input name="address" type="text" class="style44" id="address"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Email:</td>
            <td><input name="email" type="text" class="style44" id="email"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Landline:</td>
            <td><input name="landline" type="text" class="style44" id="landline"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Mobile Number:</td>
            <td><input name="mobile" type="text" class="style44" id="mobile"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Contact Person:</td>
            <td><input name="contact" type="text" class="style44" id="contact"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Contact Number:</td>
            <td><input name="contactno" type="text" class="style44" id="contactno"></td>
          </tr>
          <tr>
            <td width="209" class="style31">Personal Doctor:</td>
            <td><input name="doctor" type="text" class="style44" id="doctor"></td>
          </tr>
          <tr>
            <td width="209" class="style31">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="209" class="style31">&nbsp;</td>
            <td><input name="add" type="submit" class="style31" id="add" value="Save Information"></td>
          </tr>
          <a href="editdelete_emp.php"> Update and Delete Information </a> <br>
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
<br>
<p>
</body>
</html>