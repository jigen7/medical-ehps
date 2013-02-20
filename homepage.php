<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>EHPS Home page</title>
<style type="text/css">
<!--
body {
	margin-left: 100px;
	margin-right: 100px;
	margin-top: 0px;
	margin-bottom: 0px;
	background-image: url();
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: large;
	color: #FFFFFF;
}
-->
</style></head>

<body>
<table width="900" height="550" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th width="901" align="left" valign="top" background="images1/homepage.jpg" scope="col"><table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><div align="left"><span class="style1">Today is <?php
	$tomorrow = mktime(0,0,0,date("m"),date("d"));
	echo(date("l F d, Y") );
	?></span></div></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><a href="cardex.php"><img src="images1/HOMEEMPLOYEECARDEX.png" width="433" height="46" border="0"></a></th>
      </tr>
    </table>    
    <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><a href="medical_search.php"><img src="images1/HOMEHEALTHPROFILE.png" width="456" height="45" border="0"></a></th>
      </tr>
    </table>
    <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><a href="insert_emp.php"><img src="images1/HOMEEMPLOYEEINFORMATION.png" width="478" height="46" border="0"></a></th>
      </tr>
    </table>    
    <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th scope="col"><a href="utilities.php"><img src="images1/HOMEUTILITY.png" width="507" height="48" border="0"></a></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
  </tr>
</table>
</body>
</html>
