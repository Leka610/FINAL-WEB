<?php
    include('database.php');

        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if(empty($name) || empty($email) || empty($message)){
                array_push($errors, 'Please fill out all fields');
            }else{
                // Prepare the INSERT statement
                $insert = $db->prepare("INSERT INTO contact(name, email, message) VALUES(?, ?, ?)");

                // Bind parameters
                $insert->bind_param("sss", $name, $email, $message);

                // Execute the statement
                if($insert->execute()){
                    echo "  <script>alert('Message sent successfully');
                                setTimeout(function() {
                                    window.location.href = 'index.php';
                                }, 500);
                            </script>";
                }
                else{
                    echo "<script>alert('couldnt send message')</script>";
                }
            }
        }
?>