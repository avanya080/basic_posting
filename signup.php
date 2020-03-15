<?php 

include 'conn.php';
$uname=$_POST['name'];
$pass=$_POST['pass'];
$pass=md5($pass);
$sql_u = "SELECT * from users WHERE username='$uname'";
$res_u = $conn->query($sql_u);
if (mysqli_num_rows($res_u) <= 0) {
$sql="insert into signup(uname,pass) values('$uname','$pass')";
$result=$conn->query($sql);
}
header("Location:index.php");

?>