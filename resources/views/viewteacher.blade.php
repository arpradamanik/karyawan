@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTPN III</title>
</head>
<body>
    <div class="container mt-5">
      <form class="d-flex mb-5" >
        <input class="form-control me-2" value="{{$search}}" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
        <table class="table table-dark">
            <thead >
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Kebun/Unit</th>
                <th scope="col">Jenis Lisensi</th>
                <th scope="col">Nomor lisensi</th>
                <th scope="col">Tanggal Lisensi</th>
                <th scope="col">Masa Berlaku</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($karyawan as $item)
                  
                    {{-- {{printarray($karyawan->toArray())}} --}}
              
              <tr>
                <th scope="row">{{$item->karyawan_name}}</th>
                <th scope="row">{{$item->karyawan_kebun}}</th>
                <th scope="row">{{$item->karyawan_jenis}}</th>
                <th scope="row">{{$item->karyawan_nomor}}</th>
                <th scope="row">{{$item->karyawan_tanggal}}</th>
                <th scope="row">{{$item->karyawan_masa}}</th>
                <th scope="row">
                    @if ($item->karyawan_status==1)
                        
                    <h1 class="badge bg-success">Active</h1>
                    @endif
                    @if ($item->karyawan_status==0)
                        
                    <h1 class="badge bg-warning">Inactive</h1>
                    @endif
                  
                </th>

                <th scope="row">
                    <a href="{{url('/teacher/delete')}}/{{$item->karyawanid}}"><button class="btn btn-danger">Delete</button></a>
                   <a href="{{url('/teacher/update')}}/{{$item->karyawanid}}"> <button class="btn btn-success">Update</button></a>
                </th>

                
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="row">
            {{-- {{$karyawan->links()}} --}}
            <nav aria-label="...">
              <ul class="pagination">
                
                <li class="page-item disabled">
                              {{-- {{$karyawan->links()}} --}}

                </li>
                
                
              </ul>
            </nav>
          </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>