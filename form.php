<html>
	<head>
		<title> form</title>
		<style>
			div{background-color:#f2f2f2; width:30%; margin:auto;border-radius:7px; padding:16px;}
			input[type=text], input[type=email], input[type=date],  
			input[type=number]{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:100%; padding:14px 8px; margin:5px; border-radius:5px;
				background-color:#2ecc71; color:#ffffff; font-size:20px;
			}
			input[type=submit]:hover{ background-color:#27ae60; color:#ffffff;}
		</style>
	</head>
	<body>
		<div>
			<h1>Instructor Application Form</h1>
			<form action="action_form.php" method="POST">
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Your Name">
				<label>Designation</label>
				<input type="text" name="designation" placeholder="Enter Your Designation">
				<label>Salary</label>
				<input type="text" name="salary" placeholder="Enter Your Salary">
				<label>Phone</label>
				<input type="text" name="phone" placeholder="Enter Your Phone">
				<label>Date of Joining</label>
				<input type="date" name="doj">

				<input type="submit" Value="Submit">
				
			</form>
		</div>
	</body>

</html>

