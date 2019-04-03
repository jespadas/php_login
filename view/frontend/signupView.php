<?php

$title = "Sign up";

ob_start();
?>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="index.php" method="POST">
                <span class="login100-form-title">
                    Sign Up
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="email" name="newUsername" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter password">
                    <input class="input100" type="password" name="newPass" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                <br />
                <div class="wrap-input100 validate-input" data-validate="Please confirm your password">
                    <input class="input100" type="password" name="newPassConfirm" placeholder="Confirm your password">
                    <span class="focus-input100"></span>
                </div>
                <br />
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Sign up
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                    <span class="txt1 p-b-9">
                        Do you have an account?
                    </span>

                    <a href="index.php" class="txt3">
                        Sign in
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

require("template.php");
