<?php
global $db;
require_once("../database.php");



// POST verilerini alalım
$user_mail = $_POST['user_mail'];
$user_password = $_POST['user_password'];
$user_name = $_POST['user_name'];
$user_surname = $_POST['user_surname'];
$user_dateofbirth = $_POST['user_dateofbirth'];

// SQL sorgusu oluşturalım ve kullanıcı bilgilerini veritabanına ekleyelim
$sql = "INSERT INTO user_table (user_mail, user_password, user_name, user_surname, user_dateofbirth) 
        VALUES (:user_mail, :user_password, :user_name, :user_surname, :user_dateofbirth)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':user_mail', $user_mail);
$stmt->bindParam(':user_password', $user_password);
$stmt->bindParam(':user_name', $user_name);
$stmt->bindParam(':user_surname', $user_surname);
$stmt->bindParam(':user_dateofbirth', $user_dateofbirth);

try {
    $stmt->execute();

    header('Location: ../index.php');
    exit;
} catch(PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

// Veritabanı bağlantısını kapat
$db = null;
?>
