
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>STUDENT REGISTRATION FORM</h2>

<form method="post">

Student Name:
<input type="text" name="name" required><br><br>

Register Number:
<input type="text" name="regno" required><br><br>

Date of Birth:
<input type="date" name="dob" required><br><br>

Gender:
<input type="radio" name="gender" value="Male" required>Male
<input type="radio" name="gender" value="Female">Female
<br><br>

Email:
<input type="email" name="email" required><br><br>

Mobile Number:
<input type="text" name="mobile" required><br><br>

Department:
<select name="department" required>
<option value="">Select Department</option>
<option>BCA</option>
<option>B.Sc Computer Science</option>
<option>B.Sc Data Science</option>
<option>B.Sc Cyber Security</option>
</select>
<br><br>

Address:<br>
<textarea name="address" rows="4" cols="30" required></textarea>
<br><br>

<input type="submit" name="submit" value="Register">
<input type="reset" value="Clear">

</form>

<?php

if(isset($_POST['submit'])) {

echo "<h2>STUDENT REGISTRATION DETAILS</h2>";

echo "Student Name: ".$_POST['name']."<br>";
echo "Register Number: ".$_POST['regno']."<br>";
echo "Date of Birth: ".$_POST['dob']."<br>";
echo "Gender: ".$_POST['gender']."<br>";
echo "Email: ".$_POST['email']."<br>";
echo "Mobile Number: ".$_POST['mobile']."<br>";
echo "Department: ".$_POST['department']."<br>";
echo "Address: ".$_POST['address']."<br>";

}

?>

</body>
</html>
