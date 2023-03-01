<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Grooming Kitten</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('form.css')}}">
</head>
<body>
  <div class="content">
    <div class="container">
      <h1 class="font-weight-bold text-center text-white">Edit Paket Kitten</h1>
      <hr>
      <form action="/prosesadult/{{ $data->id }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama_paket" class="form-label">Nama Paket Grooming</label>
        <textarea class="form-control" name="nama_paket" id="nama_paket" rows="3">{!! $data->nama_paket !!}</textarea>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="{{ $data->harga }}">
      </div>
      <div class="mb-3 tombol">
      <button type="submit" class="btn btn-secondary">Simpan</button>
    </div>
    <div>
    <a href="/grooming" class="text-decoration-none">Paket Grooming</a>  |
      <a href="/dashboard" class="text-decoration-none">Dashboard</a>
    </div>
  </form>
    </div>
  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
