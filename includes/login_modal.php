<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="login-form" method="POST" action="user_authentication/login_submit.php">
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
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
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