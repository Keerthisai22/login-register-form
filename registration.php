<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (name, gender, age, mobile, email, username, password)
          VALUES ('$name', '$gender', '$age', '$mobile', '$email', '$username', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('✅ Registration successful!'); window.location.href='login_form.php';</script>";
  } else {
    echo "<script>alert('❌ Error: " . $conn->error . "');</script>";
  }

  $conn->close();
}
?>