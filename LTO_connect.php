<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTO Registration Form</title>
    <style>
         .container {
        display: flex;
        justify-content: center;
        align-items: center;

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
    padding-bottom: 302px;
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
</head>
<body>
<h1>
    <img src="republic.png" alt="Republic Logo">
    REPUBLIC OF THE PHILIPPINES <br> DEPARTMENT OF TRANSPORTATION & COMMUNICATIONS <br> LAND TRANSPORTATION OFFICE
    <img src="lto.png" alt="DOTC LTO Logo">
</h1><br>
<center><h2>APPLICATION FOR DRIVER'S LICENSE</h2></center><br>
<div class="container">
<?php
$submit="";

$familyname="";
$firstname="";
$middlename="";
$NoStreet="";
$zipcode="";
$telno="";
$tin="";
$gender="";
$birthdate="";
$height="";
$weight="";
$toa="";
$tla="";
$tla="";
$dsa="";
$ea="";
$organDonor="";
$civilStatus="";
$hair=""; 
$eyes=""; 
$built=""; 
$complexion="";
$familyNameOfFather="";
$firstNameOfFather="";
$middleNameOfFather="";
$familyNameOfMother="";
$firstNameOfMother="";
$middleNameOfMother="";
$familyNameOfSpouse="";
$firstNameOfSpouse="";
$middleNameOfSpouse="";
$businessName="";
$businessStreet="";
$businessCity="";
$businessZip="";
$businessProvince="";
$businessTelNo="";

$familynameErr="";
$firstnameErr="";
$NoStreetErr="";
$zipcodeErr="";
$telnoErr="";
$genderErr="";
$birthdateErr="";
$heightErr="";
$weightErr="";
$toaErr="";
$tlaErr="";
$dsaErr="";
$dsaSchoolErr="";
$eaErr="";
$organDonorErr="";
$civilStatusErr="";
$hairErr=""; 
$hairOthersErr="";
$eyesOthersErr="";  
$eyesErr=""; 
$builtErr=""; 
$complexionErr="";
$familyNameOfFatherErr="";
$firstNameOfFatherErr="";
$familyNameOfMotherErr="";
$firstNameOfMotherErr="";

$familyname=$_POST['familyname']; 
$firstname=$_POST['firstname']; 
$middlename=$_POST['middlename']; 
$NoStreet=$_POST['NoStreet']; 
$citymunicipality=$_POST['citymunicipality']; 
$zipcode=$_POST['zipcode'];
$province=$_POST['province']; 
$telno=$_POST['telno']; 
$tin=$_POST['tin']; 
$nationality=$_POST['nationality']; 
$gender = isset($_POST['gender']) ? $_POST['gender'] : ''; 
$birthdate=$_POST['birthdate'];
$height=$_POST['height'];
$weight=$_POST['weight'];

$toa = isset($_POST['TOA']) ? $_POST['TOA'] : '';
$Change_Classification = isset($_POST['Change_Classification']) ? $_POST['Change_Classification'] : '';
$Change_Address = isset($_POST['Change_Address']) ? $_POST['Change_Address'] : '';
$Change_Civil_Status = isset($_POST['Change_Civil_Status']) ? $_POST['Change_Civil_Status'] : '';
$Change_Name = isset($_POST['Change_Name']) ? $_POST['Change_Name'] : '';
$Change_Date_of_Birth = isset($_POST['Change_Date_of_Birth']) ? $_POST['Change_Date_of_Birth'] : '';
$Others = isset($_POST['Others']) ? $_POST['Others'] : '';
$tla = isset($_POST['TLA']) ? $_POST['TLA'] : '';
$dsa = isset($_POST['DSA']) ? $_POST['DSA'] : '';
$ea = isset($_POST['EA']) ? $_POST['EA'] : '';

$bloodType = $_POST['blood_type']; 
$organDonor = isset($_POST['organ_donor']) ? $_POST['organ_donor'] : '';
$civilStatus = isset($_POST['civil_status']) ? $_POST['civil_status'] : '';
$hair = isset($_POST['hair']) ? $_POST['hair'] : '';
$eyes = isset($_POST['eyes']) ? $_POST['eyes'] : '';
$built = isset($_POST['built']) ? $_POST['built'] : '';
$complexion = isset($_POST['complexion']) ? $_POST['complexion'] : '';
$birthCityMunicipality = $_POST['birth_city_municipality'];
$birthProvince = $_POST['birth_province'];
$familyNameOfFather = isset($_POST['family_name_of_father']) ? $_POST['family_name_of_father'] : '';
$firstNameOfFather = $_POST['first_name_of_father'];
$middleNameOfFather = $_POST['middle_name_of_father']; 
$familyNameOfMother = $_POST['family_name_of_mother'];
$firstNameOfMother = $_POST['first_name_of_mother'];
$middleNameOfMother = $_POST['middle_name_of_mother']; 
$familyNameOfSpouse = $_POST['family_name_of_spouse']; 
$firstNameOfSpouse = $_POST['first_name_of_spouse']; 
$middleNameOfSpouse = $_POST['middle_name_of_spouse']; 

$businessName = $_POST['business_name'];
$businessStreet = $_POST['business_street']; 
$businessCity = $_POST['business_city_municipality']; 
$businessZip = $_POST['business_zip_code']; 
$businessProvince = $_POST['business_province']; 
$businessTelNo = $_POST['business_telephone_number']; 

//familyname
if (empty($_POST['familyname'])){
    $familynameErr = "family name is required";
    echo 'Family name is required <br />';
} else {
    $familynameErr="";
}
if(isset($_POST['familyname'])){
    $familyname = $_POST['familyname'];
}else{
    $familyname = "Cruz";
}

//firstname
if (empty($_POST['firstname'])){
    $firstnameErr = "first name is required";
    echo 'First name is required <br />';
} else {
    $firstnameErr="";
}
if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
}else{
    $firstname = "Juan";
}

//check if middlename is set
if(isset($_POST['middlename'])){
    $middlename = $_POST['middlename'];
}else{
    $middlename = "Santos";
}

//check if middlename is empty
if (empty($_POST['middlename'])){
    $middlename = "Santos";
} else {
    $middlename = $_POST['middlename'];
}

//NoStreet
if (empty($_POST['NoStreet'])){
    $NoStreetErr = "Street is required";
    echo 'Street is required <br />';
} else {
    $NoStreetErr="";
}
if(isset($_POST['NoStreet'])){
    $NoStreet = $_POST['NoStreet'];
}else{
    $NoStreet = "Paseo de Roxas Street";
}

//zipcode
if (empty($_POST['zipcode'])){
    $zipcodeErr = "Zip Code is required";
    echo 'Zip Code is required <br />';
} else {
    $zipcodeErr="";
}
if(isset($_POST['zipcode'])){
    $zipcode = $_POST['zipcode'];
}else{
    $zipcode = "4114";
}

//telno
if (empty($_POST['telno'])){
    $telnoErr = "Number is required";
    echo 'Number is required <br />';
} else {
    $telnoErr="";
}
if(isset($_POST['telno'])){
    $telno = $_POST['telno'];
}else{
    $telno = "9999999999";
}

//not required
//check if tin is set
if(isset($_POST['tin'])){
    $tin = $_POST['tin'];
}else{
    $tin = "999-999-999-99999";
}

//check if middlename is empty
if (empty($_POST['tin'])){
    $tin = "999-999-999-99999";
} else {
    $tin = $_POST['tin'];
}

//gender
if (empty($_POST['gender'])){
    $genderErr = "Gender is required";
    echo 'Gender is required <br />';
} else {
    $genderErr="";
}
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}else{
    $gender = "undisclosed";
}

//birthdate
if (empty($_POST['birthdate'])){
    $birthdateErr = "Birth Date is required";
    echo 'Birth Date is required <br />';
} else {
    $birthdateErr="";
}
if(isset($_POST['birthdate'])){
    $birthdate = $_POST['birthdate'];
}else{
    $birthdate = "1999-01-01";
}

//height
if (empty($_POST['height'])){
    $heightErr = "Height is required";
    echo 'Height is required <br />';
} else {
    $heightErr="";
}
if(isset($_POST['height'])){
    $height = $_POST['height'];
}else{
    $height = "999";
}

//weight
if (empty($_POST['weight'])){
    $weightErr = "Weight is required";
    echo 'Weight is required <br />';
} else {
    $weightErr="";
}
if(isset($_POST['weight'])){
    $weight = $_POST['weight'];
}else{
    $weight = "99";
}

//toa
if (empty($_POST['TOA'])){
    $toaErr = "Type of Application is required";
    echo 'Type of Application is required <br />';
} else {
    $toaErr="";
}
if(isset($_POST['TOA'])){
    $toa = $_POST['TOA'];
}else{
    $toa = "1";
}

//tla
if (empty($_POST['TLA'])){
    $tlaErr = "Type of License Applied for is required";
    echo 'Type of License Applied for is required <br />';
} else {
    $tlaErr="";
}
if(isset($_POST['TLA'])){
    $tla = $_POST['TLA'];
}else{
    $tla = "1";
}

//dsa
if (empty($_POST['DSA'])){
    $dsaErr = "Driving Skill Acquired or Will Be Acquired Thru is required";
    echo 'Driving Skill Acquired or Will Be Acquired Thru is required <br />';
} else {
    $dsaErr="";
}
if(isset($_POST['DSA'])){
    if ($_POST['DSA'] === '1') {
        $dsa = $_POST['Driving_Others'];
        if (empty($_POST['Driving_Others'])) {
            $dsaSchoolErr = "Driving School is required";
            echo 'Please specify the Driving School <br />';
        } else {
            $dsaSchoolErr="";
        }
    }else {
        $dsa = $_POST['DSA'];
    }
}else{
    $dsa = "1";
}

//ea
if (empty($_POST['EA'])){
    $eaErr = "Educational Attainment is required";
    echo 'Educational Attainment is required <br />';
} else {
    $eaErr="";
}
if(isset($_POST['EA'])){
    $ea = $_POST['EA'];
}else{
    $ea = "1";
}

//organdonor
if (empty($_POST['organ_donor'])){
    $organDonorErr = "Organ Donor is required";
    echo 'Organ Donor is required <br />';
} else {
    $organDonorErr="";
}
if(isset($_POST['organ_donor'])){
    $organDonor = $_POST['organ_donor'];
}else{
    $organDonor = "No";
}

//civilStatus
if (empty($_POST['civil_status'])){
    $civilStatusErr = "Civil Status is required";
    echo 'Civil Status is required <br />';
} else {
    $civilStatusErr="";
}
if(isset($_POST['civil_status'])){
    $civilStatus = $_POST['civil_status'];
}else{
    $civilStatus = "Single";
}

//hair
if (empty($_POST['hair'])){
    $hairErr = "Hair is required";
    echo 'Hair is required <br />';
} else {
    $hairErr="";
}
if(isset($_POST['hair'])){
    if ($_POST['hair'] === 'Others') {
        $hair = $_POST['Hair_Others'];
        if (empty($_POST['Hair_Others'])) {
            $hairOthersErr = "Hair color is required";
            echo 'Please specify the hair color for "Others" <br />';
        } else {
            $hairOthersErr="";
        }
    }else {
        $hair = $_POST['hair'];
    }
}else{
    $hair = "Black";
}

//eyes
if (empty($_POST['eyes'])){
    $eyesErr = "Eyes is required";
    echo 'Eyes is required <br />';
} else {
    $eyesErr="";
}
if(isset($_POST['eyes'])){
    if ($_POST['eyes'] === 'Others') {
        $eyes = $_POST['Eyes_Others'];
        if (empty($_POST['Eyes_Others'])) {
            $eyesOthersErr = "Eye color is required";
            echo 'Please specify the eye color for "Others" <br />';
        } else {
            $eyesOthersErr="";  
        }
    } else {
        $eyes = $_POST['eyes'];
    }
}else{
    $eyes = "Black";
}

//built
if (empty($_POST['built'])){
    $builtErr = "Built is required";
    echo 'Built is required <br />';
} else {
    $builtErr="";
}
if(isset($_POST['built'])){
    $built = $_POST['built'];
}else{
    $built = "Light";
}

//complexion
if (empty($_POST['complexion'])){
    $complexionErr = "Complexion is required";
    echo 'Complexion is required <br />';
} else {
    $complexionErr="";
}
if(isset($_POST['complexion'])){
    $complexion = $_POST['complexion'];
}else{
    $complexion = "Light";
}

//familynameFather
if (empty($_POST['family_name_of_father'])){
    $familyNameOfFatherErr = "Family Name of Father is required";
    echo 'Family Name of Father is required <br />';
} else {
    $familyNameOfFatherErr="";
}
if(isset($_POST['family_name_of_father'])){
    $familyNameOfFather = $_POST['family_name_of_father'];
}else{
    $familyNameOfFather = "Cruz";
}

//firstnameFather
if (empty($_POST['first_name_of_father'])){
    $firstNameOfFatherErr = "First Name of Father is required";
    echo 'First Name of Father is required <br />';
} else {
    $firstNameOfFatherErr="";
}
if(isset($_POST['first_name_of_father'])){
    $firstNameOfFather = $_POST['first_name_of_father'];
}else{
    $firstNameOfFather = "Juan";
}

//not required 
//check if middlenameFather is set
if(isset($_POST['middle_name_of_father'])){
    $middleNameOfFather = $_POST['middle_name_of_father'];
}else{
    $middleNameOfFather = "Santos";
}

//check if middlename is empty
if (empty($_POST['middle_name_of_father'])){
    $middleNameOfFather = "Santos";
} else {
    $middleNameOfFather = $_POST['middle_name_of_father'];
}

//familynameMother
if (empty($_POST['family_name_of_mother'])){
    $familyNameOfMotherErr = "Family Name of Mother is required";
    echo 'Family Name of Mother is required <br />';
} else {
    $familyNameOfMotherErr="";
}
if(isset($_POST['family_name_of_mother'])){
    $familyNameOfMother = $_POST['family_name_of_mother'];
}else{
    $familyNameOfMother = "Cruz";
}

//firstnameMother
if (empty($_POST['first_name_of_mother'])){
    $firstNameOfMotherErr = "First Name of Mother is required";
    echo 'First Name of Mother is required <br />';
} else {
    $firstNameOfMotherErr="";
}
if(isset($_POST['first_name_of_mother'])){
    $firstNameOfMother = $_POST['first_name_of_mother'];
}else{
    $firstNameOfMother = "Marie";
}

//not required 
//check if middlenamemother is set
if(isset($_POST['middle_name_of_mother'])){
    $middleNameOfMother = $_POST['middle_name_of_mother'];
}else{
    $middleNameOfMother = "Santos";
}

//check if middlename is empty
if (empty($_POST['middle_name_of_mother'])){
    $middleNameOfMother = "Santos";
} else {
    $middleNameOfMother = $_POST['middle_name_of_mother'];
}

//not required 
//check if familynamespouse is set
if(isset($_POST['family_name_of_spouse'])){
    $familyNameOfSpouse = $_POST['family_name_of_spouse'];
}else{
    $familyNameOfSpouse = "Smith";
}

//check if familynamespouse is empty
if (empty($_POST['family_name_of_spouse'])){
    $familyNameOfSpouse = "Smith";
} else {
    $familyNameOfSpouse = $_POST['family_name_of_spouse'];
}

//not required 
//check if firstnamespouse is set
if(isset($_POST['first_name_of_spouse'])){
    $firstNameOfSpouse = $_POST['first_name_of_spouse'];
}else{
    $firstNameOfSpouse = "Jane";
}

//check if firstnamespouse is empty
if (empty($_POST['first_name_of_spouse'])){
    $firstNameOfSpouse = "Jane";
} else {
    $firstNameOfSpouse = $_POST['first_name_of_spouse'];
}

//not required 
//check if middlenamespouse is set
if(isset($_POST['middle_name_of_spouse'])){
    $middleNameOfSpouse = $_POST['middle_name_of_spouse'];
}else{
    $middleNameOfSpouse = "Aguinaldo";
}

//check if middlenamespouse is empty
if (empty($_POST['middle_name_of_spouse'])){
    $middleNameOfSpouse = "Aguinaldo";
} else {
    $middleNameOfSpouse = $_POST['middle_name_of_spouse'];
}

//not required 
//check if businessName is set
if(isset($_POST['business_name'])){
    $businessName = $_POST['business_name'];
}else{
    $businessName = "MAC";
}

//check if businessName is empty
if (empty($_POST['business_name'])){
    $businessName = "MAC";
} else {
    $businessName = $_POST['business_name'];
}

//not required 
//check if businessStreet is set
if(isset($_POST['business_street'])){
    $businessStreet = $_POST['business_street'];
}else{
    $businessStreet = "Paseo de Roxas Street";
}

//check if businessStreet is empty
if (empty($_POST['business_street'])){
    $businessStreet = "Paseo de Roxas Street";
} else {
    $businessStreet = $_POST['business_street'];
}

//not required 
//check if businessCity is set
if(isset($_POST['business_city_municipality'])){
    $businessCity = $_POST['business_city_municipality'];
}else{
    $businessCity = "Agoncillo";
}

//check if businessCity is empty
if (empty($_POST['business_city_municipality'])){
    $businessCity = "Agoncillo";
} else {
    $businessCity = $_POST['business_city_municipality'];
}

//not required 
//check if business_zip_code is set
if(isset($_POST['business_zip_code'])){
    $businessZip = $_POST['business_zip_code'];
}else{
    $businessZip = "4114";
}

//check if business_zip_code is empty
if (empty($_POST['business_zip_code'])){
    $businessZip = "4114";
} else {
    $businessZip = $_POST['business_zip_code'];
}

//not required 
//check if businessProvince is set
if(isset($_POST['business_province'])){
    $businessProvince = $_POST['business_province'];
}else{
    $businessProvince = "Batangas";
}

//check if businessProvince is empty
if (empty($_POST['business_province'])){
    $businessProvince = "Batangas";
} else {
    $businessProvince = $_POST['business_province'];
}

//not required 
//check if businessTelNo is set
if(isset($_POST['business_telephone_number'])){
    $businessTelNo = $_POST['business_telephone_number'];
}else{
    $businessTelNo = "9999999999";
}

//check if businessTelNo is empty
if (empty($_POST['business_telephone_number'])){
    $businessTelNo = "9999999999";
} else {
    $businessTelNo = $_POST['business_telephone_number'];
}

//revision of records
//Change_Address
if(isset($_POST['Change_Address'])){
    $Change_Address = 1;
}else{
    $Change_Address = 0;
}

//check if Change_Address is empty
if (empty($_POST['Change_Address'])){
    $Change_Address = 0;
} else {
    $Change_Address = 1;
}

//Change_Civil_Status
if(isset($_POST['Change_Civil_Status'])){
    $Change_Civil_Status = 1;
}else{
    $Change_Civil_Status = 0;
}

//check if Change_Civil_Status is empty
if (empty($_POST['Change_Civil_Status'])){
    $Change_Civil_Status = 0;
} else {
    $Change_Civil_Status = 1;
}

//Change_Name
if(isset($_POST['Change_Name'])){
    $Change_Name = 1;
}else{
    $Change_Name = 0;
}

//check if Change_Name is empty
if (empty($_POST['Change_Name'])){
    $Change_Name = 0;
} else {
    $Change_Name = 1;
}

//Change_Date_of_Birth
if(isset($_POST['Change_Date_of_Birth'])){
    $Change_Date_of_Birth = 1;
}else{
    $Change_Date_of_Birth = 0;
}

//check if Change_Date_of_Birth is empty
if (empty($_POST['Change_Date_of_Birth'])){
    $Change_Date_of_Birth = 0;
} else {
    $Change_Date_of_Birth = 1;
}

//Others
if(isset($_POST['Others'])){
    $Others = 1;
}else{
    $Others = 0;
}

//check if Others is empty
if (empty($_POST['Others'])){
    $Others = 0;
} else {
    $Others = 1;
}
$userId = $_GET['userId']; // Get user ID from the URL parameter

if(isset($_POST['submit'])){
    if ($familynameErr==""&&$firstnameErr=="" && $NoStreetErr=="" && $zipcodeErr=="" && $telnoErr=="" && $genderErr == "" && $birthdateErr == "" && $heightErr=="" && $weightErr=="" && $toaErr=="" && $tlaErr=="" && $dsaErr=="" && $dsaSchoolErr=="" && $eaErr=="" && $organDonorErr=="" && $civilStatusErr=="" && $hairErr=="" && $hairOthersErr=="" && $eyesErr=="" && $eyesOthersErr=="" && $builtErr=="" && $complexionErr=="" && $familyNameOfFatherErr=="" &&$firstNameOfFatherErr=="" && $familyNameOfMotherErr=="" && $firstNameOfMotherErr==""){  
$serverName="MADELINEPHOEBE\SQLEXPRESS01";
$connectionOptions=[
"Database"=>"WEBAPP",
"Uid"=>"",
"PWD"=>""
];
$conn=sqlsrv_connect($serverName, $connectionOptions);
if($conn==false){
    die(print_r(sqlsrv_errors(),true));}
else {
}

$sql = "INSERT INTO CAR_USER_DATA (USER_ID, FAMILY_NAME, FIRST_NAME, MIDDLE_NAME, STREET, CITY_MUNICIPALITY, ZIP_CODE, PROVINCE, TELEPHONE_NUMBER, TIN, NATIONALITY, GENDER, BIRTHDATE, HEIGHT, WEIGHT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$params = array($userId, $familyname, $firstname, $middlename, $NoStreet, $citymunicipality, $zipcode, $province, $telno, $tin, $nationality, $gender, $birthdate, $height, $weight);

$results = sqlsrv_query($conn, $sql, $params);

if ($results === false) {
    echo 'Error in USER_DATA: ' . print_r(sqlsrv_errors(), true);
} else {
    // Fetch the result array from the result set
    $row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC);

    if ($row) {
        $userId = $row['USER_ID'];  // Update with the actual column name
    }
}

// After executing the insert query, retrieve the last inserted ID
$sql1 = "INSERT INTO CAR_APPLICATION_DETAILS (USER_ID, TYPE_OF_APPLICATION, CHANGE_CLASSIFICATION, CHANGE_ADDRESS, CHANGE_CIVIL_STATUS, CHANGE_NAME, CHANGE_DATE_OF_BIRTH, OTHERS, LICENSE_APPLIED_FOR, DRIVING_SKILL, EDUCATIONAL_ATTAINMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$params1 = array($userId, $toa, $Change_Classification, $Change_Address, $Change_Civil_Status, $Change_Name, $Change_Date_of_Birth, $Others, $tla, $dsa, $ea);

$results1 = sqlsrv_query($conn, $sql1, $params1);

// Retrieve the last inserted ID
$applicationId = sqlsrv_fetch_array(sqlsrv_query($conn, "SELECT SCOPE_IDENTITY() AS ApplicationId"), SQLSRV_FETCH_ASSOC)['ApplicationId'];


if ($results1 === false) {
    echo 'Error in APPLICATION_DETAILS: ' . print_r(sqlsrv_errors(), true);
}else {
    $row = sqlsrv_fetch_array($results1, SQLSRV_FETCH_ASSOC);
    if ($row) {
        $userId = $row['USER_ID'];  // Update with the actual column name
    }

}

$sql2 = "INSERT INTO CAR_USER_BIO (USER_ID, APPLICATION_ID, BLOOD_TYPE, ORGAN_DONOR, CIVIL_STATUS, HAIR, EYES, BUILT, COMPLEXION, BIRTH_CITY_MUNICIPALITY, BIRTH_PROVINCE, FAMILY_NAME_OF_FATHER, FIRST_NAME_OF_FATHER, MIDDLE_NAME_OF_FATHER, FAMILY_NAME_OF_MOTHER, FIRST_NAME_OF_MOTHER, MIDDLE_NAME_OF_MOTHER, FAMILY_NAME_OF_SPOUSE, FIRST_NAME_OF_SPOUSE, MIDDLE_NAME_OF_SPOUSE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$params2 = array($userId, $applicationId, $bloodType, $organDonor, $civilStatus, $hair, $eyes, $built, $complexion, $birthCityMunicipality, $birthProvince, $familyNameOfFather, $firstNameOfFather, $middleNameOfFather, $familyNameOfMother, $firstNameOfMother, $middleNameOfMother, $familyNameOfSpouse, $firstNameOfSpouse, $middleNameOfSpouse);
$results2 = sqlsrv_query($conn, $sql2, $params2);

if ($results2 === false) {
    echo 'Error in USER_BIO: ' . print_r(sqlsrv_errors(), true);
} else {
    $row = sqlsrv_fetch_array($results2, SQLSRV_FETCH_ASSOC);
    if ($row && isset($row['ApplicationId'])) {
        $applicationId = $row['ApplicationId'];
        $userId = $row['USER_ID'];  // Update with the actual column name
    }
}

$sql3 = "INSERT INTO CAR_WORK (USER_ID, BUSINESS_NAME, BUSINESS_STREET, BUSINESS_CITY_MUNICIPALITY, BUSINESS_ZIP_CODE, BUSINESS_PROVINCE, BUSINESS_TELEPHONE_NUMBER) VALUES (?, ?, ?, ?, ?, ?, ?)";
$params3 = array($userId, $businessName, $businessStreet, $businessCity, $businessZip, $businessProvince, $businessTelNo);
$results3 = sqlsrv_query($conn, $sql3, $params3);

if ($results3 === false) {
    echo 'Error in WORK: ' . print_r(sqlsrv_errors(), true);
}else {
    $row = sqlsrv_fetch_array($results3, SQLSRV_FETCH_ASSOC);
    if ($row) {
        $userId = $row['USER_ID'];  // Update with the actual column name
    }
if ($results1 && $results2 && $results3) {
    // Retrieve the last inserted USER_ID
    $row = sqlsrv_fetch_array($results1, SQLSRV_FETCH_ASSOC);
    if (isset($row['UserId'])) {
        $userId = $row['UserId'];
    }
}    
}

    echo '<script>alert("Registration Successful");</script>';
    echo '<form action="newltoreport.php" method="get">';
    // Pass the retrieved USER_ID as a parameter to ltoreport.php
    echo '<input type="hidden" name="userId" value="' . $userId . '">';
    echo '<input type="submit" value="REVIEW MY PERSONAL INFORMATION">';
    echo '</form>';
    exit();
} else {
    echo 'Error';
}

if (!$results3) {
echo 'Error in WORK: ' . print_r(sqlsrv_errors(), true);
}
}


?>
</div>
