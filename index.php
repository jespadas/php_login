<?php
session_start();
require('controller/controler.php');

if (isset($_SESSION['mail'])) {
    echo '<h1>connecté</h1>';
    showRooms();
} else if (isset($_POST['username']) && isset($_POST['pass'])) {
    signIn($_POST['username'], $_POST['pass']);
} else if (isset($_POST['newUsername']) && isset($_POST['newPass']) && isset($_POST['newPassConfirm'])) {
    signUp($_POST['newUsername'], $_POST['newPass'], $_POST['newPassConfirm']);
} else if (isset($_GET['signUp'])) {
    signUpForm();
} else {
    signInForm();
}
