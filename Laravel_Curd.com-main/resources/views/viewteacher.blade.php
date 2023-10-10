@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <th scope="col">Gender</th>
                <th scope="col">Phone no</th>
                <th scope="col">Qualification</th>
                <th scope="col">City</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($teacher as $item)
                  
                    {{-- {{printarray($teacher->toArray())}} --}}
              
              <tr>
                <th scope="row">{{$item->teacher_name}}</th>
                <th scope="row">
                    @if ($item->teacher_gender=='M')
                        {{"Male"}}
                    @endif
                    @if ($item->teacher_gender=='F')
                        {{"Female"}}
                    @endif
                    @if ($item->teacher_gender=='M')
                        {{""}}
                    @endif
                   
                        
                   

                </th>
                <th scope="row">{{$item->teacher_PHONE}}</th>
                <th scope="row">{{$item->teacher_education}}</th>
                <th scope="row">{{$item->teacher_city}}</th>
                <th scope="row">
                    @if ($item->teacher_status==1)
                        
                    <h1 class="badge bg-success">Active</h1>
                    @endif
                    @if ($item->teacher_status==0)
                        
                    <h1 class="badge bg-warning">Inactive</h1>
                    @endif
                  
                </th>

                <th scope="row">
                    <a href="{{url('/teacher/delete')}}/{{$item->teacherid}}"><button class="btn btn-danger">Delete</button></a>
                   <a href="{{url('/teacher/update')}}/{{$item->teacherid}}"> <button class="btn btn-success">Update</button></a>
                </th>

                
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="row">
            {{-- {{$teacher->links()}} --}}
            <nav aria-label="...">
              <ul class="pagination">
                
                <li class="page-item disabled">
                              {{-- {{$teacher->links()}} --}}

                </li>
                
                
              </ul>
            </nav>
          </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>