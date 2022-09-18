<!DOCTYPE html>
<html lang="en">

<head>
	<title>Example- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
	        	<p>
				<label for="rollno">Roll No.</label>
				<input type="text" name="roll_no" id="Rollno">
			</p>
			<p>
				<label for="Name">Name:</label>
				<input type="text" name="name1" id="Name">
			</p>


			
			<p>
				<label for="FName">Father Name:</label>
				<input type="text" name="Fname" id="FName">
			</p>
                         <p>
				<label for="MName">Mother Name:</label>
				<input type="text" name="Mname" id="MName">
			</p>

			
				<p>
				<label for="Dob">Date of Birth:</label>
				<input type="text" name="Dob" id="Dob">
			</p>

			
			<input type="submit" value="Submit Here">
		</form>
	</center>
</body>

</html>
