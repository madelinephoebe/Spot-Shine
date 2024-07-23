<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTO Update License Type</title>
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
    padding-bottom: 47px;
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
<center><h2>UPDATE LICENSE TYPE</h2></center>
</body>
</html>
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

if (isset($_POST['updateLicenseType'])) {
    $userId = $_POST['userId'];
    $typeOfLicense = isset($_POST['TLA']) ? $_POST['TLA'] : '';

    // Check if a license type is selected before attempting to update
    if ($typeOfLicense != '') {
        // Update LICENSE_APPLIED_FOR in APPLICATION_DETAILS table
        $sqlUpdateTLA = "UPDATE CAR_APPLICATION_DETAILS SET LICENSE_APPLIED_FOR = ? WHERE USER_ID = ?";
        $paramsUpdateTLA = [$typeOfLicense, $userId];
        $resultUpdateTLA = sqlsrv_query($conn, $sqlUpdateTLA, $paramsUpdateTLA);

        if ($resultUpdateTLA) {
            // Redirect to the create account page
            echo '<script>alert("Record Updated Successfully");</script>';
            echo '<script>setTimeout(function(){ window.location.href = "lto_signout.php";}, 100);</script>';
            exit();
        } else {
            echo 'Error updating License Applied For: ' . print_r(sqlsrv_errors(), true) . '<br />';
        }
    } else {
        echo '<script>alert("No new record added.");</script>';
        echo '<script>setTimeout(function(){ window.location.href = "lto_signout.php"; }, 100);</script>';
        exit();

    }

    sqlsrv_close($conn);
}

if (isset($_POST['changeLicenseType'])) {
    $userId = $_POST['userId'];

    // Display the form for changing the license type
    echo '<form method="post" action="newlto_change_license_type.php">';
    echo '<input type="hidden" name="userId" value="' . $userId . '">';
    echo '<h4>TYPE OF LICENSE APPLIED FOR (TLA)</h4>';
    // Add your license type options here as radio buttons
    echo '<input type="radio" name="TLA" value="1"><label>1 Student Permit</label><br>';
    echo '<input type="radio" name="TLA" value="2"><label>2 Non-Professional</label><br>';
    echo '<input type="radio" name="TLA" value="3"><label>3 Professional</label><br>';
    echo '<input type="radio" name="TLA" value="4"><label>4 Conductor</label><br>';
    echo '<br>';
    echo '<input type="submit" name="updateLicenseType" value="UPDATE / SUBMIT">';
    echo '</form>';
}
?>
