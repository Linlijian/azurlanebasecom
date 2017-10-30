<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Azur lane basecom - Charecter</title>
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
  <body>
      <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="#">หน้าแรก</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ตัวละคร</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">แผนที่</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">อุปกรณ์</a>
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


        <div class="container">
            <div class="row">
                <?php
                    $sql = "SELECT charecter.charectorID AS cid,detail.name AS cn,charecter.picture as pic
                    FROM `charecter`
                    INNER JOIN detail ON detail.charecterID  = charecter.charectorID";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            // if ( $row["id"] % 4 != 0){
                                 echo '<div class="col-3 ">';
                                 echo '<div class="card border-success mb-3" style="max-width: 20rem;">';
                                 echo '<div class="card-header">Header</div>';
                                 echo $r = $row["pic"];
                                 echo '<img class="img-fluid rounded" src="'."../img/charecter/".$r.'"  />' ;
                                 echo '<ul class="list-group list-group-flush">';
                                 echo '<li class="list-group-item">'."pic".'</li>';
                                 echo '</ul></div></div>';
                            // }
                        }
                    }
                ?>
            </div>
        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>