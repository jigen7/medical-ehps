<?php
include 'config/config.php';
include 'config/opendb.php';

$tbl_name="records";


//print_r($_POST);
$date = date("Y-m-d H:i:s");
$sql="INSERT INTO $tbl_name(
date_added,
EmployeeNo,
height,
weight,
blood_type,
chest_xray,
ecg,
fbs,
total_cholesterol,
alt_sgot,
alt_sgpt,
urinalysis,
albumin,
glucose,
rbc,
pus_cells,
fecalysis,
cbc,
chest_xray_2010,
urinalysis2,
albumin2,
glucose2,
rbc2,
pus_cells2,
fecalysis2,
fbs2,
total_cholesterol2,
hdl_chol,
ldl_chol,
triglycerydes,
uric_acid,
urea,
creatinine,
alt_sgpt2,
ecg2,
pft,
audiometric,
tetanus,
hepa,
flu,
chest_xray_remarks,
ecg_remarks,
chest_xray_2010_remarks,
ecg2_remarks,
pft_remarks,
audiometric_remarks
)

VALUES
(
'$date',
'$_POST[empnum]',
'$_POST[height]',
'$_POST[weight]',
'$_POST[blood_type]',
'$_POST[chest_xray]',
'$_POST[ecg]',
'$_POST[fbs]',
'$_POST[total_cholesterol]',
'$_POST[alt_sgot]',
'$_POST[alt_sgpt]',
'$_POST[urinalysis]',
'$_POST[albumin]',
'$_POST[glucose]',
'$_POST[rbc]',
'$_POST[pus_cells]',
'$_POST[fecalysis]',
'$_POST[cbc]',
'$_POST[chest_xray_2010]',
'$_POST[urinalysis2]',
'$_POST[albumin2]',
'$_POST[glucose2]',
'$_POST[rbc2]',
'$_POST[pus_cells2]',
'$_POST[fecalysis2]',
'$_POST[fbs2]',
'$_POST[total_cholesterol2]',
'$_POST[hdl_chol]',
'$_POST[ldl_chol]',
'$_POST[triglycerydes]',
'$_POST[uric_acid]',
'$_POST[urea]',
'$_POST[creatinine]',
'$_POST[alt_sgpt2]',
'$_POST[ecg2]',
'$_POST[pft]',
'$_POST[audiometric]',
'$_POST[tetanus]',
'$_POST[hepa]',
'$_POST[flu]',
'$_POST[chest_xray_remarks]',
'$_POST[ecg_remarks]',
'$_POST[chest_xray_2010_remarks]',
'$_POST[ecg2_remarks]',
'$_POST[pft_remarks]',
'$_POST[audiometric_remarks]'
)";
$result=mysql_query($sql);

//check if query successful
if($result){
//echo "Insert Successful";
//echo "<BR>";
//echo "<a href='medical_list.php'>View List</a>"; // link to view guestbook page
header("Location: medical_profile.php?id=".$_POST['empnum']);
}



else {
echo "ERROR";
}



mysql_close();

?>