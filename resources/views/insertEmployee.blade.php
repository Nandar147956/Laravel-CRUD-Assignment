<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <style>
        input[type=text], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
        .button1 {border-radius: 2px;width:10%}
    </style>
</head>
<body>
 <form action="{{url('store-employee')}}" method="get" style="text-align: center;" >
 @csrf
        <h1>Create Employee</h1>
        <label for="fname">First Name</label>
        <input type="text" name="first_name" placeholder="Enter First Name"><br><br>
        <label for="lname">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter last Name"><br><br>
        <label for="job">Job</label>
        <input type="text" name="job" placeholder="Enter job"><br><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" placeholder="Enter Phone No"><br><br>
        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter Address"><br><br>
        <label for="fname">Age</label>
        <input type="text" name="age" placeholder="Enter age"><br><br>
        <button type="submit" class="button1">Submit</button>
</form>
</body>
</html>
