<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <title> BASKETBALLDEV MOCK DRAFT</title>
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
        <h2>MOCK DRAFT</h2>
        <hr style="width:80%; height:2px; color:red; background-color:red">
        <h4>ROUND ONE</h4>
        1. Detriot - Victor Wembanyama - C - Metropolitans 92 <br>
        2. Houston - Scoot Henderson - PG - G League <br>
        3. San Antonio - Brandon Miller - SF - Alabama <br>
        4. Charlotte - Amen Thompson - SG - Overtime Elite <br>
        5. Portland - Ausar Thompson - SG - Overtime Elite <br>
        6. Orlando - Anthony Black - SG - Arkansas <br>
        7. Indiana - Jarace Walker  - PF - Houston <br>
        8. Washington - Cam Whitmore - PF - Villanova <br>
        9. Utah - Gradey Dick - SF - Kansas <br>
        10. Dallas - Taylor Hendricks - PF - UCF <br>
        11. Orlando(from Chicago) - Brice Sensabaugh - SF - Ohio State <br>
        12. Oklahoma City - Cason Wallace - PG - Kentucky <br>
        13. Toronto - Nick Smith Jr. - PG - Arkansas <br>
        14. New Orleans - Keyonte George - SG - Baylor <br>
        15. Atlanta - Jett Howard - SG - Michigan <br>
        16. Utah(from Minnesota) - Jalen Hood-Schifino - PG - Indiana <br>
        17. Los Angeles - Jordan Hawkins - SG - UConn <br>
        18. Miami - Rayan Rupert - SG - NZ Breakers <br>
        19. Golden State - Kris Murray - PF - Iowa <br>
        20. Houston(from Los Angeles) - Dereck Lively II - C - Duke <br>
        21. Brooklyn(from Phoenix) - GG Jackson - PF - South Carolina <br>
        22. Brooklyn - Kobe Bufkin - SG - Michigan <br>
        23. Portland(from New York) - Maxwell Lewis - SF - Pepperdine <br>
        24. Sacramento - Colby Jones - SG - Xavier <br>
        25. Memphis - Dariq Whitehead - SF - Duke <br>
        26. Indiana(from Cleveland) - Leonard Miller - SF - G League <br>
        27. Charlotte(from Denver) - Marcus Sasser - PG - Houston <br>
        28. Utah(from Philadelphia) - Sidy Cissoko - SG - G League <br>
        29. Indiana(from Boston) - James Nnaji - C - Barcelona <br>
        30. Los Angeles(from Milwaukee) - Terquavion Smith - SG - NC State <br> 
        <h4>ROUND TWO</h4>
        31. Detriot - Noah Clowney - PF - Alabama <br>
        32. San Antonio - Trayce Jackson-Davis - PF - Indiana <br>
        33. Boston(from Houston) - Bilal Coulibaly - SF - Metropolitans 92 <br>
        34. Charlotte - Jalen Wilson - SF - Kansas <br>
        35. Oklahoma City(from Portland) - Jaime Jaquez Jr. - SG - UCLA <br>
        36. Orlando - DaRon Holmes II - PF - Dayton <br>
        37. Oklahoma City(from Washington) - Julian Phillips - SF - Tennessee <br>
        38. Sacramento(from Indiana) - Coleman Hawkins - PF - Illinois <br>
        39. Charlotte(from Utah) - Bradin Podziemski - SG - Santa Clara <br>
        40. Denver(from Dallas) - Julian Strawther - SG - Gonzaga <br>
        41. Charlotte(from Oklahoma City) - Nikola Djurisic - SG - KK Mega Basket <br>
        42. Washington(from Chicago) - Andre Jackson Jr. - SG - UConn <br>
        43. Portland(from Atlanta) - Zach Edey - C - Purdue <br>
        44. San Antonio(from Toronto) - Jaylen Clark - SG - UCLA <br>
        45. Memphis(from Minnesota) - Ricky Council IV - SG - Arkansas <br>
        46. Atlanta(from New Orleans) - Keyontae Johnson - SF - Kansas State<br>
        47. Los Angeles - Adem Bona - C - UCLA <br>
        48. Los Angeles - Kobe Brown - PF - Missouri <br>
        49. Cleveland(from Golden State) - Terrence Shannon Jr. - SG - Illinois <br>
        50. Indiana(from Miami) - Baylor Scheierman - SF - Creighton <br>
        51. Brooklyn - Tristan Vukcevic - PF - Real Madrid B <br>
        52. Phoenix - Amari Bailey - SG - UCLA <br>
        53. Minnesota(from New York) - Emoni Bates - SF - Eastern Michigan <br>
        54. Sacramento - Dillon Mitchell - SF - Texas <br>
        55. Indiana(from Cleveland) - Adama Sanogo - C - UConn <br>
        56. Memphis - Reece Beekman - PG - Virgina <br>
        57. Chicago(from Denver) - FORFEITED <br>
        58. Philadelphia - FORFEITED <br>
        59. Washington(from Boston) - Oscar Tshiebwe - C - Kentucky <br>
        60. Milwaukee - Kevin McCullar - SG - Kansas <br>        
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
