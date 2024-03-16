<?php
    include('database.php');

    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
      
        // form validation: ensure that the form is correctly filled ...
        if ($password != $confirm_password) {
          array_push($errors, "The two passwords do not match");
        }
        if($gender != 'M' && $gender != 'F'){
            array_push($errors, "Zgjidh nje gjini!");
        }
      
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM signup WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['username'] === $username) {
            array_push($errors, "Username already taken");
          }
      
          if ($user['email'] === $email) {
            array_push($errors, "email already exists");
          }
        }
      
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {     
            $query = "INSERT INTO signup (fullname, username, gender, email, password, phone) 
                     VALUES ('$fullname', '$username', '$gender', '$email', '$password', '$phone')";  
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: url(duksa.jpg);
            backdrop-filter: blur(10px);
        }
        .container{
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px 30px;
            border-radius: 5px;
        }

        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            background: #ff4500;
        }

        .container form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box{
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        .user-details .input-box .details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            font-size: 16px;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #ff4500;
        }

        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }

        form .gender-details .category{
            display: flex;
            width: 80%;
            margin: 14px 0;
            margin-left: -30px;
        }

        .gender-details .category label{
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-left: 30px;
        }

        .gender-details .category .dot{
            height: 18px;
            width: 18px;
            background: #ccc;
            border-radius: 50%;
            margin-right: 5px;
        }

        .gender-details .category input[type="radio"] {
            display: none;
        }

        .gender-details .category input[type="radio"]:checked + .dot {
            background: #ff4500;
        }

        form .button{
            height: 45px;
            margin: 45px, 0;
        }

        form .button input{
            height: 100%;
            width: 100%;
            outline: none;
            color: black;
            border: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 5px;
            letter-spacing: 1px;
            background: url(duksa.jpg);
        }

        form .button input:hover{
            border: 1px solid;
            font-size: 19px;
            transition: 0.1s;
        }

        @media (max-width: 584px){
            .container{
                max-width: 100%;
            }
            form .user-details .input-box{
                margin-bottom: 15px;
                width: 100%;
            }
            form .gender-details .category{
                width: 100%;
            }
            .container form .user-details{
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar{
                width: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">SIGN UP</div>
        <form action="signup.php" method="post">
        <?php include('errors.php'); ?>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="phone" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
            </div>
            <div class="gender-details">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="male">
                        <input type="radio" id="male" name="gender" value="M">
                        <span class="dot"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="female">
                        <input type="radio" id="female" name="gender" value="F">
                        <span class="dot"></span>
                        <span class="gender">Female</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name ="reg_user" value="Register">
            </div>
        </form>
    </div>

    <?php
    if(isset($_SESSION['password_mismatch']) && $_SESSION['password_mismatch']) {
        echo "<script>alert('Passwords do not match! Please try again.');</script>";
        unset($_SESSION['password_mismatch']); // Remove the session variable after displaying the alert
    }
    ?>
</body>
</html>
