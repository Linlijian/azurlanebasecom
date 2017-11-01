<?php
$i = 1;
$j = 1;
for($i = 1; $i < 9+2; $i++){
    for($j = 1; $j < 5; $j++){
        echo '<.qweqweqwea    class="dropdown-item alert-primary " href="#'.$i.'-'.$j.'N">State '.$i.'-'.$j.'<.qweqweqwe'.'/a>'.'<br>';
    }
}
echo '<br>';
for($i = 1; $i < 9+2; $i++){
    for($j = 1; $j < 5; $j++){
        echo '<.qweqweqwea    class="dropdown-item alert-danger " href="#'.$i.'-'.$j.'H">State '.$i.'-'.$j.'<.qweqweqwe'.'/a>'.'<br>';
    }
}

?>