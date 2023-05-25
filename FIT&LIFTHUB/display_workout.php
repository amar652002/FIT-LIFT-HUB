<?php
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>FIT & LIFT HUB/-WORKOUT PLANS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
    .container {
  background-color: skyblue;
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
  height: 50px;
}
nav a {
  color: white;
  text-decoration: none;
  display: inline-block; 
}

nav a:hover {
  background-color: #555; 
}
</style>
</head>
<body>
  <nav>
        <a class="title" href="#">FIT & LIFT HUB</a>
    </nav>
  <h2>WORKOUT PLANS</h2>
  <div class="container my-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>DAY</th>
          <th>BODY PART</th>
          <th>EXERCISE</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM workout_plan";
        $result = $db->query($sql);
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["DAY"]."</td>";
            echo "<td>".$row["BODY_PART"]."</td>";
            echo "<td>".$row["EXERCISE"]."</td>";
            echo "</tr>";
          }
        }else{
          echo "<tr><td colspan='3'>No workout plan available</td></tr>";
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