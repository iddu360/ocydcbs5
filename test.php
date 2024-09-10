<?php
include './assets/config.php';

$sql3 = 'Select * from gallery where commty like "%Church%"';
$query = $conn->prepare($sql3);
$query->execute();
$result = $query->fetchAll();
foreach ($result as $row) {

?>
  <div class="col-md-3 col-sm-4 col-xs-6 p-1">
    <div class="card p-0">
      <div class="blur-load" style="background-image: url(./assets/<?php echo $row['imgthumg'] ?>);">
        <img src="./assets/<?php echo $row['img']; ?>" alt="" loading="lazy" class="img-fluid w-100 rounded" style="height:100%;">
      </div>
      <div class="card-infox text-center">
        <p>
          <?php echo $row['caption']; ?>
        </p>
        <small>
          <?php echo $row['illustration']; ?>
        </small>
      </div>
    </div>
  </div>
<?php } ?>