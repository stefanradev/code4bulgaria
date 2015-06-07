<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['email']=='' & $_REQUEST['password']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into users(email,password) values('".$_REQUEST['email']."', '".$_REQUEST['password']."')";
$res=mysql_query($sql);
echo "$sql";
If($res)
{
Echo header("location:index.html");
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>