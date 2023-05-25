<?php
include "database.php";
if(isset($_POST['submit'])) {
  if (isset($_POST['mid'])) {
    $mid = $_POST['mid'];
  }
  if (isset($_POST['mname'])) {
    $mname = $_POST['mname'];
  }
  $amount = $_POST['amount'];
  $payment_date = $_POST['payment_date'];
  $sql = "INSERT INTO payment (MID, MNAME, AMOUNT, PAYMENT_DATE) VALUES ('$mid', '', '$amount', '$payment_date')";
  if ($db->query($sql) === TRUE) {
    echo "Payment added successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
}
$sql = "SELECT * FROM member";
$result = $db->query($sql);

$db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIT & LIFT HUB/-ADD PAYMENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
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
    .container {
  background-color: skyblue;
  max-width: 500px;
  margin: 0 auto;
}
h2 {
  text-align: center;
  margin-top: 30px;
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
<nav>
        <a class="title" href="">FIT & LIFT HUB</a>
    </nav>
<div class="container">
  <h2>ADD PAYMENT</h2>            
  <form action="" method="post">
    <div class="form-group">
      <label for="mid">MEMBER ID</label>
      <select name="mid" id="mid" class="form-control">
        <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["MID"] . "'>" . $row["MID"] . " - " . $row["MNAME"] . "</option>";
          }
        } else {
          echo "<option value=''>No members found</option>";
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="amount">AMOUNT</label>
      <input type="text" class="form-control" id="amount" name="amount" required class="input">
    </div>
    <div class="form-group">
      <label for="payment_date">PAYMENT DATE</label>
      <input type="date" class="form-control" id="payment_date" name="payment_date" required class="input">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
  </form>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>