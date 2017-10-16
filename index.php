<?php
$servername = "localhost";
$username = "id3259161_charecterusername";
$password = "00000";
$dbname = "id3259161_charecterdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id,eff FROM Skill where id=1";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "id: " . $row["id"]."eff: " . $row["eff"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
