<?php
include 'pdo-con.php';

$id= $_REQUEST("deleteid");
$pdo_st= $conn->prepare("DELETE FROM tablo1 WHERE id=" . $id);
$result= $pdo_st->execute();
if(!empty($result)){
 echo "silindi";
}else{
    echo "hata";
}

?>