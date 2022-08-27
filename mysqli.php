<?php 

$conn=new mysqli('localhost','root','','crudoperation');

if(!$conn){
    die(mysqli_error($conn));
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="insert into `crud2` (name,email,password)
    values('$name','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "kaydedildi";
       header('location:veriler.php');
    }else{
        die(mysqli_error($conn));
    }
    
    }
    
    

?>