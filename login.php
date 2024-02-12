<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
    <?php
        if (isset($_POST['Login']))
        {
            require_once "database.php";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $errors = array();
            if ($username == '' || $password == '') {
                array_push($errors, "Please fill the form and submit");
            }
            $sql = "SELECT * FROM userdata WHERE Email = '$username' OR Name = '$username' AND Password = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                array_push($errors, "LogIn Successful");
                header("Location: index.php");
            }
            else{
                array_push($errors, "Invalid username or password");
            }
            if(count($errors) > 0) {
                foreach($errors as $error) {
                    echo "<div class= 'alert alert-danger'>$error .<br>";   
                }
            }
        }
    ?>
  <div class="wrapper">
    <h2>LogIn</h2>
    <form action="login.php" method="post">
      <div class="input-box">
        <input type="text" name="username" placeholder="Enter your username/ Email" required>
      </div>
      <div class="input-box">
        <input type="password" name = "password" placeholder="Password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" name="Login" value="Login">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="register.php">Signup now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>