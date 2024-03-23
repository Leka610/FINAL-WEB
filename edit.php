<?php
include "database.php";


$id=$_GET["id"];

$sqledit="SELECT * FROM `products` WHERE id=$id";

$result =$db->query($sqledit);

if($result->num_rows>0){

    $row=$result->fetch_assoc();

?>

<html>
<head>
    <title>Admin Product Edit</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: lightblue;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="file"] {
        margin-bottom: 20px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #ffffff;
        cursor: pointer;
        border: none;
        padding: 10px;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <form action="edit_product.php" method="post" enctype="multipart/form-data">
       
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="hidden" name="existing_image" value="<?php echo $row["image"]; ?>">

    <label for="product_name">Emri Produktit:</label>
    <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>

    <label for="product_price">Cmimi:</label>
    <input type="text" name="price" value="<?php echo $row["price"]; ?>"><br>
    
    <label for="kategoria">Zgjedh Kategorine</label>
      <select name="kategoria" id="kategoria">
        <option value="regular">Regular</option>
        <option value="new-arrivals">New Arrivals</option>
        <option value="discount">Discount</option>
      </select><br>

    <br><label for="image">Zgjedh foton</label>
    <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/jpg"><br>


    <a href="product_list.php"><input type="submit" name="save" value="Ruaj"><a>
    </form>

<?php

} else{
    echo"Nuk ka shënime";
}

?>
</body>
</html>