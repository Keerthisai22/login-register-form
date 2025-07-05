<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<script>alert('✅ Login successful!');</script>";
  } else {
    echo "<script>alert('❌ Invalid username or password!');</script>";
  }

  $conn->close();
}
?>