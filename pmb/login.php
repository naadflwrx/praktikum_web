<?php
// cek terlebih dahulu apakah user sudah submit form login atau belum
// gunakan method isset
if (isset($_POST['login'])){
    // ambil data yang di inputkan user berdasarkan uniq name
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    
    // validasi username dan password nya disini
if ($username == "Sina" && $password == "12345"){
    
// jika username dan password sama, arahkan ke file home.php
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
}else{
    // jika username dan password beda, tampilkan pesan error username salah
// dan tetap di halaman index/login.php

    header("Location: index.php");
    exit();
}

}

?>