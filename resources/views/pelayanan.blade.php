<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pelayanan</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
	<style>
		h2{
			padding-left: 100px;
			padding-top: 50px;
		}
	</style>
	<h2>Paket Kitten</h2>
	<div style="text-align: right; width: 97%;">
		<a class="btn-back" href="/tambahkitten">Tambah</a>
		<a class="btn-back" href="/dashboard">Kembali</a>
	</div>

	<table class="data-table">
		<br>
		<thead>
			<tr>
				<th>No</th>
				<th>Paket Grooming</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php $no=1 ?>	
				@foreach($groomings as $grooming)
				<td>{{ $no++ }}</td>
				<td>{{ $grooming->nama_paket }}</td>
				<td>{{ $grooming->harga }}</td>
				<td>
					<br>
					<a class="btn-dlt" href="/delete/{{ $grooming->id }}" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a> <br>
					<a class="btn-edt" href="/edit_kitten/{{ $grooming->id }}">Edit</a>
				</td>
            </tr>
				@endforeach

</tbody>
	</table>

	<br>

	<h2 class="content-text2">Paket Adult</h2>
	<div style="text-align: right; width: 97%;">
		<a class="btn-back" href="/tambahadult">Tambah</a>
		<a class="btn-back" href="/dashboard">Kembali</a>
	</div>

	<table class="data-table">
		<br>
		<thead>
			<tr>
				<th>No</th>
				<th>Paket Grooming</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php $no=1 ?>	
				@foreach($adults as $adult)
				<td>{{ $no++ }}</td>
				<td>{{ $adult->nama_paket }}</td>
				<td>{{ $adult->harga }}</td>
				<td>
					<br>
					<a class="btn-dlt" href="/hapus/{{ $adult->id }}" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a> <br>
					<a class="btn-edt" href="/editadult/{{ $adult->id }}">Edit</a>
				</td>
            </tr>
				@endforeach

</tbody>
	</table>

</body>
</html>