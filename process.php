<?php
include_once 'database.php';
	/*
	$orgDate = "bdate"      "2019-09-15";  
    $newDate = date("d-m-Y", strtotime($orgDate));  
    echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  

*/
if(isset($_POST['submit']))
{	 
	 $first_name = $_POST['first_name'];
	 $middle_name = $_POST['middle_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $mobile_no = $_POST['mobile_no'];
	 $bdate = $_POST['bdate'];
	 $gender = $_POST['gender'];
	 $ssn = $_POST['ssn'];
	 $app_address = $_POST['app_address'];
	 $app_city = $_POST['app_city'];
	 $app_state = $_POST['app_state'];
	 $app_country = $_POST['app_country'];
	 $app_zip_code = $_POST['app_zip_code'];
	 $landlord_name = $_POST['landlord_name'];
	 $landlord_address = $_POST['landlord_address'];
	 $landlord_city = $_POST['landlord_city'];
	 $landlord_state = $_POST['landlord_state'];
	 $landlord_country = $_POST['landlord_country'];
	 $landlord_zip_code = $_POST['landlord_zip_code'];
	 $unit_type = $_POST['unit_type'];
	 $renter = $_POST['renter'];
	 $requested_amount = $_POST['requested_amount'];

	 $sql = "INSERT INTO registred_users (first_name,middle_name,last_name,email,mobile_no,date_of_birth,gender,social_security_no,app_mailing_address,app_city,app_state,app_country,app_zip,landlord_name,landlord_address,landlord_city,landlord_state,landlord_country,landlord_zip,unit_type,renter,requested_amount)
	 VALUES ('$first_name','$middle_name','$last_name','$email','$mobile_no','$bdate','$gender','$ssn','$app_address','$app_city','$app_state','$app_country','$app_zip_code','$landlord_name','$landlord_address','$landlord_city','$landlord_state','$landlord_country','$landlord_zip_code','$unit_type','$renter','$requested_amount')";
	 
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		 echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>