<?php
// Veritabanı bağlantısı
include '../database.php';

// GET isteğini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // GET parametrelerini al
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $roll = isset($_GET['roll']) ? $_GET['roll'] : null;
    $time = isset($_GET['time']) ? $_GET['time'] : null;

    // Eksik veri kontrolü
    if ($name === null || $roll === null || $time === null) {
        http_response_code(400); // Geçersiz istek
        echo json_encode(array("message" => "Lütfen tüm alanları doldurun."));
        exit;
    }

    try {
        // SQL sorgusunu hazırla ve veritabanına ekle
        $query = "INSERT INTO edituser (names, 	rolls, time) VALUES (?, ?, ?)";
        $statement = $db->prepare($query);

        // Sorguyu çalıştır ve sonucu kontrol et
        if ($statement->execute([$name, $roll, $time])) {
            // Başarılı yanıt döndür
            http_response_code(201); // Yaratıldı
            echo json_encode(array("message" => "Veriler başarıyla eklendi."));
        } else {
            // Hata oluştuğunda hata mesajını döndür
            http_response_code(500); // İç Sunucu Hatası
            echo json_encode(array("message" => "Veriler eklenirken bir hata oluştu."));
        }
    } catch (PDOException $e) {
        // Hata oluştuğunda hata mesajını döndür
        http_response_code(500); // İç Sunucu Hatası
        echo json_encode(array("message" => "Veriler eklenirken bir hata oluştu: " . $e->getMessage()));
    }
} else {
    // Desteklenmeyen istek türü
    http_response_code(405); // İzin Verilmiyor
    echo json_encode(array("message" => "Bu endpoint yalnızca GET isteklerini kabul eder."));
}
?>
