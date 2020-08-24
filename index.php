<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form Validation</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5">
    <div class="card w-50 mb-3">
    	<div class="card-header">
    		<h3>Add Product</h3>
    	</div>
			<div class="card-body">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="product-name">Product Name</label>
						<input type="text" class="form-control" placeholder="Peroduct name">
					</div>
					<div class="form-group">
						<label for="product-name">Product Price</label>
						<input type="text" class="form-control" placeholder="Peroduct price">
					</div>
					<div class="form-group">
						<label for="product-name">Product Quantity</label>
						<input type="text" class="form-control" placeholder="Peroduct quantity">
					</div>
					<div class="form-group">
						<label for="product-name">Product photo</label>
						<input type="file" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-info" value="Add product">
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
              <tr>
                <th scope="row">1</th>
                <td><img src="images/image.jpg" alt="" class="img-fluid custom-image"></td>
                <td>Alu</td>
                <td>220</td>
                <td>10</td>
                <td>2200</td>
                <td class="text-right">
                  <a href="show.php" class="btn btn-info">View</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="all-data.php" class="btn btn-danger" id="delete-btn">Delete</a>
                </td>
              </tr>
							<tr>
								<td colspan="5" class="text-right">Total = </td>
								<td>12000</td>
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
