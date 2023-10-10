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
          <label for="inputEmail4" class="form-label">Teacher Name</label>
          <input type="text" class="form-control" name="teacher_name" value="{{$teacherinfo->teacher_name}}"  id="inputEmail4">
        
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Teacher No</label>
          <input type="text" name="teacher_PHONE" class="form-control" value="{{$teacherinfo->teacher_PHONE}}" id="inputPassword4">
         
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Teacher Qualification</label>
          <input type="text" name="teacher_education" class="form-control text-uppercase" value="{{$teacherinfo->teacher_education}}" id="inputPassword4">
         
        </div>
      
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" name="teacher_city" value="{{$teacherinfo->teacher_city}}" id="inputCity">
         
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" name="teacher_gender"  class="form-select">
           
            <option selected >
                @if ($teacherinfo->teacher_gender=="M")
                    Male
                    @elseif($teacherinfo->teacher_gender=="F")
                    Female
                    @else
                    othre
                @endif
            </option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">other</option>
          </select>
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