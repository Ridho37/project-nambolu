<?php

session_start();
include "../config/database.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = ?";

$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "s", $username);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user   = mysqli_fetch_assoc($result);

if($user && password_verify($password, $user['password'])){
    $_SESSION['user_id']    = $user['id'];
    $_SESSION['name']       = $user['name'];
    $_SESSION['username']   = $user['username'];
    $_SESSION['password']   = $user['password'];
    header("Location: dashboard-page.php");
    exit;
}else{
    $error_message = "Username atau password salah!";
    echo "<script>alert('$error_message')</script>";
    header("Location: ../views/dashboard/dashboard-login.php");
    exit;
}