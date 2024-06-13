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

$user = $_POST['username'];
$pass = $_POST['password'];

// Use prepared statement to avoid SQL injection
$stmt = $conn->prepare("SELECT Password FROM register WHERE Username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($dbPassword);

if ($stmt->fetch()) {
    // Compare the fetched password with the provided password
    if ($pass == $dbPassword) {
        echo "<script>location.href='main.html'</script>";
    } else {
        echo "<script>alert('Incorrect password');location.href='login.html';</script>";
    }
} else {
    echo "<script>alert('Username not found');location.href='login.html';</script>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
