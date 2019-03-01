<?php 
session_start();

require('controller/controler.php');
if (isset($_SESSION['mail'])) {
    echo '<h1>connecté</h1>';
    showRooms();
} else if (isset($_POST['username']) && isset($_POST['pass'])) {
    login($_POST['username'], $_POST['pass']);
} else {
    welcome();
}





