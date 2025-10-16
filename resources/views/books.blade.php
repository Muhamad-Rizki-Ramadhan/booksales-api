<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penulis</th>
            <th>Cover</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
            <td>{{ $book->stock }}</td>
            <td>{{ $book->author->name }}</td>
            <td><img src="/images/{{ $book->cover_photo }}" width="80"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
