<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pet Food</title>
    <link rel="stylesheet" type="text/css" href="styletab2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <br><br>
    <br><br>
    <br><br>
    <div style="text-align: right; width: 97%;" class="btn.aa">
        <a class="btn-back" href="/tambah_food">Tambah</a>
        <a class="btn-back" href="/dashboard">Kembali</a>
    </div>

    <table class="data-table">
        <br>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
			<?php $no=1 ?>
			@foreach($food as $f)
            <tr>
				<td>{{ $no++ }}</td>
                <td>
                    <img src="{{ asset('img/Petfood/' . $f->gambar_food) }}" class="img-fluid" style="width: 100px;" alt="" srcset="">
                </td>
				<td>{{ $f->merk }}</td>
				<td>{{ $f->harga }}</td>
				<td>{{ $f->stok }}</td>
                <td>
                    <br>
                    <a class="btn-dlt" href="/hilang/ {{ $f->id }} " onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a> <br>
                    <a class="btn-edt" href="/edit_food/{{ $f->id }}">Edit</a>
                </td>
			</tr>
			@endforeach
		</tbody>
    </table>
</body>

</html> 
