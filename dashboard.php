<?php

session_start();

/*include("db.php");*/

if (isset($_POST['Logout'])) {
  session_destroy();
  header("Location: admin.html");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shembulli</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f8ff;
    }

    .profile {
      display: flex;
      align-items: center;
      cursor: pointer;
      padding: 0;
      border-bottom: 1px solid #ddd;
      margin-bottom: 30px;
    }

    .avatar {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      margin-right: 0;
      margin-left: 5px;
    }

    .sidebar {
      width: 10%;
      max-width: 200px;
      background-color: #e6e6e6;
      padding: 0;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
    }

    .sidebar a {
      padding: 16px;
      text-decoration: none;
      color: #333;
      display: block;
    }

    .sidebar a:hover {
      background-color: #ddd;
    }

    .permbajtja {
      display: none;
      padding: 20px;
      margin-left: 10%;
    }

    .permbajtja.active {
      display: block;
      margin-top: 0;
      padding-top: 0;
    }

    .log-out {
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .log-out button {
      font-family: Arial, sans-serif;
      font-size: 15px;
      display: block;
      color: white;
      text-align: center;
      padding: 15px;
      text-decoration: none;
      background-color: #5f9ea0; 
      border: none;
      width: 100%;
      cursor: pointer;
    }

    .log-out button:hover {
      background-color: #4682b4;
    }

    #myprofile {
      padding: 20px;
    }

    #myprofile h1 {
      font-family: Arial, sans-serif;
      font-size: 20px;
    }

    #myprofile form {
      margin-top: 50px;
      margin-left: 0;
    }

    #myprofile form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    #myprofile input[type="submit"] {
      background-color: #5f9ea0;
      color: white;
      border: none;
      padding: 15px;
      cursor: pointer;
      width: 80px;
    }

    #myprofile input[type="submit"]:hover {
      background-color: #4682b4;
    }


    #myprofile form #avatar {
      margin-top: 10px;
    }

    #myprofile form label {
      display: block;
      margin-bottom: 5px;
    }

    #about {
      padding: 10px;
      margin-top: 50px;
      margin-left: 10%;
      margin-right: 10px;
      box-sizing: border-box;
      overflow: auto;
    }

    #about h1 {
      font-family: Arial, sans-serif;
      font-size: 20px;
    }

    #about input[type="text"] {
      width: 100%;
      height: 500px;
      margin-bottom: 15px;
      box-sizing: border-box;
      text-align: left;
    }

    #about input[type="submit"] {
      background-color: #5f9ea0;
      color: white;
      border: none;
      padding: 15px;
      cursor: pointer;
      width: 80px;
    }

    #about input[type="submit"]:hover {
      background-color: #4682b4;
    }

    #contact {
      padding: 10px;
      margin-top: 50px;
      margin-left: 10%;
      margin-right: 10px;
      box-sizing: border-box;
      overflow: auto;
    }

    #contact h1 {
      font-family: Arial, sans-serif;
      font-size: 20px;
    }

    #contact input[type="tel"],
    #contact input[type="email"],
    #contact input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    #contact input[type="submit"] {
      background-color: #5f9ea0;
      color: white;
      border: none;
      padding: 15px;
      cursor: pointer;
      width:80px;
    }

    #contact input[type="submit"]:hover {
      background-color: #4682b4;
    }

    #services {
      padding: 10px;
      margin-top: 50px;
      margin-left: 10%;
      margin-right: 10px;
      box-sizing: border-box;
      overflow: auto;
    }

    #services h1 {
      font-family: Arial, sans-serif;
      font-size: 20px;
    }

    #services input[type="text"],
    #services input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    #services input[type="button"],
    #services input[type="submit"]
     {
      background-color: #5f9ea0;
      color: white;
      border: none;
      cursor: pointer;
      width: 80px;
      padding:15px;
    }

    #services input[type="button"]:hover,
    #services input[type="submit"]:hover {
      background-color: #4682b4;
    }


   

    @media only screen and (max-width: 600px) {
      .sidebar {
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="profile">
      <img src="foto1.jpg" alt="Avatar" class="avatar">
      <a href="#" onclick="showContent('myprofile')">My Profile</a>
    </div>
    <a href="#" onclick="showContent('dashboard')">Dashboard</a>
    <a href="#" onclick="showContent('services')">Services</a>
    <a href="#" onclick="showContent('about')">About</a>
    <a href="#" onclick="showContent('contact')">Contact</a>
    <div class="log-out">
      <form method="POST">
        <button name="Logout">Log Out</button>
      </form>
    </div>
  </div>

  <div id="dashboard" class="permbajtja active">
    <h4>HOME</h4>
    <h1>Welcome
      <?php echo $_SESSION['Username']; ?>
    </h1>
  </div>

  <div id="myprofile" class="permbajtja">
    <h1>User: </h1>
    <form action="add_user.php" method="post">
      First Name: <input type="text" name="Firstname"><br>
      Last Name: <input type="text" name="Lastname" required><br>
      Username: <input type="text" name="Username"><br>
      Password: <input type="password" name="Password"><br>
      Profile Photo: <input type="file" id="avatar" name="avatar"><br>
      <input type="submit" value="Ruaj">
    </form>
    <a href="listim_user.php"><input type="submit" value="Ndrysho"></a>
  </div>

  <div id="services" class="permbajtja">
    <h1>Services</h1>
    <form action="foto_upload_db.php" method="post" enctype="multipart/form-data">
      <label for="image">Zgjedh foton</label>
      <input type="file" name="image" id="image" accept="image/jpeg, image/png"><br>

      <label for="zhanri">Zgjedh zhanrin</label>
      <select name="zhanri" id="zhanri">
        <option value="action">Action</option>
        <option value="drama">Drama</option>
        <option value="comedy">Comedy</option>
        <option value="adventure">Adventure</option>
        <option value="fantasy">Fantasy</option>
        <option value="science-fiction">Science-fiction</option>
      </select><br><br>

      <input type="submit" value="Ruaj"><br><br>
    </form>
    <a href="listim_foto.php"><input type="button" value="Ndrysho"></a>
  </div>


  <div id="about" class="permbajtja">
  <h1>About</h1>
    <form action="add_about.php" method="post">
      <label for="detaje">Detaje</label><br>
      <textarea name="detaje" rows="5" cols="40"></textarea><br><br>
      <input type="submit" value="Ruaj"><br><br>
    </form>
    <a href="listim_about.php"><input type="submit" value="Ndrysho"></a>
  </div>

  <div id="contact" class="permbajtja">
    <h1>Contact Information:</h1>
    <form action="add_contactinfo.php" method="post">
      Phone: <input type="text" name="phone" placeholder="Enter new phone number"><br>
      Email: <input type="email" name="email" placeholder="Enter new email"><br>
      <input type="submit" value="Ruaj"><br><br>
    </form>
    <a href="listim_contactInfo.php"><input type="submit" value="Ndrysho"></a>
  </div>


  <script>
    
    function showContent(sectionId) {
     
      var sections = document.getElementsByClassName('permbajtja');

      
      for (var i = 0; i < sections.length; i++) {
        sections[i].classList.remove('active');
      }

     
      var selectedSection = document.getElementById(sectionId);

      
      if (selectedSection) {
        selectedSection.classList.add('active');
      }
    }
  </script>

</body>

</html>