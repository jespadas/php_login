<?php
require('model/model.php');
//Esta funcion solo llama un documento de interface welcome
function welcome()
{
    require('view/frontend/welcomeView.php');
}

function showRooms()
{
    require('view/frontend/roomsView.php');
}

function login($user, $password)
{
    $userData = getUser($user);
    if (password_verify($password, $userData['password'])) {
        $_SESSION['mail'] = $userData['mail'];
    } else {
        echo "<h1>Error</h1>";
    }
}

function logout()
{
    session_destroy();
    welcome();
    header('Location: /');
}

