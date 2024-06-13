<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "government_procurements";
$conn=new mysqli($servername,$username,$password,$database);
if (!$conn) {
	die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$uname=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnfirm=$_POST['confirm-password'];


$var="INSERT into register(Name,Username,Email_ID,Password,Confirm_password) values('$name','$uname','$email','$password','$cnfirm')";
if (mysqli_query($conn, $var)) {
  echo "<script>location.href='main.html'</script>";
} else {
  echo "Error: " . $var . "<br>" . mysqli_error($conn);
}
?>
