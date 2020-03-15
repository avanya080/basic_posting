<?php 

include 'conn.php';
$uname=$_POST['name'];
$pass=$_POST['pass'];
$pass=md5($pass);
$sql="SELECT * from signup WHERE uname='$uname' AND pass='$pass'";
$result=$conn->query($sql);
if (mysqli_num_rows($result) <=0 && mysqli_num_rows($result) >=2) {
    header("Location:index.php");
}
else {
    session_start();
    $_SESSION['name']=$_POST['uname'];
    header("Location:home.php");    
}












?>6