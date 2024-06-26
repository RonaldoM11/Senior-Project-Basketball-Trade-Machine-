<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <title> BASKETBALLDEV SEASON LEADERS</title>
    <style type="text/css">
		br{
			line-height: 10px;
		}
		.navbar {
  			width: 100%;
  			background-color:#000000;
  			overflow: auto;
		}
		.navbar a {
  			float: right;
  			padding: 12px;
  			color: white;
  			text-decoration: none;
  			font-size: 17px;
		}
		o.navbar a:hover {
  			background-color: #FF0000;
        }
        .navbar .search-container {
            float:right;
            margin:10px;
        }
        .navbar .search-container button:hover{
            background:#FF3333;
        }
        .dropdown {
            float: right;
            overflow: hidden;
        }
        div{
            background-color: black;
        }
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0; 
        }
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        body{
            background-color:#F5F5F5;
            font-family: 'Russo One';
            margin-top:20px;
        }
        h2{
            color:#000000;        
        }
		h3{
			color:#FFFFFF;
        }
         .sidenav-main {
            display: grid;
  			width: 100%;
			height: 80%;
            background: #F5FFFA;
  			overflow-x: hidden;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows:300px 400px;
			grid-gap: 5px;
			border: 2px solid black;
		}
        .column {
            float: left;
            padding: 10px;
        }

        /* Left and right column */
        .column.left {
            width: 90%;
  			background: #F5FFFA;
			margin: 5px;
			border: 2px solid red;
			text-align: center;
        }
        .column.righttop {
            width: 94%; 
  			background: #F5FFFA;
			margin: 5px;
			border: 2px solid red;
			text-align: center;
        }
        .column.leftmid {
            width: 295%;
            height:250%;
  			background: #F5FFFA;
			margin: 5px;
			border: 2px solid red;
			text-align: center;
        }
        .column.rightbottom {
            width: 150%;
            height: 580%;
  			background: #F5FFFA;
			margin: 5px;
			border: 2px solid red;
			text-align: left;
        }

        /* Middle column */
        .column.middle {
            width: 90%;
  			background: #F5FFFA;
			margin: 10px;
			border: 2px solid red;
			text-align: center;
        }
		footer{
			text-align:center;
			color:#ffffff;
			padding 15px 0;
		}
		.bottom{	
        	position: absolute;
        	bottom: -70;
			left: 0;
        	width: 100%;
        	color: #FF0000;
			background-color:#000000;
			padding: 15px 0;
            }
	</style>
</head>
<body>
<div class="navbar">
    <img src="TeamLogos/logo.png" width="100" alt="Logo" />
    <h1 style="color:white;"> Basketball Trade Machine </h1>
    <h3>
    <a href="Home.php"><i class="fa fa-fw fa-user"></i>HOME</a>
    <a href="Home1.php"><i class="fa fa-fw fa-user"></i>LOGOUT</a>
        <div class="dropdown">
            <button class="dropbtn">
                SETTINGS
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Color Blind setting 1</a> 
                <a href="#">Color Blind setting 2</a>
                <a href="#">Color Blind setting 3</a>
            </div>
        </div>
	</h3>
</div>

<?php
$servername = "localhost";
$username = "basketballdev";
$password = "qam$9Hruqrzm";
$dbname = "basketballdev";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<div class="sidenav-main">
        <div class = "column rightbottom">
        <style> h2 {text-align: center;} </style>
        <h2>SEASON LEADERS</h2>
        <hr style="width:80%; height:2px; color:red; background-color:red">
        <h4>POINTS PER GAME</h4>
        1. Joel Embiid - 33.1 <br>
        2. Luka Doncic - 32.4 <br>
        3. Damian Lillard - 32.2 <br>
        4. Shai Gilgeous-Alexander - 31.4 <br>
        5. Giannis Antetokounmpo - 31.4 <br>
        <h4>REBOUNDS PER GAME</h4>
        1. Domantas Sabonis - 12.3 <br>
        2. Giannis Antetokounmpo - 11.8 <br>
        3. Nikola Jokic - 11.8 <br>
        4. Rudy Gobert - 11.6 <br>
        5. Nikola Vucevic - 11.0 <br>
        <h4>ASSISTS PER GAME</h4>
        1. James Harden - 10.7 <br>
        2. Trae Young - 10.2 <br>
        3. Nikola Jokic - 9.8 <br>
        4. Chris Paul - 8.9 <br>
        5. Ja Morant - 8.1 <br>
        <h4>STEALS PER GAME</h4>
        1. OG Anunoby - 1.9 <br>
        2. Fred VanVleet - 1.8 <br>
        3. Jimmy Butler - 1.8 <br>
        4. Shai Gilgeous-Alexander - 1.6 <br>
        5. Anthony Edwards - 1.6 <br>
        <h4>BLOCKS PER GAME</h4>
        1. Jaren Jackson Jr. - 3.0 <br>
        2. Nic Claxton - 2.5 <br>
        3. Brook Lopez - 2.5 <br>
        4. Myles Turner - 2.3 <br>
        5. Walker Kessler - 2.3 <br>
        <h4>FIELD GOAL PERCENTAGE</h4>
        1. Nic Claxton - .705 <br>
        2. Mason Plumlee - .680 <br>
        3. Rudy Gobert - .659 <br>
        4. Clint Capela - .653 <br>
        5. Jarrett Allen - .644 <br>
        <h4>THREE POINT PERCENTAGE</h4>
        1. Luke Kennard - .494 <br>
        2. Al Horford - .446 <br>
        3. Damion Lee - .445 <br>
        4. Malcolm Brogdon - .444 <br>
        5. Tyese Maxey - .434 <br>
        <h4>FREE THROW PERCENTAGE</h4>
        1. Tyler Herro - .934 <br>
        2. Kevin Durant - .919 <br>
        3. Stephen Curry - .915 <br>
        4. Damian Lillard - .914 <br>
        5. Shai Gilgeous-Alexander - .905 <br>
        </div>
</div>
	<footer>
        <div class="bottom"> 
            &copy; BASKETBALLDEV <hr style="width:1000px">
            <p>
            <h6><a href="Developers_Home.html" style="color:white">MEET THE DEVELOPERS</a> | <a href="Home.php" style="color:white">HOME</a> | <a href="Questions_Home.html" style="color:white">FREQUENTLY ASKED QUESTIONS</a></h6>
            </p>
        </div>
    </footer>
</body>
</html>        
