<?php
session_start();

?>
<html>
<head>
<title>Add New User</title>
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 100px;
	margin-right: 100px;
	background-image: url();
	margin-top: 0px;
	margin-bottom: 0px;
}
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {color: #2C3091; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.style10 {font-size: x-small}
.style17 {
	font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman";
	color: #FFFFFF;
}
.style19 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
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
	color: #0AA9EA;
}
a:active {
	text-decoration: none;
}
.style44 {font-size: x-large}
.style46 {
	color: #2C3091;
	font-size: 14px;
	font-weight: bold;
}
.style48 {color: #2C3091}
.style49 {color: #FFFFFF}
-->
</style>
</head>
<body onLoad="startTime()">
<table width="900" background="images1/banner1.jpg">
  <tr>
    <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
    <th height="21" scope="col">&nbsp;</th>
    <th width="13" height="21" scope="col">&nbsp;</th>
    <th width="179" class="style35" scope="col"><div align="right" class="style19"><a href="homepage.php">Home</a></div></th>
    <th width="180" class="style35" scope="col"><div align="left" class="style19">| <a href="logout.php">Logout</a></div></th>
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
              <div align="right"><span class="style1"><span class="style10"><span class="style10"><span class="style10"><span class="style20"><span class="style20"><span class="style10"><span class="style10"><span class="style21"><span class="style21"><span class="style10"><span class="style20"><span class="style20"><span class="style24"><span class="style1"><span class="style25"><span class="style1"><span class="style10"><span class="style10"><span class="style20"><span class="style20"><span class="style10"><span class="style10"><span class="style30"></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></div>
            </div>
          </div>
        </div>
    </div></td>
    <td colspan="4" align="left" scope="col">&nbsp; </td>
  </tr>
</table>
<table width="903" cellpadding="0">
  <tr class="style17" background="images1/tab01.jpg">
    <td width="150" height="28" scope="col"><div align="center"><span class="style35"><a href="cardex.php">Employee Cardex</a> </span></div></td>
    <td width="250" class="style35" scope="col"><div align="center"><a href="medical_search.php">Health Profile and Records</a> </div>
    <div align="center"></div></td>
    <td width="200" class="style35" scope="col"><div align="center"><a href="insert_emp.php">Employee Information</a> </div></td>
    <td width="140" class="style35" scope="col"><div align="center"></div>
    <div align="center"><a href="utilities.php">Utilities</a></div></td>
    <td width="141" class="style35" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="899" height="260" align="center" bgcolor="#B9E7F9">
  <tr>
    <td width="891" height="25" valign="top" class="style31" scope="col">
    <div align="left" class="style44">DEPARTMENTS</div></td>
  </tr>
  <tr>
    <td height="109" valign="top" background="images1/bg.jpg" class="style31" scope="col">
	  <p>
    <style type="text/css">
	hr.pme-hr		     { border: 0px solid; padding: 0px; margin: 0px; border-top-width: 1px; height: 1px; }
	table.pme-main 	     { border: #004d9c 1px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	table.pme-navigation { border: #004d9c 0px solid; border-collapse: collapse; border-spacing: 0px; width: 100%; }
	td.pme-navigation-0, td.pme-navigation-1 { white-space: nowrap; }
	th.pme-header	     { border: #004d9c 1px solid; padding: 4px; background: #add8e6; }
	td.pme-key-0, td.pme-value-0, td.pme-help-0, td.pme-navigation-0, td.pme-cell-0,
	td.pme-key-1, td.pme-value-1, td.pme-help-0, td.pme-navigation-1, td.pme-cell-1,
	td.pme-sortinfo, td.pme-filter { border: #004d9c 1px solid; padding: 3px; }
	td.pme-buttons { text-align: left;   }
	td.pme-message { text-align: center; }
	td.pme-stats   { text-align: right;  }
  </style>
    <?php


include 'config/config.php';
$opts['tb'] = 'departments';


$opts['key'] = 'Department';


$opts['key_type'] = 'string';


$opts['sort_field'] = array('Department');


$opts['inc'] = 15;


$opts['options'] = 'ACPVDF';


$opts['multiple'] = '4';

$opts['navigation'] = 'DB';


$opts['display'] = array(
	'form'  => true,
	'query' => true,
	'sort'  => true,
	'time'  => true,
	'tabs'  => true
);


$opts['js']['prefix']               = 'PME_js_';
$opts['dhtml']['prefix']            = 'PME_dhtml_';
$opts['cgi']['prefix']['operation'] = 'PME_op_';
$opts['cgi']['prefix']['sys']       = 'PME_sys_';
$opts['cgi']['prefix']['data']      = 'PME_data_';


$opts['language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '-UTF8';

$opts['fdd']['Department'] = array(
  'name'     => 'Department',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);
$opts['fdd']['DeptName'] = array(
  'name'     => 'DeptName',
  'select'   => 'T',
  'maxlen'   => 100,
  'sort'     => true
);

// Now important call to phpMyEdit
require_once 'phpMyEdit.class.php';
new phpMyEdit($opts);

?>
  </p>
    <p>&nbsp;</p>
    <p>&nbsp;          </p></td>
  </tr>
  <tr>
    <td height="31" valign="top" class="style42 style1  style46" scope="col"> Back to <a href="positions.php">Positions</a> , <a href="utilities.php">Utilities</a> </td>
  </tr>
  <tr>
    <td valign="top" background="images1/bg.jpg" class="style31" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="900" height="105">
  <tr>
    <th height="65" background="images1/tab02.jpg" class="style33" scope="col"><p>Copyright 2011 . HJuzSolutions </p>
    <p><a href="http://www.hjuzsolutions.web.officelive.com">www.hjuzsolutions.web.officelive.com</a></p></th>
  </tr>
</table>
<br>
</body>
</html>