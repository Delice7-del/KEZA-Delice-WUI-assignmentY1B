<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Form</title>
</head>
<body>
    <h1>Christian Registration</h1>
    <form action="" method="POST">
        <label for="name">Enter your full names</label>
        <input type="text" name="fullnames" placeholder="Enter full names"><br><br>

        <label for="date">Enter your date of birth</label>
        <input type="date" name="dob"><br><br>

        <label>Gender</label><br>
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label><br><br>
        <label for="sacraments">Sacrements you have received</label><br>
        <label for="Communion">Communion</label>
        <input type="checkbox" name="Communion" value="communion" id="communion"><br>
        <label for="Baptism">Baptism</label>
        <input type="checkbox" name="Baptism" value="Baptism" id="Baptism"><br>
        <label for="Marriage">Marriage</label>
        <input type="checkbox" name="Marriage" value="Marriage" id="Marriage"><br>
        <label for="Confirmation">Confirmation</label>
        <input type="checkbox" name="Confirmation" value="Confirmation" id="Confirmation"><br>
        <label for="Holy Orders">Holy Orders</label>
        <input type="checkbox" name="Holy Orders" value="Holy Orders" id="Holy Orders"><br>
        <label for="Reconciliation">Reconciliation</label>
        <input type="checkbox" name="Reconciliation" value="Reconciliation" id="Reconciliation"><br>
        <label for="Annointing">Annointing of the sick</label>
        <input type="checkbox" name="Annointing of the sick" value="Annointing of the sick" id="Annointing of the sick"><br><br>







        <label for="choir">Choose your choir</label>
        <select name="choir">
            <option value="True Vine Choir">True Vine Choir</option>
            <option value="Worship Team Choir">Worship Team Choir</option>
            <option value="Voice of God Choir">Voice of God Choir</option>
            <option value="Voice of Angels Choir">Voice of Angels Choir</option>
        </select><br><br>

        <label for="city">Enter your city</label>
        <input type="text" name="city" placeholder="Enter your city"><br><br>

        <label for="district">Enter your district</label>
        <input type="text" name="district" placeholder="Enter your district"><br><br>

        <label for="reg_id">Enter your registration ID</label>
        <input type="password" name="registration_id" placeholder="Enter ID"><br><br>

        <label for="prayer_time">Choose the time for prayers</label>
        <input type="time" name="prayer_time"><br><br>

        <label for="phone">Enter your phone number</label>
        <input type="tel" name="phone_number" placeholder="Enter your phone number"><br><br>

        <label for="marital_status">Enter your marital status</label>
        <select name="marital_status">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
        </select><br><br>

        <label for="email">Enter your email</label>
        <input type="email" name="email" placeholder="Enter your email"><br><br>

        <label for="fav_color">Choose your favorite color:</label>
        <input type="color" name="fav_color" id="fav_color" value="#ff0000"><br><br>

        <label for="volume">Choose your range of offerings (0-100):</label>
        <input type="range" name="volume" id="volume" min="0" max="100" value="50"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fullnames = $_POST['fullnames'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $choir = $_POST['choir'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $reg_id = $_POST['registration_id'];
        $prayer_time = $_POST['prayer_time'];
        $phone_number = $_POST['phone_number'];
        $marital_status = $_POST['marital_status'];
        $email = $_POST['email'] ?? '';
        $fav_color = $_POST['fav_color'];
        $volume = $_POST['volume'];

        // Validate fields are not empty
        if (!empty($fullnames) && !empty($dob) && !empty($gender) && !empty($choir) && !empty($city) && !empty($district) && !empty($reg_id) && !empty($prayer_time) && !empty($phone_number) && !empty($marital_status) && !empty($email) && !empty($fav_color) && !empty($volume)) {
            echo "<h4>Table of Data</h4>";
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>Name</th><td>" . htmlspecialchars($fullnames) . "</td></tr>";
            echo"<tr>";
            echo "<th>Date of Birth</th><td>" . htmlspecialchars($dob) . "</td></tr>";
            echo "<tr>";
            echo "<th>Gender</th><td>" . htmlspecialchars($gender) . "</td></tr>";
            echo "<tr>";
            echo "<th>Choir</th><td>" . htmlspecialchars($choir) . "</td></tr>";
            echo "<tr>";
            echo "<th>City</th><td>" . htmlspecialchars($city) . "</td></tr>";
            echo "<tr>";
            echo "<th>District</th><td>" . htmlspecialchars($district) . "</td></tr>";
            echo "<tr>";
            echo "<th>Reg ID</th><td>" . htmlspecialchars($reg_id) . "</td></tr>";
            echo "<tr>";
            echo "<th>Prayer Time</th><td>" . htmlspecialchars($prayer_time) . "</td></tr>";
            echo "<tr>";
            echo "<th>Phone Number</th><td>" . htmlspecialchars($phone_number) . "</td></tr>";
            echo "<tr>";
            echo "<th>Marital Status</th><td>" . htmlspecialchars($marital_status) . "</td></tr>";
            echo "<tr>";
            echo "<th>Email</th><td>" . htmlspecialchars($email) . "</td></tr>";
            echo "<tr>";
            echo "<th>Color</th><td style='background-color:" . htmlspecialchars($fav_color) . ";'>" . htmlspecialchars($fav_color) . "</td></tr>";
            echo "<tr>";
            echo "<th>Range</th><td>" . htmlspecialchars($volume) . "</td></tr>";
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Please fill in all fields.";
        }
    }
    ?>
</body>
</html>
