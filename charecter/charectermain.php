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
    <a class="nav-link" href="#">แผนที่</a>
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
    ?>

    
        <div class="container">
            <div class="row">
                <?php
                     $count = 0;
                        while($count != 310){

                            if ($detail_rarity[$count] == 4){
                                echo '<div class="card text-center alert-dark" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$charecter_id[$count].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$charecter_id[$count].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$charecter_pic[$count].'" alt=""></div></p>
                                  '.$detail_name[$count].'
                                </div>
                              </div></a>';
                            }else  if ($detail_rarity[$count] == 5){
                                echo '<div class="card text-center alert-primary" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$charecter_id[$count].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$charecter_id[$count].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$charecter_pic[$count].'" alt=""></div></p>
                                  '.$detail_name[$count].'
                                </div>
                              </div></a>';
                            }else  if ($detail_rarity[$count] == 6){
                                echo '<div class="card text-center alert-warning" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$charecter_id[$count].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$charecter_id[$count].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$charecter_pic[$count].'" alt=""></div></p>
                                  '.$detail_name[$count].'
                                </div>
                              </div></a>';
                            }else if ($detail_rarity[$count] == 0){
                                echo '<div class="card text-center alert-b" style="width: 10rem;">
                                <a href="#" data-toggle="modal" data-target="#'.$charecter_id[$count].'" class=""><div class="card-block">
                                  <h5 class="card-title">'.$charecter_id[$count].'</h5>
                                  <p class="card-text"><div class="col-2"><img class="" src="../img/charecter/sub-'.$charecter_pic[$count].'" alt=""></div></p>
                                  '.$detail_name[$count].'
                                </div>
                              </div></a>';
                            }
                            $count++;
                            
                        }
                    
                ?>
            </div>
        </div>


 <?php
      $armmy = array('Light','Medium','Heavy','None');
      $armmyTH = array('เบา','กลาง','หนัก','ไม่มีข้อมูล');
      $q = 0;
      while($q != 310){
        if($beginstatus_def[$q] == "Light"){
            $th[$q] = $armmyTH[0];
        }else if($beginstatus_def[$q] == "Medium"){
            $th[$q] = $armmyTH[1];
        }else if($beginstatus_def[$q] == "Heavy"){
            $th[$q] = $armmyTH[2];
        }else{
            $th[$q] = $armmyTH[3];
        }
        $q++;
    }
    $start = array('','★☆☆☆☆☆','★★☆☆☆☆','★★★☆☆☆','★★★★☆☆','★★★★★☆','★★★★★★');
    $count = 0;
    $countskill = 0;
    $countcontrol = 0;
    while($count != 310){
        echo '
        <div class="modal fade alert-success" id="'.$charecter_id[$count].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดสาวเรือรบหมายเลข'." "." ".$charecter_id[$count].'</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">'."
                <h4>ชื่อของเธอ"." ".$detail_name[$count]." "."ระดับ"." ".$start[$detail_rarity[$count]].'</h4>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"><img class ="img-fluid rounded mx-auto d-block" src = "../img/charecter/'.$charecter_pic[$count].'"  /></div>
                     </div>

                <div class="container alert-primary">
                    <div class="row alert-info">
                        <div class="col"><h4>รายละเอียด</h4></div>
                    </div>
                    <div class="row alert-info">
                        <div class="col alert-primary"><h4>สัญชาติ'."&nbsp;&nbsp;&nbsp;&nbsp;".'<img src="../img/weapon/'.$detail_nationality[$count].'.png"/>'.$detail_nationality[$count].''."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".'</h4></div>
                    </div>
                    <div class="row alert-info">
                        <div class="col alert-primary"><h4>ประเภทเรือ&nbsp;&nbsp;&nbsp;&nbsp;'.$detail_hullType[$count].'</h4></div>
                    </div>
                        <div class="row alert-info">
                    <div class="col alert-primary"><h4>Class&nbsp;&nbsp;&nbsp;&nbsp;'.$detail_class[$count].'</h4></div>
                        </div>
                    <div class="row alert-info">
                        <div class="col alert-primary"><h4>เวลาก่อสร้าง&nbsp;&nbsp;&nbsp;&nbsp;'.$detail_TimeToCreate[$count]." "."".'</h4></div>
                    </div>
                </div>
              <br>
              
              <div class="container alert-warning"><div class="row alert-info">
              <div class="col"><h4>เกรดโดยรวม</h4></div></div>
              <div class="row alert-info">
                <div class="col-2"><img src = "../img/weapon/Firepower.png"> '."&nbsp;&nbsp;".$status_atk[$count].' </div>
                <div class="col-2"><img src = "../img/weapon/Duration.png"> '."&nbsp;&nbsp;".$status_hp[$count].'</div>
                <div class="col-2"><img src = "../img/weapon/AntiAir.png"> '."&nbsp;&nbsp;".$status_detfly[$count].' </div>
                <div class="col-2"><img src = "../img/weapon/Evasion.png"> '."&nbsp;&nbsp;".$status_dodge[$count].' </div>
                <div class="col-2"><img src = "../img/weapon/Aviation.png"> '."&nbsp;&nbsp;".$status_atkfly[$count].'</div>
                <div class="col-2"><img src = "../img/weapon/Torpedo.png"> '."&nbsp;&nbsp;".$status_atktpd[$count].'</div>
                </div> </div></div>
                <br>
                <div class="container"><div class="row alert-warning">
                    <div class="col"><h4>สถานะเริ่มต้น</h4></div>
                </div> 
                <div class="row alert-warning">
                    <div class="col-4"><h6><img src = "../img/weapon/Duration.png">'."&nbsp;(เลือด)"."&nbsp;&nbsp;".$beginstatus_hp[$count].'</h6></div>
                    <div class="col-4"><h6><img src = "../img/weapon/Armor.png">'."&nbsp;(น้ำหนักเกราะ)"."&nbsp;&nbsp;". $th[$count].'</h6></div>
                    <div class="col-4"><h6><img src = "../img/weapon/Refill.png">'."&nbsp;(โหลดกระสูน)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_cd[$count].'</h6></div>
                </div>
                <div class="row alert-warning">
                    <div class="col-4"><h6><img src = "../img/weapon/Torpedo.png">'."&nbsp;(โจมตีตอปิโด)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_atkTPD[$count].'</h6></div>
                    <div class="col-4"><h6><img src = "../img/weapon/Evasion.png">'."&nbsp;(หลบหลีก)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_dodge[$count].'</h6></div>
                    <div class="col-4"><h6><img src = "../img/weapon/AntiAir.png">'."&nbsp;(ต่อต้านอากาศ)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_defFly[$count].'</h6></div>
                </div>
                <div class="row alert-warning">
                    <div class="col-4"><h6><img src = "../img/weapon/Aviation.png">'."&nbsp;(โจมตีทางอากาศ)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_atkFly[$count].'</h6></div>
                    <div class="col-4"><h6><img src = "../img/weapon/Consumption.png">'."&nbsp;(เสียน้ำมัน)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_depetion[$count].'</h6></div>
                    <div class="col-4"><h6><img src = "../img/weapon/speed.png">'."&nbsp;(ความเร็ว)"."&nbsp;&nbsp;"."&nbsp;&nbsp;".$beginstatus_speed[$count].'</h6></div>
                 </div>
                </div>
                <br>

                <div class="container"><div class="row alert-success">
                <div class="col"><h4>อัพเกรด</h4></div>
                </div>
                <div class="row alert-success">
                <div class="col-3"><img src = "../img/weapon/Firepower.png"> '."&nbsp;&nbsp;".$update_atk[$count].'</div>
                <div class="col-3"><img src = "../img/weapon/Torpedo.png"> '."&nbsp;&nbsp;".$updates_torpedo[$count].'</div>
                <div class="col-3"><img src = "../img/weapon/Aviation.png"> '."&nbsp;&nbsp;".$updates_fly[$count].'</div>
                <div class="col-3"><img src = "../img/weapon/Refill.png"> '."&nbsp;&nbsp;".$updates_reload[$count].'</div>
                 </div> 
                 </div>
                 <br>

                 <div class="container"><div class="row alert-danger">
                 <div class="col"><h4>ย่อยสลาย ~ ~ T^T</h4></div>
                 </div>
                 <div class="row alert-danger">
                 <div class="col-3"><img src = "../img/tools/money.png"> '."&nbsp;&nbsp;".$destroy_money[$count].'</div>
                 <div class="col-3"><img src = "../img/tools/oil.png"> '."&nbsp;&nbsp;".$destroy_oil[$count].'</div>
                 <div class="col-3"><img src = "../img/tools/coin.png"> '."&nbsp;&nbsp;".$destroy_coin[$count].'</div>
                  </div> 
                  </div><br>

                  <div class="container"><div class="row alert-warning">
                  <div class="col"><h4>จุดค้นหา</h4></div>
                  </div>
                  <div class="row alert-warning">
                  <div class="col-12">'."&nbsp;&nbsp;".$drops_dropsList[$count].'</div>
                   </div> 
                   </div><br>
                 </div>
                 </div>
               </div>
             </div>
           </div>';
    }
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>