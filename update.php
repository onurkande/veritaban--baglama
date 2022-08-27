<?php

    require_once "./controller/conn.php";

    $query = $conn->prepare("UPDATE tablo1 SET
    uye_kadi = :yeni_kadi
    WHERE uye_kadi = :eski_kadi");
    $update = $query->execute(array(
        "yeni_kadi" => "prototürk",
        "eski_kadi" => "Tayfun Erbilen"
    ));
    if ( $update ){
        print "güncelleme başarılı!";
    }

?>