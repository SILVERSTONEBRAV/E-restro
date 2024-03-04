<?php
session_start();
include('config/config.php');
//login 
if (isset($_POST['login'])) {
    $customer_email = $_POST['customer_email'];
    $customer_password = sha1(md5($_POST['customer_password'])); //double encrypt to increase security
    $stmt = $mysqli->prepare("SELECT customer_email, customer_password, customer_id  FROM  m_customers WHERE (customer_email =? AND customer_password =?)"); //sql to log in user
    $stmt->bind_param('ss',  $customer_email, $customer_password); //bind fetched parameters
    $stmt->execute(); //execute bind 
    $stmt->bind_result($customer_email, $customer_password, $customer_id); //bind result
    $rs = $stmt->fetch();
    $_SESSION['customer_id'] = $customer_id;
    if ($rs) {
        //if its sucessfull
        header("location:dashboard.php");
    } else {
        $err = "Incorrect Authentication Credentials ";
    }
}
require_once('partials/_head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Mealify</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" type="x-icon" href="assets/images/brand/images.png">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<style>*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url(assets/images/brand/background.jpeg) no-repeat;
  
  background-size: cover;
  background-position: center;
}
.wrapper{
  width: 420px;
  background: url(assets/images/themes/restro002.jpeg);
  background-repeat: no-repeat;
  background-size: cover;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: #fff;
  border-radius: 12px;
  padding: 30px 40px;
}
.wrapper h1{
  font-size: 36px;
  text-align: center;
}
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;
  
  margin: 30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: #fff;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
.remember-forgot label input{
  accent-color: #fff;
  margin-right: 3px;

}
.remember-forgot a{
  color: #fff;
  text-decoration: none;

}
.remember-forgot a:hover{
  text-decoration: underline;
}
.wrapper .btn{
  width: 100%;
  height: 45px;
  background: skyblue;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #000;
  font-weight: 600;
}
.wrapper .register-link{
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;

}
.register-link p a{
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}
.register-link p a:hover{
  text-decoration: underline;
}
    </style>
<body>
<div class="wrapper">
    <form method="post" role="form">
      <h1>Login</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" required name="customer_email" >
        <i><iconify-icon icon="ic:twotone-email"></iconify-icon></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name="customer_password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="login">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>
  
</body>
</html>