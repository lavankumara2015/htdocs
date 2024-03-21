



<?php include("./arrays.php") ?>


<ul class="discount-section-container">
    <?php foreach($discountSection as $data) : ?>
    <li> <img src="<?php echo $data[0];?>" alt="<?php echo $data[1];?>" />
      <p><?php echo $data[1];?></p>
    </li>
    <?php endforeach ?>
  </ul>