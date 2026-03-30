<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

<div class="sidebar">

<h2>🛒 MyShop</h2>

<a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
<a href="products.php"><i class="fa fa-box"></i> Products</a>
<a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
<a href="#"><i class="fa fa-users"></i> Customers</a>
<a href="#"><i class="fa fa-chart-line"></i> Analytics</a>
<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>

</div>

<div class="main">

<h1>Admin Dashboard</h1>

<div class="cards">

<div class="card">
<i class="fa fa-box icon"></i>
<h3>Products</h3>
<p>120</p>
</div>

<div class="card">
<i class="fa fa-shopping-cart icon"></i>
<h3>Orders</h3>
<p>45</p>
</div>

<div class="card">
<i class="fa fa-users icon"></i>
<h3>Customers</h3>
<p>80</p>
</div>

<div class="card">
<i class="fa fa-dollar-sign icon"></i>
<h3>Revenue</h3>
<p>$2300</p>
</div>

</div>

<h2 style="margin-top:40px;">Featured Products</h2>

<div class="products">

<div class="product">
<img src="https://via.placeholder.com/150">
<h4>Smartphone</h4>
<p>$500</p>
</div>

<div class="product">
<img src="https://via.placeholder.com/150">
<h4>Laptop</h4>
<p>$900</p>
</div>

<div class="product">
<img src="https://via.placeholder.com/150">
<h4>Headphones</h4>
<p>$120</p>
</div>

<div class="product">
<img src="https://via.placeholder.com/150">
<h4>Smart Watch</h4>
<p>$250</p>
</div>

</div>

</div>

</body>
</html>