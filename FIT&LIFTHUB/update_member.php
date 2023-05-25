<?php
include "database.php";
if(isset($_POST["update"])){
  $mid = $_POST["mid"];
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
  $sql = "UPDATE member SET MNAME='$mname', MEMAIL='$memail', MMOB='$mmob', MPASS='$mpass', MAGE='$mage', MSUB='$msub', MADD='$madd' WHERE MID=$mid";
  if($db->query($sql)){
    echo "<div class='success'>Update Success</div>";
  }else{
    echo "<div class='error'>Update Failed</div>";
  }
}
if(isset($_GET["mid"])){
  $mid = $_GET["mid"];
  $sql = "SELECT * FROM member WHERE MID=$mid";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    $row = $result->fetch_assoc();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIT & LIFT HUB UPDATE MEMBER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
  background-color: #f0f0f0;
}
.container {
  max-width: 500px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.btn {
  display: inline-block;
  font-weight: 400;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #007bff;
  border: 1px solid #007bff;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: all 0.15s ease-in-out;
  background-image: linear-gradient(to bottom, #007bff, #0062cc);
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.btn:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  background-image: none;
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
  </style>
</head>
<body>
<h2></h2>
<div class="container my-5">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="form-group">
      <h2 class="my-5">UPDATE MEMBER</h2>
      <label>MEMBER ID</label>
      <input type="text" class="form-control" placeholder="Enter Member ID" name="mid" autocomplete="off">
    </div>
    <div class="form-group">
      <label>NAME</label>
      <input type="text" class="form-control" placeholder="Enter Your Name" name="mname" autocomplete="off">
    </div>
    <div class="form-group">
      <label>EMAIL</label>
      <input type="email" class="form-control" placeholder="Enter Your Email" name="memail" autocomplete="off">
    </div>
    <div class="form-group">
      <label>MOBILE</label>
      <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mmob" autocomplete="off">
    </div>
    <div class="form-group">
      <label>PASSWORD</label>
      <input type="password" class="form-control" placeholder="Enter Your Password" name="mpass" autocomplete="off">
    </div>
    <div class="form-group">
      <label>AGE</label>
      <input type="number" class="form-control" placeholder="Enter Your Age" name="mage" autocomplete="off">
    </div>
    <div class="form-group">
      <label>SUBSCRIPTION</label>
      <input type="text" class="form-control" placeholder="Enter Your Subscription" name="msub" autocomplete="off">
    </div>
    <div class="form-group">
      <label>ADDRESS</label>
      <textarea class="form-control" placeholder="Enter Your Address" name="madd"></textarea>
    </div>
    <button type="submit" class="btn btn-default" name="update">UPDATE</button>
  </form>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>