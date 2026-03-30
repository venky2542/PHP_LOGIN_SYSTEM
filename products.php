<?php
session_start();

$products = [
["name"=>"Smartphone","price"=>500],
["name"=>"Laptop","price"=>900],
["name"=>"Headphones","price"=>120],
["name"=>"Smart Watch","price"=>250]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar">
<h2>MyShop</h2>

<a href="dashboard.php">Dashboard</a>
<a href="products.php">Products</a>
<a href="cart.php">Cart</a>
<a href="logout.php">Logout</a>

</div>

<div class="main">

<h1>Products</h1>

<div class="products">

<?php
foreach($products as $p){
?>

<div class="product">
<h3><?php echo $p["name"]; ?></h3>
<p>$<?php echo $p["price"]; ?></p>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="<?php echo $p["name"]; ?>">
<input type="hidden" name="price" value="<?php echo $p["price"]; ?>">
<button type="submit">Add to Cart</button>
</form>

</div>

<?php } ?>

</div>

</div>

</body>
</html>