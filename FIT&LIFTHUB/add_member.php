<?php
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIT & LIFT HUB/-ADD MEMBER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.container {
  display: flex;
  justify-content: center;
  background-color: skyblue;
}
.form-group {
  margin-bottom: 15px;
}
label {
  font-weight: bold;
}
input[type="text"],
input[type="email"],
input[type="password"],
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}
input[type="number"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}
button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
h2 {
  text-align: center;
  margin-top: 30px;
}
button[type="submit"]:hover {
  background-color: #45a049;
}
.success {
  color: green;
  font-weight: bold;
}
.error {
  color: red;
  font-weight: bold;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  background-color: #333;
  color: #fff;
  padding: 1px 0;
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
    $mname = $_POST["mname"];
    $memail = $_POST["memail"];
    $mmob = "";
    if(isset($_POST["mmob"])){
      $mmob = $_POST["mmob"];
    }
    $mpass = $_POST["mpass"];
    $mage = $_POST["mage"];
    $msub = $_POST["msub"];
    $madd = $_POST["madd"];

    $sql = "INSERT INTO member (MNAME, MEMAIL, MMOB, MPASS, MAGE, MSUB, MADD) 
            VALUES ('$mname', '$memail', '$mmob', '$mpass', '$mage', '$msub', '$madd')";

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
  <h2>ADD MEMBER</h2>
  <div class="container my-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <div class="form-group">
        <label>NAME</label>
        <input type="text" class="form-control"  placeholder="Enter Your Name" name="mname" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>EMAIL</label>
        <input type="email" class="form-control"  placeholder="Enter Your Email" name="memail" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>MOBILE NUMBER</label>
        <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name="mmob" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" class="form-control"  placeholder="Enter Your Password" name="mpass" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>AGE</label>
        <input type="number" class="form-control"  placeholder="Enter Your Age" name="mage" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>SUBSCRIPTION</label>
        <input type="text" class="form-control"  placeholder="Enter Your Subscription" name="msub" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>ADDRESS</label>
        <textarea class="form-control" placeholder="Enter Your Address" name="madd" required class="input"></textarea>
      </div>
      <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
    </form>
  </div>
   <div class="footer">  
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>