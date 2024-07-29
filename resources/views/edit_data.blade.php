<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background:lightgray;

        }
        .container{
            border:2px solid black;
        }
    </style>
</head>
<body><center>
    <div class='container'><div class='col-8'>
        <h1>Update Employee Record</h1>
        <form action="\update_data" method="POST">
            @csrf
            <input type="text" name="id" value="{{$emp_data['id']}}" hidden>
        <input type="text" name="ename"  class="form-control"  value="{{$emp_data['ename']}}">
        <br><br>
        <input type="text" name="post"  class="form-control"  value="{{$emp_data['post']}}">
        <br><br>
        <input type="number" name="contact"  class="form-control"  value="{{$emp_data['contact']}}">
        <br><br>
        <input type="number" name="salary"  class="form-control"  value="{{$emp_data['salary']}}">
        <br><br>
        <button class='btn btn-success'>Update</button>

    </form>
    
    </div></div>
    </center>
    
</body>
</html>