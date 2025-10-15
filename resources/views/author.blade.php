<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Penulis (Authors)</h1>
    @if($authors->isEmpty())
        <p>Tidak ada data penulis ditemukan.</p>
    @else
        <table border="1" cellpadding="10" cellspacing="0" width="60%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Negara</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->country }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>