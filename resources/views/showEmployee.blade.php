<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>user</title>
    <style>
        .btn{width:100%}

        .customer {
          font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
       }

       .customer td, .customer th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customer tr:nth-child(even){background-color: #f2f2f2;}

.customer tr:hover {background-color: #ddd;}

.customer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.button {
  background-color: #8687a6; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-decoration: none;
  font-size: 10px;
  display: block;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 2px;width:40px}
    </style>


</head>
<body>

 <div class='btn'>
    <a href="{{route('createEmployee')}}">
    <button type="button" class="btn btn-primary btn-lg btn-block" text-align="center">Create</button><br><br>
    </a>
</div>
<table class="customer">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Job</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

        @foreach ($employees as $employee)
    <tr>
      <td> {{$employee->first_name}}</td>
      <td>{{$employee->last_name}}</td>
      <td>{{$employee->job}}</td>
      <td>{{$employee->phone}}</td>
      <td>{{$employee->address}}</td>
      <td>{{$employee->age}}</td>
      <td>
        <a href= "{{route('editEmployee',$employee->id)}}">
        <button type="submit" class="button button1" name="action" value="edit">Edit</button>
        </a>
        <a href="{{route('delete',$employee->id)}}">
        <button type="submit" class="button button2" name="action" value="delete">Delete</button>
        </a>
    </td>
    </tr>
     @endforeach


</table>
</form>
</body>
</html>
