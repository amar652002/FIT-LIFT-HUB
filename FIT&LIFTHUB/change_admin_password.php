<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
include 'database.php';
if (isset($_POST['submit'])) {
    $sql = "SELECT password FROM users WHERE id = {$_SESSION['user_id']}";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    if (!password_verify($_POST['current_password'], $row['password'])) {
        $error_message = 'Incorrect current password.';
    } else {
        if (strlen($_POST['new_password']) < 8) {
            $error_message = 'Password must be at least 8 characters long.';
        } elseif ($_POST['new_password'] !== $_POST['confirm_password']) {
            $error_message = 'New password and confirm password do not match.';
        } else {
            $hashed_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
            $sql = "UPDATE users SET password = '{$hashed_password}' WHERE id = {$_SESSION['user_id']}";
            $db->query($sql);
            $success_message = 'Password has been changed.';
        }
    }
}
