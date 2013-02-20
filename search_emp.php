<?php
session_start();
include 'config/config.php';
include 'config/opendb.php';

$result = mysql_query("SELECT * FROM tblempinfo where lastname = '$_POST[name]' or employeeno = '$_POST[name]'");

  while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['MidName'] . " " . $row['LastName'] . "<br>";
  echo 'FOUND...';
  $_SESSION['empno'] = $row['EmployeeNo'];
  }
  
  include 'config/closedb.php';
?>

<html>
  <head>
  <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
  <title>Search Employee Information</title>
  </head>
  <body>
  <p>
    <h3>Search Employee Information</h3>
    <p>You  may search either by last name or employee number</p>
    <form  method="post">
      <input  type="text" name="name">
      <input  type="submit" name="submit" value="Search">
	</form>
	<br>
	<a href="editdelete_emp.php"> BACK </a>
  </body>
</html>