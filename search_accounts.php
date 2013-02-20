<?php
session_start();
include 'config/config.php';
include 'config/opendb.php';

$result = mysql_query("SELECT * FROM tblaccounts where lastname = '$_POST[name]' or employeeno = '$_POST[name]'");

  while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'] . "<br>";
  echo 'FOUND...';
  $_SESSION['fname'] = $row['FirstName'];
  $_SESSION['lname'] = $row['LastName'];
  $_SESSION['actype'] = $row['AccountType'];
  $_SESSION['empno'] = $row['EmployeeNo'];
  $_SESSION['user'] = $row['UserName'];
  $_SESSION['pass'] = $row['Password'];
  }
  
  include 'config/closedb.php';
?>

<html>
  <head>
  <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
  <title>Search User Accounts</title>
  </head>
  <body>
  <p>
    <h3>Search User Accounts</h3>
    <p>You  may search either by last name or employee number</p>
    <form  method="post">
      <input  type="text" name="name">
      <input  type="submit" name="submit" value="Search">
	</form>
	<br>
	<a href="editdelete_accounts.php"> BACK </a>
  </body>
</html>