<?php

function connectBD(){
    $server = "mysql:host=localhost;dbname=room_reservation";
    $username = "root";
    $password = "root";
    $options = null;
    try {
        $go_bdd = new PDO($server, $username, $password, $options);
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}

function getUser($user)
{

    connectBD();
    global $go_bdd;
    $response = $go_bdd->query('SELECT * FROM users WHERE mail = "' . $user . '"');
    $userData = $response->fetch();

    if ($userData) {
        return $userData;
    }
    echo 'no data';
    return;
}

function getRooms()
{
    connectBD();
    global $go_bdd;
    $response = $go_bdd->query('SELECT DISTINCT * FROM rooms');
    $roomsData = $response->fetch();
    //$row = $roomsData;

    if($roomsData) {
        return $roomsData;
    } else {
        echo 'no data';
        return;
    }
}
