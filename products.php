<?php
session_start();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
require "includes/database_connection.php";
$category_id = $_GET['category_id'];


$sql1 = "select * from categories where id='$category_id'";
$result1 = mysqli_query($conn, $sql1);
if (!$result1) {
    echo "Something went wrong!";
    return;
}
$category = mysqli_fetch_assoc($result1);
if (!$category) {
    echo "Coming soon...";
    return;
}
$category_name = $category['name'];


$sql2 = "select * from products where category_id='$category_id'";
$result2 = mysqli_query($conn, $sql2);
if (!$result2) {
    echo "Something went wrong!";
    return;
}
$products = mysqli_fetch_all($result2, MYSQLI_ASSOC);

$sql3 = "select * from interested_users_products iup inner join products p on iup.product_id=p.id where iup.user_id='$user_id'";
$result3 = mysqli_query($conn, $sql3);
if (!$result3) {
    echo "Something went wrong!";
    return;
}
$interested_products = mysqli_fetch_all($result3, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "includes/head_links_shirts.php";
    ?>
    <title>Lifestyle Store | <?php echo $category_name; ?></title>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <!--Breadcrumb-->
    <nav aria-label="breadcrumb" class="my-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $category_name ?></li>
        </ol>
    </nav>

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide my-carousel" data-bs-ride="true">
        <div class="carousel-indicators">
            <?php
            if ($category_id == 1) {
                $product_images = glob("img/products/shirt_carousel_img/*");
                foreach ($product_images as $index => $image) {
            ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index == 0 ? "active" : "" ?>" aria-current="true"></button>
                <?php
                }
            } elseif ($category_id == 2) {
                $product_images = glob("img/products/watch_carousel_img/*");
                foreach ($product_images as $index => $image) {
                ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index == 0 ? "active" : "" ?>" aria-current="true"></button>

                <?php
                }
            } elseif ($category_id == 3) {
                $product_images = glob("img/products/camera_carousel_img/*");
                foreach ($product_images as $index => $image) {

                ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index == 0 ? "active" : "" ?>" aria-current="true"></button>
                <?php
                }
            } elseif ($category_id == 4) {
                $product_images = glob("img/products/shoe_carousel_img/*");
                foreach ($product_images as $index => $image) {
                ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index == 0 ? "active" : "" ?>" aria-current="true"></button>
            <?php
                }
            }
            ?>
        </div>
        <div class="carousel-inner">
            <?php
            if ($category_id == 1) {
                $product_images = glob("img/products/shirt_carousel_img/*");
                foreach ($product_images as $index => $image) {
            ?>
                    <div class="carousel-item <?= $index == 0 ? "active" : "" ?>">
                        <img src="<?= $image ?>" class="d-block w-100" alt="product_img">
                    </div>
                <?php
                }
            } elseif ($category_id == 2) {
                $product_images = glob("img/products/watch_carousel_img/*");
                foreach ($product_images as $index => $image) {
                ?>
                    <div class="carousel-item <?= $index == 0 ? "active" : "" ?>">
                        <img src="<?= $image ?>" class="d-block w-100" alt="product_img">
                    </div>
                <?php
                }
            } elseif ($category_id == 3) {
                $product_images = glob("img/products/camera_carousel_img/*");
                foreach ($product_images as $index => $image) {
                ?>
                    <div class="carousel-item <?= $index == 0 ? "active" : "" ?>">
                        <img src="<?= $image ?>" class="d-block w-100" alt="product_img">
                    </div>
                <?php
                }
            } elseif ($category_id == 4) {
                $product_images = glob("img/products/shoe_carousel_img/*");
                foreach ($product_images as $index => $image) {
                ?>
                    <div class="carousel-item <?= $index == 0 ? "active" : "" ?>">
                        <img src="<?= $image ?>" class="d-block w-100" alt="product_img">
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="page-container">
        <div class="items">
            <div class="item-name">Premium <?php echo $category_name; ?></div>

            <!--Code for product cards-->
            <?php
            foreach ($products as $product) {
                $product_images = glob("img/products/" . $product['id'] . "/*");
            ?>
                <div class="card" style="width: 18rem;" id="my-shirt-card1">
                    <img src="<?php echo $product_images[0]; ?>" class="card-img-top" alt="<?= $product_category ?>_img">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <div class="special-container">
                                <?php
                                $ratings = $product['rating'];
                                ?>
                            <div class="star-container" title="<?= $ratings ?>">
                                <?php
                                for ($i = 0; $i > 5; $i++) {
                                    if ($ratings >= $i + 0.8) {
                                ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php
                                    } elseif ($ratings >= $i + 0.3) {
                                    ?>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa-regular fa-star"></i>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="interested-container">
                                <?php
                                $interested_users_count = 0;
                                $interested_users_status = false;
                                foreach ($interested_products as $interested_product) {
                                    if ($interested_product['product_id'] == $product['id']) {
                                        $interested_users_count++;
                                    }
                                    if ($interested_product['user_id'] == $user_id) {
                                        $interested_users_status = true;
                                    }
                                }
                            //}
                                if ($interested_users_status) {
                                ?>
                                    <i class="fa-solid fa-heart"></i>
                                <?php
                                } else {
                                ?>
                                    <i class="fa-regular fa-heart"></i>
                                <?php
                                }
                                ?>
                                <div class="interested-text"><?php echo $interested_users_count; ?> interested</div>
                            </div>
                        </div>
                        <p class="card-text">₹<?= $product['price'] ?>/-</p>
                        <p class="tax-text">Inclusive of all taxes</p>
                        <div class="my-btn">
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary btn-width">Buy</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

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

    <!--Footer-->
    <?php
    include "includes/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>