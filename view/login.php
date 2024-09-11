<br><br><br>
<div class="container p-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="login_controller.php" class="border border-dark p-5">

                <p class="h4 mb-4 text-center">LOGIN</p>

                <label for="">Username</label>
                <input type="text" name="username" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="" required>

                <label for="">Password</label>
                <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="" required>

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <div class="text-center">
                    <p>Not have a account?
                        <a href="index.php?page=pages/register">Register</a>
                    </p>

                    <p>or sign in with:</p>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

</div>