<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/7f3a3c1545.js" crossorigin="anonymous"></script>
    <title>Lifestyle Store | Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">
                        <i class="fa-solid fa-user"></i> Signup
                    </a>
                    <div class="nav-vl"> | </div>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">
                        <i class="fa-solid fa-right-to-bracket"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

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
                            <div class="user-name">Rohit Sharma</div>
                            <div class="user-email">rohitsharma_hitman@gmail.com</div>
                            <div class="user-mobile">9679814096</div>
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
                                    <!-- <button class="btn btn-primary" type="submit">Buy</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Sign up Modal -->
    <div class="modal fade" id="signup-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signup with Lifestyle Store</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="signup-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username"
                                aria-describedby="basic-addon1" name="full_name" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="email"
                                aria-describedby="basic-addon1" name="email" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-key"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="password"
                                minlength="8" maxlength="8" aria-describedby="basic-addon1" name="password" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Mobile" aria-label="mobile"
                                aria-describedby="basic-addon1" maxlength="10" minlength="10" name="mobile" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Address" aria-label="address"
                                aria-describedby="basic-addon1" name="address" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-map-pin"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="PIN code" aria-label="pin-code"
                                aria-describedby="basic-addon1" minlength="6" maxlength="6" name="pin_code" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Create account</button>
                    </div>
                    <div class="modal-footer-text">
                        <p>Already have one?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Login modal-->
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="login-form">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="email"
                                aria-describedby="basic-addon1" name="email" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-key"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="password"
                                minlength="8" maxlength="8" aria-describedby="basic-addon1" name="password" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <div class="modal-footer-text">
                        <p>Click
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">here</a>
                            to crete a new account
                        </p>
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
                    <a href="product_shirt.html">Shirts</a>
                </div>
                <div class="footer-item">
                    <a href="product_watch.html">Watches</a>
                </div>
                <div class="footer-item">
                    <a href="product_camera.html">Cameras</a>
                </div>
                <div class="footer-item">
                    <a href="product_shoe.html">Shoes</a>
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