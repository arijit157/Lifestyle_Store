<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <?php 
                    if(!isset($_SESSION['user_id']))  //if the user is not logged in 
                    {
                    ?>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">
                        <i class="fa-solid fa-user"></i> Signup
                    </a>
                    <div class="nav-vl"> | </div>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">
                        <i class="fa-solid fa-right-to-bracket"></i>Login
                    </a>
                    <?php 
                    }
                    else{?>  <!--if the user is logged in-->
                    <div class="nav-name">
                        <p>Hello, <?php echo $_SESSION['user_name']?></p>
                    </div>
                    <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-user"></i> Dashboard
                    </a>
                    <div class="nav-vl"> | </div>
                    <a class="nav-link" href="logout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Logout
                    </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <div id="loading"></div>