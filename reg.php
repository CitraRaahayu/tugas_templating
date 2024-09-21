<?php
  $title = "Register";
  $sectionClass = "register";
  $heading = "Create an Account";
  $description = "Enter your personal details to create an account";
  $formContent = '
<form class="row g-3 needs-validation" method="POST" novalidate>

  <div class="col-12">
    <label for="yourEmail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required>
    <div class="invalid-feedback">Please enter a valid Email address!</div>
  </div>

  <div class="col-12">
    <label for="yourUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="username" class="form-control" id="username" required>
      <div class="invalid-feedback">Please choose a username.</div>
    </div>
  </div>

  <div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" required>
    <div class="invalid-feedback">Please enter your password!</div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Create Account</button>
  </div>

  <div class="col-12">
    <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
  </div>
</form>';
  include('auth.php');
?>


<?php
require 'koneksi.php';

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

  
    $query_sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";

    
    if (mysqli_query($conn, $query_sql)) {
       
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Pendaftaran gagal: " . mysqli_error($conn);
    }

?>
