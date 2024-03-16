<?php
    session_start();

    include('database.php');

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);


    // Confirm password
    if($password !== $confirm_password) {
        $_SESSION['password_mismatch'] = true;
        header('Location: signup.php');
        exit();
    }else {

        $stmt = $conn->prepare("INSERT INTO signup (fullname, username, gender, email, password, phone) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssssi", $fullname, $username, $gender, $email, $password_hash, $phone);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        $_SESSION['signup_success'] = true;
        header("Location: index.php");
        exit();
    }
    // Database connection
   // $conn = new mysqli('localhost', 'root', '', 'final_web');
    //if($conn->connect_error){
      //  die('Connection Failed : '.$conn->connect_error);
    //}
?>

