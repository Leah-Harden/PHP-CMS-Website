<?php
//Getting data from forms!
if (isset($_POST['submit'])) {

    $namelog = ['Astarion', 'GaleGale', 'WyllWyll', 'ShadowHeart'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if
    //(strlen($username || $password) < 8) this return a boolean value (either true or false), it will return true
    (strlen($username) < 8 || strlen($password) < 8) {
        echo "username and password must be at least 8 characters long";
    } elseif (!in_array($username, $namelog)) {
        echo "Please make an account!";
    } else {
        echo 'hello ' . $username;
    };
};
