<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit user</title>
</head>
<body>
   
   @include('error.error')
   
   
    <form action="{{ route('user.update',[$row->id]) }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
        <input type="text" name="username" value="{{ $row->username }}"><br>
        <input type="text" name="firstname" value="{{ $row->firstname }}"><br>
        <input type="text" name="lastname" value="{{ $row->lastname }}"><br>
        <input type="text" name="email" value="{{ $row->email }}"><br>
        <input type="text" name="phone" value="{{ $row->phone }}"><br>
        <label for="male">male</label>
        <input type="radio" name="gender" value="male" id="male" checked>
        <label for="female">female</label>
        <input type="radio" name="gender" value="female" id="female"><br>
        
        <select name="location">
            <option value="{{ $row->location }}" selected>{{ $row->location }}</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
        </select><br>
        
        <img src="{{ asset('image/'.$row->image) }}" alt="" style="width:100px"><br>
        
        <input type="file" name="image" accept="image/jpeg">
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>