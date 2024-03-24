<?php
include("database.php");

$list_sql = "SELECT `id`, `name`, `price`, `image`, `kategoria` FROM `products`";

$result = $db->query($list_sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Product Name</th><th>Price in $</th><th>Image</th><th>Kategoria</th><th>Edit</th><th>Delete</th></tr>";

    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];

        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["price"]."</td>";
        echo "<td>".$row["image"]."</td>";
        echo "<td>".$row["kategoria"]."</td>";
        echo "<td><a href='edit.php?id=$id'>Edit</a></td>";
        echo "<td><a href='delete_product.php?id=$id'>Fshije</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nuk ka shënime";
}
?>

<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #0066cc;
        }
    </style>
</head>
</html>
