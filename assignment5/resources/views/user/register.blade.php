<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
   
   @include('error.error')
   
    <form action="{{ route('user.register') }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
        <input type="text" name="username" placeholder="username"><br>
        <input type="text" name="firstname" placeholder="firstname"><br>
        <input type="text" name="lastname" placeholder="lastname"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="number" name="phone" placeholder="phone"><br>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="male" id="male">
        <label for="female">Feale</label>
        <input type="radio" name="gender" value="Female" id="female">
        <br>
        <select name="location">
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
        </select><br>
        
        <input type="file" name="image" accept="image/jpeg"><br>
        
        <input type="submit" value="Register" name="register">
        
    </form>
    <hr>
    <hr>
    <a href="{{ route('user.all') }}">View all users</a><br>
<a href="{{ route('user.login') }}" target="_blank">Login</a>
<br>
<a href="{{ route('user.logout') }}">Logout</a>
</body>
</html>