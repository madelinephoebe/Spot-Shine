<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTO Registration Form</title>
    <link rel="stylesheet" type="text/css" href="ltostyles.css">
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
    
}  </style>
<?php $userId = $_GET['userId']; // Get user ID from the URL parameter?>

  <h1>
    <img src="republic.png" alt="Republic Logo">
    REPUBLIC OF THE PHILIPPINES <br> DEPARTMENT OF TRANSPORTATION & COMMUNICATIONS <br> LAND TRANSPORTATION OFFICE
    <img src="lto.png" alt="DOTC LTO Logo">
</h1><BR>
<center><h2>APPLICATION FOR DRIVER'S LICENSE</h2></center>

    <form id="application form" action="LTO_connect.php?userId=<?php echo $userId; ?>" method="post">
        <p><b>NAME</b></p>
        <label for="family name">Family Name</label><br><input type="text" name="familyname" id="name"><br>
        <label for="first name">First Name</label><br><input type="text" name="firstname" id="name"><br>
        <label for="middle name">Middle Name</label><br><input type="text" name="middlename" id="name"><br>
      
        <p><b>PRESENT ADDRESS</b></p>
        <label for="No., Street">No., Street</label><input type="text" name="NoStreet"><br>
        <label for="city/municipality">City/Municipality</label><br><select name="citymunicipality" id="sel">
            <!--Batangas-->
            <option value="Agoncillo">Agoncillo</option>
            <option value="Alitagtag">Alitagtag</option>
            <option value="Balayan">Balayan</option>
            <option value="Balete">Balete</option>
            <option value="Batangas City">Batangas City</option>
            <option value="Bauan">Bauan</option>
            <option value="Calaca">Calaca</option>
            <option value="Calatagan">Calatagan</option>
            <option value="Cuenca">Cuenca</option>
            <option value="Ibaan">Ibaan</option>
            <option value="Laurel">Laurel</option>
            <option value="Lemery">Lemery</option>
            <option value="Lian">Lian</option>
            <option value="Lipa">Lipa</option>
            <option value="Lobo">Lobo</option>
            <option value="Mabini">Mabini</option>
            <option value="Malvar">Malvar</option>
            <option value="Mataasnakahoy">Mataasnakahoy</option>
            <option value="Nasugbu">Nasugbu</option>
            <option value="Padre Garcia">Padre Garcia</option>
            <option value="Rosario">Rosario</option>
            <option value="San Jose">San Jose</option>
            <option value="San Juan">San Juan</option>
            <option value="San Luis">San Luis</option>
            <option value="San Nicolas">San Nicolas</option>
            <option value="San Pascual">San Pascual</option>
            <option value="Santa Teresita">Santa Teresita</option>
            <option value="Santo Tomas">Santo Tomas</option>
            <option value="Taal">Taal</option>
            <option value="Talisay">Talisay</option>
            <option value="Tanauan">Tanauan</option>
            <option value="Taysan">Taysan</option>
            <option value="Tingloy">Tingloy</option>
            <option value="Tuy">Tuy</option>
            <!--Cavite--> 
            <option value="Alfonso">Alfonso</option>
            <option value="Amadeo">Amadeo</option>
            <option value="Bacoor">Bacoor</option>
            <option value="Carmona">Carmona</option>
            <option value="Cavite City">Cavite City</option>
            <option value="Dasmariñas">Dasmariñas</option>
            <option value="General Emilio Aguinaldo">General Emilio Aguinaldo</option>
            <option value="General Mariano Alvarez">General Mariano Alvarez</option>
            <option value="General Trias">General Trias</option>
            <option value="Imus">Imus</option>
            <option value="Indang">Indang</option>
            <option value="Kawit">Kawit</option>
            <option value="Magallanes">Magallanes</option>
            <option value="Maragondon">Maragondon</option>
            <option value="Mendez">Mendez</option>
            <option value="Naic">Naic</option>
            <option value="Noveleta">Noveleta</option>
            <option value="Rosario">Rosario</option>
            <option value="Silang">Silang</option>
            <option value="Tagaytay">Tagaytay</option>
            <option value="Tanza">Tanza</option>
            <option value="Ternate">Ternate</option>
            <option value="Trece Martires">Trece Martires</option>
            <!--Laguna--> 
            <option value="Alaminos">Alaminos</option>
            <option value="Bay">Bay</option>
            <option value="Biñan">Biñan</option>
            <option value="Cabuyao">Cabuyao</option>
            <option value="Calamba">Calamba</option>
            <option value="Calauan">Calauan</option>
            <option value="Cavinti">Cavinti</option>
            <option value="Famy">Famy</option>
            <option value="Kalayaan">Kalayaan</option>
            <option value="Liliw">Liliw</option>
            <option value="Los Baños">Los Baños</option>
            <option value="Luisiana">Luisiana</option>
            <option value="Lumban">Lumban</option>
            <option value="Mabitac">Mabitac</option>
            <option value="Magdalena">Magdalena</option>
            <option value="Majayjay">Majayjay</option>
            <option value="Nagcarlan">Nagcarlan</option>
            <option value="Paete">Paete</option>
            <option value="Pagsanjan">Pagsanjan</option>
            <option value="Pakil">Pakil</option>
            <option value="Pangil">Pangil</option>
            <option value="Pila">Pila</option>
            <option value="Rizal">Rizal</option>
            <option value="San Pablo">San Pablo</option>
            <option value="San Pedro">San Pedro</option>
            <option value="Santa Cruz">Santa Cruz</option>
            <option value="Santa Maria">Santa Maria</option>
            <option value="Santa Rosa">Santa Rosa</option>
            <option value="Siniloan">Siniloan</option>
            <option value="Victoria">Victoria</option>
        <!--Quezon--> 
        <option value="Agdangan">Agdangan</option>
        <option value="Alabat">Alabat</option>
        <option value="Atimonan">Atimonan</option>
        <option value="Buenavista">Buenavista</option>
        <option value="Burdeos">Burdeos</option>
        <option value="Calauag">Calauag</option>
        <option value="Candelaria">Candelaria</option>
        <option value="Catanauan">Catanauan</option>
        <option value="Dolores">Dolores</option>
        <option value="General Luna">General Luna</option>
        <option value="General Nakar">General Nakar</option>
        <option value="Guinayangan">Guinayangan</option>
        <option value="Gumaca">Gumaca</option>
        <option value="Infanta">Infanta</option>
        <option value="Jomalig">Jomalig</option>
        <option value="Lopez">Lopez</option>
        <option value="Lucban">Lucban</option>
        <option value="Macalelon">Macalelon</option>
        <option value="Mauban">Mauban</option>
        <option value="Mulanay">Mulanay</option>
        <option value="Padre Burgos">Padre Burgos</option>
        <option value="Pagbilao">Pagbilao</option>
        <option value="Panukulan">Panukulan</option>
        <option value="Patnanungan">Patnanungan</option>
        <option value="Perez">Perez</option>
        <option value="Pitogo">Pitogo</option>
        <option value="Plaridel">Plaridel</option>
        <option value="Polillo">Polillo</option>
        <option value="Quezon">Quezon</option>
        <option value="Real">Real</option>
        <option value="Sampaloc">Sampaloc</option>
        <option value="San Andres">San Andres</option>
        <option value="San Antonio">San Antonio</option>
        <option value="San Francisco">San Francisco</option>
        <option value="San Narciso">San Narciso</option>
        <option value="Sariaya">Sariaya</option>
        <option value="Tagkawayan">Tagkawayan</option>
        <option value="Tayabas">Tayabas</option>
        <option value="Tiaong">Tiaong</option>
        <option value="Unisan">Unisan</option>
      <!--Rizal--> 
        <option value="Angono">Angono</option>
        <option value="Antipolo">Antipolo</option>
        <option value="Baras">Baras</option>
        <option value="Binangonan">Binangonan</option>
        <option value="Cainta">Cainta</option>
        <option value="Cardona">Cardona</option>
        <option value="Jalajala">Jalajala</option>
        <option value="Morong">Morong</option>
        <option value="Pililla">Pililla</option>
        <option value="Rodriguez">Rodriguez</option>
        <option value="San Mateo">San Mateo</option>
        <option value="Tanay">Tanay</option>
        <option value="Taytay">Taytay</option>
        <option value="Teresa">Teresa</option>
        </select>
        <br>
        <label for="zip code">Zip Code</label><br>
        <input type="number" name="zipcode" id="num">
        <br>
        <label for="province">Province</label><br><select name="province"id="sel">
            <option value="Batangas">Batangas</option>
            <option value="Cavite">Cavite</option>
            <option value="Laguna">Laguna</option>
            <option value="Quezon">Quezon</option>
            <option value="Rizal">Rizal</option>
        </select>
        <br>
        <p><b>TEL NO. / CP NO.</b></p>
        <input type="tel" name="telno"id="tel">
        <br>
        <p><b>TIN</b></p>
        <input type="text" name="tin" id="name">
        <br>
        <p><b>NATIONALITY</b></p>
        <select name="nationality" id="sel">
          <option value="Afghan">Afghan</option>
          <option value="Albanian">Albanian</option>
          <option value="Algerian">Algerian</option>
          <option value="American">American</option>
          <option value="Andorran">Andorran</option>
          <option value="Angolan">Angolan</option>
          <option value="Antiguans">Antiguans</option>
          <option value="Argentinean">Argentinean</option>
          <option value="Armenian">Armenian</option>
          <option value="Australian">Australian</option>
          <option value="Austrian">Austrian</option>
          <option value="Azerbaijani">Azerbaijani</option>
          <option value="Bahamian">Bahamian</option>
          <option value="Bahraini">Bahraini</option>
          <option value="Bangladeshi">Bangladeshi</option>
          <option value="Barbadian">Barbadian</option>
          <option value="Barbudans">Barbudans</option>
          <option value="Batswana">Batswana</option>
          <option value="Belarusian">Belarusian</option>
          <option value="Belgian">Belgian</option>
          <option value="Belizean">Belizean</option>
          <option value="Beninese">Beninese</option>
          <option value="Bhutanese">Bhutanese</option>
          <option value="Bolivian">Bolivian</option>
          <option value="Bosnian">Bosnian</option>
          <option value="Brazilian">Brazilian</option>
          <option value="British">British</option>
          <option value="Bruneian">Bruneian</option>
          <option value="Bulgarian">Bulgarian</option>
          <option value="Burkinabe">Burkinabe</option>
          <option value="Burmese">Burmese</option>
          <option value="Burundian">Burundian</option>
          <option value="Cambodian">Cambodian</option>
          <option value="Cameroonian">Cameroonian</option>
          <option value="Canadian">Canadian</option>
          <option value="Cape Verdean">Cape Verdean</option>
          <option value="Central African">Central African</option>
          <option value="Chadian">Chadian</option>
          <option value="Chilean">Chilean</option>
          <option value="Chinese">Chinese</option>
          <option value="Colombian">Colombian</option>
          <option value="Comoran">Comoran</option>
          <option value="Congolese">Congolese</option>
          <option value="Costa Rican">Costa Rican</option>
          <option value="Croatian">Croatian</option>
          <option value="Cuban">Cuban</option>
          <option value="Cypriot">Cypriot</option>
          <option value="Czech">Czech</option>
          <option value="Danish">Danish</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominican">Dominican</option>
          <option value="Dutch">Dutch</option>
          <option value="East Timorese">East Timorese</option>
          <option value="Ecuadorian">Ecuadorian</option>
          <option value="Egyptian">Egyptian</option>
          <option value="Emirian">Emirian</option>
          <option value="Equatorial">Equatorial Guinean</option>
          <option value="Eritrean">Eritrean</option>
          <option value="Estonian">Estonian</option>
          <option value="Ethiopian">Ethiopian</option>
          <option value="Fijian">Fijian</option>
          <option value="Filipino">Filipino</option>
          <option value="Finnish">Finnish</option>
          <option value="French">French</option>
          <option value="Gabonese">Gabonese</option>
          <option value="Gambian">Gambian</option>
          <option value="Georgian">Georgian</option>
          <option value="German">German</option>
          <option value="Ghanaian">Ghanaian</option>
          <option value="Greek">Greek</option>
          <option value="Grenadian">Grenadian</option>
          <option value="Guatemalan">Guatemalan</option>
          <option value="Guinea-Bissauan">Guinea-Bissauan</option>
          <option value="Guinean">Guinean</option>
          <option value="Guyanese">Guyanese</option>
          <option value="Haitian">Haitian</option>
          <option value="Herzegovinian">Herzegovinian</option>
          <option value="Honduran">Honduran</option>
          <option value="Hungarian">Hungarian</option>
          <option value="I-Kiribati">I-Kiribati</option>
          <option value="Icelander">Icelander</option>
          <option value="Indian">Indian</option>
          <option value="Indonesian">Indonesian</option>
          <option value="Iranian">Iranian</option>
          <option value="Iraqi">Iraqi</option>
          <option value="Irish">Irish</option>
          <option value="Israeli">Israeli</option>
          <option value="Italian">Italian</option>
          <option value="Ivorian">Ivorian</option>
          <option value="Jamaican">Jamaican</option>
          <option value="Japanese">Japanese</option>
          <option value="Jordanian">Jordanian</option>
          <option value="Kazakhstani">Kazakhstani</option>
          <option value="Kenyan">Kenyan</option>
          <option value="Kittian and Nevisian">Kittian and Nevisian</option>
          <option value="Kuwaiti">Kuwaiti</option>
          <option value="Kyrgyz">Kyrgyz</option>
          <option value="Laotian">Laotian</option>
          <option value="Latvian">Latvian</option>
          <option value="Lebanese">Lebanese</option>
          <option value="Liberian">Liberian</option>
          <option value="Libyan">Libyan</option>
          <option value="Liechtensteiner">Liechtensteiner</option>
          <option value="Lithuanian">Lithuanian</option>
          <option value="Luxembourger">Luxembourger</option>
          <option value="Macedonian">Macedonian</option>
          <option value="Malagasy">Malagasy</option>
          <option value="Malawian">Malawian</option>
          <option value="Malaysian">Malaysian</option>
          <option value="Maldivian">Maldivian</option>
          <option value="Malian">Malian</option>
          <option value="Maltese">Maltese</option>
          <option value="Marshallese">Marshallese</option>
          <option value="Mauritanian">Mauritanian</option>
          <option value="Mauritian">Mauritian</option>
          <option value="Mexican">Mexican</option>
          <option value="Micronesian">Micronesian</option>
          <option value="Moldovan">Moldovan</option>
          <option value="Monacan">Monacan</option>
          <option value="Mongolian">Mongolian</option>
          <option value="Moroccan">Moroccan</option>
          <option value="Mosotho">Mosotho</option>
          <option value="Motswana">Motswana</option>
          <option value="Mozambican">Mozambican</option>
          <option value="Namibian">Namibian</option>
          <option value="Nauruan">Nauruan</option>
          <option value="Nepalese">Nepalese</option>
          <option value="New Zealander">New Zealander</option>
          <option value="Ni-Vanuatu">Ni-Vanuatu</option>
          <option value="Nicaraguan">Nicaraguan</option>
          <option value="Nigerian">Nigerian</option>
          <option value="Nigerien">Nigerien</option>
          <option value="North Korean">North Korean</option>
          <option value="Northern Irish">Northern Irish</option>
          <option value="Norwegian">Norwegian</option>
          <option value="Omani">Omani</option>
          <option value="Pakistani">Pakistani</option>
          <option value="Palauan">Palauan</option>
          <option value="Panamanian">Panamanian</option>
          <option value="Papua New Guinean">Papua New Guinean</option>
          <option value="Paraguayan">Paraguayan</option>
          <option value="Peruvian">Peruvian</option>
          <option value="Polish">Polish</option>
          <option value="Portuguese">Portuguese</option>
          <option value="Qatari">Qatari</option>
          <option value="Romanian">Romanian</option>
          <option value="Russian">Russian</option>
          <option value="Rwandan">Rwandan</option>
          <option value="Saint Lucian">Saint Lucian</option>
          <option value="Salvadoran">Salvadoran</option>
          <option value="Samoan">Samoan</option>
          <option value="San Marinese">San Marinese</option>
          <option value="Sao Tomean">Sao Tomean</option>
          <option value="Saudi">Saudi</option>
          <option value="Scottish">Scottish</option>
          <option value="Senegalese">Senegalese</option>
          <option value="Serbian">Serbian</option>
          <option value="Seychellois">Seychellois</option>
          <option value="Sierra Leonean">Sierra Leonean</option>
          <option value="Singaporean">Singaporean</option>
          <option value="Slovakian">Slovakian</option>
          <option value="Slovenian">Slovenian</option>
          <option value="Solomon Islander">Solomon Islander</option>
          <option value="Somali">Somali</option>
          <option value="South African">South African</option>
          <option value="South Korean">South Korean</option>
          <option value="Spanish">Spanish</option>
          <option value="Sri Lankan">Sri Lankan</option>
          <option value="Sudanese">Sudanese</option>
          <option value="Surinamer">Surinamer</option>
          <option value="Swazi">Swazi</option>
          <option value="Swedish">Swedish</option>
          <option value="Swiss">Swiss</option>
          <option value="Syrian">Syrian</option>
          <option value="Taiwanese">Taiwanese</option>
          <option value="Tajik">Tajik</option>
          <option value="Tanzanian">Tanzanian</option>
          <option value="Thai">Thai</option>
          <option value="Togolese">Togolese</option>
          <option value="Tongan">Tongan</option>
          <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
          <option value="Tunisian">Tunisian</option>
          <option value="Turkish">Turkish</option>
          <option value="Tuvaluan">Tuvaluan</option>
          <option value="Ugandan">Ugandan</option>
          <option value="Ukrainian">Ukrainian</option>
          <option value="Uruguayan">Uruguayan</option>
          <option value="Uzbekistani">Uzbekistani</option>
          <option value="Venezuelan">Venezuelan</option>
          <option value="Vietnamese">Vietnamese</option>
          <option value="Welsh">Welsh</option>
          <option value="Yemenite">Yemenite</option>
          <option value="Zambian">Zambian</option>
          <option value="Zimbabwean">Zimbabwean</option>
      </select>
        <br>
        <p><b>GENDER</b></p>
        <input type="radio" name="gender" value="Female"><label>Female</label><br>
        <input type="radio" name="gender" value="Male"><label>Male</label>
        <br>
        <p><b>BIRTH DATE</b></p>
        <input type="date" name="birthdate">
        <br>
        <p><b>HEIGHT (cm)</b></p>
        <input type="number" name="height"id="num"><br>
        <p><b>WEIGHT (kg)</b></p>
        <input type="number" name="weight"id="num"><br>
        
        <h3>TYPE OF APPLICATION (TOA)</h3>
        <!--radio button-->
        <input type="radio" name="TOA" value="A"><label>A. New</label><br>
        <input type="radio" name="TOA" value="B"><label>B. Delinquent/Dormant License</label><br>
        <input type="radio" name="TOA" class="Change_Classification" value="C"><label>C. Change Classification</label><br>
        <span style="margin-left: 20px;"><input type="radio" name="Change_Classification" value="1"><label>Prof to Non-Prof</label></span>
        <input type="radio" name="Change_Classification" value="2"><label>Non-Prof to Prof</label><br>
        <input type="radio" name="TOA" value="D"><label>D. Foreign Lic. Conversion</label><br>
        <input type="radio" name="TOA" value="E"><label>E. Renewal</label><br>
        <input type="radio" name="TOA" value="F"><label>F. Additional Restriction Code</label><br>
        <input type="radio" name="TOA" value="G"><label>G. Duplicate</label><br>
        <input type="radio" name="TOA" value="H"><label>H. Revision of Records</label><br>
        <span style="margin-left: 20px;"><input type="checkbox" name="Change_Address" value="Change_Address"><label>Change Address</label>
        <input type="checkbox" name="Change_Civil_Status" value="Change_Civil_Status"><label>Change Civil Status</label>
        <input type="checkbox" name="Change_Name" value="Change_Name"><label>Change Name</label><br></span>
        <span style="margin-left: 20px;"><input type="checkbox" name="Change_Date_of_Birth" value="Change_Date_of_Birth"><label>Change Date of Birth</label>
        <input type="checkbox" name="Others" value="Others"><label>Others</label></span>
        <br>
        <h4>TYPE OF LICENSE APPLIED FOR (TLA)</h4>
        <input type="radio" name="TLA" value="1"><label>1 Student Permit</label><br>
        <input type="radio" name="TLA" value="2"><label>2 Non-Professional</label><br>
        <input type="radio" name="TLA" value="3"><label>3 Professional</label><br>
        <input type="radio" name="TLA" value="4"><label>4 Conductor</label><br>
        <h4>DRIVING SKILL ACQUIRED OR WILL BE ACQUIRED THRU (DSA)</h4>
        <input type="radio" name="DSA" value="1"><label>1 Driving School</label><input type="text" name="Driving_Others"id="name"><br>
        <input type="radio" name="DSA" value="2"><label>2 Licensed Private Person</label><br>
        <h4>EDUCATIONAL ATTAINMENT (EA)</h4>
        <input type="radio" name="EA" value="1"><label>1 Informal Schooling</label><br>
        <input type="radio" name="EA" value="2"><label>2 Elementary</label><br>
        <input type="radio" name="EA" value="3"><label>3 High School</label><br>
        <input type="radio" name="EA" value="4"><label>4 Vocational</label><br>
        <input type="radio" name="EA" value="5"><label>5 College</label><br>
        <input type="radio" name="EA" value="6"><label>6 Post Graduate</label><br>
        <p><b>BLOOD TYPE</b></p>
        <select name="blood_type"id="sel">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br>
        <p><b>ORGAN DONOR</b></p>
        <input type="radio" name="organ_donor" value="Yes"><label>Yes</label><br>
        <input type="radio" name="organ_donor" value="No"><label>No</label>
        <br>
        <p><b>CIVIL STATUS</b></p>
        <input type="radio" name="civil_status" value="Single"><label>Single</label>
        <input type="radio" name="civil_status" value="Married"><label>Married</label>
        <input type="radio" name="civil_status" value="Widow/er"><label>Widow/er</label>
        <input type="radio" name="civil_status" value="Separated"><label>Separated</label>
        <br>
        <p><b>HAIR</b></p>
        <input type="radio" name="hair" value="Black"><label>Black</label>
        <input type="radio" name="hair" value="Brown"><label>Brown</label>
        <input type="radio" name="hair" value="Blonde"><label>Blonde</label>
        <input type="radio" name="hair" value="Gray"><label>Gray</label><br>
        <input type="radio" name="hair" value="Others"><label>Others (Specify)</label><input type="text" name="Hair_Others" id="name">
        <br>
        <p><b>EYES</b></p>
        <input type="radio" name="eyes" value="Black"><label>Black</label>
        <input type="radio" name="eyes" value="Brown"><label>Brown</label>
        <input type="radio" name="eyes" value="Gray"><label>Gray</label><br>
        <input type="radio" name="eyes" value="Others"><label>Others (Specify)</label><input type="text" name="Eyes_Others"id="name">
        <br>
        <p><b>BUILT</b></p>
        <input type="radio" name="built" value="Light"><label>Light</label>
        <input type="radio" name="built" value="Medium"><label>Medium</label>
        <input type="radio" name="built" value="Heavy"><label>Heavy</label>
        <br>
        <p><b>COMPLEXION</b></p>
        <input type="radio" name="complexion" value="Light"><label>Light</label>
        <input type="radio" name="complexion" value="Fair"><label>Fair</label>
        <input type="radio" name="complexion" value="Dark"><label>Dark</label>
        <br>
        <p><b>BIRTHPLACE</b></p>
        <!--BIRTHPLACEEEEE-->
        <label for="birth_city_municipality">City/Municipality</label><Br><select name="birth_city_municipality"id="sel">
             <!--Batangas-->
             <option value="Agoncillo">Agoncillo</option>
             <option value="Alitagtag">Alitagtag</option>
             <option value="Balayan">Balayan</option>
             <option value="Balete">Balete</option>
             <option value="Batangas City">Batangas City</option>
             <option value="Bauan">Bauan</option>
             <option value="Calaca">Calaca</option>
             <option value="Calatagan">Calatagan</option>
             <option value="Cuenca">Cuenca</option>
             <option value="Ibaan">Ibaan</option>
             <option value="Laurel">Laurel</option>
             <option value="Lemery">Lemery</option>
             <option value="Lian">Lian</option>
             <option value="Lipa">Lipa</option>
             <option value="Lobo">Lobo</option>
             <option value="Mabini">Mabini</option>
             <option value="Malvar">Malvar</option>
             <option value="Mataasnakahoy">Mataasnakahoy</option>
             <option value="Nasugbu">Nasugbu</option>
             <option value="Padre Garcia">Padre Garcia</option>
             <option value="Rosario">Rosario</option>
             <option value="San Jose">San Jose</option>
             <option value="San Juan">San Juan</option>
             <option value="San Luis">San Luis</option>
             <option value="San Nicolas">San Nicolas</option>
             <option value="San Pascual">San Pascual</option>
             <option value="Santa Teresita">Santa Teresita</option>
             <option value="Santo Tomas">Santo Tomas</option>
             <option value="Taal">Taal</option>
             <option value="Talisay">Talisay</option>
             <option value="Tanauan">Tanauan</option>
             <option value="Taysan">Taysan</option>
             <option value="Tingloy">Tingloy</option>
             <option value="Tuy">Tuy</option>
             <!--Cavite--> 
             <option value="Alfonso">Alfonso</option>
             <option value="Amadeo">Amadeo</option>
             <option value="Bacoor">Bacoor</option>
             <option value="Carmona">Carmona</option>
             <option value="Cavite City">Cavite City</option>
             <option value="Dasmariñas">Dasmariñas</option>
             <option value="General Emilio Aguinaldo">General Emilio Aguinaldo</option>
             <option value="General Mariano Alvarez">General Mariano Alvarez</option>
             <option value="General Trias">General Trias</option>
             <option value="Imus">Imus</option>
             <option value="Indang">Indang</option>
             <option value="Kawit">Kawit</option>
             <option value="Magallanes">Magallanes</option>
             <option value="Maragondon">Maragondon</option>
             <option value="Mendez">Mendez</option>
             <option value="Naic">Naic</option>
             <option value="Noveleta">Noveleta</option>
             <option value="Rosario">Rosario</option>
             <option value="Silang">Silang</option>
             <option value="Tagaytay">Tagaytay</option>
             <option value="Tanza">Tanza</option>
             <option value="Ternate">Ternate</option>
             <option value="Trece Martires">Trece Martires</option>
             <!--Laguna--> 
             <option value="Alaminos">Alaminos</option>
             <option value="Bay">Bay</option>
             <option value="Biñan">Biñan</option>
             <option value="Cabuyao">Cabuyao</option>
             <option value="Calamba">Calamba</option>
             <option value="Calauan">Calauan</option>
             <option value="Cavinti">Cavinti</option>
             <option value="Famy">Famy</option>
             <option value="Kalayaan">Kalayaan</option>
             <option value="Liliw">Liliw</option>
             <option value="Los Baños">Los Baños</option>
             <option value="Luisiana">Luisiana</option>
             <option value="Lumban">Lumban</option>
             <option value="Mabitac">Mabitac</option>
             <option value="Magdalena">Magdalena</option>
             <option value="Majayjay">Majayjay</option>
             <option value="Nagcarlan">Nagcarlan</option>
             <option value="Paete">Paete</option>
             <option value="Pagsanjan">Pagsanjan</option>
             <option value="Pakil">Pakil</option>
             <option value="Pangil">Pangil</option>
             <option value="Pila">Pila</option>
             <option value="Rizal">Rizal</option>
             <option value="San Pablo">San Pablo</option>
             <option value="San Pedro">San Pedro</option>
             <option value="Santa Cruz">Santa Cruz</option>
             <option value="Santa Maria">Santa Maria</option>
             <option value="Santa Rosa">Santa Rosa</option>
             <option value="Siniloan">Siniloan</option>
             <option value="Victoria">Victoria</option>
         <!--Quezon--> 
         <option value="Agdangan">Agdangan</option>
         <option value="Alabat">Alabat</option>
         <option value="Atimonan">Atimonan</option>
         <option value="Buenavista">Buenavista</option>
         <option value="Burdeos">Burdeos</option>
         <option value="Calauag">Calauag</option>
         <option value="Candelaria">Candelaria</option>
         <option value="Catanauan">Catanauan</option>
         <option value="Dolores">Dolores</option>
         <option value="General Luna">General Luna</option>
         <option value="General Nakar">General Nakar</option>
         <option value="Guinayangan">Guinayangan</option>
         <option value="Gumaca">Gumaca</option>
         <option value="Infanta">Infanta</option>
         <option value="Jomalig">Jomalig</option>
         <option value="Lopez">Lopez</option>
         <option value="Lucban">Lucban</option>
         <option value="Macalelon">Macalelon</option>
         <option value="Mauban">Mauban</option>
         <option value="Mulanay">Mulanay</option>
         <option value="Padre Burgos">Padre Burgos</option>
         <option value="Pagbilao">Pagbilao</option>
         <option value="Panukulan">Panukulan</option>
         <option value="Patnanungan">Patnanungan</option>
         <option value="Perez">Perez</option>
         <option value="Pitogo">Pitogo</option>
         <option value="Plaridel">Plaridel</option>
         <option value="Polillo">Polillo</option>
         <option value="Quezon">Quezon</option>
         <option value="Real">Real</option>
         <option value="Sampaloc">Sampaloc</option>
         <option value="San Andres">San Andres</option>
         <option value="San Antonio">San Antonio</option>
         <option value="San Francisco">San Francisco</option>
         <option value="San Narciso">San Narciso</option>
         <option value="Sariaya">Sariaya</option>
         <option value="Tagkawayan">Tagkawayan</option>
         <option value="Tayabas">Tayabas</option>
         <option value="Tiaong">Tiaong</option>
         <option value="Unisan">Unisan</option>
       <!--Rizal--> 
         <option value="Angono">Angono</option>
         <option value="Antipolo">Antipolo</option>
         <option value="Baras">Baras</option>
         <option value="Binangonan">Binangonan</option>
         <option value="Cainta">Cainta</option>
         <option value="Cardona">Cardona</option>
         <option value="Jalajala">Jalajala</option>
         <option value="Morong">Morong</option>
         <option value="Pililla">Pililla</option>
         <option value="Rodriguez">Rodriguez</option>
         <option value="San Mateo">San Mateo</option>
         <option value="Tanay">Tanay</option>
         <option value="Taytay">Taytay</option>
         <option value="Teresa">Teresa</option>
         </select>
        <br>
        <label for="birth_province">Province</label><br><select name="birth_province"id="sel">
            <option value="Batangas">Batangas</option>
            <option value="Cavite">Cavite</option>
            <option value="Laguna">Laguna</option>
            <option value="Quezon">Quezon</option>
            <option value="Rizal">Rizal</option>
        </select>
        <br>
        <p><b>FATHER'S NAME</b></p>
        <label for="family_name_of_father">Family Name</label><br><input type="text" name="family_name_of_father"id="name"><br>
        <label for="first_name_of_father">First Name</label><br><input type="text" name="first_name_of_father"id="name"><br>
        <label for="middle_name_of_father">Middle Name</label><br><input type="text" name="middle_name_of_father"id="name"><br>
        <p><b>MOTHER'S NAME</b></p>
        <label for="family_name_of_mother">Family Name</label><br><input type="text" name="family_name_of_mother"id="name"><br>
        <label for="first_name_of_mother">First Name</label><br><input type="text" name="first_name_of_mother"id="name"><br>
        <label for="middle_name_of_mother">Middle Name</label><br><input type="text" name="middle_name_of_mother"id="name"><br>
        <p><b>SPOUSE' NAME</b></p>
        <label for="family_name_of_spouse">Family Name</label><br><input type="text" name="family_name_of_spouse"id="name"><br>
        <label for="first_name_of_spouse">First Name</label><br><input type="text" name="first_name_of_spouse"id="name"><br>
        <label for="middle_name_of_spouse">Middle Name</label><br><input type="text" name="middle_name_of_spouse"id="name"><br>
        <p><b>EMPLOYER'S BUSINESS NAME</b></p>
        <input type="text" name="business_name"id="name"><br>
        <p><b>EMPLOYER'S BUSINESS ADDRESS</b></p>
        <label for="business_street">No., Street</label><input type="text" name="business_street"><br>
        <label for="business_city_municipality">City/Municipality</label><br><select name="business_city_municipality"id="sel">
           <!--Batangas-->
           <option value="Agoncillo">Agoncillo</option>
           <option value="Alitagtag">Alitagtag</option>
           <option value="Balayan">Balayan</option>
           <option value="Balete">Balete</option>
           <option value="Batangas City">Batangas City</option>
           <option value="Bauan">Bauan</option>
           <option value="Calaca">Calaca</option>
           <option value="Calatagan">Calatagan</option>
           <option value="Cuenca">Cuenca</option>
           <option value="Ibaan">Ibaan</option>
           <option value="Laurel">Laurel</option>
           <option value="Lemery">Lemery</option>
           <option value="Lian">Lian</option>
           <option value="Lipa">Lipa</option>
           <option value="Lobo">Lobo</option>
           <option value="Mabini">Mabini</option>
           <option value="Malvar">Malvar</option>
           <option value="Mataasnakahoy">Mataasnakahoy</option>
           <option value="Nasugbu">Nasugbu</option>
           <option value="Padre Garcia">Padre Garcia</option>
           <option value="Rosario">Rosario</option>
           <option value="San Jose">San Jose</option>
           <option value="San Juan">San Juan</option>
           <option value="San Luis">San Luis</option>
           <option value="San Nicolas">San Nicolas</option>
           <option value="San Pascual">San Pascual</option>
           <option value="Santa Teresita">Santa Teresita</option>
           <option value="Santo Tomas">Santo Tomas</option>
           <option value="Taal">Taal</option>
           <option value="Talisay">Talisay</option>
           <option value="Tanauan">Tanauan</option>
           <option value="Taysan">Taysan</option>
           <option value="Tingloy">Tingloy</option>
           <option value="Tuy">Tuy</option>
           <!--Cavite--> 
           <option value="Alfonso">Alfonso</option>
           <option value="Amadeo">Amadeo</option>
           <option value="Bacoor">Bacoor</option>
           <option value="Carmona">Carmona</option>
           <option value="Cavite City">Cavite City</option>
           <option value="Dasmariñas">Dasmariñas</option>
           <option value="General Emilio Aguinaldo">General Emilio Aguinaldo</option>
           <option value="General Mariano Alvarez">General Mariano Alvarez</option>
           <option value="General Trias">General Trias</option>
           <option value="Imus">Imus</option>
           <option value="Indang">Indang</option>
           <option value="Kawit">Kawit</option>
           <option value="Magallanes">Magallanes</option>
           <option value="Maragondon">Maragondon</option>
           <option value="Mendez">Mendez</option>
           <option value="Naic">Naic</option>
           <option value="Noveleta">Noveleta</option>
           <option value="Rosario">Rosario</option>
           <option value="Silang">Silang</option>
           <option value="Tagaytay">Tagaytay</option>
           <option value="Tanza">Tanza</option>
           <option value="Ternate">Ternate</option>
           <option value="Trece Martires">Trece Martires</option>
           <!--Laguna--> 
           <option value="Alaminos">Alaminos</option>
           <option value="Bay">Bay</option>
           <option value="Biñan">Biñan</option>
           <option value="Cabuyao">Cabuyao</option>
           <option value="Calamba">Calamba</option>
           <option value="Calauan">Calauan</option>
           <option value="Cavinti">Cavinti</option>
           <option value="Famy">Famy</option>
           <option value="Kalayaan">Kalayaan</option>
           <option value="Liliw">Liliw</option>
           <option value="Los Baños">Los Baños</option>
           <option value="Luisiana">Luisiana</option>
           <option value="Lumban">Lumban</option>
           <option value="Mabitac">Mabitac</option>
           <option value="Magdalena">Magdalena</option>
           <option value="Majayjay">Majayjay</option>
           <option value="Nagcarlan">Nagcarlan</option>
           <option value="Paete">Paete</option>
           <option value="Pagsanjan">Pagsanjan</option>
           <option value="Pakil">Pakil</option>
           <option value="Pangil">Pangil</option>
           <option value="Pila">Pila</option>
           <option value="Rizal">Rizal</option>
           <option value="San Pablo">San Pablo</option>
           <option value="San Pedro">San Pedro</option>
           <option value="Santa Cruz">Santa Cruz</option>
           <option value="Santa Maria">Santa Maria</option>
           <option value="Santa Rosa">Santa Rosa</option>
           <option value="Siniloan">Siniloan</option>
           <option value="Victoria">Victoria</option>
       <!--Quezon--> 
       <option value="Agdangan">Agdangan</option>
       <option value="Alabat">Alabat</option>
       <option value="Atimonan">Atimonan</option>
       <option value="Buenavista">Buenavista</option>
       <option value="Burdeos">Burdeos</option>
       <option value="Calauag">Calauag</option>
       <option value="Candelaria">Candelaria</option>
       <option value="Catanauan">Catanauan</option>
       <option value="Dolores">Dolores</option>
       <option value="General Luna">General Luna</option>
       <option value="General Nakar">General Nakar</option>
       <option value="Guinayangan">Guinayangan</option>
       <option value="Gumaca">Gumaca</option>
       <option value="Infanta">Infanta</option>
       <option value="Jomalig">Jomalig</option>
       <option value="Lopez">Lopez</option>
       <option value="Lucban">Lucban</option>
       <option value="Macalelon">Macalelon</option>
       <option value="Mauban">Mauban</option>
       <option value="Mulanay">Mulanay</option>
       <option value="Padre Burgos">Padre Burgos</option>
       <option value="Pagbilao">Pagbilao</option>
       <option value="Panukulan">Panukulan</option>
       <option value="Patnanungan">Patnanungan</option>
       <option value="Perez">Perez</option>
       <option value="Pitogo">Pitogo</option>
       <option value="Plaridel">Plaridel</option>
       <option value="Polillo">Polillo</option>
       <option value="Quezon">Quezon</option>
       <option value="Real">Real</option>
       <option value="Sampaloc">Sampaloc</option>
       <option value="San Andres">San Andres</option>
       <option value="San Antonio">San Antonio</option>
       <option value="San Francisco">San Francisco</option>
       <option value="San Narciso">San Narciso</option>
       <option value="Sariaya">Sariaya</option>
       <option value="Tagkawayan">Tagkawayan</option>
       <option value="Tayabas">Tayabas</option>
       <option value="Tiaong">Tiaong</option>
       <option value="Unisan">Unisan</option>
     <!--Rizal--> 
       <option value="Angono">Angono</option>
       <option value="Antipolo">Antipolo</option>
       <option value="Baras">Baras</option>
       <option value="Binangonan">Binangonan</option>
       <option value="Cainta">Cainta</option>
       <option value="Cardona">Cardona</option>
       <option value="Jalajala">Jalajala</option>
       <option value="Morong">Morong</option>
       <option value="Pililla">Pililla</option>
       <option value="Rodriguez">Rodriguez</option>
       <option value="San Mateo">San Mateo</option>
       <option value="Tanay">Tanay</option>
       <option value="Taytay">Taytay</option>
       <option value="Teresa">Teresa</option>
       </select>
      <br>
        <label for="business_zip_code">Zip Code</label><br>
        <input type="number" name="business_zip_code" id="num" >
        <br>
      <label for="business_province">Province</label><br><select name="business_province"id="sel">
          <option value="Batangas">Batangas</option>
          <option value="Cavite">Cavite</option>
          <option value="Laguna">Laguna</option>
          <option value="Quezon">Quezon</option>
          <option value="Rizal">Rizal</option>
      </select>
        <p><b>TEL NO.</b></p>
        <input type="tel" name="business_telephone_number"id="tel">
        <br>
        <hr><br>
        <input type="submit" name="submit" value="NEXT">
    </form>
</body>