<?php

function connectBD()
{
    $server = "mysql:host=localhost;port=3307;dbname=room_reservation";
    $username = "root";
    $password = "";
    try {
        $go_bdd = new PDO($server, $username, $password);
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
    return $go_bdd;
}

function getUser($user)
{
    $go_bdd = connectBD();
    $request = $go_bdd->prepare('SELECT * FROM users WHERE mail = :mail');
    $request->execute([':mail' => $user]);
    $userData = $request->fetch();

    if ($userData) {
        return $userData;
    }
    return false;
}

function insertNewUser($newUser, $newPassword)
{
    $go_bdd = connectBD();
    $request = $go_bdd->prepare('INSERT INTO users VALUES (NULL,:mail,:password)');
    $request->execute([':mail' => $newUser, ':password' => $newPassword]);
}

function getRooms()
{
    $go_bdd = connectBD();
    $request = $go_bdd->prepare('SELECT DISTINCT * FROM users WHERE rooms');
    $request->execute();
    $roomsData = $request->fetch();

    if ($roomsData) {
        return $roomsData;
    } else {
        echo 'no data';
        return;
    }
}
