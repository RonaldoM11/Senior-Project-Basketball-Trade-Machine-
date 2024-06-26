<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
	<title> BASKETBALLDEV REGISTER</title>
	<style type="text/css">
		label{
			display: block;
			padding-top: 25px;
			height: 15px;
			width: 350px;
		}
		br{
			line-height: 10px;
		}
		body{
            background-color:#F5F5F5;
            font-family: 'Russo One';
            Margin-top: 20px;
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
			margin-top: 50px;
		}
        .register{
			color:#000000;
			margin:auto;
			background:#F5FFFA;
			max-width:450px;
			padding:50px;
			border-radius:40px;
		}
		input[type=text]{
			display:inline-block;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			border-radius:4px;
			border: .5px solid;
			margin: 10px 0;
        }
		input[type=password]{
			display:inline-block;
			width:100%;
			padding:10px;
			box-sizing:border-box;
			border-radius:4px;
			border: .5px solid;
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
        	position: fixed;
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
	<hr style="height:4px; color:red; background-color:blue">
	<div class="top"></div>
	<div class="register">
        <h2>REGISTER</h2>
        <h2>CREATE YOUR NEW DEV ACCOUNT</h2>
<form action="register.php" method = "POST"> 
        <label for="first Name">First Name</label>		<input type="text" name ="firstname">
        <label for="last Name">Last Name</label>		<input type="text" name ="lastname">
        <label for="username">Username</label>		    <input type="text" name ="username">
	    <label for="password">Password</label><br>		<input type="password" name ="password">
	    <input type="submit" value="Register" name= "Register">
	    <p>ALREADY HAVE AN ACCOUNT? <a href="Login.php" style="color:#DAA520"> LOGIN</a></p>
</form>
		<input type= 'button' onclick='javascript:history.back();return false;' value='PREVIOUS'>
	</main>
	<footer>
        <div class="bottom">  
            &copy; BASKETBALLDEV <hr style="width:1000px">
            <p>
            <h6><a href="Developers_Basic.html" style="color:white">MEET THE DEVLOPERS</a> | <a href="Home.html" style="color:white">HOME</a> | <a href="Questions_Basic.html" style="color:white">FREQUENTLY ASKED QUESTIONS</a></h6>
            </p>
        </div>
	</footer>
</body>
</html>

