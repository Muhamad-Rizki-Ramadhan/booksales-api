<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Penulis</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Bio</th>
        </tr>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td><img src="/images/{{ $author->photo }}" width="80"></td>
            <td>{{ $author->bio }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
