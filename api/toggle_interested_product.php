<?php 
session_start();

include "../includes/database_connection.php";

if(!isset($_SESSION['user_id']))
{
    $response=array("success"=>false, "is_logged_in"=>false);
    echo json_encode($response);
    return;
}

$user_id=$_SESSION['user_id'];


if(isset($_GET['product_id']))
{
    $product_id=$_GET['product_id'];
}
else
{
    echo "undefined";
}


$sql1="select * from interested_users_products where user_id='$user_id' and product_id='$product_id'";
$result1=mysqli_query($conn, $sql1);
if(!$result1){
    $response=array("success"=>false, "message"=>"Something wrong happend");
    echo json_encode($response);
    return;
}
if(mysqli_num_rows($result1)>0){
    $sql2="delete from interested_users_products where user_id='$user_id' and product_id='$product_id'";
    $result2=mysqli_query($conn, $sql2);
    if(!$result2){
        $response=array("success"=>false, "message"=>"Something wrong happend");
        echo json_encode($response);
        return;
    }
    else{
        $response=array("success"=>true, "is_interested"=>false, "product_id"=>$product_id);
        echo json_encode($response);
    }
}else{
    $sql3="insert into interested_users_products(user_id, product_id) values('$user_id', '$product_id')";
    $result3=mysqli_query($conn, $sql3);
    if(!$result3){
        $response=array("success"=>false, "message"=>"Something wrong happend");
        echo json_encode($response);
        return;
    }
    else{
        $response=array("success"=>true, "is_interested"=>true, "product_id"=>$product_id);
        echo json_encode($response);
    }
}
?>
