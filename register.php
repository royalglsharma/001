<?php
$na=$_POST['na'];
$pw=$_POST['p1'];
$em=$_POST['e1'];
$ph1=$_POST['ph1'];
$add=$_POST['add'];
$d1=$_POST['d1'];
$state=$_POST['state'];
$cmt=$_POST['cmt'];

$con=mysqli_connect("localhost","root","","royal");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into std2 values('$na' , '$pw', '$em', '$ph1', '$add', '$d1', '$state', '$cmt')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully registered";
else
echo "Some problem is occured";
}
?>
