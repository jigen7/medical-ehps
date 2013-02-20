<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style19 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-small;
	color: #FFFFFF;
}
.style21 {font-size: xx-small}
.style28 {font-size: x-small; font-family: Verdana, Arial, Helvetica, sans-serif; color: #282B96; }
.style29 {font-size: x-small; color: #282B96; }
body,td,th {
	color: #06029D;
	font-size: 12px;
}
body {
	margin-left: 50px;
	margin-right: 50px;
}
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #00B3FD;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style35 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; color: #FFFFFF; font-weight: bold; }
.style37 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; color: #FFFFFF; font-weight: bold; font-size: 12px; }
a {
	font-size: 16px;
}
.style38 {font-size: 12px}
.style39 {color: #06029D}
.style33 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: #FFFFFF; }
.style40 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; font-size: x-small; color: #FFFFFF; }
-->
</style>
</head>
<body onLoad="startTime()">
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="900" scope="col"><table width="900" background="images1/banner1.jpg">
        <tr>
          <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
          <th height="21" scope="col">&nbsp;</th>
          <th width="13" height="21" scope="col">&nbsp;</th>
          <th width="179" class="style19" scope="col"><div align="right" class="style19"><a href="homepage.php" class="style19">Home</a></div></th>
          <th width="180" scope="col"><div align="left" class="style19"><a href="logout.php" class="style19">| Logout</a></div></th>
          <th width="88" scope="col"><div align="left"></div></th>
        </tr>
        <tr>
          <th height="94" colspan="7" scope="col">&nbsp;</th>
        </tr>
        <tr class="style21">
          <th width="159" height="24" class="style28" scope="col"><div align="left" class="style28">
              <?php
	$tomorrow = mktime(0,0,0,date("m"),date("d"));
	echo(date("l F d, Y") );
	?>
          </div></th>
          <td width="11" align="left" class="style28" scope="col"><div align="center" class="style29">|</div></td>
          <td width="236" align="left" class="style28" scope="col"><div align="left">
              <div id="txt">
                <div align="right">
                  <div id="txt">
                    <div align="right"><span class="style1"><span class="style38"><span class="style38"><span class="style39"><span class="style1"><span class="style39"><span class="style39"></span></span></span></span></span></span></span></div>
                  </div>
                </div>
              </div>
          </div></td>
          <td colspan="4" align="left" class="style28" scope="col">&nbsp;</td>
        </tr>
    </table></th>
  </tr>
</table>
<table width="903" cellpadding="0">
  <tr class="style35" background="images1/tab01.jpg">
    <td width="150" height="28" scope="col"><div align="center"><span class="style37"><a href="cardex.php">Employee Cardex</a> </span></div></td>
    <td width="250" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"><a href="medical_search.php">Health Profile and Records</a> </div>
        <div align="center"></div></td>
    <td width="200" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"><a href="insert_emp.php">Employee Information</a> </div></td>
    <td width="140" background="images1/tab01.jpg" class="style35" scope="col"><div align="center"></div>
        <div align="center"><a href="utilities.php">Utilities</a></div></td>
    <td width="141" background="images1/tab01.jpg" class="style35" scope="col">&nbsp;</td>
  </tr>
</table><br>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th background="images1/bg.jpg" scope="col"><form id="loginForm" name="loginForm" method="post" action="register-exec.php">
      <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
          <th>First Name </th>
          <td><input name="fname" type="text" class="textfield" id="fname" /></td>
        </tr>
        <tr>
          <th>Last Name </th>
          <td><input name="lname" type="text" class="textfield" id="lname" /></td>
        </tr>
        <tr>
          <th width="124">Login</th>
          <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
        </tr>
        <tr>
          <th>Password</th>
          <td><input name="password" type="password" class="textfield" id="password" /></td>
        </tr>
        <tr>
          <th>Confirm Password </th>
          <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Register" /></td>
        </tr>
      </table>
    </form></th>
  </tr>
</table>
<table width="900" height="105">
  <tr>
    <th height="65" background="images1/tab02.jpg" class="style33" scope="col"><p align="center">Copyright 2011 . HJuzSolutions </p>
        <p align="center"><a href="http://www.hjuzsolutions.web.officelive.com" class="style40">www.hjuzsolutions.web.officelive.com</a></p></th>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
