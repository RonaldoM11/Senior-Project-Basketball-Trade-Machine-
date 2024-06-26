<html>   
<head></head>   
<title>Team Display</title>   
<body bgcolor="pink">
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

if(isset($_POST["team"])){
$team=$_POST["team"];
echo "select team is => " .$team. "<br>";

$sql = "SELECT * FROM players";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["team"] == $team) {
      echo "Name: " . $row["name"]. 
           " - Position: " . $row["position"]. 
           " - Team: " . $row["team"].
           " - Experience: " . $row["experience"].
           " - Salary: " . $row["salary"].
           " - 2021 Score: " . $row["2021_score"].
           " - 2022 Score: " . $row["2022_score"].
           " - Salary Score: " . $row["salary_score"]. 
           " - Small Sample: " . $row["small_sample"]. 
           " - Role: " . $row["role"]. "<br>";
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
</body>
</html>
