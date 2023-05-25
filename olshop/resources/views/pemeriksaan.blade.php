<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<h1 class="text-center">{{$heading}}</h1>

<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_periksa" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-2">
      <input id="tgl_periksa" name="tgl_periksa" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir / Usia</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" required="required" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" required="required" class="custom-control-input" value="laki"> 
        <label for="jk_0" class="custom-control-label">Laki - laki</label>
      </div>
    </div>
  </div> 
</form>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Jenis Tes</th>
      <th scope="col">Hasil Pemeriksaan</th>
      <th scope="col">Normal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tekanan darah</th>
      <td></td>
      <td>{{$Td}}</td>
    </tr>
    <tr>
      <th scope="row">Asam urat</th>
      <td></td>
      <td>{{$Au}}</td>
    </tr>
    <tr>
      <th scope="row">Kolesterol total</th>
      <td></td>
      <td>{{$Kt}}</td>
    </tr>
    <tr>
      <th scope="row">Gula darah</th>
      <td></td>
      <td>
        {{$Gd1}}<br/>
        {{$Gd2}} <br/>
        {{$Gd3}}
    </td>
    </tr>
  </tbody>
</table>

    
  </body>
</html>