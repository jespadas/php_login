<?php

function getUser($user)
{
    try {
        $go_bdd = new PDO("mysql:host=localhost;dbname=room_reservation", "root", "root", null);
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }

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
    try {
        $go_bdd = new PDO("mysql:host=localhost;dbname=room_reservation", "root", "root", null);
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }

    $response = $go_bdd->query('SELECT DISTINCT * FROM rooms');
    $roomsData = $response->fetch();
    $row = $roomsData;

    if($roomsData) {
        return $roomsData;
    } else {
        echo 'no data';
        return;
    }
}
