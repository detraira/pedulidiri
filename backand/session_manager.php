<?php
session_start();

// Check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['login']) && $_SESSION['login'] === true;
}

// Redirect to the login page if not logged in
function redirectToLogin() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

// Redirect to the index page if logged in
function redirectToIndex() {
    if (isLoggedIn()) {
        header("Location: index.php");
        exit();
    }
}
function redirectToFrmulir() {
    if (isLoggedIn()) {
        header("Location: formulir_tambah_data.php");
        exit();
    }
}
function redirectToCatatan() {
    if (isLoggedIn()) {
        header("Location: catatan.php");
        exit();
    }
}

?>
