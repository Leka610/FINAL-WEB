<?php
    include("database.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = $_POST["Firstname"];
        $lastname = $_POST["Lastname"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO `admin_user`(`id`, `Firstname`, `Lastname`, `username`, `password`) VALUES ('','$firstname','$lastname','$username','$password')";

        if ($db->query($sql) === TRUE) {
            $message = "U regjistrua me sukses";
        } else {
            $message = "Nuk u regjistrua";
        }
    }
?>
<script>
    alert('<?php echo $message; ?>');
</script>
