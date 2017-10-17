<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ooo";

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
 while($row = $result->fetch_assoc()){
       echo "id: " .$row["id"]."eff: " . $row["eff"]. "<br>";
    }

} else {
    echo "0 results";
}
 



$sql = "SELECT picture FROM charecter where id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {   
 while($row = $result->fetch_assoc()){
        $pic=$row["picture"];
    }

} else {
    echo "0 results";
}

while($i!=311){
echo "ch".$i.':'.'<br>';
echo "sub-ch".$i.':'.'<br>';
$i++;
}
?>

<img src="img/sub-<?php echo $pic;?>">