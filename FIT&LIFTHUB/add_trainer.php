<?php
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIT & LIFT HUB/-ADD TRAINER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.container {
  background-color: skyblue;
  max-width: 500px;
  margin: 0 auto;
}
.form-group input {
  border-radius: 0;
  border: none;
  border-bottom: 1px solid #ccc;
  font-size: 16px;
  padding: 10px;
}
.form-group input:focus {
  outline: none;
  border-bottom: 2px solid #007bff;
}
.btn-default {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  padding: 10px 20px;
}
.btn-default:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}
h2 {
  text-align: center;
  margin-top: 30px;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}
.footer p {
  margin: 0;
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
</style>
</head>
<body>
  <?php
  if(isset($_POST["submit"])){
    $tname = $_POST["tname"];
    $temail = $_POST["temail"];
    $tmob = $_POST["tmob"];
    $tpass = $_POST["tpass"];

    
    $sql = "INSERT INTO trainer (TNAME, TEMAIL, TMOB, TPASS) VALUES ('$tname', '$temail', '$tmob', '$tpass')";
    
    if($db->query($sql)){
      echo "<div class='success'>Insert Success</div>";
    }else{
      echo "<div class='error'>Insert Failed</div>";
    }
  }
  ?>
  <nav>
        <a class="title" href="">FIT & LIFT HUB</a>
    </nav>
  <div class="panel">
  <h2>ADD TRAINER</h2>
  <div class="container my-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <div class="form-group">
        <label>NAME</label>
        <input type="text" class="form-control"  placeholder="Enter Your Name" name="tname" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>EMAIL</label>
        <input type="email" class="form-control"  placeholder="Enter Your Email" name="temail" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>MOBILE NUMBER</label>
        <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name="tmob" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" class="form-control"  placeholder="Enter Your Password" name="tpass" autocomplete="off" required class="input">
      </div>
      <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
    </form>
  </div>
  <div class="footer">   
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>