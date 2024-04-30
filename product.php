<?php

$host = "localhost";
$user = "dckap";
$password = "Dckap2023Ecommerce";
$db = "php";
$conn = mysqli_connect($host,$user,$password,$db);
$row = "SELECT * FROM product";

$rsesult = mysqli_query($conn,$row);
$row = mysqli_num_rows($rsesult);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
                table, td, th {
  border: 1px solid;
}
table {
  width: 100%;
  border-collapse: collapse;
}
    </style>
</head>
<body>
    
<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Decription</th>
    </tr>
    </thead>
    <tbody>
        <?php
                $sql = "SELECT * FROM product_detail";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><a href="detail.php?id=<?php echo $row['id']?>"><?php echo $row['name'];?></a></td>
                    <td><?php echo $row['price']; ?></td>
                    <td> <img src="<?php echo base64_encode($row['image']); ?>"></td>
                    <td><?php echo $row['decription']; ?></td>
                    </tr>
        <?php       }
            }
        ?>
    </tbody>
</table>
</body>
</html>