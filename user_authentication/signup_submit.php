<?php 
require("../includes/database_connection.php");

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$pin_code = $_POST['pin_code'];

$sql="select * from users where email='$email'";
$result=mysqli_query($conn, $sql);
if(!$result)
{
    $response=array("success"=> false, "message"=> "Cannot signup at this moment");
    echo json_encode($response);
    return;
}
$row_count=mysqli_num_rows($result);
if($row_count!=0)
{
    $response=array("success" => false, "message" => "This email address is already registered with us");
    echo json_encode($response);
    return;
}
$sql="insert into users(name, email, password, mobile, address, pin_code) values('$full_name', '$email', '$password', '$mobile', '$address', '$pin_code')";
$result=mysqli_query($conn, $sql);
if(!$result)
{
    $response=array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}
$response=array("success" => true, "message" => "Your account has been created successfully");
echo json_encode($response);
mysqli_close($conn); 
// header("Location: ../index.php");
?>
