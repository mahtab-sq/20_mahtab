<?php 

$name=$_POST['name'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$phone=$_POST['phone'];
$doj=$_POST['doj'];


$server_name="localhost";
$user_name="root";
$password="";
$database_name="mahtab_20";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

// else{
//     echo "Connected Successfully";
// }


$sq="INSERT INTO instructor( id, name, designation, salary, phone, doj)
VALUES ( NULL, '$name', '$designation', '$salary', '$phone', '$doj')";

$result=$conn->query($sq);

if($result){

    header('location:index.php');
}
else{
    echo "Data not inserted";
}


$conn->close();

?>