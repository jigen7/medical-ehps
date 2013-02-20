<?php
include 'config/config.php';
include 'config/opendb.php';




//print_r($_POST);
$date = date("Y-m-d H:i:s");
//var_dump($_POST);

if($_POST['button'] == 'Submit Medical Profile Card'){
$tbl_name="cards";
		$sql="UPDATE cards SET
		blood_type = '$_POST[section]',
		section = '$_POST[section]',
		position = '$_POST[section]',
		contact_no = '$_POST[section]',
		landline_no = '$_POST[section]',
		mobile_no = '$_POST[section]',
		email = '$_POST[section]',
		contact_person_name = '$_POST[section]',
		contact_person_no = '$_POST[section]',
		personal_doctor_remarks = '$_POST[section]',
		maintenance_remarks = '$_POST[section]',
		immunization_remarks = '$_POST[section]',
		hospital_remarks = '$_POST[section]',
		surgical_remarks = '$_POST[section]',
		trauma_remarks = '$_POST[section]',
		blood_remarks = '$_POST[section]',
		allergies_remarks = '$_POST[section]',
		chk_diabetes = '$_POST[section]',
		chk_hypertension = '$_POST[section]',
		chk_heart = '$_POST[section]',
		chk_arthritis = '$_POST[section]',
		chk_pulmonary = '$_POST[section]',
		chk_hepatitis = '$_POST[section]',
		chk_thyroid = '$_POST[section]',
		chk_astma = '$_POST[section]',
		chk_myocardial = '$_POST[section]',
		chk_peptic= '$_POST[section]',
		chk_kidney= '$_POST[section]',
		chk_congective= '$_POST[section]',
		chk_cancer= '$_POST[section]',
		chk_bleeding= '$_POST[section]',
		chk_stroke= '$_POST[section]',
		lmp= '$_POST[section]',
		no_pregnancy = '$_POST[section]',
		no_livebirth = '$_POST[section]',
		contraceptive= '$_POST[section]',
		contraceptive_when = '$_POST[section]',
		contraceptive_type= '$_POST[section]',
		chk_smoking= '$_POST[section]',
		smoking_sticks= '$_POST[section]',
		smoking_years= '$_POST[section]',
		chk_alcohol= '$_POST[section]',
		chk_beer= '$_POST[section]',
		chk_hard_drinks= '$_POST[section]',
		chk_wine= '$_POST[section]',
		alcohol_frequency= '$_POST[section]',
		chk_drugs= '$_POST[section]',
		chk_physical= '$_POST[section]',
		drugs_specify= '$_POST[section]',
		physical_describe= '$_POST[section]',
		chk_diet= '$_POST[section]',
		chk_diet_balance= '$_POST[section]', 
		chk_diet_vegetarian= '$_POST[section]',
		chk_diet_fish= '$_POST[section]',
		chk_meat= '$_POST[section]',
		chk_lowfat= '$_POST[section]',
		chk_diabetic= '$_POST[section]',
		diet_others = '$_POST[section]'
		WHERE id = '$_POST[hiddenId]'";
		
		$result=mysql_query($sql);
 } // end of button Submit Medical Profile Card
 else if($_POST['button'] == 'Add Dependents'){
		 $tbl_name="dependents";
		 $sql="INSERT INTO $tbl_name(
		 date_added,
		 EmployeeNo,
		 name,
		 relationship,
		 age,
		 sex,
		 birthdate 
		 )
		 VALUES
		(
		'$date',
		'$_POST[empnum]',
		'$_POST[dependent_name]', 
		'$_POST[dependent_relationship]', 
		'$_POST[dependent_age]',
		'$_POST[sex]',
		'$_POST[birthdate]'
		)";
		$result=mysql_query($sql);
}
 
//check if query successful
if($result){
//echo "Insert Successful";
//echo "<BR>";
//echo "<a href='medical_list.php'>View List</a>"; // link to view guestbook page
header("Location: medical_profile_card.php?id=".$_POST['empnum']);
}



else {
echo "ERROR";
}



mysql_close();

?>