<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(./download.jpeg);
            background-size: cover;
        }
        h1{
            color: white;
            text-align: center;
            font-size: 40px;
        }
        h2{
            color: white;
            margin-left: 20px;          
        }
    </style>
</head>
<body>
    <h1>Product Detaile</h2>
    <div>

    </div>
</body>
</html>

<?php 

$id = $_GET["id"];
$host = "localhost";
$user = "dckap";
$password = "Dckap2023Ecommerce";
$db = "php";
$conn = mysqli_connect($host,$user,$password,$db);
$row = "SELECT * FROM product_detail WHERE id =$id";

$rsesult = mysqli_query($conn,$row);


?>

<?php while($resul = mysqli_fetch_assoc($rsesult)){?>
<h2>ID : <?php echo $resul["id"]?> </h1>

<h2> NAME : <?php echo $resul["name"]?></h1>

<h2> DESCERIPTION : <?php echo $resul["decription"]?></h1>

<?php }?>