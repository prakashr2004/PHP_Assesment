<?php

$host = "localhost";
$user = "dckap";
$password = "Dckap2023Ecommerce";
$db = "php";
$conn = mysqli_connect($host,$user,$password,$db);
$row = "SELECT * FROM blog";

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
        <th>Tittle</th>
        <th>Content</th>
        <th>Author</th>
        <th>createdAT</th>
        <th>status</th>
    </tr>
    </thead>
    <tbody>
        <?php
                $sql = "SELECT * FROM blog";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['tittle']; ?></td>
                    <td><?php echo $row['content']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['createdAT']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    </tr>
        <?php       }
            }
        ?>
    </tbody>
</table>
</body>
</html>