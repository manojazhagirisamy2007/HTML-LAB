
<!DOCTYPE html>
<html>
<body>

<h2>Student Registration</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Register Number: <input type="text" name="regno" required><br><br>
    Department: <input type="text" name="department" required><br><br>
    Mark: <input type="number" name="mark" required><br><br>
    <input type="submit" name="save" value="Save Student">
</form>

<?php

$conn = new PDO("mysql:host=127.0.0.1;port=3307;dbname=college db", "root", "");

if(isset($_POST['save'])) {
    $sql = "INSERT INTO students(name,regno,department,mark) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_POST['name'],$_POST['regno'],$_POST['department'],$_POST['mark']]);
    echo "Student record stored successfully.";
}

echo "<h2>Student Records - Sorted by Mark</h2>";

$stmt = $conn->query("SELECT * FROM students ORDER BY mark DESC");

echo "<table border='1' cellpadding='10'>
<tr><th>ID</th><th>Name</th><th>Register Number</th><th>Department</th><th>Mark</th></tr>";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>".htmlspecialchars($row['name'])."</td>
    <td>".htmlspecialchars($row['regno'])."</td>
    <td>".htmlspecialchars($row['department'])."</td>
    <td>{$row['mark']}</td>
    </tr>";
}

echo "</table>";

?>

</body>
</html>
