<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTO Logout</title>
    
</head>
<body>
<style>
        h1 {
            color: #ffffff;
            background-color: #2c3e50;
            background: linear-gradient(to right, #2c3e50, #34495e);
            padding: 2%;
            margin: 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap; 
            font-family: 'Helvetica', sans-serif;
            text-shadow: 5px 10px 10px rgba(0, 0, 0, 10); 
            box-shadow: 0 0 10px rgba(0, 0, 0, 100);

        }
        h1 img {
    max-width: 90px;
    height: auto;
    margin: 0 10px; 
    border-radius: 50%; 
    border: 2px solid #2c3e50; 
    box-shadow: 0 0 2px rgba(0, 0, 0, 15); 

}


        h2 {
    color: #ffffff;
    background-color: #973030; 
    padding: 10px;
    text-align: center;
    font-family: 'Helvetica', sans-serif;
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: 3px solid #2c3e50;
    width: 55%;
    border-radius: 10px;

}

        body {
            font-family: 'Verdana', sans-serif;
            font-size: medium;
            margin: 0;
            padding: 0px;
            padding-bottom: 265px;
            background-color: #e1e8f0;
            border: 5px solid #080707; /* Border for the whole page */
            border-radius: 1px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


        }

        form {
            width: 650px;
            margin: 0 auto;
            padding: 1.5rem;
            border: 5px solid #003366;
            background-color: #adc9ee;
            padding-left: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 0.5rem;
        }

        input,
        select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            width: 15px;
            height: 15px;
            margin-right: 10px;
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
    </style>
<h1>
    <img src="republic.png" alt="Republic Logo">
    REPUBLIC OF THE PHILIPPINES <br> DEPARTMENT OF TRANSPORTATION & COMMUNICATIONS <br> LAND TRANSPORTATION OFFICE
    <img src="lto.png" alt="DOTC LTO Logo">
</h1><br>
<center><h2>LOGOUT PAGE</h2></center>

<?php
// lto_change_license_type.php

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

if (isset($_POST['LOGOUT'])) {
    echo '<script>alert("You have successfully logged out! Redirecting to Login Page...");</script>';
    echo '<script>setTimeout(function(){ window.location.href = "lto_login.php"; }, 100);</script>';
} elseif (isset($_POST['LTOFORM'])) {
    echo '<script>alert("You have successfully logged out! Redirecting to Home...");</script>';
    echo '<script>setTimeout(function(){ window.location.href = "index.html"; }, 100);</script>';

}


sqlsrv_close($conn);
?>

<form method="post" action="">
    <!-- Original logout button -->
    <input type="submit" name="LOGOUT" value="BACK TO LOGIN"><br>
    <input type="submit" name="LTOFORM" value="BACK TO HOME">
    
</form>

</body>
</html>