<?php
include 'config/config.php';
include 'config/opendb.php';




//print_r($_POST);
$date = date("Y-m-d H:i:s");
//var_dump($_POST);

if($_POST['button'] == 'Submit Medical Profile Card'){
$tbl_name="cards";
		$sql="INSERT INTO $tbl_name(
		date_added,
		EmployeeNo,
		blood_type,
		section,
		position,
		contact_no,
		landline_no,
		mobile_no,
		email,
		contact_person_name,
		contact_person_no,
		personal_doctor_remarks,
		maintenance_remarks,
		immunization_remarks,
		hospital_remarks,
		surgical_remarks,
		trauma_remarks,
		blood_remarks,
		allergies_remarks,
		chk_diabetes,
		chk_hypertension,
		chk_heart,
		chk_arthritis,
		chk_pulmonary,
		chk_hepatitis,
		chk_thyroid,
		chk_astma,
		chk_myocardial,
		chk_peptic,
		chk_kidney,
		chk_congective,
		chk_cancer,
		chk_bleeding,
		chk_stroke,
		lmp,
		no_pregnancy,
		no_livebirth,
		contraceptive,
		contraceptive_when,
		contraceptive_type,
		chk_smoking,
		smoking_sticks,
		smoking_years,
		chk_alcohol,
		chk_beer,
		chk_hard_drinks,
		chk_wine,
		alcohol_frequency,
		chk_drugs,
		chk_physical,
		drugs_specify,
		physical_describe,
		chk_diet,
		chk_diet_balance,
		chk_diet_vegetarian,
		chk_diet_fish,
		chk_meat,
		chk_lowfat,
		chk_diabetic,
		diet_others
		)

		VALUES
		(
		'$date',
		'$_POST[empnum]',
		'$_POST[blood_type]',
		'$_POST[section]',
		'$_POST[position]',
		'$_POST[contact_no]',
		'$_POST[landline_no]',
		'$_POST[mobile_no]',
		'$_POST[email]',
		'$_POST[contact_person_name]',
		'$_POST[contact_person_no]',
		'$_POST[personal_doctor_remarks]',
		'$_POST[maintenance_remarks]',
		'$_POST[immunization_remarks]',
		'$_POST[hospital_remarks]',
		'$_POST[surgical_remarks]',
		'$_POST[trauma_remarks]',
		'$_POST[blood_remarks]',
		'$_POST[allergies_remarks]',
		'$_POST[chk_diabetes]',
		'$_POST[chk_hypertension]',
		'$_POST[chk_heart]',
		'$_POST[chk_arthritis]',
		'$_POST[chk_pulmonary]',
		'$_POST[chk_hepatitis]',
		'$_POST[chk_thyroid]',
		'$_POST[chk_astma]',
		'$_POST[chk_myocardial]',
		'$_POST[chk_peptic]',
		'$_POST[chk_kidney]',
		'$_POST[chk_congective]',
		'$_POST[chk_cancer]',
		'$_POST[chk_bleeding]',
		'$_POST[chk_stroke]',
		'$_POST[lmp]',
		'$_POST[no_pregnancy]',
		'$_POST[no_livebirth]',
		'$_POST[contraceptive]',
		'$_POST[contraceptive_when]',
		'$_POST[contraceptive_type]',
		'$_POST[chk_smoking]',
		'$_POST[smoking_sticks]',
		'$_POST[smoking_years]',
		'$_POST[chk_alcohol]',
		'$_POST[chk_beer]',
		'$_POST[chk_hard_drinks]',
		'$_POST[chk_wine]',
		'$_POST[alcohol_frequency]',
		'$_POST[chk_drugs]',
		'$_POST[chk_physical]',
		'$_POST[drugs_specify]',
		'$_POST[physical_describe]',
		'$_POST[chk_diet]',
		'$_POST[chk_diet_balance]',
		'$_POST[chk_diet_vegetarian]',
		'$_POST[chk_diet_fish]',
		'$_POST[chk_meat]',
		'$_POST[chk_lowfat]',
		'$_POST[chk_diabetic]',
		'$_POST[diet_others]'
		)";
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