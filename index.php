<?php
include "model.php";

$obj = new model();
if(isset($_POST['submit'])){

	echo $obj->insertdate($_POST);
}
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>
	<body>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<div class="card  mb-3">
							<div class="card-header text-white bg-primary text-center">Student List</div>
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Name</th>
											<th scope="col">Roll</th>
											<th scope="col">Age</th>
											<th scope="col">action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<div class="card  mb-3">
							<?php 
							if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
								echo '<div class="alert alert-primary" role="alert">
 Data inserted succesfully!
</div>';
							}

							?>
							<div class="card-header text-white bg-primary text-center">Add New Student+</div>
							<form action="" method="post">
								
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Name</label>
									<input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp" placeholder="Enter your name">
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Roll</label>
									<input type="text" class="form-control" name="roll" id="" placeholder="Enter your roll ">
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Age</label>
									<input type="text" class="form-control" name="age" id="exampleInputPassword1" placeholder="Enter your age">
								</div>
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-8 m-auto">
				
			</div>
			<!-- Option 1: Bootstrap Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		</body>
	</html>