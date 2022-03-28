<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            margin: 20px;
            padding: 25px 30px;
            color: red;
            font-size: 50px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<p>
You are viewing the details of {{$employee1->last_name}}
<table border=3 >
<tr>
    <th >Employee ID</th>
    <td>{{$employee1->id}}</td>
</tr>
<tr>
    <th>First name</th>
    <td>{{$employee1->first_name}}</td>
</tr>
<tr>
    <th>Last name</th>
    <td>{{$employee1->last_name}}</td>
</tr>
<tr>
    <th>Address</th>
    <td>{{$employee1->address}}</td>
</tr>
<tr>
    <th>Gender</th>
    <td>{{$employee1->gender}}</td>
</tr>
<tr>
    <th>Email</th>
    <td>{{$employee1->email}}</td>
</tr>
<tr>
    <th>Mobile</th>
    <td>{{$employee1->mobile}}</td>
</tr>
<tr>
    <th>Date of Birth</th>
    <td>{{$employee1->dob}}</td>
</tr>
<tr>
    <th>Salary</th>
    <td>Rs {{$employee1->salary}}.00</td>
</tr>
</table>
</p>

<button type="submit" class="btn btn-dark"><a href="{{route('employees.index')}}">Go back</a></button>
</body>
</html>
