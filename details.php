<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "government_procurements";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$buy = $_POST['name'];
$aad = $_POST['aadhar'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amt = $_POST['amount'];
$add = $_POST['address'];
$pan = $_POST['panno'];

$var = "INSERT INTO tender_details(Buyer_name,aadhar_no,email_id,phone_number,candidate_amount,candidate_address,pan_number) VALUES ('$buy','$aad','$email','$phone','$amt','$add','$pan')";
if ($conn->query($var) === TRUE) {

    echo "<script>location.href='main.html'</script>";
} else {
    echo "Error: " . $var . "<br>" . mysqli_error($conn);
}

// Close the connection
$conn->close();
?>
