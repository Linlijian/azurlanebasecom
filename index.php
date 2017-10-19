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
echo "NULL,".$i." 'ch'".$i.".png";
//NULL, '6', 'ch6.png', 'ch6', 'ch6', 'ch6', 'ch6', 'ch6', 'ch6'), (NULL, '7', 'ch7.png', 'ch7', 'ch7', 'ch7', 'ch7', 'ch7', 'ch7');
echo "NSERT INTO `charecter` (`id`, `charectorID`, `picture`, `status`, `beginStatus`, `skill`, `introduce`, `reModel`, `cusTom`) VALUES (";
$i = 8;
while($i!=311){
echo "NULL,'".$i."'"." ,'ch".$i.".png'".",'ch".$i."'".",'ch".$i."'".",'ch".$i."'".",'ch".$i."'".",'ch".$i."'".",'ch".$i."'),".'<br>(';
$i++;
}






?>

<img src="img/sub-<?php echo $pic;?>">
