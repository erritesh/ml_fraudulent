<?php     //start php tag
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['first_name']=='' || $_REQUEST['last_name']=='' || $_REQUEST['email']==''|| $_REQUEST['mobile_no']=='' || $_REQUEST['bdate']=='' || $_REQUEST['gender']==''|| $_REQUEST['ssn']=='' || $_REQUEST['app_address']=='' || $_REQUEST['app_city']=='' || $_REQUEST['app_state']=='' || $_REQUEST['app_country']==''|| $_REQUEST['app_zip_code']=='' || $_REQUEST['landlord_name']=='' || $_REQUEST['landlord_address']=='' || $_REQUEST['landlord_city']=='' || $_REQUEST['landlord_state']=='' || $_REQUEST['landlord_country']=='' || $_REQUEST['landlord_zip_code']=='' || $_REQUEST['unit_type']=='' || $_REQUEST['renter']=='' || $_REQUEST['requested_amount']==''  );
{
echo "please fill the empty field.";
}
else
{
$sql="insert into registred_users(first_name,middle_name,last_name,email,mobile_no,bdate,gender,gender,app_mailing_address,app_city,app_state,app_country,app_zip,landlord_name,landlord_address,landlord_city,landlord_state,landlord_country,landlord_zip,unit_type,renter,requested_amount) values('".$_REQUEST['first_name']."', '".$_REQUEST['middle_name']."', '".$_REQUEST['last_name']."', '".$_REQUEST['email']."', '".$_REQUEST['mobile_no']."', '".$_REQUEST['bdate']."', '".$_REQUEST['gender']."', '".$_REQUEST['ssn']."', '".$_REQUEST['app_address']."', '".$_REQUEST['app_city']."', '".$_REQUEST['app_state']."','".$_REQUEST['app_country']."','".$_REQUEST['app_zip_code']."','".$_REQUEST['landlord_name']."','".$_REQUEST['landlord_address']."','".$_REQUEST['landlord_city']."','".$_REQUEST['landlord_state']."','".$_REQUEST['landlord_country']."','".$_REQUEST['landlord_zip_code']."','".$_REQUEST['unit_type']."','"$_REQUEST['renter']."','"$_REQUEST['requested_amount']."')";

$res=mysql_query($sql);
if($res)
{
echo "Record successfully inserted";
}
Else
{
echo "There is some problem in inserting record";
}

}
}

?>