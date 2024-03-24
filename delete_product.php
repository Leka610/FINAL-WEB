<script>
<?php
include 'database.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="DELETE FROM `products` WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo "alert('Është fshirë me sukses')";
    } else {
        echo "alert('Nuk është fshirë') ";
    }
}
$db->close();


?>
</script>