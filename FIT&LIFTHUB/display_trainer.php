<?php
  include "database.php";

  if(isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];

    $sql = "DELETE FROM trainer WHERE TID='$deleteid'";

    if ($db->query($sql) === TRUE) {
      header("Location: display_trainer.php");
      exit();
    } else {
      echo "Error deleting record: " . $db->error;
    }
  }
  $sql = "SELECT * FROM trainer";
  $result = $db->query($sql);

  $db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIT & LIFT HUB/-TRAINERS LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h2 {
  text-align: center;
  margin-top: 30px;
}
.container {
  margin-top: 50px;
  background-color: limegreen;
}
table {
  width: 100%;
  margin-bottom: 20px;
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
}
th {
  background-color: #f2f2f2;
  color: #333;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
a {
  text-decoration: none;
}
.btn {
  margin-top: 10px;
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
  <h2>TRAINERS LIST</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR.NO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>PASSWORD</th>
        <th>OPERATIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["TID"] . "</td>";
          echo "<td>" . $row["TNAME"] . "</td>";
          echo "<td>" . $row["TEMAIL"] . "</td>";
          echo "<td>" . $row["TMOB"] . "</td>";
          echo "<td>" . $row["TPASS"] . "</td>";
          echo "<td>";
echo "<a href='update_trainer.php?updateid=" . $row["TID"] . "'>Update</a> | ";
echo "<a href='delete_trainer.php?deleteid=" . $row["TID"] . "' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Delete</a>";
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