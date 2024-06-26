<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <title> BASKETBALLDEV HOME</title>
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
		.navbar a:hover {
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
            width: 295%;
  			background: #F5FFFA;
			margin: 5px;
			border: 2px solid red;
			text-align: center;
        }

        /* Middle column */
        .column.middle {
            width: 90%;
            height:90%;
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
<div class="navbar">
    <img src="TeamLogos/logo.png" width="100" alt="Logo" />
    <h1 style="color:white;"> Basketball Trade Machine </h1>
    <h3>
    <div class="Search-container">
        <form action="#" method = "POST"> 
			    <input type="text" placeholder="Search..." name= "search">
                <button type="submit">Submit</button>
        </form>
    </div>
        <a href="Login.php"><i class="fa fa-fw fa-user"></i>LOGIN</a>
        <a href="Create_account.php"><i class="fa fa-fw fa-user"></i>CREATE ACCOUNT</a>
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

<div class="sidenav-main">
        <div class="column left">
            <h2>ROOKIE BIG BOARD</h2>
            <hr style="width:80%; height:2px; color:red; background-color:red">
                1. Victor Wembanyama - C <br>
                2. Scoot Henderson - PG <br>
                3. Brandon Miller - SF <br>
                4. Amen Thompson - SG <br>
                5. Ausar Thompson - SG <br>
                <br> Login to view more
        </div>
  
        <div class="column middle">
            <h2>SEASON POINT LEADERS</h2>
            <hr style="width:80%; height:2px; color:red; background-color:red">
                1. Joel Embiid - 33.1 <br>
                2.Luka Doncic - 32.4 <br>
                3. Damian Lillard - 32.2 <br>
                4. Shai Gilgeous-Alexander - 31.4 <br>
                5. Giannis Antetokounmpo - 31.1 <br>
                <br> Login to view more
        </div>
  
        <div class="column righttop">
            <h2>MOCK DRAFT</h2>
            <hr style="width:80%; height:2px; color:red; background-color:red">
                1. Detroit - Victor Wembanyama <br>
                2. Houston - Scoot Henderson <br>
                3. San Antonio - Brandon Miller <br>
                4. Charlotte - Amen Thompson <br>
                5. Orlando - Ausar Thompson <br>
                <br> Login to view more                
        </div>
        <div class="column leftmid">
            <h2>NBA TEAMS</h2>
                <hr style="width:100%; height:2px; color:red; background-color:red">
                Legend: -> Name - Position - Experience - Salary - Role
                <form method="POST" action="">
                Team List :
                <select name="team" onchange="this.form.submit()">
                    <option value="Select" disabled selected>--select--</option>}
                    <option value="Atlanta Hawks">Atlanta Hawks</option>
                    <option value="Boston Celtics">Boston Celtics</option>
                    <option value="Brooklyn Nets">Brooklyn Nets</option>
                    <option value="Charlotte Hornets">Charlotte Hornets</option>
                    <option value="Chicago Bulls">Chicago Bulls</option>
                    <option value="Cleveland Cavaliers">Cleveland Cavaliers</option>
                    <option value="Dallas Mavericks">Dallas Mavericks</option>
                    <option value="Denver Nuggets">Denver Nuggets</option>
                    <option value="Detroit Pistons">Detroit Pistons</option>}
                    <option value="Golden State Warriors">Golden State Warriors</option>}
                    <option value="Houston Rockets">Houston Rockets</option>}
                    <option value="Indiana Pacers">Indiana Pacers</option>}
                    <option value="Los Angeles Clippers">Los Angeles Clippers</option>}
                    <option value="Los Angeles Lakers">Los Angeles Lakers</option>}
                    <option value="Memphis Grizzles">Memphis Grizzlies</option>}
                    <option value="Miami Heat">Miami Heat</option>}
                    <option value="Milwaukee Bucks">Milwaukee Bucks</option>}
                    <option value="Minnesota Timberwolves">Minnesota Timberwolves</option>}
                    <option value="New Orleans Pelicans">New Orleans Pelicans</option>}
                    <option value="New York Knicks">New York Knicks</option>}
                    <option value="Oklahoma City Thunder">Oklahoma City Thunder</option>}
                    <option value="Orlando Magic">Orlando Magic</option>}
                    <option value="Philadelphia 76ers">Philadelphia 76ers</option>}
                    <option value="Phoenix Suns">Phoenix Suns</option>}
                    <option value="Portland Trailblazers">Portland Trailblazers</option>}
                    <option value="Sacramento Kings">Sacramento Kings</option>}
                    <option value="San Antonio Spurs">San Antonio Spurs</option>}
                    <option value="Toronto Raptors">Toronto Raptors</option>}
                    <option value="Utah Jazz">Utah Jazz</option>}
                    <option value="Washington Wizards">Washington Wizards</option>}
                </select>
                </form/>
                <hr style="width:50%; height:2px; color:red; background-color:red">
                
                <?php
                $servername = "localhost";
                $username = "basketballdev";
                $password = "qam$9Hruqrzm";
                $dbname = "basketballdev";
 
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if(isset($_POST["team"])) {
                    $team=$_POST["team"];
                    if ($_POST["team"] == "Atlanta Hawks") 
                        $image="TeamLogos/ATL.svg";        
                    if ($_POST["team"] == "Brooklyn Nets")
                        $image="TeamLogos/BKN.svg";
                    if ($_POST["team"] == "Boston Celtics")
                        $image="TeamLogos/BOS.svg";
                    if ($_POST["team"] == "Charlotte Hornets")
                        $image="TeamLogos/CHA.svg";
                    if ($_POST["team"] == "Chicago Bulls")
                        $image="TeamLogos/CHI.svg";
                    if ($_POST["team"] == "Cleveland Cavaliers")
                        $image="TeamLogos/CLE.svg";
                    if ($_POST["team"] == "Dallas Mavericks")
                        $image="TeamLogos/DAL.svg";
                    if ($_POST["team"] == "Denver Nuggets")
                        $image="TeamLogos/DEN.svg";
                    if ($_POST["team"] == "Detroit Pistons")
                        $image="TeamLogos/DET.svg";
                    if ($_POST["team"] == "Houston Rockets")
                        $image="TeamLogos/HOU.svg";
                    if ($_POST["team"] == "Indiana Pacers")
                        $image="TeamLogos/IND.svg";
                    if ($_POST["team"] == "Los Angeles Lakers")
                        $image="TeamLogos/LA.svg";
                    if ($_POST["team"] == "Los Angeles Clippers")
                        $image="TeamLogos/LAE.svg";
                    if ($_POST["team"] == "Memphis Grizzles")
                        $image="TeamLogos/MEM.svg";
                    if ($_POST["team"] == "Miami Heat")
                        $image="TeamLogos/MIA.svg";
                    if ($_POST["team"] == "Milwaukee Bucks")
                        $image="TeamLogos/MIL.svg";
                    if ($_POST["team"] == "Minnesota Timberwolves")
                        $image="TeamLogos/MIN.svg";
                    if ($_POST["team"] == "New Orleans Pelicans")
                        $image="TeamLogos/NOL.svg";
                    if ($_POST["team"] == "New York Knicks")
                        $image="TeamLogos/NYC.svg";
                    if ($_POST["team"] == "Oklahoma City Thunder")
                        $image="TeamLogos/OKC.svg";
                    if ($_POST["team"] == "Orlando Magic")
                        $image="TeamLogos/ORL.svg";
                    if ($_POST["team"] == "Philadelphia 76ers")
                        $image="TeamLogos/PHI.svg";
                    if ($_POST["team"] == "Phoenix Suns")
                        $image="TeamLogos/PHO.svg";
                    if ($_POST["team"] == "Portland Trailblazers")
                        $image="TeamLogos/POR.svg";
                    if ($_POST["team"] == "San Antonio Spurs")
                        $image="TeamLogos/SA.svg";
                    if ($_POST["team"] == "Sacramento Kings")
                        $image="TeamLogos/SAC.svg";
                    if ($_POST["team"] == "Golden State Warriors")
                        $image="TeamLogos/SF.svg";
                    if ($_POST["team"] == "Toronto Raptors")
                        $image="TeamLogos/TOR.svg";
                    if ($_POST["team"] == "Utah Jazz")
                        $image="TeamLogos/UTA.svg";
                    if ($_POST["team"] == "Washington Wizards")
                        $image="TeamLogos/WAS.svg";

                    $sql = "SELECT * FROM players ORDER by 2021_score desc";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                                if ($row["team"] == $team) {
                                    echo  " -> " . $row["name"].
                                    " - " . $row["position"].
                                    " - " . $row["experience"].
                                    " - " . $row["salary"].
                                    " - " . $row["role"]. "<br>";
                                }
                            }
                    } else {
                        echo "0 results";
                    }
                } else {
                    $team=NULL;  
                }
                $conn->close();
                ?>
            <img src="<?php echo $image;?>">
        </div>
</div>
	<footer>
        <div class="bottom"> 
            &copy; BASKETBALLDEV <hr style="width:1000px">
            <p>
            <h6><a href="Developers_Basic.html" style="color:white">MEET THE DEVELOPERS</a> | <a href="Home1.php" style="color:white">HOME</a> | <a href="Questions_Basic.html" style="color:white">FREQUENTLY ASKED QUESTIONS</a></h6>
            </p>
        </div>
    </footer>
</body>
</html>       
