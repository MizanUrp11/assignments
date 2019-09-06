<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All user</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>photo</td>
            <td>username</td>
            <td>firstname</td>
            <td>lastname</td>
            <td>email</td>
            <td>phone</td>
            <td>gender</td>
            <td>location</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        
        @foreach(\App\User::all() as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td><img src="{{ asset('image/'.$row->image) }}" alt="" style="width:50px"></td>
            <td>{{ $row->username }}</td>
            <td>{{ $row->firstname }}</td>
            <td>{{ $row->lastname }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->location }}</td>
            <td><a href="{{ route('user.edit',[$row->id]) }}">Edit</a></td>
            <td><a href="{{ route('user.delete',[$row->id]) }}">Delete</a></td>
        </tr>
        @endforeach
        
    </table>
    <hr>
    <hr>
    <a href="{{ route('user.register') }}">Add data</a>
</body>
</html>