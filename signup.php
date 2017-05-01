<?php
if(isset($_POST['signup']))
{
	$name= $_POST['uname'];
	$eml = $_POST['eml'];
	$city = $_POST['cty'];
	$pin = $_POST['pin'];
	$pwd = $_POST['pwd'];
	$mob = $_POST['mob'];
$link1=mysqli_connect("localhost","root","","car_pull");
$sql="insert into user values('$name','$eml','$city','$pin','$pwd')";
$result1=mysqli_query($link1,$sql);
if(!$result1)
{
?>
<html>
<body>
<script>
 alert("There Is Some Problem");
 header("Location: one.php");
</script>

<?php
}
else
{
?>
<script>
 alert("Successful");
</script>
<?php
//sleep(10);
header("Location: one.php");
}
}
?>
</body>
</html>