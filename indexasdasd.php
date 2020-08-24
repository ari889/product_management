<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form Validation</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="custom_signup">
		<a href="all-data.php" class="btn btn-info">All products</a>
		<h2 class="text-center">Sign Up</h2>
		<div class="message">
		</div>
		<form method="POST" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="exampleInputName1">Full Name</label>
		    <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input name="email" type="text" class="form-control" id="exampleInputEmail1">
		  </div>
		   <div class="form-group">
		    <label for="cell">Cell</label>
		    <input name="cell" type="text" class="form-control" id="cell">
		  </div>
      <div class="form-group">
       <label for="username">Username</label>
       <input name="username" type="text" class="form-control" id="username">
     </div>
		  <div class="form-group">
		    <label for="image">Image</label>
		    <input name="image" type="file" class="form-control" id="image">
		  </div>
			<div class="form-group">
		    <label for="location">Location</label>
				<select name="location" id="location" class="form-control">
					<option value="Mirpur">Mirpur</option>
					<option value="Uttara">Uttara</option>
					<option value="Dhanmondi">Dhanmondi</option>
					<option value="Gazipur">Gazipur</option>
					<option value="Bonani">Bonani</option>
				</select>
		  </div>
			<div class="form-group">
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked="checked">
				  <label class="form-check-label" for="male">Male</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="gender" id="famale" value="Famale">
				  <label class="form-check-label" for="famale">Famale</label>
				</div>
			</div>
		  <div class="form-group">
		    <label for="age">Age</label>
		    <input name="age" type="text" class="form-control" id="age">
		  </div>
			<div class="form-group">
		   <input type="checkbox" name="status" id="status" value="Published" checked="checked">
			 <label for="status">Published</label>
		  </div>
		  <button name="submit" type="submit" class="btn btn-primary" value="Add">Submit</button>
		</form>
	</div>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
