<?php
session_start();
$error = '';
require 'storage.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if (empty($username) || empty($password)) {
        $error = 'Логин и пароль не могут быть пустыми.';
    } elseif (!isset($users[$username])) {
        $error = 'Пользователь не найден.';
    } elseif ($users[$username] !== $password) {
        $error = 'Неверный пароль.';
    } else {
        $_SESSION['username'] = $username;
        header('Location: about.php');
    }
}
require 'login_form.html';
?>