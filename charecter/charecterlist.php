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
    .alert-b {
    background-color: black;
    border-color: #ebcccc;
    color: #a94442;
}
  </script>
  <body>
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="../index.php">หน้าแรก</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../charecter/charecterlist.php">ตัวละคร</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">แผนที่</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="../weapon/weapon.php">อุปกรณ์</a>
  </li>
</ul>

    <!-- <div class="container">
        <div class="row"> -->
            <!-- <div class="col-3">
            <div class="card border-success mb-3" style="max-width: 20rem;"> -->
            <?php
                // $sql = "SELECT id,picture FROM `charecter` ";
                // $result = $conn->query($sql);
                // if ($result->num_rows > 0){
                //     while($row = $result->fetch_assoc()){
                        
                //         if ( $row["id"] % 4 == 0){
                //             echo '<div class="container">';
                //             echo '<div class="row">';
                //         }
                //         echo '<div class="col-3">';
                //         echo '<div class="card border-success mb-3" style="max-width: 20rem;">';
                //         echo '<div class="card-header">Header</div>';
                //         echo $r = $row["picture"];
                //         echo '<img class="img-fluid" src="'."../img/charecter/".$r.'"' ;
                //         echo '<ul class="list-group list-group-flush">';
                //         echo '<li class="list-group-item">'."pic".'</li>';
                //         echo '</ul>';

                //     } 
                // }
            ?>
                <!-- <img src="<?php echo "../img/charecter/".$r;?>" alt=""> -->
            </div>
        </div>
    </div>

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
        <div class="container">
            <div class="row">
                <?php
                     $sql = "SELECT charecter.charectorID AS cid,detail.name AS cn,charecter.picture as pic, detail.rarity as rarity,
                     detail.nationality as nation, detail.class, detail.TimeToCreate  as timecret,detail.hullType
                     FROM `charecter`
                     INNER JOIN detail ON detail.charecterID  = charecter.charectorID";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $pic[] = $row['pic'];
                            $cn[] = $row['cn'];
                            $cid[]=$row['cid'];
                            $rar[] = $row['rarity'];
                            $nation[] = $row['nation'];
                            $time[] = $row['timecret'];
                            if ($row['rarity'] == 4){
                                echo '<div class="card text-center alert-dark" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$row['cid'].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$row['cid'].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$row['pic'].'" alt=""></div></p>
                                  '.$row['cn'].'
                                </div>
                              </div></a>';
                            }else  if ($row['rarity'] == 5){
                                echo '<div class="card text-center alert-primary" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$row['cid'].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$row['cid'].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$row['pic'].'" alt=""></div></p>
                                  '.$row['cn'].'
                                </div>
                              </div></a>';
                            }else  if ($row['rarity'] == 6){
                                echo '<div class="card text-center alert-warning" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$row['cid'].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$row['cid'].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$row['pic'].'" alt=""></div></p>
                                  '.$row['cn'].'
                                </div>
                              </div></a>';
                            }else if ($row['rarity'] == 0){
                                echo '<div class="card text-center alert-b" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$row['cid'].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$row['cid'].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$row['pic'].'" alt=""></div></p>
                                  '.$row['cn'].'
                                </div>
                              </div></a>';
                            }
                            
                        }
                    }
                ?>
            </div>
        </div>


        <!-- <div class="card" style="width: 10rem;">
        <div class="card-block">
          <h3 class="card-title"></h3>
          <p class="card-text"><div class="col-2"><img src="../img/charecter/sub-ch6.png" alt=""></div></p>
          <a href="#" data-toggle="modal" data-target="#1" class="btn btn-primary">Go somewhere++</a>
        </div>
      </div> -->

      
      <?php
      $start = array('','★☆☆☆☆☆','★★☆☆☆☆','★★★☆☆☆','★★★★☆☆','★★★★★☆','★★★★★★');
        for($i=0;$i<count($cid);$i++){
            echo '<div class="modal fade" id="'.$cid[$i].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดสาวเรือรบหมายเลข'." "." ".$cid[$i].'</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                '."<h4>ชื่อของเธอ"." ".$cn[$i]." "."ระดับ"." ".$start[$rar[$i]].'</h4>
                <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12"><img class ="img-fluid rounded mx-auto d-block" src = "../img/charecter/'.$pic[$i].'"  /></div>
                </div>
                <div class="row">
                  <div class="col-2 alert-primary">สัญชาติ <img src="../img/tools/></div>
                  <div class="col-2 "></div>
                  <div class="col-md-2 ">เวลาก่อสร้าง</div>
                  <div class="col-md-2 ">.col-md-2 .col-md-offset-4</div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                </div>
                <div class="row">
                  <div class="col-sm-9">
                    Level 1: .col-sm-9
                    <div class="row">
                      <div class="col-8 col-sm-6">
                        Level 2: .col-8 .col-sm-6
                      </div>
                      <div class="col-4 col-sm-6">
                        Level 2: .col-4 .col-sm-6
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>';
        }
      ?>

<div class="modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> รายชื่อเรือดรอป</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo $list['1-3N'];?>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>