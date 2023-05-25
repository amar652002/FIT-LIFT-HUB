<?php
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIT & LIFT HUB/-ADD WORKOUT PLAN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}
.container {
  background-color: skyblue;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  padding: 30px;
}
h2 {
  text-align: center;
  margin-top: 30px;
}
.form-group {
  margin-bottom: 20px;
}
label {
  font-weight: bold;
}
.btn {
  background-color: #007bff;
  color: #fff;
  border-color: #007bff;
}
.btn:hover {
  background-color: #0069d9;
  color: #fff;
  border-color: #0062cc;
}
.success {
  color: green;
  font-weight: bold;
  margin-top: 20px;
}
.error {
  color: red;
  font-weight: bold;
  margin-top: 20px;
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
<body>
  <?php
  if(isset($_POST["submit"])){
    $day = $_POST["day"];
    $body_part = $_POST["body_part"];
    $exercise = $_POST["exercise"];
    $sql = "INSERT INTO workout_plan (DAY, BODY_PART, EXERCISE) VALUES ('$day', '$body_part', '$exercise')";
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
  <h2>ADD WORKOUT PLANS</h2>
  <div class="container my-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <div class="form-group">
        <label>DAY</label>
        <input type="text" class="form-control"  placeholder="Enter Day" name="day" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>BODY PART</label>
        <input type="text" class="form-control"  placeholder="Enter Body Part" name="body_part" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>EXERCISE</label>
        <input type="text" class="form-control"  placeholder="Enter Exercise" name="exercise" autocomplete="off" required class="input">
      </div>
      <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
    </form>
  </div>
  <div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>