<html>
<head>
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
<title>Patient's Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
}
.style27 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #06029D; }
.style28 {font-size: x-small; font-family: Verdana, Arial, Helvetica, sans-serif; color: #282B96; }
.style29 {font-size: x-small; color: #282B96; }
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
	color: #00AFFB;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style44 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #2C3091;}
-->
</style>
</head>
<body onLoad="startTime()">
<table width="900" align="center" background="images1/banner1.jpg">
  <tr>
    <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
    <th height="21" scope="col">&nbsp;</th>
    <th width="11" height="21" scope="col">&nbsp;</th>
    <th width="165" class="style35" scope="col"><div align="right" class="style19"><a href="homepage.php">Home</a></div></th>
    <th width="167" class="style35" scope="col"><div align="left" class="style19">| <a href="logout.php">Logout</a></div></th>
    <th width="158" scope="col"><div align="left"></div></th>
  </tr>
  <tr>
    <th height="94" colspan="7" scope="col">&nbsp;</th>
  </tr>
  <tr class="style28">
    <th width="144" height="24" scope="col"><div align="left" class="style28">
        <?php
	$tomorrow = mktime(0,0,0,date("m"),date("d"));
	echo(date("l F d, Y") );
	?>
    </div></th>
    <td width="10" align="left" class="style27" scope="col"><div align="center" class="style29">|</div></td>
    <td width="212" align="left" class="style9" scope="col"><div align="left">
        <div id="txt">
          <div align="right">
            <div id="txt">
              <div align="right"><span class="style1"><span class="style10"><span class="style20"><span class="style24"><span class="style25"><span class="style28"></span></span></span></span></span></span></div>
            </div>
          </div>
        </div>
    </div></td>
    <td colspan="4" align="left" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="100%" align="center" cellpadding="0">
  <tr class="style17" background="images1/tab01.jpg">
    <td width="175" height="28" scope="col"><div align="center"><span class="style35"><a href="cardex.php">Employee Cardex</a> </span></div></td>
    <td width="292" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"><a href="medical_search.php">Health Profile and Records</a> </div>
        <div align="center"></div></td>
    <td width="234" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"><a href="insert_emp.php">Employee Information</a> </div></td>
    <td width="164" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"></div>
        <div align="center"><a href="utilities.php">Utilities</a></div></td>
    <td width="141" background="images1/tab01.jpg" class="style35" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="900" height="481" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>EMPLOYEE CARDEX </strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="422" valign="top" background="images1/bg.jpg" class="style31" scope="col"><span class="style44">Search Employee Information</span><br>
	You may search either by last name or employee number
      <table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th height="40" align="left" class="style1" scope="col"><?php

$empno = '';
$fname = '';
$lname = '';
$mname = '';
$sex = '';
$bday = '';
$civilstat = '';
$dept = '';
$address = '';
 
if(isset($_POST['search']))
{
include 'config/config.php';
include 'config/opendb.php';

$result = mysql_query("SELECT * FROM tblempinfo where lastname = '$_POST[name]' or employeeno = '$_POST[name]'");

  while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['MidName'] . " " . $row['LastName'] . "<br>";
  echo 'FOUND...';
  $empno = $row['EmployeeNo'];
  $fname = $row['FirstName'];
  $mname = $row['MidName'];
  $lname = $row['LastName'];
  $sex = $row['Sex'];
  $bday = $row['Birthdate'];
  $civilstat = $row['CivilStatus'];
  $dept = $row['Department'];
  $address = $row['Address'];
  
  }
  include 'config/closedb.php';
 } 
 
if(isset($_POST['add']))
{
include 'config/config.php';
include 'config/opendb.php';

$query = "INSERT INTO cardex (employeeno, pdate, bp, temp, prrr, complaint, doctorsnote) VALUES ('$_POST[employeeno]', '$_POST[pdate]', '$_POST[bp]', '$_POST[temp]', '$_POST[prrr]', '$_POST[complaint]', '$_POST[doctorsnote]')";
mysql_query($query) or die('Error, insert query failed');

$query = "FLUSH PRIVILEGES";
mysql_query($query) or die('Error, insert query failed');

include 'config/closedb.php';
echo "New Patient Record Saved.";
}
else
{
}
?></th>
        </tr>
      </table>
      <form method="post">
        <p class="style44">
          <input name="name"  type="text" class="style44">
          <input name="search"  type="submit" class="style31" id="search" value="Search">
        </p>
        <hr>
        <table width="900" border="0" cellpadding="2" cellspacing="1" class="style31">
          <tr>
            <td width="100" class="style31">Employee Number:</td>
            <td><input name="employeeno" type="text" class="style44" id="employeeno" value="<?php echo $empno; ?>"></td>
          </tr>
          <tr>
            <td width="100" class="style31">Name:</td>
            <td><input name="lastname" type="text" class="style44" id="lastname" value="<?php echo $lname; ?>"></td>
            <td><input name="firstname" type="text" class="style44" id="firstname" value="<?php echo $fname; ?>"></td>
            <td><input name="midname" type="text" class="style44" id="midname" value="<?php echo $mname; ?>"></td>
          </tr>
          <tr>
            <td width="100" class="style31">Sex:</td>
            <td><input name="sex" type="text" class="style44" id="sex" value="<?php echo $sex; ?>"></td>
            <td width="100" class="style31">Birthdate:</td>
            <td><input name="bday" type="text" class="style44" id="bday" value="<?php echo $bday; ?>"></td>
          </tr>
          <tr>
            <td width="100" class="style31">Civil Status:</td>
            <td><input name="civilstat" type="text" class="style44" id="civilstat" value="<?php echo $civilstat; ?>"></td>
            <td width="100" class="style31">Department:</td>
            <td><input name="departments" type="text" class="style44" id="departments" value="<?php echo $dept; ?>"></td>
          </tr>
          <tr>
            <td width="100" class="style31">Address:</td>
            <td><input name="address" type="text" class="style44" id="address" value="<?php echo $address; ?>"></td>
          </tr>
          <tr>
            <td width="100" class="style31">&nbsp;</td>
            <td class="style31">&nbsp;</td>
          </tr>
          <?php
	//search cardex here
  include 'config/config.php';
include 'config/opendb.php';

$result = mysql_query("SELECT * FROM cardex where employeeno = '$_POST[employeeno]'");

 echo '<tr>';
 echo '<td>' . 'Date' . '</td>';
 echo '<td>' . 'BP' . '</td>';
 echo '<td>' . 'Temp' . '</td>';
 echo '<td>' . 'PR/RR' . '</td>';
 echo '<td>' . 'Chief Complaint' . '</td>';
 echo '<td>' . 'Physicians Note' . '</td>';
 echo '</tr>';
 
 
  while($row = mysql_fetch_array($result))
  {
 
  echo '<tr>';
 echo '<td>' . $row['pdate'] . '</td>';
 echo '<td>' . $row['bp'] . '</td>';
 echo '<td>' . $row['temp'] . '</td>';
 echo '<td>' . $row['prrr'] . '</td>';
 echo '<td>' . $row['complaint'] . '</td>';
 echo '<td>' . $row['doctorsnote'] . '</td>';
 echo '</tr>';
  }
  include 'config/closedb.php';
  
  ?>
          <tr>
            <td><input name="pdate" type="text" class="style44" id="pdate"></td>
		    <td><input name="bp" type="text" class="style44" id="bp"></td>
			<td><input name="temp" type="text" class="style44" id="temp"></td>
			<td><input name="prrr" type="text" class="style44" id="prrr"></td>
			<td><input name="complaint" type="text" class="style44" id="complaint"></td>
			<td><input name="doctorsnote" type="text" class="style44" id="doctorsnote"></td>
			</tr>
			<tr>
            <td width="100" class="style31">&nbsp;</td>
            <td><input name="add" type="submit" class="style31" id="add" value="Save"></td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
<table width="100%" height="105" align="center">
  <tr>
    <th width="1022" height="65" background="images1/tab02.jpg" class="style33" scope="col"><p>Copyright 2011 . HJuzSolutions </p>
        <p><a href="http://www.hjuzsolutions.web.officelive.com">www.hjuzsolutions.web.officelive.com</a></p></th>
  </tr>
</table>
<br>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
</body>
</html>