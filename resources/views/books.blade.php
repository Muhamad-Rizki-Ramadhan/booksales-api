<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Koleksi Buku Lengkap</h1>

    {{-- Cek apakah ada data buku --}}
    @if($books->isEmpty())
        <p>Tidak ada data buku ditemukan.</p>
    @else
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis (Author)</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Cover Photo</th>
                    <th>Deskripsi Singkat</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop untuk menampilkan setiap buku --}}
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td><strong>{{ $book->title }}</strong></td>
                        {{-- Mengakses nama penulis melalui relasi 'author' --}}
                        <td>{{ $book->author->name ?? 'Penulis Tidak Ditemukan' }}</td>
                        <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>{{ $book->cover_photo }}</td>
                        <td>{{ $book->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
