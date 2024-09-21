

  <?php
  $title = "Login";
  $sectionClass = "login";
  $heading = "Log in to Your Account";
  $description = "Enter your username & password to login";
  $formContent = '
<form class="row g-3 needs-validation" method="POST" novalidate>
  <div class="col-12">
    <label for="yourUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="username" class="form-control" id="isername" required>
      <div class="invalid-feedback">Please enter your username.</div>
    </div>


  </div>
  <div class="col-12">
    <label for="yourPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" required>
    <div class="invalid-feedback">Please enter your password!</div>
  </div>


  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Login</button>
  </div>


  <div class="col-12">
    <p class="small mb-0">Don’t have an account? <a href="reg.php">Create one</a></p>
  </div>
</form>';
  include('auth.php');
  ?>



<?php
  require 'koneksi.php';

    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query_sql= "SELECT * FROM register WHERE username = '$username' AND password ='$password'";

   $result = mysqli_query($conn, $query_sql);

   if(mysqli_num_rows($result) > 0){
        header("Location: dashboard.php");
   }else{
    echo "Email atau password salah";
   }

  ?>


