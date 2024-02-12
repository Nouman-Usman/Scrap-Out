<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register For Scrap Out </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
    <?php
        if (isset($_POST['Submit']))
        {
            require_once "database.php";
            $fullName = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];
            $errors = array();
            if ($fullName == '' || $email == '' || $password == '' || $confirmPassword == '') {
                array_push($errors, "Please fill the form and submit");
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid email format");
            }
            elseif ($password !== $confirmPassword) {
                array_push($errors, "Password does not match");
            }
            elseif(strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters");
            }
            $sql = "SELECT * FROM userdata WHERE Email = '$email' OR Name = '$fullName'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                array_push($errors, "Username or Email already exists");
            }
            if(count($errors) > 0) {
                foreach($errors as $error) {
                    echo "<div class= 'alert alert-danger'>$error .<br>";   
                }
            }
            elseif (mysqli_num_rows($result) == 0) {
                $sql = "INSERT INTO userdata (Name, Email, Password) VALUES ('$fullName', '$email', '$password')";

                if (mysqli_query($conn, $sql)) {
                    echo "<div class= 'alert alert-danger'> Successfully Registered";
                    header("Location: login.php");
                }

                else {
                    echo "<div class= 'alert alert-danger'>Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    ?>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="register.php" method="post">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="confirmPassword" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>