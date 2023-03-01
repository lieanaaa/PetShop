<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="{{asset('styletab2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body style="background-color: #fbe2b9;">
    <br><br>
    <br><br>
    <br><br>
    <table class="data-table">
        <br>
        <thead>
            <tr>
                <th>No</th>
                <th>Paket</th>
                <th>Food</th>
                <th>Total Harga</th>
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
			</tr>
			@endforeach
		</tbody>
    </table>
</body>

<script>
    window.print();
</script>

</html> 
