<?php

$sql = "SELECT picture FROM `charecter` WHERE id = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $r = $row["picture"];;
    } 
}






?>