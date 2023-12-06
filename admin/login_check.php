<?php
session_start();

require('db_connect.php');

$db = db_connect();

if((!$_POST['name']) && (!$_POST['pass'])) {
    $username = $_POST['name'];
    $password = $_POST['pass']


    $sql = 'SELECT * FROM users WHERE username = :username';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header('Location: admin.php');
    }
}

?>

