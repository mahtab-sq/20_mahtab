<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="mahtab_20";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM instructor";
$result = $conn->query($sql);


$conn->close();
?>


<html>
	<head>
		<title>data</title>
		<link rel="stylesheet" href="style.css">
		<style>
			span a{
					text-decoration: none;
					text-align: center;
					background-color: #04AA6D;
					color: white;
					padding: 8px 12px;
					border-radius: 5px;
}
.align_button{
	margin-left: 45%;
}
		</style>
	</head>
	<body>
		<h1 align="center">List of Instructors</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Designation</th>
				<th>Salary</th>
				<th>Phone</th>
				<th>Date of Joining</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["id"];
				echo "<tr>";
					echo "<td>". $row["name"]."</td>";
					echo "<td>". $row["designation"]."</td>";
					echo "<td>". $row["salary"]."</td>";
					echo "<td>". $row["phone"]."</td>";
					echo "<td>". $row["doj"]."</td>";
					echo "<td>"."<a href='update.php?editid=$id'>Edit</a>"."</td>";
					echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
					echo "</tr>";
			}
		}
		else echo "0 results";
		?>
			
		</table>
		<br><br>
		<span class="align_button">
		<a href="form.php">Add New Instructor</a>
		</span>
	</body>
</html>

