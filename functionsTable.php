<?php 

function showTab($rows) {
    ?>
    <?php foreach ($rows as $row) { ?>
      <div class="container center-div">
      <div class="container-fluid">
        <div class="card">
        
          <?php echo "<img src='".$row["image"]."' class='card-img-top' >" ?>
          <?php echo "<h4 class='card-title'>" . $row["title"] . "</h4>" ?>
          <?php echo "<p class='card-text'>" . $row["container"] . "</p>" ?>
           <?php 
             if ($_SESSION['admin'] || $_SESSION['id'] == $row['id_user']) {
           ?> 
          <?php echo "<form action='delete' class='del' method='POST'>" ?>
            <?php echo "<input name='del-1' type='submit' class='delete-btn' value='X'>" ?>
            <?php echo "<input name='del-2' type='hidden' value='" . $row["id"] . "'>" ?>
          <?php echo "</form>" ?>

          <?php echo "<form action='update' class='del' method='POST'>" ?>
            <?php echo "<input name='up' type='submit' class='update-btn' value='modifier'>" ?>
            <?php echo "<input name='up-2' type='hidden' value='" . $row["id"] . "'>" ?>
          <?php echo "</form>" ?>
             <?php } ?>
        </div>
      </div>
      </div>
      <?php } ?>
  <?php
}

?>

<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->