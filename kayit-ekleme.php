<?php

    include "ayar.php";

    $query = "INSERT INTO mesajbilgileri(isim_soyisim,email,mesaj) VALUES('')";




    mysqli_close($baglanti);
    echo "mysql baglantısı kapatıldı.";

?>