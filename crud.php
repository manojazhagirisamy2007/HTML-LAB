<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "school", 3307);

if (!$conn) {
    die("Connection Failed");
}

// INSERT
if (isset($_POST['insert'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    mysqli_query($conn, $sql);

    echo "Record inserted successfully.<br><br>";
}

// UPDATE
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students
            SET name='$name',
                email='$email',
                course='$course'
            WHERE id=$id";

    mysqli_query($conn, $sql);

    echo "Record updated successfully.<br><br>";
}

// DELETE
if (isset($_POST['delete'])) {

    $id = $_POST['id'];

    $sql = "DELETE FROM students WHERE id=$id";

    mysqli_query($conn, $sql);

    echo "Record deleted successfully.<br><br>";
}

// SELECT
$result = mysqli_query($conn, "SELECT * FROM students");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
</head>

<body>

<h2>Student Information System</h2>

<form method="POST">

    ID:
    <input type="number" name="id">
    <br><br>

    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Course:
    <input type="text" name="course">
    <br><br>

    <button type="submit" name="insert">
        Insert
    </button>

    <button type="submit" name="update">
        Update
    </button>

    <button type="submit" name="delete"
        onclick="return confirm('Delete this record?');">
        Delete
    </button>

</form>

<h3>Student Details</h3>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
</tr>

<?php

while ($row = mysqli_fetch_assoc($result)) {

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>
