<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $namalengkap=$_POST['namalengkap'];

    $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap')");

    header("location:login.php");
?>