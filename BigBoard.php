<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <title> BASKETBALLDEV BIG BOARD</title>
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
        <h2>ROOKIE BIG BOARD</h2>
        <hr style="width:80%; height:2px; color:red; background-color:red">
        <h4>TIER ONE</h4>
        1. Victor Wembanyama - C - Metropolitans 92 - International <br>
        <h4>TIER TWO</h4>
        2. Scoot Henderson - PG - G League - G League <br>
        3. Brandon Miller - SF - Alabama - Freshman <br>
        <h4>THE REST</h4>
        4. Amen Thompson - SG - Overtime Elite - Overtime Elite <br>
        5. Ausar Thompson - SG - Overtime Elite - Overtime Elite <br>
        6. Jarace Walker - PF - Houston - Freshman <br>
        7. Cam Whitmore - PF - Villanova - Freshman <br>
        8. Anthony Black - SG - Arkansas - Freshman <br>
        9. Gradey Dick - SF - Kansas - Freshman <br>
        10. Taylor Hendricks - PF - UCF - Freshman <br>
        11. Cason Wallace - PG - Kentucky - Freshman <br>
        12. Nick Smith Jr. - PG - Arkansas - Freshman <br>
        13. Keyonte George - SG - Baylor - Freshman <br>
        14. Brice Sensabaugh - SF - Ohio State - Freshman <br>
        15. Jett Howard - SG - Michigan - Freshman <br>
        16. Jalen Hood-Schifino - PG - Indiana - Freshman <br>
        17. Jordan Hawkins - SG - UConn - Sophomore <br>
        18. Rayan Rupert - SG - NZ Breakers - International <br>
        19. Kris Murray - PF - Iowa - Junior <br>
        20. Dereck Lively II - C - Duke - Freshman <br>
        21. Kobe Bufkin - SG - Michigan - Sophomore <br>
        22. Maxwell Lewis - SF - Pepperdine - Sophomore <br>
        23. Colby Jones - SG - Xavier - Junior <br>
        24. Dariq Whitehead - SF - Duke - Freshman <br>
        25. Leonard Miller  SF - G League - G League <br>
        26. Marcus Sasser - PG - Houston  - Senior <br>
        27. Sidy Cissoko - SG - G League - G League <br>
        28. GG Jackson - PF - South Carolina - Freshman <br>
        29. Bilal Coulibaly - SF - Metropolitans 92 - International <br>
        30. Noah Clowney - PF - Alabama - Freshman <br>
        31. James Nnaji - C - Barelona - International <br>
        32. Trayce Jackson-Davis - PF - Indiana - Senior <br>
        33. Terquavion Smith - SG - NC State - Sophomore <br>
        34. Jaime Jaquez Jr. - SG - UCLA - Senior <br>
        35. Bradin Podziemski - SG - Santa Clara - Sophomore <br>
        36. Jalen Wilson - SF - Kansas - Senior <br>
        37. Julian Strawther - SG - Gonzaga - Junior <br>
        38. Julian Phillips - SF - Tennessee - Freshman <br>
        39. DaRon Holmes II - PF - Dayton - Sophomore <br>
        40. Andre Jackson - SG - UConn - Junior <br>
        41. Jaylen Clark - SG - UCLA - Junior <br>
        42. Ricky Council IV - SG - Arkansas - Junior <br>
        43. Terrence Shannon Jr. - SG - Illinois - Senior <br>
        44. Coleman Hawkins - PF - Illinois - Junior <br>
        45. Nikola Djurisic - SG - KK Mega Basket - International <br>
        46. Keyontae Johnson - SF - Kansas State - Senior <br> 
        47. Zach Edey - C - Purdue - Junior <br>
        48. Adem Bona - C - UCLA - Freshman <br>
        49. Baylor Scheierman - SF - Creighton - Senior <br>
        50. Kobe Brown  - PF - Missouri - Senior <br>
        51. Tristan Vukcevic - PF - Real Madrid B - International <br>
        52. Amari Bailey - SG - UCLA - Freshman <br>
        53. Azuolas Tubelis - PF - Arizona - Junior <br>
        54. Dillon Mitchell - SF - Texas - Freshman <br>
        55. Oscar Tshiebwe - C - Kentucky - Senior <br>
        56. Adama Sanogo - C - UConn - Junior <br>
        57. Reece Beekman - PG - Virgina - Junior <br>
        58. Kevin McCullar - SG - Kansas - Senior <br>
        59. Emoni Bates - SF - Eastern Michigan - Sophomore <br>
        60. Mouhamed Gueye - PF - Washington State - Sophomore <br>
        61. Drew Timme - PF - Gonzaga - Senior <br>
        62. Trey Alexander - SG - Creighton - Sophomore <br>
        63. Jordan Walsh - SF - Arkansas - Freshman <br>
        64. Ryan Lakbrenner - C - Creighton - Junior <br>
        65. Arthur Kaluma - PF - Creighton - Sophomore <br>
        66. Markquis Nowell - PG - Kansas State - Senior <br>
        67. Isaiah Wong - PG - Miami - Senior <br>
        68. Bryce Hopkins - SF - Providence - Sophomore <br>
        69. Ousmane N'Diaye - PF - Telekom Bonn - International <br>
        70. Juan Nunez - PG - Ratiopharm Ulm - International <br>
        71. Malcolm Cazalon - SG - Leuven - International <br>
        72. Mojave King - SG - G League - G League <br>
        73. Harrison Ingram - SF - Stanford - Sophomore <br>
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
