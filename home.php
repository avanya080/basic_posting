
<?php

session_start();

include("conn.php"); 


$uname=$_SESSION['name'];
extract($_POST);
if(isset($sub))
{
	$sql="select likes from post where id = {$id}";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
	$row['likes']=$row['likes']+1;
	$sql="update post set likes = {$row['likes']} where id = {$id} ";
	$result=$conn->query($sql);		
}
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>

<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
		<div id="pro3" ><h3><a href="logout.php">LogOut</a></h3></div>
<div id="post" class="row">
	<div class="col-xs-12">
	<form method="post" action="post.php">
		<input type="text" name="title" placeholder="title...." >
		<input type="text" name="des" placeholder="description...." >
		
<input type="submit" value="Post">
</form>

<hr>
<?php
$sql="select id,title,description,ptime,likes,uname from post";
$result=$conn->query($sql);
while($row=mysqli_fetch_assoc($result))
{

	echo "Post title - {$row['title']}<br>Post description - {$row['description']}<br>Post time - {$row['ptime']}<br>Posted by - {$row['uname']}<br>Post likes = {$row['likes']}<br><hr>";
?>
<form method = post action=#>
<input type="hidden" value=<?php echo "{$row['id']}"?> name=id>
<input type="submit" name="sub">
</form>
<?php
}

?>

	</div>
</div>
</body>
</html>