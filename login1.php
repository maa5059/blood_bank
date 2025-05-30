<!-- <?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
} elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bloodbank | Login</title>
  <style> 
    * {
      margin: 0; 
      padding: 0; 
      box-sizing: border-box; 
      font-family: 'Times New Roman', Times, serif; 
    } 
    body { 
      display: flex; 
      justify-content: center; 
      align-items: center; 
      min-height: 100vh; 
      background: url(/BBM/image/RBC.png) no-repeat center;
      background-size: cover; 
    } 
    .wrapper { 
      width: 420px; 
      background: transparent; 
      border: 2px solid #fff; 
      backdrop-filter: blur(15px); 
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); 
      color: #f1f4f6; 
      border-radius: 10px; 
      padding: 30px 40px; 
    } 
    .wrapper h1 { 
      font-size: 35px; 
      text-align: center;
      margin-bottom: 20px;
    } 
    .input-box { 
      position: relative; 
      width: 100%; 
      margin: 25px 0; 
    }
    .input-box input { 
      width: 100%; 
      background: transparent; 
      border: 2px solid #fff; 
      border-radius: 60px; 
      font-size: 16px; 
      color: #fff; 
      padding: 15px 20px; 
      outline: none; 
    } 
    .input-box input::placeholder { 
      color: #f5f5dc; 
    } 
    .btn1 { 
      width: 100%; 
      height: 40px;
      background: rgba(233, 233, 233, 0.81); 
      border: none; 
      border-radius: 40px; 
      cursor: pointer; 
      font-size: 15px; 
      color: black; 
      font-weight: 500; 
      margin-top: 10px;
       font-size: 15px; 
    } 
    .remember-forgot { 
      display: flex; 
      justify-content: space-between; 
      font-size: 15px; 
      margin: -15px 0 15px; 
    } 
    .remember-forgot label input { 
      accent-color: #aaa; 
      margin-right: 3px; 
    } 
    .remember-forgot a { 
      color: #fff; 
      text-decoration: none; 
    } 
    .remember-forgot a:hover { 
      text-decoration: underline; 
    } 
    .register-link { 
      font-size: 15px; 
      text-align: center; 
      margin: 20px 0 15px; 
    } 
    .register-link a { 
      color: #fff; 
      text-decoration: none; 
      font-weight: 500; 
    } 
    .register-link a:hover { 
      text-decoration: underline; 
    } 
  </style>
 <?php require 'head.php'; ?>
</head>

<body>
  <div class="wrapper"> 
    <form action="file/hospitalLogin.php" class="login-form" method="post"> 
      <h1>Login</h1> 
      <div class="input-box"> 
        <input type="email" name="hemail" placeholder="Email" required> 
        
         <i class='bx bxs-user-rectangle'></i> 
      </div> 
      <div class="input-box"> 
        <input type="password" name="hpassword" placeholder="Password" required> 
         
        <i class='bx bxs-lock-alt'></i> 
      </div> 
      <div class="remember-forgot"> 
        <label><input type="checkbox">Remember me</label> 
        <a href="#">Forgot Password?</a> 
      </div> 
      <input type="submit" name="hlogin" value="Login" class="btn1">
     
      <div class="register-link"> 
        <p>Don't have an account? <a href="register.php">Register</a></p> 
      </div> 
    </form> 
  </div> 
</body>
</html>
<?php } ?> --> 
