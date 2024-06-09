<?
global $db;
// Veritabanı bağlantısı için gerekli bilgiler
$servername = "localhost"; // Veritabanı sunucusunun adresi
$username = "root"; // Veritabanı kullanıcı adı
$password = "root"; // Veritabanı parolası
/** @var TYPE_NAME $dbname */
$dbname = "app"; // Kullanılacak veritabanının adı

try {
    // PDO nesnesi oluştur ve veritabanına bağlan
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Hata modunu ayarla
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Bağlantı hatası durumunda hata mesajını göster
    echo "Veritabanına bağlanırken bir hata oluştu: " . $e->getMessage();
}
?>
