<?php

    const host = "localhost";
    const username = "root";
    const password = "";
    const database = "motivasyondb";
    
    $baglanti = mysqli_connect(host, username, password, database);

    if(mysqli_connect_errno() > 0){
        die("hata: ".mysqli_connect_errno());
    }

    echo "mysql bağlantısı oluşturuldu.";

    // sql sorgularını yazacagız.

    mysqli_close($baglanti);

    echo "mysql baglantısı kapatıldı.";



?>
