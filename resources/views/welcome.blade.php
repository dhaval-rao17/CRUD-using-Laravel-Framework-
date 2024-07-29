<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            padding:50px 40px;
            background-image:url("https://img.freepik.com/free-vector/white-abstract-background_23-2148817571.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            font-family:verdana;
        }
        a{
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <div class="col-9">
        <h1>Employee Records</h1>
        <button class="btn btn-success"> <a href="add_emp" style="color:white;">Add Employee Details</a></button>
        <hr>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Employee Id</th>
                <th>Name</th>
                <th>Post</th>
                <th>Contact</th>
                <th>Salary</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
            @foreach($show_emp as $alldata)
                <td>{{$alldata['id']}}</td>
                <td>{{$alldata['ename']}}</td>
                <td>{{$alldata['post']}}</td>
                <td>{{$alldata['contact']}}</td>
                <td>{{$alldata['salary']}}</td>
                <td><button class="btn btn-primary"><a href="/edit_data/{{$alldata['id']}}">Edit</a></button></td>
                <td><button class="btn btn-danger"> <i class="fa-solid fa-trash"><a href="/del/{{$alldata['id']}}">Delete</a></i></button></td>
               
            </tr>
            @endforeach
            
            
        </table>
        </div>
    </div>
    </center>
    
</body>
</html>