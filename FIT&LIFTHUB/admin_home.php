<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WELCOME TO FIT & LIFT HUB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <style>
        .panel {
            background-color: #f7f7f7;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 20px auto;
            max-width: 800px;
        }
        .panel ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .panel ul li {
            margin-bottom: 10px;
        }
        .panel ul li a {
            color: #333;
            display: block;
            padding: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 5px;
        }
        .panel ul li a:hover {
            background-color: #e6e6e6;
        }
        nav {
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 20px;
        }
        nav a.title {
            color: #333;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            margin-left: 10px;
        }
        nav a.logo {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-size: contain;
            background-repeat: no-repeat;
            margin-right: 10px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
<div>
	<nav>
        <a class="title" href="">FIT & LIFT HUB</a>
    </nav>
	<div class="panel">
  <ul>
    <li><a href="add_trainer.php">ADD TRAINER</a></li>
    <li><a href="display_trainer.php">VIEW TRAINER</a></li>
    <li><a href="add_member.php">ADD MEMBER</a></li>
    <li><a href="display_member.php">VIEW MEMBER</a></li>
    <li><a href="add_payment.php">ADD PAYMENT</a></li>
    <li><a href="display_payment.php">VIEW PAYMENT</a></li>
    <li><a href="admin_logout.php">LOGOUT</a></li>
  </ul>
</div>
</div>
<img src="image/bg.png" width="100%">
	<div class="footer">
		<footer><p>Copy Right &copy; FIT&LIFTHUB </p></footer>
	</div> 
</body>
</html>