<?php 
require_once 'controller/DB.php';
include 'head.php';
include 'navigationBar.php';
include 'productsheader.php';

$sql1 = "SELECT * FROM cameradetails WHERE cameraID = 1";
$products1 = $db->query($sql1); 

$sql2 = "SELECT * FROM cameradetails WHERE cameraID = 2";
$products2 = $db->query($sql2); 

$sql3 = "SELECT * FROM cameradetails WHERE cameraID = 3";
$products3 = $db->query($sql3); 

$sql4 = "SELECT * FROM cameradetails WHERE cameraID = 4";
$products4 = $db->query($sql4); 

$sql5 = "SELECT * FROM cameradetails WHERE cameraID = 5";
$products5 = $db->query($sql5); 

$sql6 = "SELECT * FROM cameradetails WHERE cameraID = 6";
$products6 = $db->query($sql6); 
?>

<!-- main contents -->
<div class="container-fluid">
<!-- left -->
    <div class="col-sm-1" style="background-color:lavender;text-align:center;"></div>
<!-- main -->
    <div class="col-sm-10" style="background-color:lavenderblush;text-align:center;">
	 <div class="row">
	  <h2 class="text-center"> Featured Camera's</h2>
	  
	  <?php while($product = mysqli_fetch_assoc($products1)) : ?>
	  <div class="col-md-4">
	   <a href="camera/camera1.php" class="btn btn-link btn-sm" role="button">
	   <h3 style="font-size:164%"><?= $product['cameraName']; ?></h3>
	   </a>
	   <a href="camera/camera1.php">
	   <img src="<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="img-thumb"/>
	   </a>
	   <p class="list-price text-danger">List Price <s><?= $product['cameraPrice']; ?></s></p>
	   <p class="price">Our Price : <?= $product['cameraActualPrice']; ?></p>
	   <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['cameraID']; ?>)">Details</button>
	  </div>
	  <?php endwhile; ?>
	  
	  <?php while($product = mysqli_fetch_assoc($products2)) : ?>
	  <div class="col-md-4">
	   <a href="camera/camera2.php" class="btn btn-link btn-sm" role="button">
	   <h3 style="font-size:164%"><?= $product['cameraName']; ?></h3>
	   </a>
	   <a href="camera/camera2.php">
	   <img src="<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="img-thumb"/>
	   </a>
	   <p class="list-price text-danger">List Price <s><?= $product['cameraPrice']; ?></s></p>
	   <p class="price">Our Price : <?= $product['cameraActualPrice']; ?></p>
	   <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['cameraID']; ?>)">Details</button>
	  </div>
	  <?php endwhile; ?>
	  
	  <?php while($product = mysqli_fetch_assoc($products3)) : ?>
	  <div class="col-md-4">
	   <a href="camera/camera3.php" class="btn btn-link btn-sm" role="button">
	   <h3 style="font-size:164%"><?= $product['cameraName']; ?></h3>
	   </a>
	   <a href="camera/camera3.php">
	   <img src="<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="img-thumb"/>
	   </a>
	   <p class="list-price text-danger">List Price <s><?= $product['cameraPrice']; ?></s></p>
	   <p class="price">Our Price : <?= $product['cameraActualPrice']; ?></p>
	   <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['cameraID']; ?>)">Details</button>
	  </div>
	  <?php endwhile; ?>
	  
	  <?php while($product = mysqli_fetch_assoc($products4)) : ?>
	  <div class="col-md-4">
	   <a href="camera/camera4.php" class="btn btn-link btn-sm" role="button">
	   <h3 style="font-size:164%"><?= $product['cameraName']; ?></h3>
	   </a>
	   <a href="camera/camera4.php">
	   <img src="<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="img-thumb"/>
	   </a>
	   <p class="list-price text-danger">List Price <s><?= $product['cameraPrice']; ?></s></p>
	   <p class="price">Our Price : <?= $product['cameraActualPrice']; ?></p>
	   <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['cameraID']; ?>)">Details</button>
	  </div>
	  <?php endwhile; ?>
	  
	  <?php while($product = mysqli_fetch_assoc($products5)) : ?>
	  <div class="col-md-4">
	   <a href="camera/camera5.php" class="btn btn-link btn-sm" role="button">
	   <h3 style="font-size:164%"><?= $product['cameraName']; ?></h3>
	   </a>
	   <a href="camera/camera5.php">
	   <img src="<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="img-thumb"/>
	   </a>
	   <p class="list-price text-danger">List Price <s><?= $product['cameraPrice']; ?></s></p>
	   <p class="price">Our Price : <?= $product['cameraActualPrice']; ?></p>
	   <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['cameraID']; ?>)">Details</button>
	  </div>
	  <?php endwhile; ?>
	  
	  <?php while($product = mysqli_fetch_assoc($products6)) : ?>
	  <div class="col-md-4">
	   <a href="camera/camera6.php" class="btn btn-link btn-sm" role="button">
	   <h3 style="font-size:164%"><?= $product['cameraName']; ?></h3>
	   </a>
	   <a href="camera/camera6.php">
	   <img src="<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="img-thumb"/>
	   </a>
	   <p class="list-price text-danger">List Price <s><?= $product['cameraPrice']; ?></s></p>
	   <p class="price">Our Price : <?= $product['cameraActualPrice']; ?></p>
	   <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['cameraID']; ?>)">Details</button>
	  </div>
	  <?php endwhile; ?>
	  
		</div>
	</div>
<!-- right -->
    <div class="col-sm-1" style="background-color:lavender;text-align:center;"></div>
</div>
<br>
<?php 
include 'homefooter.php';
?>

</body>
</html>