<?php 
require_once '../controller/DB.php' ;
include 'head.php';
include 'navigationBar.php';

$sql4 = "SELECT * FROM cameradetails WHERE cameraID = 4";
$products4 = $db->query($sql4); 

?>
<h2 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : black ;font-size : 250%;"> Camera Specification</h2>

<?php while($product = mysqli_fetch_assoc($products4)) : ?>
<img src="../<?=$product['imageLocation'];?>" alt="<?= $product['cameraName']; ?>" class="center" style="width: 20%;height: auto;">
<div class="hero-image">
<h3 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;""><?= $product['cameraName']; ?></h3>
<h4 class="list-price text-danger" style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;"">List Price :<s><?= $product['cameraPrice']; ?></s></h4>
<h3 class="price" style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;  background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;">Our Price : <?= $product['cameraActualPrice']; ?></h3>
<h5 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;">Camera Description : </h5>
<h6 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 190%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;"><?= $product['cameraDescription']; ?></h6>
<h1 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;">Camera Brand : <?= $product['cameraBrand']; ?></h1>
<h2 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;">Camera Model : <?= $product['cameraModel']; ?></h2>
<h5 style="text-align: center;font-family:Courier New,Courier,monospace;font-style: Bold;color : white ;font-size : 250%;background-color: black;padding-left: 20px;padding-right: 20px;font-size: 120%;">Lens Description : <?= $product['lensDesc']; ?></h5>
</div>
<?php endwhile; ?>

<?php include '../homefooter.php'?>
</body>
</html>