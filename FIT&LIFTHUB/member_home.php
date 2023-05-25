<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WELCOME TO FIT & LIFT HUB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            padding: 0 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
        .navbar-right {
            display: flex;
        }
        .navbar-right a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .navbar-right a:hover {
            background-color: #fff;
            color: #333;
        }
        .content {
            padding: 20px;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
  <nav>
        <a class="title" href="">FIT & LIFT HUB</a>
        <div class="navbar-right">
            <a href="display_sch.php">VIEW SCHEDULE</a>
            <a href="display_workout.php">VIEW WORKOUT PLANS</a>
            <a href="display_payment_member.php">VIEW PAYMENT</a>
            <a href="member_logout.php">LOGOUT</a>
        </div>
    </nav>
  <img src="image/bg.png" width="100%">
  <div class="footer">
    <footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
  </div> 
</body>
</html>