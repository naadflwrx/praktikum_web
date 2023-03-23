<?php
    if(isset($_POST['submit'])){
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
    
        echo "</br> Nama Customer: $customer";
        echo "</br> Produk Pilihan: $produk";
        echo "</br> Jumlah Beli:  $jumlah";


    if ($produk ==  "TV") {
        echo "</br> Total Belanja: " . ($jumlah * 4200000);
    } elseif ($produk == "KULKAS") {
        echo "</br> Total Belanja: " . ($jumlah * 3100000);
    } elseif ($produk == "MESIN") {
        echo "</br> Total Belanja:  " . ($jumlah * 3800000);
    }
    }
?>