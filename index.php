<?php

	require_once 'app/autoload.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form Validation</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


	<?php

	if(isset($_POST['padd'])){

		//value get
		$pname = $_POST['pname'];
		$pprice = $_POST['pprice'];
		$pquan= $_POST['pquan'];

		$total = NULL;
		if(!empty($pprice) && !empty($pquan)){
				$total = $pprice * $pquan;
		}


		//product photo upload
		$file = fileUpload($_FILES['pphoto'], 'products/');

		$photo_name = $file['file_name'];


		//product upload
		if(empty($pname) || empty($pprice) || empty($pquan) || empty($total)){
			$mess = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			 				  <strong>Warning!</strong> All fileds are required.
			 				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 				    <span aria-hidden="true">&times;</span>
			 				  </button>
			 				</div>';
		}else if(!empty($file['mess'])){
			$mess = $file['mess'];
		}else{
			$sql = "INSERT INTO products(photo, product_name, product_price, quantity, total) VALUES('$photo_name', '$pname', '$pprice', '$pquan', '$total')";
			$connection -> query($sql);
			$mess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
			 				  <strong>Success!</strong> Product upload successfully.
			 				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 				    <span aria-hidden="true">&times;</span>
			 				  </button>
			 				</div>';
		}

	}

	 ?>

	<div class="container mt-5">
    <div class="card w-50 mb-3">
    	<div class="card-header">
    		<h3>Add Product</h3>
    	</div>
			<div class="card-body">
				<form action="" method="POST" enctype="multipart/form-data">
					<?php
						if(isset($mess)){
							echo $mess;
						}
					 ?>
					<div class="form-group">
						<label for="product-name">Product Name</label>
						<input name="pname" type="text" class="form-control" placeholder="Peroduct name">
					</div>
					<div class="form-group">
						<label for="product-name">Product Price</label>
						<input name="pprice" type="text" class="form-control" placeholder="Peroduct price">
					</div>
					<div class="form-group">
						<label for="product-name">Product Quantity</label>
						<input name="pquan" type="text" class="form-control" placeholder="Peroduct quantity">
					</div>
					<div class="form-group">
						<label for="product-name">Product photo</label>
						<input name="pphoto" type="file" class="form-control">
					</div>
					<div class="form-group">
						<input name="padd" type="submit" class="btn btn-info" value="Add product">
					</div>
				</form>
			</div>
    </div>
    <div class="card">
      <div class="card-header">
        <h3>Product Management</h3>
      </div>
      <div class="card-body">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Photo</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>

						<?php
						$re_sql = "SELECT SUM(total) as total_price FROM products";
						$data = $connection -> query($re_sql);

						$val = $data -> fetch_assoc();

						$sql = "SELECT * FROM products ORDER BY id DESC";
						$all_products = $connection -> query($sql);
						$i = 1;
						while($product = $all_products -> fetch_assoc()):
						 ?>
              <tr>
                <th scope="row"><?php echo $i; $i++; ?></th>
                <td><img src="products/<?php echo $product['photo']; ?>" alt="" class="img-fluid custom-image"></td>
                <td><?php echo $product['product_name']; ?></td>
                <td><?php echo $product['product_price']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo $product['total']; ?></td>
                <td class="text-right">
                  <a href="show.php" class="btn btn-info">View</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="all-data.php" class="btn btn-danger" id="delete-btn">Delete</a>
                </td>
              </tr>

						<?php endwhile; ?>
							<tr>
								<td colspan="5" class="text-right">Total = </td>
								<td><?php echo $val['total_price']; ?></td>
							</tr>
          </tbody>
        </table>
      </div>
    </div>
	</div>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
    $(document).on('click', '#delete-btn', function(){
      let del = confirm('Are u sure to delete this?');

      if(del == true){
        return true;
      }else{
        return false;
      }
    });
  </script>
</body>
</html>
