<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Order ID</th>
								<th class="column3">Name</th>
								<th class="column4">Price</th>
								<th class="column5">Quantity</th>
								<th class="column6">Total</th>
							</tr>
						</thead>
						<?php  
						require_once './database.php';
							foreach ($resultSet as $row) {
								?>
								<div class="column1"><?= $row['productname'] ?></div>
								<div class="column2"><?= $row['price'] ?></div>
								<div class="column3"><?= $row['content'] ?></div>
								<div class="column4">
									<a href="./product_delete.php?id=<?= $row['id'] ?>">Delete</a>
								</div>
		
								<div class="column5">
									<a href="./editing.php?id=<?= $row['id'] ?>">Edit</a>
								</div>
		
								<div class="column6">
									<a href="./product_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
								</div>
								<div class="clear-both"></div>  
							<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>