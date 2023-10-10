@include('navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    {{------------------------------- boostrap link -------------------------------}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Insert</title>
</head>
<body>

<div class="container">
    <div class="bg-info" >
        <h1 class="text-center">Teacher form</h1>
    </div>
    <form class="row g-3" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="text" class="form-control" name="karyawan_name" value="{{$karyawan->karyawan_name}}"  id="inputEmail4">
        
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Kebun/Unit</label>
          <input type="text" class="form-control" name="karyawan_kebun" value="{{$karyawan->karyawan_kebun}}"  id="inputEmail4">
        
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Jenis Lisensi</label>
          <input type="text" class="form-control" name="karyawan_jenis" value="{{$karyawan->karyawan_jenis}}"  id="inputEmail4">
        
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Nomor Lisensi</label>
          <input type="text" name="karyawan_nomor" class="form-control" value="{{$karyawan->karyawan_nomor}}" id="inputPassword4">
         
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Tanggal</label>
          <input type="text" name="karyawan_tanggal" class="form-control text-uppercase" value="{{$karyawan->karyawan_tanggal}}" id="inputPassword4">
         
        </div>
      
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Masa Berlaku</label>
          <input type="text" class="form-control" name="karyawan_masa" value="{{$karyawan->karyawan_masa}}" id="inputCity">
         
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
</div>

    {{------------------------------- boostrap link -------------------------------}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>