<?php
// Oturumu başlat
session_start();

// Oturumu sonlandır
session_destroy();

// Kullanıcıyı başka bir sayfaya yönlendir (isteğe bağlı)
header("Location: index.php");
exit;
?>