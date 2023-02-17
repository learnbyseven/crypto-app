<?php
$servername = getenv('DB_ADDR');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWD');
$db = getenv('DB_NAME');
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("WEB SERVER IS UP , DATABASE IS REQUIRED FOR VOTE APP, DB Connection is failed: " . $conn->connect_error);
}
echo "DATABASE CONNECTED<br>"; 
$vote = $_POST['team'];
switch ($vote) {
   case "srilanka":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=1";
   if ($conn->query($sql) === TRUE) {
    echo "YOU ARE VOTED SUCCESSFULLY, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;
   case "pakistan":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=2";
   if ($conn->query($sql) === TRUE) {
    echo "YOU ARE VOTED SUCCESSFULLY, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;
   case "india":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=3";
   if ($conn->query($sql) === TRUE) {
    echo "YOU ARE VOTED SUCCESSFULLY, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;
   case "bangladesh":
   $sql = "UPDATE vote SET votes=votes + 1 WHERE id=4";
   if ($conn->query($sql) === TRUE) {
    echo "YOU ARE VOTED SUCCESSFULLY, PLEASE CLOSE THE BROWSER AND EXIT<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   break;
   default:
      echo "<h2> <font color=#7FFFD4>VOTE FOR YOUR FAVOURITE TEAM</font></h2><br>";
}
"<br>";
$sql = "SELECT * FROM vote";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "        TEAM NAME:     " . $row["teamname"]. " VOTES: " . $row["votes"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
<html>
<body bgcolor=white>
<head>
<title>VOTEAPP-VERSION1</title>
</head>
<fieldset>
<font color="blue">
<legend align="center"><h2>VOTING APP Version v1</h2></legend>
<form name=voteappform method="POST">
<label align="center"> ASIA CUP TEAMS </label> </fieldset>
</font>
<fieldset>
<label> 
<font size="5" color="#FF7F50">CAST VOTE FOR WINNING TEAM</font>
</label>
</fieldset>
<input type="radio" name="team" id="srilanka" value="srilanka"><font color=blue>Srilanka</font><br>
<input type="radio" name="team" id="pakistan" value="pakistan"><font color=#32CD32>Pakistan</font><br> 
<input type="radio" name="team" id="india" value="india"><font color=#00BFFF>India</font><br>
<input type="radio" name="team" id="Bangladesh" value="bangladesh"><font color=#228B22>Bangladesh</font><br>
<button type="Submit"><font size=3 color=#800080>vote</font></button>
</form>
<img src="Asia_cup_logo-NB-min.jpg" alt="Asia_cup_logo-NB-min" style="width:40%;">
</body>
</html>
