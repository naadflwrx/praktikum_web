<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="m-4">
        <div class="col-4 float-right">
            <ul class="list-group;">
                <li class="list-group-item bg-primary text-white">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">KULKAS : 3.100.000</li>
                <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                <li class="list-group-item bg-primary text-white">Harga Dapat Berubah Setiap Saat</li>
            </ul>
        </div>
    </div>

    <form method="POST" action="form_belanja.php">
        <div class="container">
            <h2>Belanja Online</h2>
            <hr>

        <!-- nama costumer --->
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
        </div>
        </div>

        <!-- jenis-jenis produk --->
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
        <div class="col-8">

        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
            <label for="produk_0" class="custom-control-label">TV</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
            <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN"> 
            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
        </div>
        </div>

        <!-- jumlah produk --->
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
        </div>
        </div>

        <!-- submit --->
        <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" value="submit" type="submit" class="btn btn-success">Kirim</button>
        </div>
        </div>
        </div>
    </form>
    <br>
    <br>
    <hr>

    <!-- tag php --->
    <?php
    require_once 'fungsi.php';
    ?>

</body>
</html>
