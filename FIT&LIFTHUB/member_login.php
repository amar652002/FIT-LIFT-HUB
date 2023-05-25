<?php
include "database.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIT & LIFT HUB</title>
    <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
}
.back {
  background-image: url("images/background.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
nav {
  background-color: #333;
  overflow: hidden;
}
nav a.title {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}
nav a.title:hover {
  background-color: #ddd;
  color: black;
}
nav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}
nav a:hover {
  background-color: #ddd;
  color: black;
}
.login {
  margin-top: 100px;
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 10px;
}
.login .heading {
  text-align: center;
  font-size: 28px;
  margin-bottom: 20px;
}
.login .log {
  margin: 20px;
}
.login .input {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
}
.login .btn {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
.login .btn:hover {
  background-color: #ddd;
  color: black;
}
.login .error {
  color: red;
  margin-bottom: 10px;
}
.footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
  position: fixed;
  bottom: 0;
  width: 100%;
}
    </style>
</head>
<body class="back">
    <nav>
        <a class="title" href="index.php">FIT & LIFT HUB</a>
        <a href="aboutus.php">ABOUT</a>
        <a href="contactus.php">CONTACT US</a>
    </nav>
    <div class="login">
        <h1 class="heading">MEMBER LOGIN</h1>
        <div class="log">
            <?php 
            if(isset($_POST["login"])){
                $sql = "SELECT * from member where MNAME='{$_POST["mname"]}' and MPASS='{$_POST["mpass"]}'";
                $res = $db->query($sql);
                if($res->num_rows>0){
                    $ro = $res->fetch_assoc();
                    $_SESSION["MID"]=$ro["MID"];
                    $_SESSION["MNAME"]=$ro["MNAME"];
                    header("Location: member_home.php");
                    exit();
                } else {
                    echo "<div class='error'>Invalid Username or password</div>";
                }
            }
            ?>
            <form method="POST" action="">
             <label>USERNAME</label>
             <input type="text" name="mname" required class="input">
             <label>PASSWORD</label>
             <input type="Password" name="mpass" required class="input"><br>
             <button type="submit" class="btn" name="login">LOGIN</button>
             </form>
        </div>
    </div>
    <div class="footer">
        <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
    </div>
</body>
</html>