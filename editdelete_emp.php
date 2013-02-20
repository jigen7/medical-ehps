
<html>
<head>
<title>Employee Information</title>
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
	color: #0CB1F3;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style47 {font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #06029D; }
.style51 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
}
.style52 {
	color: #06029D;
	font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman";
	font-size: 16px;
	font-weight: bold;
}
.style53 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-size: 16px; color: #06029D;}
.style57 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12; color: #2C3091; }
.style61 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style62 {font-size: 12px}
-->
</style>
</head>
<body>
<table width="900" background="images1/banner1.jpg">
  <tr>
    <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
    <th height="21" scope="col">&nbsp;</th>
    <th width="13" height="21" scope="col">&nbsp;</th>
    <th width="179" scope="col"><div align="right" class="style19"><a href="index.htm">Home</a></div></th>
    <th width="180" scope="col"><div align="left" class="style19">| <a href="index.htm">Logout</a></div></th>
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
<table width="899" height="764" align="center" bordercolor="#B9E7F9" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" bgcolor="#B9E7F9" class="style31" scope="col"><div align="left">
        <p class="style43"><strong>EMPLOYEE INFORMATION </strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="725" valign="top" background="images1/bg.jpg" scope="col"><span class="style47">Search Employee Information</span><br>
      <span class="style52">You may search either by last name or employee number
      </span> <br>
	  <table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th height="18" align="left" class="style1" scope="col">
		    <span class="style51">
		    <?php

$empno = '';
$fname = '';
$lname = '';
$mname = '';
$sex = '';
$bday = '';
$age = '';
$civilstat = '';
$dept = '';
$position = '';
$address = '';
$email = '';
$landline = '';
$mobile = '';
$contactperson = '';
$contactno = '';
$doctor = '';

 
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
  $age = $row['Age'];
  $civilstat = $row['CivilStatus'];
  $dept = $row['Department'];
  $position = $row['Position'];
  $address = $row['Address'];
  $email = $row['Email'];
  $landline = $row['Landline'];
  $mobile = $row['Mobile'];
  $contactperson = $row['ContactPerson'];;
  $contactno = $row['ContactNo'];
  $doctor = $row['PersonalDoctor'];
  }
  
  include 'config/closedb.php';
 } 
 
if(isset($_POST['update']))
{

include 'config/config.php';
include 'config/opendb.php';

$query = "UPDATE tblempinfo SET lastname = '$_POST[lastname]', firstname = '$_POST[firstname]', midname = '$_POST[mname]', sex = '$_POST[sex]', birthdate = '$_POST[bday]', age = '$_POST[age]', civilstatus = '$_POST[civilstat]', department = '$_POST[dept]', position = '$_POST[position]', address = '$_POST[address]', email = '$_POST[email]', landline = '$_POST[landline]', mobile = '$_POST[mobile]', contactperson = '$_POST[contactperson]', contactno = '$_POST[contactno]', personaldoctor = '$_POST[doctor]' WHERE employeeno = '$_POST[empno]'";
mysql_query($query) or die('Error, update query failed');

$query = "FLUSH PRIVILEGES";
mysql_query($query) or die('Error, update query failed');

include 'config/closedb.php';
echo "Employee Information Updated!";
}
else
{
}

if(isset($_POST['delete']))
{

include 'config/config.php';
include 'config/opendb.php';

$query = "DELETE FROM tblempinfo WHERE employeeno = '$_POST[empno]'";
mysql_query($query) or die('Error, delete query failed');

$query = "FLUSH PRIVILEGES";
mysql_query($query) or die('Error, delete query failed');

include 'config/closedb.php';
echo "Employee Information Deleted!";
}
else
{
}

?>
		    </span>
		  </th>
        </tr>
      </table>     
	  <form method="post">
        <p class="style53">
          <input name="name"  type="text" class="style53">
          <input name="search"  type="submit" class="style31" id="search" value="Search">
        </p>
        <hr>
        <table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td scope="col"><div align="left" class="style28 style62">Update or Delete Employee Information. </div></td>
          </tr>
        </table><br>
        <table width="550" border="0" cellspacing="1" cellpadding="2">
          <tr>
            <td width="234" class="style31">Employee Number:</td>
            <td width="305" class="style53"><input name="employeeno" type="text" class="style61" id="employeeno" value="<?php echo $empno; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">LastName:</td>
            <td class="style53"><input name="lastname" type="text" class="style61" id="lastname" value="<?php echo $lname; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">FirstName:</td>
            <td class="style53"><input name="firstname" type="text" class="style61" id="firstname" value="<?php echo $fname; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Middle Name:</td>
            <td class="style53"><input name="midname" type="text" class="style61" id="midname" value="<?php echo $mname; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Sex:</td>
            <td class="style53"><input name="sex" type="text" class="style61" id="sex" value="<?php echo $sex; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Birthdate:</td>
            <td class="style53"><input name="bday" type="text" class="style61" id="bday" value="<?php echo $bday; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Age:</td>
            <td class="style53"><input name="age" type="text" class="style61" id="age" value="<?php echo $age; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Civil Status:</td>
            <td class="style53"><input name="civilstat" type="text" class="style61" id="civilstat" value="<?php echo $civilstat; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Department:</td>
            <td class="style53"><input name="departments" type="text" class="style61" id="departments" value="<?php echo $dept; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Position:</td>
            <td class="style53"><input name="position" type="text" class="style61" id="position" value="<?php echo $position; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Address:</td>
            <td class="style53"><input name="address" type="text" class="style61" id="address" value="<?php echo $address; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Email:</td>
            <td class="style53"><input name="email" type="text" class="style61" id="email" value="<?php echo $email; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Landline:</td>
            <td class="style53"><input name="landline" type="text" class="style61" id="landline" value="<?php echo $landline; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Mobile Number:</td>
            <td class="style53"><input name="mobile" type="text" class="style61" id="mobile" value="<?php echo $mobile; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Contact Person:</td>
            <td class="style53"><input name="contact" type="text" class="style61" id="contact" value="<?php echo $contactperson; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Contact Number:</td>
            <td class="style53"><input name="contactno" type="text" class="style61" id="contactno" value="<?php echo $contactno; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">Personal Doctor:</td>
            <td class="style53"><input name="doctor" type="text" class="style61" id="doctor" value="<?php echo $doctor; ?>"></td>
          </tr>
          <tr>
            <td width="234" class="style31">&nbsp;</td>
            <td class="style57">&nbsp;</td>
          </tr>
          <tr>
            <td width="234" class="style31">&nbsp;</td>
            <td class="style53"><input name="update" type="submit" class="style31" id="update" value="Update"></td>
          </tr>
          <tr>
            <td width="234" class="style31">&nbsp;</td>
            <td class="style53"><input name="delete" type="submit" class="style31" id="delete" value="Delete"></td>
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
</body>
</html>