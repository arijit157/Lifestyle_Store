<?php 
session_start();
require("../includes/database_connection.php");

$email=$_POST['email'];
$password=$_POST['password'];
$password=sha1($password);

$sql="select * from users where email='$email' and password='$password'";
$result=mysqli_query($conn, $sql);

if(!$result)
{
    $response=array("success" => false, "message" => "Something went wrong");
    echo json_encode($response);
    return;
}

$row_count=mysqli_num_rows($result);

if($row_count == 0)
{
    $response=array("success" => false, "message"=> "Invalid email and password!");
    echo json_encode($response);
    return;
}

$user_record=mysqli_fetch_assoc($result);

//storing id, email and name of an user to a session
$_SESSION['user_id']=$user_record['id'];
$_SESSION['user_email']=$user_record['email'];
$_SESSION['user_name']=$user_record['name'];
//header("location: ../index.php");
mysqli_close($conn);
$response=array("success" => true, "message"=> "Login successfull!");
echo json_encode($response);
?>