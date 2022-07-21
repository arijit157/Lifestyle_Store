<div class="modal fade" id="signup-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Signup with LifeStyle Store</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" class="form" method="POST" action="user_authentication/signup_submit.php" id="signup-form">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="full_name" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" name="email" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="password" minlength="8" maxlength="8" aria-describedby="basic-addon1" name="password" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Mobile" aria-label="mobile" aria-describedby="basic-addon1" maxlength="10" minlength="10" name="mobile" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Address" aria-label="address" aria-describedby="basic-addon1" name="address" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-map-pin"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="PIN code" aria-label="pin-code" aria-describedby="basic-addon1" minlength="6" maxlength="6" name="pin_code" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary my-btn">Create Account</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-text">
                    <p>Already have one?
                        <a href="#" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>