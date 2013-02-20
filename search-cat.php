<?php
include 'config/config.php';
include 'config/opendb.php';
if($_POST){
//print_r($_POST);
$fieldname = $_POST['category2'];
$fieldname_table = $_POST['category3'];
$table = $_POST['category'];
if($table == "Employee Information"){
$dbtable = "tblempinfo";

}
else if ($table == "Medical Record"){
$dbtable = "records";	
}
else if ($table == "Medical Cardex"){
$dbtable = "cardex";	
}
else if ($table == "Medical Profile"){
$dbtable = "cards";
}//end of multiple if

$sql="SELECT * FROM $dbtable";
$result=mysql_query($sql);

} // end of POST


function getName($id){

$sql = "SELECT * from tblempinfo WHERE EmployeeNo ='$id'";
$result = mysql_query($sql);
$row2 = mysql_fetch_assoc($result);

return $row2['LastName'].' '.$row2['FirstName'].', '.$row2['MidName']; 	

}
?>
<html>
<head>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/select-chain.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.tablesorter.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>
    <script type="text/javascript">

    $(function () {
        var cat = $('#categorySelect');
        var el = $('#elementSelect');
        var attr = $('#attributeSelect');
        var catval =  document.getElementById("categorySelect").value
		
        el.selectChain({
            target: attr,
            url: 'js/select-chain-2.php?category='+catval,
            data: { ajax: true, anotherval: "anotherAction" }            
        });        

        // note that we're assigning in reverse order
        // to allow the chaining change trigger to work
        cat.selectChain({
            target: el,
            url: 'js/select-chain.php',
            data: { ajax: true }
        }).trigger('change');

    });

    </script>
    
    <link href="css/tableheader.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<form action="" method="post" name="formSet">
  <table width="100%" border="1" >
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Category 
        <select name="category" id="categorySelect">
          <option></option>
          <option>Employee Information</option>
          <option>Medical Record</option>
          <option>Medical Cardex</option>
          <option>Medical Profile</option>
        </select> 
        Keyword <select name="category2" id="elementSelect">
        </select>
        <select name="category3" id="attributeSelect" style="display:none">
        </select>        <input type="submit" name="button" id="button" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
  <br />
  <br />
<table width="100%" border="1" style="border-width: 2px 2px 2px 2px;border-spacing: 1px;
	border-style: solid solid solid solid;border-color: black black black black;
	border-collapse: collapse;background-color: white;" id="myTable" class="tablesorter">
    <?php if($result) { ?>
  <thead>
    <tr>
      <th width="13%" align="center"><strong>Emp No.</strong></th>
      <th width="34%" align="center"><strong>Employee Name</strong></th>
      <th width="53%" align="center"><strong>&nbsp;<?php echo $fieldname;?>&nbsp;</strong></th>
    </tr>
    </thead>

  <?php 
  
  while($rows=mysql_fetch_array($result)){ 
  
  if($dbtable == "cardex"){
	$empno =  "employeeno";
  } else {
	$empno = "EmployeeNo";  
  }
  ?>
    <tr onMouseOver="this.style.background='red';this.style.cursor='pointer';this.style.color='white';" onMouseOut="this.style.background='white';this.style.color='black';" onClick="window.location.href='medical_profile.php?id=<?php echo $rows[$empno];?>' ">
      <td><?php echo $rows[$empno];?></td>
      <td><?php echo getName($rows[$empno]);?></td>
      <td align="center"><?php echo $rows[$fieldname_table];?></td>
    </tr>

  <?php } ?>
  <form  action="search-cat-print.php" method="post" name="formSetPrint">
  <input type="hidden" value="<?php echo $table;?>" name="categoryPost"/>
  <input type="hidden" value="<?php echo $fieldname_table;?>" name="category3Post"/>
  <input type="hidden" value="<?php echo $fieldname;?>" name="category2Post"/>
    <tr onMouseOver="this.style.background='red';this.style.cursor='pointer';this.style.color='white';" onMouseOut="this.style.background='white';this.style.color='black';" onClick="window.location.href='medical_profile.php?id=<?php echo $rows[$empno];?>' ">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="btnPrint" id="btnPrint" value="PRINT"></td>
    </tr>
  </form>
  <?php } ?>

  </table>
  <p>&nbsp;</p>

</body>
</html>