<?php

include 'config/config.php';
include 'config/opendb.php';

$id = $_GET['id'];
//echo $id;
if(!isset($id) || empty($id)){
     die("Please select your image!");
}else{

$query = mysql_query("SELECT * FROM records WHERE id='".$id."'");
$row = mysql_fetch_array($query);
$content = $row['image'];

header('Content-type: image/jpg');
     echo $content;
}