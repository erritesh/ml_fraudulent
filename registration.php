<?php     //start php tag
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['first_name']=='' || $_REQUEST['last_name']=='' || $_REQUEST['bdate']==''|| $_REQUEST['ssn']=='' || $_REQUEST['payee_bank_detail']=='' || $_REQUEST['payer_bank_detail']=='' || $_REQUEST['email']=='' || $_REQUEST['mobile_no']=='' || $_REQUEST['req_address']=='' || $_REQUEST['req_city']=='' || $_REQUEST['req_state']=='' || $_REQUEST['req_zip_code']=='' || $_REQUEST['req_country']==''|| $_REQUEST['current_adress']=='' || $_REQUEST['current_city']=='' || $_REQUEST['current_state']=='' || $_REQUEST['current_code']=='' || $_REQUEST['current_country']=='' || $_REQUEST['req_country']=='' || $_REQUEST['req_country']==''  );
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into registered_users(f_name,m_name,l_name,dob,gender,social_sec_no,payee_bnk_det,payer_bnk_det,email_id,mobile_no,req_address,req_city,req_state,req_zip_code,req_country,current_address,current_city,current_state,current_zip_code,current_currentry,occupation) values('".$_REQUEST['first_name']."', '".$_REQUEST['m_name']."', '".$_REQUEST['l_name']."', '".$_REQUEST['dob']."', '".$_REQUEST['gender']."', '".$_REQUEST['social_sec_no']."', '".$_REQUEST['payee_bnk_det']."', '".$_REQUEST['payer_bnk_det']."', '".$_REQUEST['email_id']."', '".$_REQUEST['mobile_no']."', '".$_REQUEST['req_address']."','".$_REQUEST['req_city']."','".$_REQUEST['req_state']."','".$_REQUEST['req_zip_code']."','".$_REQUEST['req_country']."','".$_REQUEST['current_address']."','".$_REQUEST['current_city']."','".$_REQUEST['current_state']."','".$_REQUEST['current_zip_code']."','".$_REQUEST['current_currentry','".$_REQUEST['occupation']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>