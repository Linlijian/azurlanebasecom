<?php include '../connectdb.php'?>
<?php
$sql = "SELECT * FROM `status`";
$r = $conn->query($sql);
if ($r->num_rows > 0){
    while ($row = $r->fetch_assoc()){
        $status_atk[] = $row['atk'];
        $status_hp[] = $row['hp'];
        $status_detfly[] = $row['defFly'];
        $status_dodge[] = $row['dodge'];
        $status_atkfly[] = $row['atkFly'];
        $status_atktpd[] = $row['atkTPD'];
    }
}
?>
<?php
$sql = "SELECT * FROM `updates`";
$r = $conn->query($sql);
if ($r->num_rows > 0){
    while ($row = $r->fetch_assoc()){
        $update_atk[] = $row['atk'];
        $updates_torpedo[] = $row['torpedo'];
        $updates_fly[] = $row['fly'];
        $updates_reload[] = $row['reload'];
    }
}
?>