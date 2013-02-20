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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Failed</title>
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
.style38 {font-size: 12px}
.style39 {color: #06029D}
body,td,th {
	color: #06029D;
}
body {
	margin-left: 50px;
	margin-right: 50px;
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
	color: #81DFF8;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
h1 {
	color: #06029D;
}
-->
</style>
</head>
<body onLoad="startTime()">
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="900" scope="col"><table width="900" background="images1/banner1.jpg">
        <tr>
          <th height="21" colspan="2" scope="col"><div align="left" class="style19"></div></th>
          <th height="21" scope="col">&nbsp;</th>
          <th width="13" height="21" scope="col">&nbsp;</th>
          <th width="179" class="style19" scope="col">&nbsp;</th>
          <th width="180" scope="col">&nbsp;</th>
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
                    <div align="right"><span class="style1"><span class="style38"><span class="style39"></span></span></span></div>
                  </div>
                </div>
              </div>
          </div></td>
          <td colspan="4" align="left" class="style28" scope="col">&nbsp;</td>
        </tr>
    </table></th>
  </tr>
</table>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th background="images1/bg.jpg" bgcolor="#7DD1F3" scope="col"><p align="center">&nbsp;</p>
        <h1 align="center">LOGIN FAILED! </h1>        
        <div align="center"></div>
        <h1 align="center">&nbsp;</h1>
        <h1 align="center"><span class="err">Please check your username and password</span></h1>
        <br /></th>
  </tr>
  <tr>
    <th height="27" bgcolor="#7DD1F3" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div align="center"><span class="style38">Click here to <a href="index.php">Login</a></span><br />
            <br />
      </div></th>
  </tr>
</table>
<h1>&nbsp;</h1>
<p align="center">&nbsp;</p>
<h4 align="center" class="err"><br />
  </h4>
</body>
</html>
