<?php
include 'config/config.php';
include 'config/opendb.php';
$id = $_GET['id'];
$empnum = $_GET['empnum'];
mysql_query("DELETE FROM dependents WHERE id=$id");

//header("Location: medical_list.php");
header("Location: medical_profile_card.php?id=".$empnum);
?>