<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CarShine</title>
  <!--CSS Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <!--Fontawsome  -->
  <script src="https://kit.fontawesome.com/4002938454.js" crossorigin="anonymous"></script>
  <!--Bootstrap Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!--Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="carscript.js" defer></script>
</head>
<body>
    <style> <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            padding: 1.5rem;
            border: 5px solid #003366;
            background-color: #adc9ee;
            padding-left: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 2; /* Ensure the form is on top */
        }

        input[type="email"]#email,
        input[type="password"]#password{
            width: 50%;
        }
        input[type="password"]#password1 {
            width: 65%;
        }
        label {
            margin-bottom: 0.5rem;
            color:black;
        }

        input,
        select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #003366;
            color: rgb(255, 255, 255);
            font-weight: bold;
            font-family: 'Arial', sans-serif;
            font-size: medium;
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 30px;
        }

        input[type="submit"]:hover {
            background-color: #001a29;
        }

        section[aria-label="Slideshow"] {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            z-index: 1; /* Ensure the slideshow is behind the form */
        }

        .carousel {
            display: flex;
            width: 100%;
            height: 100%;
        }
        ul[data-slides] {
            list-style: none;
            width: 100%;
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
</style>
<section class="colored-section" id="title">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href=""><a class="logo"><img src="images/SS.png" style="width: 150px;" alt="logo"></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lto_login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
      <section aria-label="Slideshow">
    <div class="carousel" data-carousel>
    <button class="carousel-button prev" data-carousel-button="prev" type="button" hidden>&#8656;</button>
    <button class="carousel-button next" data-carousel-button="next" type="button" hidden>&#8658;</button>
    <ul data-slides>
      <li class="slide" data-active>
        <img src="images/1.png" alt="car1">
     
      </li>
      <li class="slide">
        <img src="images/2.png" alt="car2">
      </li>
      <li class="slide">
        <img src="images/3.png" alt="car3">
   
          
      </li>
      <li class="slide">
        <img src="images/4.png" alt="car4">
      </li>
      <li class="slide">
        <img src="images/5.png" alt="car5">
      </li>
      <li class="slide">
        <img src="images/6.png" alt="car6">
      </li>
      <li class="slide">
        <img src="images/7.png" alt="car7">
        <div class="slide-text">
      </li>
      <li class="slide">
        <img src="images/8.png" alt="car8">
      </li>
      <li class="slide">
        <img src="images/9.png" alt="car9">
      </li>
      <li class="slide">
        <img src="images/10.png" alt="car10">
        <div class="slide-text">
          
       
      </li>
    </ul>
  </section>
<center><h2>CREATE ACCOUNT</h2></center>
  <form method="post" action="create_account.php">
        <input type="hidden" name="userId">
        <label>Username (Email): </label><input type="email" name="email" id="email" required><br>
        <label>Password: </label><input type="password" name="password" id="password1" required><br>
        <label>Confirm Password: </label><input type="password" name="confirmPassword" id="password" required><br>
        <input type="submit" name="createAccount" value="CREATE">
    </form>
</div>
</div>
</body>
</html>
<?php
// create_account.php
$serverName = "MADELINEPHOEBE\SQLEXPRESS01";
$connectionOptions = [
    "Database" => "WEBAPP",
    "Uid" => "",
    "PWD" => ""
];
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {

}

if (isset($_POST['createAccount'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password !== $confirmPassword) {
        echo 'Password and Confirm Password do not match!';
        exit(); // Stop execution if passwords don't match
    }
    // Add your validation and hashing logic here...

    // For example, you can use password_hash for hashing the password
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Get the current date and time for date of registration
    $dateOfRegistration = date('Y-m-d');

    // Insert the user information into the USER_LOGIN table
    $sqlInsertUser = "INSERT INTO CAR_LOGIN (USERNAME, PASSWORD, DATE_OF_REGISTRATION) VALUES (?, ?, ?)";
    $paramsInsertUser = [$email, $password, $dateOfRegistration]; // Store the plain text password
    $resultInsertUser = sqlsrv_query($conn, $sqlInsertUser, $paramsInsertUser);

    if ($resultInsertUser) {
        echo '<script>alert("You have successfully created an account!");</script>';
        echo '<script>setTimeout(function(){ window.location.href = "lto_login.php"; }, 100);</script>';
    } else {
        echo 'Error creating account: ' . print_r(sqlsrv_errors(), true) . '<br />';
    }

    sqlsrv_close($conn);
    exit(); // Stop execution after handling account creation
}

// Display the form for creating a username and password

?>
