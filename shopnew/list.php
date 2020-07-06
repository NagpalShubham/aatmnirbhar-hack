<?php 
include("connection.php");
?>
<?php
$query ="SELECT * FROM shop";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($data))
{



$productname =  $row['productname'];
$productprice = $row['productprice'];
$image = $row['image'];
$description = $row['description'];

echo "$productname";
echo "<br>";
echo"$productprice";
echo "<br>";
echo "$image";
echo "<br>";
echo "$description";
echo "<br>";
$name[]= $productname;
$price[] =$productprice ;
}

echo "$name[6]";
echo "$price[6]"
?>