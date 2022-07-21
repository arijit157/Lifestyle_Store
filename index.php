<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include "includes/head_links.php";
    ?>
    <title>Lifestyle Store | Home</title>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="banner-container">
        <div class="banner-content">
            <h2>We sell Lifestyle</h2>
            <p>Flat 40% OFF on all items</p>
            <div class="link">
                <a href="#" type="button">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="page-container">
        <h1>Our Products</h1>
        <div class="row rounded-product-card">
            <div class="rounded-items">
                <div class="col">
                    <div class="rounded-products" id="shirt">
                        <a href="products.php?category_id=1"><img src="img/svg_icons/shirt.png" alt="t-shirt_logo"></a>
                        <div class="product-name">T-shirts</div>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-products">
                        <a href="products.php?category_id=2"><img src="img/svg_icons/icons8-watches-50.png" alt="watch_logo"></a>
                        <div class="product-name">Watches</div>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-products">
                        <a href="products.php?category_id=3"><img src="img/svg_icons/icons8-camera-50.png" alt="camera_logo"></a>
                        <div class="product-name">Cameras</div>
                    </div>
                </div>
                <div class="col">
                    <div class="rounded-products">
                        <a href="products.php?category_id=4"><img src="img/svg_icons/icons8-shoe-64.png" alt="shoe_logo"></a>
                        <div class="product-name">Shoes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign up Modal -->
    <?php
    include "includes/signup_modal.php";
    ?>

    <!--Login modal-->
    <?php
    include "includes/login_modal.php";
    ?>

<?php 
   include "includes/footer.php";
   ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>