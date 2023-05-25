<?php
include "database.php";
if(isset($_GET['deleteid'])) {
  $deleteid = $_GET['deleteid'];
  $sql = "DELETE FROM payment WHERE PID='$deleteid'";
  if ($db->query($sql) === TRUE) {
    header("Location: display_payment.php");
    exit();
  } else {
    echo "Error deleting record: " . $db->error;
  }
}
$sql = "SELECT * FROM payment";
$result = $db->query($sql);
$db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIT & LIFT HUB/-PAYMENT LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
    .container {
  background-color: whitesmoke;
  max-width: 500px;
  margin: 0 auto;
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
<nav>
        <a class="title" href="">FIT & LIFT HUB</a>
    </nav>
  <div class="panel">
<div class="container">
  <h2>PAYMENT LIST</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>MEMBER ID</th>
        <th>AMOUNT</th>
        <th>PAYMENT DATE</th>
        <th>OPERATIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["PID"] . "</td>";
          echo "<td>" . $row["MID"] . "</td>";
          echo "<td>" . $row["AMOUNT"] . "</td>";
          echo "<td>" . $row["PAYMENT_DATE"] . "</td>";
          echo "<td>";
          echo "<a href='add_payment.php?updateid=" . $row["PID"] . "'>Update</a> | ";
          echo "<a href='display_payment.php?deleteid=" . $row["PID"] . "' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>";
          echo "</td>";
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      ?>
    </tbody>
  </table>
</div>
<div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div>
</body>
</html>