<?php
session_start();
?>
<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <title> BASKETBALLDEV LOGIN</title>
	<style type="text/css">
		br{
			line-height: 10px;
		}
        body{
            background-color:#F5F5F5;
            font-family: 'Russo One';
            margin-top:20px;
		}
		h1{	
			text-align:center;
			color:#FF0000;
        }
        h2{
            text-align:center;
            color:#0000FF;
        }
		h3{
			color:#FFFFFF;
        }
		.top{
			margin-top: 100px;	
		}
		.login{
			color:#000000;
			margin:auto;
			background:#F5FFFA;
			max-width:400px;
			padding:50px;
			border-radius:40px;
        }
		input[type=text]{
			display:inline-block;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			border-radius:4px;
			border: .5px double;
			margin: 10px 0;
        }
		input[type=password]{
			display:inline-block;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			border-radius:4px;
			border: .5px double;
			margin: 10px 0;
		}
		input[type=submit]{
			width:100%;
			padding:10px;
			margin:10px 0;
			border-radius:4px;
            border:none;
            color:white;
			background:black;
			font-size:20px;
			cursor:pointer;
		}
		footer{
			text-align:center;
			color:#ffffff;
			background-color:#006600;
			padding 15px 0;
		}
		.bottom{	
        	position: absolute;
        	bottom: 0;
			left: 0;
        	width: 100%;
        	color: #FF0000;
			background-color:#000000;
			padding: 15px 0;
      		}		
	</style>
</head>
<body>
    <main>
	<h1>BASKETBALLDEV</h1>
    <hr style="height:4px; color:gold; background-color:#2618EE">
    <hr style="height:4px; width:900px; color:gold; background-color:gold">
    <div class="top"></div>
	<div class="login"o>
		<h2>SIGN IN WITH YOUR DEV ID</h2>
		<form action="Home.php" method= "POST">
			<label for="username">Username</label>	<input type="text" name= "username"> 
			<label for="password">Password</label><br><input type="password" name= "password"><br><br>
			<input type="submit" name= "Login" value="Login"> 
			<br>
			<p>DON'T HAVE AN ACCOUNT? <a href="Create_account.php" style="color:#DAA520">CREATE ACCOUNT</a></p>
		</form>
    <input type= 'button' onclick='javascript:history.back();return false;' value='PREVIOUS'>	
	</main>
	<footer>
        <div class="bottom"> 
            &copy; BASKETBALLDEV <hr style="width:1000px">
            <p>
            <h6><a href="Developers_Basic.html" style="color:white">MEET THE DEVELOPERS</a> | <a href="Home.html" style="color:white">HOME</a> | <a href="Questions_Basic.html" style="color:white">FREQUENTLY ASKED QUESTIONS</a></h6>
            </p>
        </div>
    </footer>
</body>
</html>


<?php

//require_once "Connection.php";

if (isset($_SESSION["error"])) {
	echo $_SESSION["error"];
	unset($_SESSION["error"]);
	die();
}

if (isset($_POST['Login'])) {
	unset($_POST['Login']);
	$db = get_connection();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$validation = $db ->prepare("select username from user");
    $validation -> bind_param('s', $username);
    $validation = $db ->prepare("SELECT password from user");
    $validation -> bind_param('s', $password);

	if($validation ->execute()){
		$login_result = $validation -> get_result();

		$loginInfo = $login_result -> fetch_assoc();


		if($loginInfo === False) {

			$_SESSION['error'] = "error: username and or password was not found";
		}

		else {
			$isGood = password_verify($password, $loginInfo["password"]);

			if ($isGood) {

				$_SESSION["userID"] = $loginInfo["ID"];
				$_SESSION["username"] = $loginInfo["username"];



			    header("Location: Home.php");
			}
			else {
				$_SESSION["error"] = "Error: the username and/or password was not found";
                header("Location: Home1.php");
			}
		}
	}
}	

	else {
		//echo "Error getting result: login info not found";
		die();
	}

?>
