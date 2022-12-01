<!doctype html>
<html>
<head>
	<title>Student:information</title>
</head>
<body>
	<h2><u>Student Form</u></h2>
	<form method="POST" enctype="multipart/form-data" action="studentscript.php">
    <label for="photo">Photo:</label>
    <input type="file" name="photo"><br><br>
    <label for="firstname">Firstname:</label>
    <input type="text" name="firstname"><br><br>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname"><br><br>
    <label for="sex">Sex:</label>
    <input type="radio" name="sex" value="Male">Male
    <input type="radio" name="sex" value="Female">Female<br><br>
    <label for="dateofbirth">Date of birth:</label>
    <input type="date" name="dob"><br><br>
    <input type="submit" name="save" value="Save"><br><br>
	</form>
</body>
</html>