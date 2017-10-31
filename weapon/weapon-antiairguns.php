<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>Azur lane basecom - Charecter</title>
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <?php include '../connectdb.php'?>
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

<div class="container">
  <caption><h1>Antiairguns</h1></caption>
  <table class="table ">
  <thead class="thead-dark ">
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Image</th>
    <th scope="col">Stars</th>
    <th scope="col">Rarity</th>
    <th scope="col">Nation</th>
    <th scope="col">AntiAir</th>
    <th scope="col">Damage</th>
    <th scope="col">RateOfFire</th>
    <th scope="col">Ranges</th>
    <th scope="col">Spread</th>
    <th scope="col">Characteristic</th>
    <th scope="col">Angle</th>
    <th scope="col">AmmoType</th>
  </tr>
  </thead>
  <tbody>
    <?php
         $sql = "SELECT * FROM `antiairguns` ORDER BY `Image` ASC";
         $result = $conn->query($sql);
         if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              if ($row['Stars'] == '★★★'){
                echo '<tr class="table-info">';
              }else if ($row['Stars'] == '★★★★'){
                echo '<tr class="table-primary">';
              }else if ($row['Stars'] == '★★★★★'){
                echo '<tr class="table-warning">';
              }else{
                echo '<tr class="table-active ">';
              }
              echo '<td scope="col">'.$row['ID'].'</td>';
              echo '<td scope="col">'.$row['Name'].'</td>';
              echo '<td scope="col">'.'<img src ="../img/weapon/'.$row['Image'].'" />'.'</td>';
              echo '<td scope="col">'.$row['Stars'].'</td>';
              echo '<td scope="col">'.$row['Rarity'].'</td>';
              echo '<td scope="col">'.'<img src ="../img/weapon/'.$row['Nation'].'" />'.'</td>';
              echo '<td scope="col">'.$row['AntiAir'].'</td>';
              echo '<td scope="col">'.$row['Damage'].'</td>';
              echo '<td scope="col">'.$row['RateOfFire'].'</td>';
              echo '<td scope="col">'.$row['Ranges'].'</td>';
              echo '<td scope="col">'.$row['Spread'].'</td>';
              echo '<td scope="col">'.$row['Characteristic'].'</td>';
              echo '<td scope="col">'.$row['Angle'].'</td>';
              echo '<td scope="col">'.$row['AmmoType'].'</td>';
              echo '</tr>';
               
            }
        }
    ?>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>