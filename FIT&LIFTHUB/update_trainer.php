<?php
include "database.php";
if (isset($_POST["submit"])) {
  $tid = $_POST["tid"];
  $tname = $_POST["tname"];
  $temail = $_POST["temail"];
  $tmob = $_POST["tmob"];
  $tpass = $_POST["tpass"];
  $sql = "UPDATE trainer SET TNAME='$tname', TEMAIL='$temail', TMOB='$tmob', TPASS='$tpass' WHERE TID='$tid'";
  if ($db->query($sql) === TRUE) {
    header("Location: display_trainer.php");
    exit();
  } else {
    echo "Error updating record: " . $db->error;
  }
} else {
  $updateid = $_GET["updateid"];

  $sql = "SELECT * FROM trainer WHERE TID='$updateid'";
  $result = $db->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    echo "0 results";
  }
}
$db->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIT & LIFT HUB/-UPDATE TRAINER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
  padding: 10px 0;
}
.footer p {
  margin: 0;
}
  </style>
</head>
<body>
  <div class="container my-5">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <input type="hidden" name="tid" value="<?php echo $row["TID"]; ?>">
      <h2>UPDATE TRAINER</h2>
      <div class="form-group">
        <label>NAME</label>
        <input type="text" class="form-control"  placeholder="Enter Your Name" name="tname" value="<?php echo $row["TNAME"]; ?>" autocomplete="off">
      </div>
      <div class="form-group">
        <label>EMAIL</label>
        <input type="email" class="form-control"  placeholder="Enter Your Email" name="temail" value="<?php echo $row["TEMAIL"]; ?>" autocomplete="off">
      </div>
      <div class="form-group">
        <label>MOBILE NUMBER</label>
        <input type="text" class="form-control"  placeholder="Enter Your Mobile Number" name="tmob" value="<?php echo $row["TMOB"]; ?>" autocomplete="off">
      </div>
      <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" class="form-control"  placeholder="Enter Your Password" name="tpass" value="<?php echo $row["TPASS"]; ?>" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-default" name="submit">SUBMIT</button>
    </form>
  </div>
</body>
<div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</html>