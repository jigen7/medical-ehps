<?php
include 'config/config.php';
include 'config/opendb.php';

$tbl_name="records";

$id = $_POST['hiddenId'];

$empnum = $_POST['empnum'];
//print_r($_POST);

$sql="UPDATE records SET
height = '$_POST[height]',
weight = '$_POST[weight]',
blood_type = '$_POST[blood_type]',
chest_xray = '$_POST[chest_xray]', 
ecg = '$_POST[ecg]',
fbs = '$_POST[fbs]',
total_cholesterol = '$_POST[total_cholesterol]',
alt_sgot = '$_POST[alt_sgot]',
alt_sgpt = '$_POST[alt_sgpt]',
urinalysis = '$_POST[urinalysis]',
albumin = '$_POST[albumin]',
glucose = '$_POST[glucose]',
rbc = '$_POST[rbc]',
pus_cells = '$_POST[pus_cells]',
fecalysis = '$_POST[fecalysis]',
cbc = '$_POST[cbc]',
chest_xray_2010 = '$_POST[chest_xray_2010]',
urinalysis2 = '$_POST[urinalysis2]',
albumin2 = '$_POST[albumin2]',
glucose2 = '$_POST[glucose2]',
rbc2 = '$_POST[rbc2]',
pus_cells2 = '$_POST[pus_cells2]',
fecalysis2 = '$_POST[fecalysis2]', 
fbs2 = '$_POST[fbs2]',
total_cholesterol2= '$_POST[total_cholesterol2]', 
hdl_chol = '$_POST[hdl_chol]',
ldl_chol = '$_POST[ldl_chol]',
triglycerydes = '$_POST[triglycerydes]',
uric_acid = '$_POST[uric_acid]',
urea = '$_POST[urea]',
creatinine = '$_POST[creatinine]',
alt_sgpt2 = '$_POST[alt_sgpt2]',
ecg2 = '$_POST[ecg2]',
pft = '$_POST[pft]',
audiometric = '$_POST[audiometric]',
tetanus = '$_POST[tetanus]',
hepa = '$_POST[hepa]',
flu = '$_POST[flu]',
chest_xray_remarks = '$_POST[chest_xray_remarks]',
ecg_remarks = '$_POST[ecg_remarks]',
chest_xray_2010_remarks = '$_POST[chest_xray_2010_remarks]',
ecg2_remarks = '$_POST[ecg2_remarks]',
pft_remarks = '$_POST[pft_remarks]',
audiometric_remarks = '$_POST[audiometric_remarks]'
WHERE id = '$_POST[hiddenId]'";

$result=mysql_query($sql);

//check if query successful
if($result){
//echo "Update Successful";
//echo "<BR>";
//echo "<a href='medical_edit.php?id=".$id.">Go to Page</a>"; // link to view guestbook page
header("Location: medical_profile.php?id=$empnum");
}




else {
echo "ERROR";
}



mysql_close();

?>