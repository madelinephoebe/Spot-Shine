<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTO Admin</title>
</head>
<body>
    <style>
        .small-table {
            font-size: 10px;
            text-align: center;
            margin-top: 20px; /* Adjust margin as needed */
}
.small-table th, .small-table td {
    padding: 6px;
}

        .table-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
table {

            display: inline-block;
            text-align: left; 
            margin-top: 10px;
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


        h3 {
            color: #ffffff;
    background-color: #973030;
    padding: 10px;
    text-align: center;
    font-family: 'Helvetica', sans-serif;
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: 3px solid #2c3e50;
    width: 70%; /* Set width to 100% to ensure full width */
    display: inline-block; /* Add this to make it inline-block */
    border-radius: 10px;
    

}


h2 {
    color: #1e3e5e;
    font-family: 'Helvetica', sans-serif;
}

body {
    font-family: 'Verdana', sans-serif;
    font-size: medium;
    margin: 0;
    padding: 0px;
    padding-bottom: 29px;
    background-color: #e1e8f0;
    border: 5px solid #080707; /* Border for the whole page */
    border-radius: 1px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form.form1 {
    width: 900px;
    margin: 0 auto;
    padding: 1.5rem;
    border: 5px solid #003366;
    background-color: #adc9ee;
    padding-left: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form {
    width: 650px;
    margin: 0 auto;
    padding: 1.5rem;
    padding-left: 40px;

}
input[type="text"]#name {
    width: 70%;

}

input[type="date"]#date {
    width: 70%;

}
select#sel{
    width: 30%
}
input[type="number"]#num {
    width: 30%}
input[type="tel"]#tel {
    width: 40%}

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
}
input[type="submit"]:hover {
    background-color: #001a29;

}
.button-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 10px;
            
        }

        /* New style for the buttons */
        .button-container form {
            flex: 1;
            margin-right: 10px;
            width: 900px;
    margin: 0 auto;
    padding: 1rem;
    border: 2px solid #003366;
    background-color: #adc9ee;
    padding-left: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

</style>
<h1>
    <img src="republic.png" alt="Republic Logo">
    REPUBLIC OF THE PHILIPPINES <br> DEPARTMENT OF TRANSPORTATION & COMMUNICATIONS <br> LAND TRANSPORTATION OFFICE
    <img src="lto.png" alt="DOTC LTO Logo">
</h1><br>
<center><h3>REPORTS</h3></center>

    <!-- Display the button container -->
    <div class="button-container">
        <!-- Form for viewing all records -->
        <form method="post" action="admin_reports.php">
            <input type="hidden" name="action" value="allRecords"><br><br><br><br>
            <input type="submit" value="View All Records">
        </form>

        <!-- Form for filtering records by date -->
        <form method="post" action="admin_reports.php">
            <input type="hidden" name="action" value="recordsByDate">
            <label for="startDate">Start Date:</label>
            <input type="date" name="startDate" id="date"><br>
            <label for="endDate">End Date:</label>
            <input type="date" name="endDate" id="date">
            <input type="submit" value="Filter by Date">
        </form>

        <!-- Form for filtering records by location -->
        <form method="post" action="admin_reports.php">
            <input type="hidden" name="action" value="recordsByLocation">
            <label for="locationType">Location Type:</label>
            <select name="locationType" required>
                <option value="default" disabled selected hidden>SELECT</option>
                <option value="province">Province</option>
                <option value="city">City</option>
            </select>
            <label for="location">Location:</label>
            <input type="text" name="location" id="name" required>
            <input type="submit" value="Filter by Location">
        </form>

        <!-- Form for filtering records by license type -->
        <form method="post" action="admin_reports.php">
            <input type="hidden" name="action" value="recordsByLicenseType">
            <label for="licenseType">License Type:</label>
            <select name="licenseType" required>
                <option value="default" disabled selected hidden>SELECT</option>
                <option value="1">1 Student Permit</option>
                <option value="2">2 Non-Professional</option>
                <option value="3">3 Professional</option>
                <option value="4">4 Conductor</option>
            </select>
            <input type="submit" value="Filter by License Type">
        </form>

        <!-- Form for viewing complete user record -->
        <form method="post" action="admin_reports.php">
            <input type="hidden" name="action" value="viewUserRecord">
            <label for="userId">User ID:</label>
            <input type="text" name="userId" id="name" required>
            <input type="submit" value="View Complete User Record">
        </form>
    </div>
<div class="table-container">
<?php
// admin_reports.php

 

$serverName = "MADELINEPHOEBE\SQLEXPRESS01";
$connectionOptions = [
    "Database" => "WEBAPP",
    "Uid" => "",
    "PWD" => ""
];
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Function to get all records
function getAllRecords() {
    global $conn; // Assuming $conn is your database connection

    // Perform SQL query to fetch all records from USER_DATA and USER_LOGIN tables
    $sql = "SELECT CAR_USER_DATA.USER_ID, FAMILY_NAME, FIRST_NAME, MIDDLE_NAME, USERNAME, DATE_OF_REGISTRATION
            FROM CAR_USER_DATA
            JOIN CAR_LOGIN ON CAR_USER_DATA.USER_ID = CAR_LOGIN.USER_ID ORDER BY USER_ID";

    $result = sqlsrv_query($conn, $sql);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $records = array();

    // Fetch records as an associative array
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $records[] = $row;
    }

    return $records;
}

// Function to get records based on a specific date or date range
function getRecordsByDate($startDate, $endDate) {
    global $conn;

    // Perform SQL query to fetch records within the specified date range
    $sql = "SELECT CAR_USER_DATA.USER_ID, FAMILY_NAME, FIRST_NAME, MIDDLE_NAME, USERNAME, DATE_OF_REGISTRATION
            FROM CAR_USER_DATA
            JOIN CAR_LOGIN ON CAR_USER_DATA.USER_ID = CAR_LOGIN.USER_ID
            WHERE DATE_OF_REGISTRATION BETWEEN ? AND ? ORDER BY USER_ID";

    $params = [$startDate, $endDate];
    $result = sqlsrv_query($conn, $sql, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $records = array();

    // Fetch records as an associative array
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $records[] = $row;
    }

    return $records;
}

// Function to get records based on province or city
function getRecordsByLocation($locationType, $location) {
    global $conn;

    // Determine the column based on the location type
    $column = ($locationType == 'province') ? 'PROVINCE' : 'CITY_MUNICIPALITY';

    // Perform SQL query to fetch records based on province or city
    $sql = "SELECT CAR_USER_DATA.USER_ID, FAMILY_NAME, FIRST_NAME, MIDDLE_NAME, USERNAME,
            STREET, CITY_MUNICIPALITY, ZIP_CODE, PROVINCE, DATE_OF_REGISTRATION
            FROM CAR_USER_DATA
            JOIN CAR_LOGIN ON CAR_USER_DATA.USER_ID = CAR_LOGIN.USER_ID
            WHERE $column = ?";

    $params = [$location];
    $result = sqlsrv_query($conn, $sql, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $records = array();

    // Fetch records as an associative array
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $records[] = $row;
    }

    return $records;
}

// Function to get records based on License Application Type
function getRecordsByLicenseType($licenseType) {
    global $conn;

    // Perform SQL query to fetch records based on License Application Type
    $sql = "SELECT CAR_USER_DATA.USER_ID, FAMILY_NAME, FIRST_NAME, MIDDLE_NAME, USERNAME,
            CAR_APPLICATION_DETAILS.LICENSE_APPLIED_FOR AS LICENSE_TYPE
            FROM CAR_USER_DATA
            JOIN CAR_LOGIN ON CAR_USER_DATA.USER_ID = CAR_LOGIN.USER_ID
            JOIN CAR_APPLICATION_DETAILS ON CAR_LOGIN.USER_ID = CAR_APPLICATION_DETAILS.USER_ID
            WHERE CAR_APPLICATION_DETAILS.LICENSE_APPLIED_FOR = ?";

    $params = [$licenseType];
    $result = sqlsrv_query($conn, $sql, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $records = array();

    // Fetch records as an associative array
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        $records[] = $row;
    }

    return $records;
}
function getUserRecordById($userId) {
    global $conn;

    // Perform SQL query to fetch complete user record
    $sql = "SELECT CAR_LOGIN.USER_ID, FAMILY_NAME, FIRST_NAME, MIDDLE_NAME, USERNAME, DATE_OF_REGISTRATION,
                   CAR_LOGIN.USERNAME, STREET, CITY_MUNICIPALITY, ZIP_CODE, PROVINCE, TELEPHONE_NUMBER, TIN, NATIONALITY,
                   GENDER, BIRTHDATE, HEIGHT, WEIGHT,
                   CAR_APPLICATION_DETAILS.APPLICATION_ID, TYPE_OF_APPLICATION, CHANGE_CLASSIFICATION, CHANGE_ADDRESS,
                   CHANGE_CIVIL_STATUS, CHANGE_NAME, CHANGE_DATE_OF_BIRTH, OTHERS, LICENSE_APPLIED_FOR, DRIVING_SKILL,
                   EDUCATIONAL_ATTAINMENT,
                   CAR_USER_BIO.BIO_ID, BLOOD_TYPE, ORGAN_DONOR, CIVIL_STATUS, HAIR, EYES, BUILT, COMPLEXION,
                   BIRTH_CITY_MUNICIPALITY, BIRTH_PROVINCE, FAMILY_NAME_OF_FATHER, FIRST_NAME_OF_FATHER, MIDDLE_NAME_OF_FATHER,
                   FAMILY_NAME_OF_MOTHER, FIRST_NAME_OF_MOTHER, MIDDLE_NAME_OF_MOTHER, FAMILY_NAME_OF_SPOUSE, FIRST_NAME_OF_SPOUSE,
                   MIDDLE_NAME_OF_SPOUSE,
                   CAR_WORK.WORK_ID, BUSINESS_NAME, BUSINESS_STREET, BUSINESS_CITY_MUNICIPALITY, BUSINESS_ZIP_CODE, BUSINESS_PROVINCE,
                   BUSINESS_TELEPHONE_NUMBER
            FROM CAR_USER_DATA
            JOIN CAR_LOGIN ON CAR_USER_DATA.USER_ID = CAR_LOGIN.USER_ID
            LEFT JOIN CAR_APPLICATION_DETAILS ON CAR_LOGIN.USER_ID = CAR_APPLICATION_DETAILS.USER_ID
            LEFT JOIN CAR_USER_BIO ON CAR_LOGIN.USER_ID= CAR_USER_BIO.USER_ID
            LEFT JOIN CAR_WORK ON CAR_LOGIN.USER_ID = CAR_WORK.USER_ID
            WHERE CAR_LOGIN.USER_ID = ?";

    $params = [$userId];
    $result = sqlsrv_query($conn, $sql, $params);

    if ($result === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $record = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    return $record;
}
// Check if any specific action is requested

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'allRecords':
            $records = getAllRecords();
            echo '<h3>All Records' . '</h3>';
            echo'<form class="form1">';
            // Display records in a table

            echo '<table border="1">';
            echo '<tr><th>User ID</th><th>Family Name</th><th>First Name</th><th>Middle Name</th>';
            echo '<th>Email</th><th>Date of Registration</th></tr>';

            foreach ($records as $record) {
                echo '<tr>';
                echo '<td>' . $record['USER_ID'] . '</td>';
                echo '<td>' . $record['FAMILY_NAME'] . '</td>';
                echo '<td>' . $record['FIRST_NAME'] . '</td>';
                echo '<td>' . $record['MIDDLE_NAME'] . '</td>';
                echo '<td>' . $record['USERNAME'] . '</td>';
                echo '<td>' . $record['DATE_OF_REGISTRATION']->format('Y-m-d') . '</td>'; // Adjust the date format accordingly
                echo '</tr>';
            }

            echo '</table>';
            break;
        case 'recordsByDate':
            if (isset($_POST['startDate']) && isset($_POST['endDate'])) {
                $startDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];
                $records = getRecordsByDate($startDate, $endDate);
               
                // Display records in a table
                echo '<h3>User Record per Date' . '</h3>';
                echo '<h2>Date: ' . $startDate .' to ' .$endDate.'</h2>';
                echo'<form class="form1">';
                echo '<table border="1">';
                echo '<tr><th>User ID</th><th>Family Name</th><th>First Name</th><th>Middle Name</th>';
                echo '<th>Email</th><th>Date of Registration</th></tr>';

                foreach ($records as $record) {
                    echo '<tr>';
                    echo '<td>' . $record['USER_ID'] . '</td>';
                    echo '<td>' . $record['FAMILY_NAME'] . '</td>';
                    echo '<td>' . $record['FIRST_NAME'] . '</td>';
                    echo '<td>' . $record['MIDDLE_NAME'] . '</td>';
                    echo '<td>' . $record['USERNAME'] . '</td>';
                    echo '<td>' . $record['DATE_OF_REGISTRATION']->format('Y-m-d') . '</td>'; // Adjust the date format accordingly
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo 'Start date and end date are required for filtering.';
            }
            break;
            case 'recordsByLocation':
                if (isset($_POST['locationType']) && isset($_POST['location'])) {
                    $locationType = $_POST['locationType'];
                    $location = $_POST['location'];
                    $records = getRecordsByLocation($locationType, $location);
                    
                    // Display records in a smaller table
                    echo '<h3>User Record per ' . $locationType . '</h3>';
                    echo '<h2>Location: ' . $location .'</h2>';
                    echo'<form class="form1">';
                    echo '<table class="small-table" border="1">';
                    echo '<tr><th>User ID</th><th>Family Name</th><th>First Name</th><th>Middle Name</th>';
                    echo '<th>Email</th><th>Street</th><th>City/Municipality</th><th>Zip Code</th>';
                    echo '<th>Province</th><th>Date of Registration</th></tr>';
            
                    foreach ($records as $record) {
                        echo '<tr>';
                        echo '<td>' . $record['USER_ID'] . '</td>';
                        echo '<td>' . $record['FAMILY_NAME'] . '</td>';
                        echo '<td>' . $record['FIRST_NAME'] . '</td>';
                        echo '<td>' . $record['MIDDLE_NAME'] . '</td>';
                        echo '<td>' . $record['USERNAME'] . '</td>';
                        echo '<td>' . $record['STREET'] . '</td>';
                        echo '<td>' . $record['CITY_MUNICIPALITY'] . '</td>';
                        echo '<td>' . $record['ZIP_CODE'] . '</td>';
                        echo '<td>' . $record['PROVINCE'] . '</td>';
                        echo '<td>' . $record['DATE_OF_REGISTRATION']->format('Y-m-d') . '</td>'; // Adjust the date format accordingly
                        echo '</tr>';
                    }
            
                    echo '</table>';
                } else {
                    echo 'Location type and location are required for filtering.';
                }
                break;
            
        case 'recordsByLicenseType':
            if (isset($_POST['licenseType'])) {
                $licenseType = $_POST['licenseType'];
                $records = getRecordsByLicenseType($licenseType);
                
                // Display records in a table
                echo '<h3>User Record per License Application Type' . '</h3>';
                $licenseTypeName = '';

// Check if a license type is selected
if (isset($_POST['licenseType'])) {
    $licenseType = $_POST['licenseType'];

    // Set $licenseTypeName based on the selected license type
    switch ($licenseType) {
        case 1:
            $licenseTypeName = 'Student Permit';
            break;
        case 2:
            $licenseTypeName = 'Non-Professional';
            break;
        case 3:
            $licenseTypeName = 'Professional';
            break;
        case 4:
            $licenseTypeName = 'Conductor';
            break;
        default:
            $licenseTypeName = 'Unknown';
            break;
    }
}

// Display the selected license type in h2
echo '<h2>License Application Type: ' . $licenseTypeName . '</h2>';

                echo'<form class="form1">';
                echo '<table border="1">';
                echo '<tr><th>User ID</th><th>Family Name</th><th>First Name</th><th>Middle Name</th>';
                echo '<th>Email</th><th>License Type</th></tr>';

                foreach ($records as $record) {
                    echo '<tr>';
                    echo '<td>' . $record['USER_ID'] . '</td>';
                    echo '<td>' . $record['FAMILY_NAME'] . '</td>';
                    echo '<td>' . $record['FIRST_NAME'] . '</td>';
                    echo '<td>' . $record['MIDDLE_NAME'] . '</td>';
                    echo '<td>' . $record['USERNAME'] . '</td>';
            
                echo '<td>' . $licenseTypeName . '</td>';
                echo '</tr>';
            }


                echo '</table>';
            } else {
                echo 'License type is required for filtering.';
            }
            break;
        // Add cases for other actions if needed
        case 'viewUserRecord':
            // Check if the USERID is set in the POST data
            if (isset($_POST['userId'])) {
                $userId = $_POST['userId'];
                $userRecord = getUserRecordById($userId);
                

// Display the complete user record in a table
echo '<h3>Complete User Record for USERID: ' . $userId . '</h3>';
echo'<form class="form1">';
echo '<table border="1">';
echo '<tr><th>Field</th><th>Value</th></tr>';

foreach ($userRecord as $field => $value) {
    echo '<tr>';
    echo '<td>' . $field . '</td>';
    
    // Check if the value is a DateTime object
    if ($value instanceof DateTime) {
        echo '<td>' . $value->format('Y-m-d') . '</td>'; // Adjust the date format accordingly
    } else {
        echo '<td>' . $value . '</td>';
    }
    
    echo '</tr>';
}

echo '</table>';

            } else {
                echo 'USERID is required for viewing the complete user record.';
            }
            break;
        
        default:
            echo 'Invalid action';
            break;
    }
} else {
}

// Close the database connection
sqlsrv_close($conn);
?>
</div>