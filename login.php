<?php
$servername = "localhost";
$username = "iit-p";
$password = "Yash1632002@";
$database = "iit_p_d";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the user exists in the database
$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($hashedPassword);
$stmt->fetch();

if ($hashedPassword !== null && password_verify($password, $hashedPassword)) {
    session_start();
    $_SESSION['username'] = $username; // Store the username in a session variable
 system("/var/www/html/iit-p/packet_analysis.sh");
    header("Location: selection.html"); // Redirect to the selection page
    exit();
} else {
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
?>
