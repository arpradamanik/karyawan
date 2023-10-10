<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
    <form  method="POST" >
        @csrf
        <div  class="container">
  

  <x-register type="text" label="Username" name="u_name"/>
  <span>
    @error('u_name')
        {{$massege}}
    @enderror
  </span>
  <x-register type="password" label="Password" name="u_pass"/>
  <x-register type="email" label="Email" name="u_email"/>
  <x-register type="text" label="gender" name="u_gen"/>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>