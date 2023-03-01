<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="styletab2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #fbe2b9;">
    <br><br>
    <br><br>
    <br><br>
    <div style="text-align: right; width: 97%;" class="btn.aa">
        <a class="btn-back" href="/tambahPemesanan">Tambah</a>
        <a class="btn-back" href="/dashboard">Kembali</a>
    </div>

    <table class="data-table">
        <br>
        <thead>
            <tr>
                <th>No</th>
                <th>Paket</th>
                <th>Food</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
			<?php $no=1 ?>
			@foreach($pesanan as $p)
            <tr>
				<td>{{ $no++ }}</td>
				<td>{{ $p->paket }}</td>
				<td>{{ $p->food }}</td>
				<td>{{ $p->total_harga }}</td>
                <td>
                    <br>
                    <a class="btn btn-danger btn-sm mt-0" href="/delete_pesan/{{ $p->id }} " onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a> <br>
                    <a class="btn btn-warning btn-sm mt-1" href="/editPesan/{{ $p->id }}">Edit</a>
                    <a class="btn btn-secondary btn-sm mt-1" href="/cetak-struk/{{ $p->id }}" target="_blank">Cetak</a>
                </td>
			</tr>
			@endforeach
		</tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html> 
