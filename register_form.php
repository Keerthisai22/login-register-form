<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="form-box">
    <h2>Register</h2>
    <form id="registerForm" action="registration.php" method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <select name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      <input type="number" name="age" placeholder="Age" required>
      <input type="text" name="mobile" placeholder="Mobile Number" required oninput="this.value=this.value.replace(/[^0-9]/g,'');">
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Submit</button>
    </form>
    <form action="login_form.php">
      <button type="submit">Back to Login</button>
    </form>
  </div>

  <script>
    $('#registerForm').submit(function(e) {
      let age = $('input[name="age"]').val().trim();
      let mobile = $('input[name="mobile"]').val().trim();
      let password = $('input[name="password"]').val().trim();

      if (age <= 0 || age > 100) {
        alert("❌ Age must be between 1 and 100.");
        e.preventDefault();
      } else if (!/^[0-9]{10}$/.test(mobile)) {
        alert("❌ Mobile number must be exactly 10 digits.");
        e.preventDefault();
      } else if (password.length < 4) {
        alert("❌ Password must be at least 4 characters.");
        e.preventDefault();
      }
    });
  </script>
</body>
</html>