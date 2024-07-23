<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Car Cleaning Lessons</title>
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
<style>
    .border-container3 {
        border: 20px solid #1f4f7e;
        border-radius: 30px;
        width: 45%;
        align-content: center;
        align-self: center;
        text-align: center;
        vertical-align: middle;
        margin: auto;
        
    }

    .border-container4 {
        border: 20px solid #787d82;
        border-radius: 30px;
        width: 45%;
        align-content: center;
        align-self: center;
        text-align: center;
        vertical-align: middle;
        margin: auto;
        background-color: #787d82;
        
    }
    h2 {
        background-color: aliceblue;
        text-align: center;
    }

    body {
        margin-top: 70px;
        padding-top: 70px;
        background-color: aliceblue;
        background-image: url(bluebg.png);
    }
    form {
        margin-left: 40px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .border-container4:hover {
    background-color: #1f4f7e; 
    border: 20px solid #1f4f7e ;
    color: white;
    cursor: pointer;
    transition: 0.7s;
    }

    .togglebutton {
        font-family: Verdana, Geneva, Tahoma, sans-serif; 
        color: white; 
        background-color: #246fa4;
        border: #246fa4; 
        border-radius: 5px; 
        padding: 20px; 
        transition: 0.5s;
        font-size: 40px;
        padding-left: 550px;
        padding-right: 550px;
    }

    .buttonword {
        font-size: 50px;
        color: white;
        font-weight: 600;
    }

</style>

<script>
    function GoTo() {
      window.location.href = url;
    }
</script>


<body>
<?php
          // Get user ID from the URL parameter
          $userId = $_GET['userId'];
          ?>

    
  <section class="colored-section" id="title">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href=""><a class="logo"><img src="images/SS.png" style="width: 150px;" alt="logo"></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" href="index2.php?userId=<?php echo $userId; ?>">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Lessons.php?userId=<?php echo $userId; ?>">Lessons</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carquiz.php?userId=<?php echo $userId; ?>">Take Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html?userId=<?php echo $userId; ?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
  </section><br><br>
 
  <center>
    <div class="border-container4" onclick="window.location.href = ('Basic.php?userId=<?php echo $userId; ?>')" id="border-container4" style="width: 65%;">
        <img src="images/1.png" alt="car1" style="width: 150px; height: 150px; margin-right: 0px; border-radius: 10px;">
        <span style="vertical-align: middle;">
          <em class="buttonword" id="buttonword" alt="buttonword">&nbsp; The Basics</em></span>  
  </center><br></div>
  
  <center>
    <div class="border-container4" onclick="window.location.href = ('Wheel.php?userId=<?php echo $userId; ?>')" id="border-container4" style="width: 65%;">
        <span style="vertical-align: middle;">
          <em class="buttonword" id="buttonword" alt="buttonword">Wheel Cleaning &nbsp;</em>  </span>
          <img src="images/2.png" alt="car2" style="width: 160px; height: 150px; margin-left: 0px; border-radius: 10px;">
  </center></div><br>

  <center>
    <div class="border-container4" onclick="window.location.href = ('Interior.php?userId=<?php echo $userId; ?>')" id="border-container4" style="width: 65%;">
    <img src="images/3.png" alt="car3" style="width: 160px; height: 150px; margin-left: 0px; border-radius: 10px;">
        <span style="vertical-align: middle;">
          <em class="buttonword" id="buttonword" alt="buttonword"> &nbsp; Interior Detailing </em>  </span>
         
  </center></div><br>

  <center>
    <div class="border-container4" onclick="window.location.href = ('Exterior.php?userId=<?php echo $userId; ?>')" id="border-container4" style="width: 65%;">
        <span style="vertical-align: middle;">
          <em class="buttonword" id="buttonword" alt="buttonword">  Exterior Detailing &nbsp; </em></span>
          <img src="images/4.png" alt="car4" style="width: 160px; height: 150px; margin-left: 0px; border-radius: 10px;">
         
  </center></div><br>


<center>
    <div class="border-container4" onclick="window.location.href = ('Enginebay.php?userId=<?php echo $userId; ?>')" id="border-container4" style="width: 65%;">
    <img src="images/8.png" alt="car3" style="width: 160px; height: 150px; margin-left: 0px; border-radius: 10px;">
        <span style="vertical-align: middle;">
          <em class="buttonword" id="buttonword" alt="buttonword"> &nbsp; Engine Bay Cleaning </em>  </span>
         
  </center></div><br>
  
</body>

</html>