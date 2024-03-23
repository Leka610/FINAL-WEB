<?php
if(isset($_POST['add_product'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_category = $_POST['kategoria'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'produktet/'.$product_image;

    if(empty($product_name) || empty($product_price) || empty($product_image)){
        array_push($errors, 'Please fill out all fields');
    }else{
        // Prepare the INSERT statement
        $insert = $db->prepare("INSERT INTO products(name, price, image, kategoria) VALUES(?, ?, ?, ?)");

        // Bind parameters
        $insert->bind_param("sdss", $product_name, $product_price, $product_image, $product_category);

        // Execute the statement
        if($insert->execute()){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            echo "<script>alert('product added successfully')</script>";
        }
        else{
            echo "<script>alert('couldnt add product')</script>";
        }
    }
}
?>
