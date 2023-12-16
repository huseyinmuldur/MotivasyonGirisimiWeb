<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "benimveritabanım";

// MySQL bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form verilerini al
$isim_soyisim = $_POST['isim_soyisim'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];

// Veritabanına ekle
$sql = "INSERT INTO iletisimform (isim_soyisim, email, mesaj) VALUES ('$isim_soyisim', '$email', '$mesaj')";

if ($conn->query($sql) === TRUE) {
     ?>
       <script> alert("mesaj gönderildi."); </script>
    <?php ;
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Bağlantıyı kapat
$conn->close();
?>

