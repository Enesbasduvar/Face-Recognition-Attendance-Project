<?php
// Başlatılan oturumu devam ettir
global $db;
session_start();
ob_start();

// Kullanıcı giriş bilgilerini al
$user_mail = $_POST['user_mail'];
$user_password = $_POST['user_password'];

// Veritabanı bağlantısını dahil et
require '../database.php';

// Kullanıcıyı veritabanından kontrol et
$query = "SELECT * FROM user_table WHERE user_mail = :user_mail AND user_password = :user_password";
$statement = $db->prepare($query);
$statement->bindParam(':user_mail', $user_mail);
$statement->bindParam(':user_password', $user_password);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

// Kullanıcı var mı kontrol et
if ($user) {
    // Oturumu başlat
    $_SESSION['user_mail'] = $user_mail;
    header('Location: ../dashboard.php');
    exit;
} else {
    $_SESSION['error'] = "Girdiğin şifre yanlış.";
    header('Location: ../login.php');
    exit;
}
?>
