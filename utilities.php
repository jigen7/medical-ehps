<html>
<head>
<title>Electronic Health Profile System</title>
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
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style10 {font-size: x-small}
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
.style9 {color: #2C3091; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #00ABF3;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style17 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman";
	color: #FFFFFF;
}
.style35 {font-family: "Trebuchet MS", verdana, tahoma, "Times New Roman"; color: #FFFFFF; font-weight: bold; }
.style33 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: #FFFFFF; }
-->
</style></head>
<body onLoad="startTime()">
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="900" scope="col"><table width="900" background="images1/banner1.jpg">
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
    </table></th>
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
</table><BR>
<table width="900" border="1" cellpadding="0" cellspacing="0" bordercolor="#7DD1F3" background="images1/bg.jpg">
  <tr>
    <td width="300" scope="col"><p>&nbsp;</p>
      <p><br>
          <a href="departments.php"> </a><br>
          <a href="positions.php"> </a><br>
          <a href="ehps.html"> </a></p></td>
    <th width="300" bordercolor="#7DD1F3" bgcolor="#B9E7F9" scope="col"><p><a href="homepage.php" class="style9"><BR>Back to HOMEPAGE</a></p>
    <p><a href="register-form.php" class="style9">REGISTER USER </a></p>
    <p><a href="departments.php" class="style9">DEPARTMENT</a> </p>
    <p><a href="positions.php" class="style9">POSITION</a> <BR><BR></p></th>
    <th width="300" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="900" height="105">
  <tr>
    <th height="65" background="images1/tab02.jpg" class="style33" scope="col"><p>Copyright 2011 . HJuzSolutions </p>
        <p><a href="http://www.hjuzsolutions.web.officelive.com">www.hjuzsolutions.web.officelive.com</a></p></th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>