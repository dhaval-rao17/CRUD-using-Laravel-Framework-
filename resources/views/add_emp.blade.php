<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background:lightblue;

        }
        .container{
            border:2px solid black;
        }
    </style>
</head>
<body><center>
    <div class='container'><div class='col-8'>
        <h1>Add Employee Details</h1>
        <form action="save_data" method="POST">
            @csrf
        <input type="text" name="ename" placeholder="Enter Employee Name" class="form-control">
        <br><br>
        <input type="text" name="post" placeholder="Enter Employee Post" class="form-control">
        <br><br>
        <input type="number" name="contact" placeholder="Enter Employee contact" class="form-control">
        <br><br>
        <input type="number" name="salary" placeholder="Enter Employee Salary" class="form-control">
        <br><br>
        <button class='btn btn-success'>Submit</button>

    </form>
    
    </div></div>
    </center>
    
</body>
</html>