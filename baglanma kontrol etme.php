if($conn){
    echo "veritabaný baglandý";
}
else{
    die(mysqli_error($conn));
}
