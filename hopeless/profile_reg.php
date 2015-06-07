<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' & $_REQUEST['middlename']=='' & $_REQUEST['surname']=='' & $_REQUEST['city']=='' & $_REQUEST['jk']=='' & $_REQUEST['street']=='' & $_REQUEST['number']=='' & $_REQUEST['entrance']=='' & $_REQUEST['apartment']=='' & $_REQUEST['postcode']=='' & $_REQUEST['phone']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into users(name,middlename,surname,city,jk,street,number,entrance,apartment,postcode,phone) values('".$_REQUEST['name']."', '".$_REQUEST['middlename']."', '".$_REQUEST['surname']."', '".$_REQUEST['city']."', '".$_REQUEST['jk']."', '".$_REQUEST['street']."', '".$_REQUEST['number']."', '".$_REQUEST['entrance']."', '".$_REQUEST['apartment']."', '".$_REQUEST['postcode']."', '".$_REQUEST['phone']."')";
$res=mysql_query($sql);
echo "$sql";
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



