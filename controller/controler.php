<?php
require('model/model.php');
//Esta funcion solo llama un documento de interface welcome
function signInForm()
{
    require('view/frontend/signinView.php');
}

function signUpForm(){
    require('view/frontend/signupView.php');
}

function showRooms()
{
    require('view/frontend/roomsView.php');
    if (isset($_POST['logout'])){
        logout();
    }
}

function signIn($user, $password)
{
    $userData = getUser($user);
    if (password_verify($password, $userData['password'])) {
        $_SESSION['mail'] = $userData['mail'];
        header('Location: index.php');
    } else {
        echo "<h1>Error your username and password do not match !</h1>";
    }
}

function signUp($user,$newPassword,$newPasswordConfirm){
    if ($newPassword == $newPasswordConfirm) {
        if(getUser($user)) {
            echo "This username name is already taken !";
            echo "<a href='index.php' class='txt3'>Back</a>";
        } else {
            $password = password_hash($newPassword,PASSWORD_DEFAULT);
            insertNewUser($user,$password);
            header('Location: ../index.php');
        }
    } else {
        echo "Your password do not match !";
    }
}

function logout()
{
    session_destroy();
    header('Location: index.php');
}

