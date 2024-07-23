<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTO Update Personal Information</title>
</head>
<body>
    <style>
        .table-container {
            text-align: center;
            margin-top: 20px; /* Adjust margin as needed */
        }
table {

            display: inline-block;
            text-align: left; 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #003366;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

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
    padding-bottom: 10px;
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
.table-container {
            text-align: center;
            margin-top: 20px; /* Adjust margin as needed */
        }

        table {
            display: inline-block;
            text-align: left; 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #003366;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
</style>
<h1>
    <img src="republic.png" alt="Republic Logo">
    REPUBLIC OF THE PHILIPPINES <br> DEPARTMENT OF TRANSPORTATION & COMMUNICATIONS <br> LAND TRANSPORTATION OFFICE
    <img src="lto.png" alt="DOTC LTO Logo">
</h1><br>


<center><h2>PERSONAL INFORMATION</h2></center>
<form method="post" action="newlto_change_license_type.php">
<div class="table-container">
<?php
$serverName = "MADELINEPHOEBE\SQLEXPRESS01";
$connectionOptions = [
    "Database" => "WEBAPP",
    "Uid" => "",
    "PWD" => ""
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
$userId = isset($_GET['userId']) ? $_GET['userId'] : '';

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    
}
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
} else {
    // Handle the case where userId is not set
    echo 'User ID is missing.';
    // You might want to redirect the user or display an error message.
    exit();
}

if (isset($_POST['update'])) {
    $familyname = $_POST['familyname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $NoStreet = isset($_POST['NoStreet']) ? $_POST['NoStreet'] : '';
    $citymunicipality = isset($_POST['citymunicipality']) ? $_POST['citymunicipality'] : '';
    $province = isset($_POST['province']) ? $_POST['province'] : '';
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
    $zipcode = $_POST['zipcode'];
    $telno = $_POST['telno'];
    $tin = $_POST['tin'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $birthdate = isset($_POST['birthdate']) && $_POST['birthdate'] !== '' ? date('Y-m-d', strtotime($_POST['birthdate'])) : null;
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $updateFields = [];
    $updateValues = [];

    if (!empty($familyname)) {
        $updateFields[] = "FAMILY_NAME = ?";
        $updateValues[] = $familyname;
    }

    if (!empty($firstname)) {
        $updateFields[] = "FIRST_NAME = ?";
        $updateValues[] = $firstname;
    }

    if (!empty($middlename)) {
        $updateFields[] = "MIDDLE_NAME = ?";
        $updateValues[] = $middlename;
    }

    if (!empty($NoStreet)) {
        $updateFields[] = "STREET = ?";
        $updateValues[] = $NoStreet;
    }

    if (!empty($citymunicipality)) {
        $updateFields[] = "CITY_MUNICIPALITY = ?";
        $updateValues[] = $citymunicipality;
    }

    if (!empty($zipcode)) {
        $updateFields[] = "ZIP_CODE = ?";
        $updateValues[] = $zipcode;
    }

    if (!empty($province)) {
        $updateFields[] = "PROVINCE = ?";
        $updateValues[] = $province;
    }

    if (!empty($telno)) {
        $updateFields[] = "TELEPHONE_NUMBER = ?";
        $updateValues[] = $telno;
    }

    if (!empty($tin)) {
        $updateFields[] = "TIN = ?";
        $updateValues[] = $tin;
    }

    if (!empty($nationality)) {
        $updateFields[] = "NATIONALITY = ?";
        $updateValues[] = $nationality;
    }

    if (!empty($gender)) {
        $updateFields[] = "GENDER = ?";
        $updateValues[] = $gender;
    }

    if (!empty($birthdate)) {
        $updateFields[] = "BIRTHDATE = ?";
        $updateValues[] = $birthdate;
    }

    if (!empty($height)) {
        $updateFields[] = "HEIGHT = ?";
        $updateValues[] = $height;
    }

    if (!empty($weight)) {
        $updateFields[] = "WEIGHT = ?";
        $updateValues[] = $weight;
    }

    if (!empty($updateFields)) {
        $updateFieldsStr = implode(", ", $updateFields);

        $sqlUpdateUser = "UPDATE CAR_USER_DATA SET $updateFieldsStr WHERE USER_ID = ?";
        $updateValues[] = $userId;

        $resultUpdateUser = sqlsrv_query($conn, $sqlUpdateUser, $updateValues);

        if ($resultUpdateUser) {
            echo '<script>alert("Record Updated Successfully");</script>';
            
        } else {
            echo 'Error updating record: ' . print_r(sqlsrv_errors(), true) . '<br />';
        }
    } else {
        echo '<script>alert("No new record added.");</script>';
    }

    $sqlSelect = "SELECT FIRST_NAME, MIDDLE_NAME, FAMILY_NAME, STREET, CITY_MUNICIPALITY, ZIP_CODE, PROVINCE, TELEPHONE_NUMBER, TIN, NATIONALITY, GENDER, BIRTHDATE, HEIGHT, WEIGHT FROM CAR_USER_DATA WHERE USER_ID = ?";
    $resultSelect = sqlsrv_query($conn, $sqlSelect, [$userId]);
    
    if ($resultSelect) {
        echo '<table>';
        while ($row = sqlsrv_fetch_array($resultSelect, SQLSRV_FETCH_ASSOC)) {
            echo '<tr>';
            echo '<th>FAMILY NAME</th><td>' . $row['FAMILY_NAME'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>FIRST NAME</th><td>' . $row['FIRST_NAME'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>MIDDLE NAME</th><td>' . $row['MIDDLE_NAME'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>STREET</th><td>' . $row['STREET'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>CITY/MUNICIPALITY</th><td>' . $row['CITY_MUNICIPALITY'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>ZIP CODE</th><td>' . $row['ZIP_CODE'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>PROVINCE</th><td>' . $row['PROVINCE'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>TELEPHONE NUMBER</th><td>' . $row['TELEPHONE_NUMBER'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>TIN</th><td>' . $row['TIN'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>NATIONALITY</th><td>' . $row['NATIONALITY'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>GENDER</th><td>' . $row['GENDER'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>BIRTHDATE</th><td>' . ($row['BIRTHDATE'] ? $row['BIRTHDATE']->format('Y-m-d') : 'Not specified') . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>HEIGHT</th><td>' . $row['HEIGHT'] . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>WEIGHT</th><td>' . $row['WEIGHT'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Error fetching updated record: ' . print_r(sqlsrv_errors(), true) . '<br />';
    } 
    

    sqlsrv_close($conn);
    
}

?>
        <input type="hidden" name="userId" value="<?php echo $userId; ?>"><BR>
        <BR><input type="submit" name="changeLicenseType" value="CHANGE MY LICENSE TYPE / NEXT">
    </form>
</div>

</body>
</html>
