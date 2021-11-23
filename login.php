<?php     //start php tag
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['uname']=='' || $_REQUEST['upassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into login(username,password) values('".$_REQUEST['uname']."', '".$_REQUEST['upassword']."')";
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