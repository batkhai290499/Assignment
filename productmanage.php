<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Product</title>
    <link rel="stylesheet" href="productmanage.css">
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
    <!-- <div class="trang">
    <div class="dau">
        <h1>Xin chao</h1>
    </div>
    <div class="than">
        <div class="main-content">
        <h1>Danh sách sản phẩm</h1>
        <div class="product-items">
            <div class="buttons">
                <a href="./product_editing.php">Thêm sản phẩm</a>
            </div>
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-name">Name</div>
                    <div class="product-prop product-name">Price</div>
                    <div class="product-prop product-name">Content</div>
                    <div class="product-prop product-button">Delete</div>
                    <div class="product-prop product-button">Edit</div>
                    <div class="product-prop product-button">Copy</div>
                    <div class="clear-both"></div>
                </li> -->
                
            <!-- </ul>
        </div>
    </div> -->
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
                        <ul>
                            <tr class="table100-head">
								<th class="column1">Date</th>
								<th class="column2">Order ID</th>
								<th class="column3">Name</th>
								<th class="column4">Price</th>
								<th class="column5">Quantity</th>
								<th class="column6">Total</th>
							</tr>
                            <?php  
                require_once './database.php';
                    foreach ($resultSet as $row) {
                        ?>
                        <div class="product-prop product-name"><?= $row['productname'] ?></div>
                        <div class="product-prop product-name"><?= $row['price'] ?></div>
                        <div class="product-prop product-name"><?= $row['content'] ?></div>
                        <div class="product-prop product-button">
                            <a href="./product_delete.php?id=<?= $row['id'] ?>">Delete</a>
                        </div>

                        <div class="product-prop product-button">
                            <a href="./editing.php?id=<?= $row['id'] ?>">Edit</a>
                        </div>

                        <div class="product-prop product-button">
                            <a href="./product_editing.php?id=<?= $row['id'] ?>&task=copy">Copy</a>
                        </div>
                        <div class="clear-both"></div>  
                    <?php } ?>
                        </ul>
							
						</thead>
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

