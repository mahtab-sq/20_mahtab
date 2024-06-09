<?php
$id = $_POST['id'];
$name=$_POST['name'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$phone=$_POST['phone'];
$doj=$_POST['doj'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "mahtab_20";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE instructor SET name='$name', designation='$designation', phone='$phone', salary='$salary', doj='$doj' WHERE id=$id";
$result=$conn->query($sql);

if ($result) {
    header("Location:index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();
?>
