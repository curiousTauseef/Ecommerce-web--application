<?php 
require_once 'controller/DB.php' ;
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM cameradetails WHERE cameraID = $id";
$result = $db->query($sql);
$product = mysqli_fetch_assoc($result);
?>

<?php ob_start(); ?>
<!-- my modal ( #details-1 ) -->

<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" area-hidden="true">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" onclick="closeModal()" aria-label="Close">
		  <span aria-hidden="true">&times;
		  </span>
		  </button>
          <h4 class="modal-title text-center"><?= $product['cameraName']; ?></h4>
        </div>
        <div class="modal-body">
		 <div class="container-fluid">
			<div class="row">
			 <div class="col-sm-6">
			  <div class="center-block">
			   <img src="<?= $product['imageLocation']; ?>" alt="<?= $product['cameraName']; ?>" class="details img-responsive" style="width:auto;height:200px;margin:15px auto;">
			 </div>
			 </div>
			 <div class="col-sm-6">
			  <h4>Details</h4>
			  <p><?= $product['cameraDescription']; ?> 
			  </p>
			  <hr>
			  <p>Price : <?= $product['cameraActualPrice']; ?></p>
			  <p>Brand : <?= $product['cameraBrand']; ?></p>
			  <p>Model : <?= $product['cameraModel']; ?></p>
			  <p>Lens  : <?= $product['lensDesc']; ?></p>
			     <div style="  border-radius: 5px;background-color: #f2f2f2;padding: 20px;">
				  <form action="addtocart.php">
					<label for="country">Colour</label>
						<select id="country" name="country">
							<option value="australia">Black</option>
							<option value="canada">Gray</option>
							<option value="usa">Blue</option>
						</select>
  
						<input type="submit" value="Submit" style="width:100%;background-color:#4CAF50;color:white;padding: 14px 20px;margin: 8px 0;border:none;border-radius:4px;cursor:pointer;">
				 </form>
				 </div>

			 </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
		  <button type="submit" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
        </div>
      </div>
      </div>
	  </div>
    </div>
  </div>
  <script>
	function closeModal()
	{
	  jQuery('#details-1').modal('hide');
	  setTimeout(function()
	  {
	   jQuery('#details-1').remove();
	   jQuery('.modal-backdrop').remove();
	  },500);
	}
  </script>
  
  <?php echo ob_get_clean(); ?>