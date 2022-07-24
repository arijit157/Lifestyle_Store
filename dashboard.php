<?php
session_start();
require "includes/database_connection.php";
$user_id=isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$sql1="select * from users where id='$user_id'";
$result1=mysqli_query($conn, $sql1);
if(!$result1)
{
    echo "Something went wrong!";
    return;
}
$user=mysqli_fetch_assoc($result1);
$user_name=$user['name'];
$user_email=$user['email'];
$user_mobile=$user['mobile'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "includes/head_links.php";
    ?>
   <link rel="stylesheet" href="css/products.css">
   <link rel="stylesheet" href="css/dashboard.css">
    <title>Lifestyle Store | Dashboard</title>
</head>

<body>
    <?php 
    include "includes/header.php";
    ?>

    <nav aria-label="breadcrumb" class="my-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>


    <div class="dashboard-container">
        <div class="dashboard-page-container">
            <h1>My Profile</h1>
            <div class="row">
                <div class="col-md-3 user-image-container">
                    <i class="fa fa-user user-img"></i>
                </div>
                <div class="col-md-9 user-profile-container">
                    <div class="row">
                        <div class="profile">
                            <div class="user-name"><?php echo $user_name;?></div>
                            <div class="user-email"><?php echo $user_email;?></div>
                            <div class="user-mobile"><?php echo $user_mobile;?></div>
                        </div>
                        <div class="edit">edit profile</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-container">
            <div class="dashboard-page-container cart">
                <h1>My Cart</h1>
                <div class="cart-items">
                    <div class="card" style="width: 18rem;">
                        <img src="img/3.jpg" class="card-img-top" alt="camera1">
                        <div class="card-body">
                            <h5 class="card-title">Sony Alpha780</h5>
                            <div class="special-container">
                                <div class="star-container">
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                </div>
                                <div class="interested-container">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                            <p class="card-text">₹455/-</p>
                            <p class="tax-text">Inclusive of all taxes</p>
                            <div class="my-btn">
                                <a href="#" class="btn btn-primary btn-width">Buy</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="card" style="width: 18rem;" id="my-card">
                        <img src="img/1.jpg" class="card-img-top" alt="camera2">
                        <div class="card-body">
                            <h5 class="card-title">Sony W-100</h5>
                            <div class="special-container">
                                <div class="star-container">
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                </div>
                                <div class="interested-container">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                            <p class="card-text">₹455/-</p>
                            <p class="tax-text">Inclusive of all taxes</p>
                            <div class="my-btn">
                                    <a href="#" class="btn btn-primary btn-width">Buy</a>
                                    <!-- <button class="btn btn-primary" type="submit">Buy</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wishlist-container">
            <div class="dashboard-page-container wishlist">
                <h1>My Wishlist</h1>
                <div class="wishlist-items">
                    <div class="card" style="width: 18rem;">
                        <img src="img/3.jpg" class="card-img-top" alt="camera1">
                        <div class="card-body">
                            <h5 class="card-title">Sony Alpha780</h5>
                            <div class="special-container">
                                <div class="star-container">
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                </div>
                                <div class="interested-container">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                            <p class="card-text">₹455/-</p>
                            <p class="tax-text">Inclusive of all taxes</p>
                            <div class="my-btn">
                                <a href="#" class="btn btn-primary btn-width">Buy</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="card" style="width: 18rem;" id="my-card">
                        <img src="img/1.jpg" class="card-img-top" alt="camera2">
                        <div class="card-body">
                            <h5 class="card-title">Sony W-100</h5>
                            <div class="special-container">
                                <div class="star-container">
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                    <i class="fa-solid fa-star" title="4.5"></i>
                                </div>
                                <div class="interested-container">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                            <p class="card-text">₹455/-</p>
                            <p class="tax-text">Inclusive of all taxes</p>
                            <div class="my-btn">
                                    <a href="#" class="btn btn-primary btn-width">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer code -->
    <div class="footer">
        <div class="footer-container page-container">
            <div class="footer-items">
                <div class="footer-item">
                    <a href="products.php?category_id=1">Shirts</a>
                </div>
                <div class="footer-item">
                    <a href="products.php?category_id=2">Watches</a>
                </div>
                <div class="footer-item">
                    <a href="products.php?category_id=3">Cameras</a>
                </div>
                <div class="footer-item">
                    <a href="products.php?category_id=4">Shoes</a>
                </div>
            </div>
            <div class="footer-copyright">
                <p>LifeStyle Store© 2022 | All right reserved</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>