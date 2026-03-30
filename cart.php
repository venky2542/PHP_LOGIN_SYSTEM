<?php
session_start();

if(isset($_POST["name"])){

$item = [
"name"=>$_POST["name"],
"price"=>$_POST["price"]
];

$_SESSION["cart"][] = $item;

}

$cart = $_SESSION["cart"] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
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

<h1>Shopping Cart</h1>

<?php
if(count($cart)==0){
echo "<p>No items in cart</p>";
}
else{

$total=0;

foreach($cart as $item){

echo "<p>".$item["name"]." - $".$item["price"]."</p>";

$total += $item["price"];

}

echo "<h3>Total: $".$total."</h3>";

}
?>

</div>

</body>
</html>