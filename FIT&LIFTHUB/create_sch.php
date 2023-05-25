<?php
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIT & LIFT HUB /-CREATE SCHEDULE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h2 {
  text-align: center;
  margin-top: 30px;
}
    body {
      background-color: #f1f1f1;
    }
    .container {
      background-color: skyblue;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 50px;
    }
    .form-group label {
      font-weight: bold;
    }
    .success {
      color: green;
      margin-top: 20px;
    }
    .error {
      color: red;
      margin-top: 20px;
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
  </style>
</head>
<body>
  <?php
  if(isset($_POST["submit"])){
    $day = $_POST["day"];
    $time = $_POST["time"];
    $sql = "INSERT INTO schedule (DAY, TIME) VALUES ('$day', '$time')";
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
  <h2>ADD SCHEDULE</h2>
  <div class="container my-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <div class="form-group">
        <label>DAY</label>
        <input type="text" class="form-control"  placeholder="Enter Day" name="day" autocomplete="off" required class="input">
      </div>
      <div class="form-group">
        <label>TIME</label>
        <input type="text" class="form-control"  placeholder="Enter Time" name="time" autocomplete="off" required class="input">
      </div>
      <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
    </form>
  </div>
  <div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>