<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Azur lane basecom - Charecter List</title>
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <?php include '../connectdb.php'?>
    <?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "azurlanebasecom";
        
        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // } 
    ?>
  </head>
  <script>
  .alert-dark {
    background-color: #BEBEBE;
    border-color: #ebcccc;
    color: #a94442;
    }
}
  </script>
  <script>
  .alert-b {
    background-color: #BEBEBE;
    border-color: black;
    color: #a94442;
    }
</script>
<script>    .alert-su {
    background-color: #ebcccc;
    border-color: #FE2E2E;
    color: #a94442;
    }</script>
  <body>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="../index.php">หน้าแรก</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../charecter/charecterlist.php">ตัวละคร</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../map/map.php">แผนที่</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="../weapon/weapon.php">อุปกรณ์</a>
  </li>
</ul>

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
    <?php
        $sql = "SELECT * FROM `beginstatus`";
        $r = $conn->query($sql);
        if ($r->num_rows > 0){
            while ($row = $r->fetch_assoc()){
                $beginstatus_atk[] = $row['atk'];
                $beginstatus_hp[] = $row['hp'];
                $beginstatus_def[] = $row['def'];
                $beginstatus_cd[] = $row['cd'];
                $beginstatus_atkTPD[] = $row['atkTPD'];
                $beginstatus_dodge[] = $row['dodge'];
                $beginstatus_defFly[] = $row['defFly'];
                $beginstatus_atkFly[] = $row['atkFly'];
                $beginstatus_depetion[] = $row['depetion'];
                $beginstatus_speed[] = $row['speed'];
                
            }
        }
    ?>
    <?php
        $sql = "SELECT * FROM `destroy`";
        $r = $conn->query($sql);
        if ($r->num_rows > 0){
            while ($row = $r->fetch_assoc()){
                $destroy_money[] = $row['money'];
                $destroy_oil[] = $row['oil'];
                $destroy_coin[] = $row['coin'];                
            }
        }
    ?>
    <?php
        $sql = "SELECT * FROM `drops`";
        $r = $conn->query($sql);
        if ($r->num_rows > 0){
            while ($row = $r->fetch_assoc()){
                $drops_dropsList[] = $row['dropsList'];             
            }
        }
    ?>
    <?php
        $sql = "SELECT * FROM `skill`";
        $r = $conn->query($sql);
        if ($r->num_rows > 0){
            while ($row = $r->fetch_assoc()){
                $skill_skill[] = $row['skill']; 
                $skill_skillName[] = $row['skillName'];       
                $skill_eff[] = $row['eff'];                   
            }
        }
    ?>
    <?php
        $sql = "SELECT * FROM `charecter`";
        $r = $conn->query($sql);
        if ($r->num_rows > 0){
            while ($row = $r->fetch_assoc()){
                $charecter_id[] = $row['charectorID']; 
                $charecter_pic[] = $row['picture'];       
                $charecter_status[] = $row['status'];  
                $charecter_beginStatus[] = $row['beginStatus']; 
                $charecter_skill[] = $row['skill'];       
                $charecter_remodel[] = $row['reModel']; 
                $charecter_costom[] = $row['cusTom'];     
                                 
            }
        }
    ?>
        <?php
        $sql = "SELECT * FROM `detail`";
        $r = $conn->query($sql);
        if ($r->num_rows > 0){
            while ($row = $r->fetch_assoc()){
                $detail_name[] = $row['name']; 
                $detail_rarity[] = $row['rarity'];       
                $detail_nationality[] = $row['nationality'];  
                $detail_class[] = $row['class']; 
                $detail_hullType[] = $row['hullType'];       
                $detail_TimeToCreate[] = $row['TimeToCreate']; 
                $detail_location[] = $row['location']; 
                $detail_upgrade[] = $row['upgrade']; 
                $detail_destroy[] = $row['destroy'];                      
            }
        }
        $countcontrol = 0;
    ?>

 <div class="container "> 
<caption><h1>Charecter - Skill</h1></caption>
  <table class="table ">
  <thead class="thead-dark ">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">รูปตัวละคร</th>
    <th scope="col">ชื่อทักษะ</th>
    <th scope="col">ความสามารถ</th>
    <!-- <th scope="col">Main</th> -->
  </tr>
  </tbody>
  <?php
       $sql = "SELECT charecter.picture as pic,charecter.charectorID as id,skill.skill as skill,
       skill.skillName as name,skill.eff as eff FROM `charecter`INNER JOIN skill ON skill.skill = charecter.id";
       $result = $conn->query($sql);
       if ($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
           
            echo '<td class="alert-success" scope="col">'.$row['id'].'</td>';
            echo '<td class="alert-warning" scope="col">'.'<img src ="../img/charecter/sub-'.$row['pic'].'" />'.'</td>';
            echo '<td class="alert-danger" scope="col">'.$row['name'].'</td>';
            echo '<td class="alert-primary" scope="col">'.$row['eff'].'</td>';
            
            echo '</tr>';
          }
      }
  ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>