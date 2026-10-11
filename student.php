
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myDB";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully.<br><br>";

// Display student details
$sql = "SELECT id, firstname, lastname, email FROM MyGuests";

$result = $conn->query($sql);

echo "<b>Student Details:</b><br><br>";

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "ID: " . $row["id"] . "<br>";
        echo "First Name: " . $row["firstname"] . "<br>";
        echo "Last Name: " . $row["lastname"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";

        echo "-------------------------<br>";
    }

} else {

    echo "No records found.";
}

$conn->close();

?>
