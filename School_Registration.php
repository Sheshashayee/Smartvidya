<html>
	<head>
		
	</head>
	
	<body>
			<div id="regdatabase">
			<?php
				$institute_name = $_POST["institute_name"];
				$principal_name = $_POST["principal_name"];
				$institute_address = $_POST["institute_address"];
				$institute_pin = $_POST["institute_pin"];
				$institute_email = $_POST["institute_email"];
				$institute_phone = $_POST["institute_phone"];
				$institute_cell = $_POST["institute_cell"];
				$institute_user_name = $_POST["institute_user_name"];
				$institute_password = $_POST["institute_password"];
				$re_enter_institute_password = $_POST["re_enter_institute_password"];
				if($institute_password==$re_enter_institute_password&&$institute_password!="")
				{
					$servername = "localhost";
					$username = "root";
					$password = "";
					// Create connection
					$conn = new mysqli($servername, $username, $password);
					// Check connection
					if ($conn->connect_error) 
					{
						die("Connection failed: " . $conn->connect_error);
					}

			// Create database
					$sql = "CREATE DATABASE $institute_name";
					if ($conn->query($sql) === TRUE) {
						echo "Database created successfully";
					} else {
						echo "Error creating database: " . $conn->error;
					}

					// Create connection
					$conn = new mysqli($servername, $username, $password, $institute_name);

					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					echo "Connected $institute_name successfully";


			// sql to create table Institute Details
					$sql = "CREATE TABLE Institute_Details (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					Institute_Name VARCHAR(30) NOT NULL,
					Name_of_the_Principal VARCHAR(30) NOT NULL,
					Address VARCHAR(60) NOT NULL,
					Pincode VARCHAR(30) NOT NULL,
					Email VARCHAR(20) NOT NULL,
					Phone_No int(10),
					Cell_No int(12),
					User_Name VARCHAR(20),
					Password VARCHAR(10),
					reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

					if ($conn->query($sql) === TRUE) 
					{
						echo "Table stdbiodata created successfully";
					} 
					else 
					{
						echo "Error creating table: " . $conn->error;
					}
					
			
			//insert Data into Institute Details		
					$institute_name = $_POST["institute_name"];
					$principal_name = $_POST["principal_name"];
					$institute_address = $_POST["institute_address"];
					$institute_pin = $_POST["institute_pin"];
					$institute_email = $_POST["institute_email"];
					$institute_phone = $_POST["institute_phone"];
					$institute_cell = $_POST["institute_cell"];
					$institute_user_name = $_POST["institute_user_name"];
					$institute_password = $_POST["institute_password"];
					$re_enter_institute_password = $_POST["re_enter_institute_password"];


					$sql = "INSERT INTO Institute_Details (Institute_Name, Name_of_the_Principal, Address, Pincode, Email, Phone_No, Cell_No, User_Name, Password) VALUES ('$institute_name', '$principal_name', '$institute_address', '$institute_pin', '$institute_email', '$institute_phone','$institute_cell', '$institute_user_name', '$institute_password')";
					// use exec() because no results are returned

					//$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

						
					
					
					
									
			// sql to create table Student Biodata
					$sql = "CREATE TABLE std_biodata (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					First_name VARCHAR(30) NOT NULL,
					Last_name VARCHAR(30) NOT NULL,
					Sur_name VARCHAR(30) NOT NULL,
					Father_name VARCHAR(30) NOT NULL,
					Date_of_birth int(10) NOT NULL,
					Join_year int(10),
					Aadhar_no int(12),
					dob_certificate VARCHAR(30),
					email VARCHAR(50),
					reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

					if ($conn->query($sql) === TRUE) 
					{
						echo "Table stdbiodata created successfully";
					} 
					else 
					{
						echo "Error creating table: " . $conn->error;
					}
					
		
		
					// sql to create table Student Other details
					$sql = "CREATE TABLE std_detials (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					Department VARCHAR(30),
					Class VARCHAR(30) NOT NULL,
					Section VARCHAR(30) NOT NULL,
					Roll_No VARCHAR(30) NOT NULL,
					Address VARCHAR(60) NOT NULL,
					Pincode int(10) NOT NULL,
					Phone int(10),
					Cell int(12),
					School_Fee VARCHAR(20),
					Hostel_Fee VARCHAR(20),
					Library_Fee Varchar(20))";
					
					if ($conn->query($sql) === TRUE) 
					{
						echo "Table std_details created successfully";
					} 
					else 
					{
						echo "Error creating table: " . $conn->error;
					}

		
		
					// sql to create table Teacher Details
					$sql = "CREATE TABLE teacher_details (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					firstname VARCHAR(30) NOT NULL,
					lastname VARCHAR(30) NOT NULL,
					surname VARCHAR(30) NOT NULL,
					fathername VARCHAR(30) NOT NULL,
					dateofbirth int(10) NOT NULL,
					joinyear int(10),
					aadharno int(12),
					dobcertificate VARCHAR(30),
					email VARCHAR(50),
					reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

					if ($conn->query($sql) === TRUE) 
					{
						echo "Table teacher_details created successfully";
					} 
					else 
					{
						echo "Error creating table: " . $conn->error;
					}
					$conn->close();
				}
			?>
		</div>

	</body>
</html>