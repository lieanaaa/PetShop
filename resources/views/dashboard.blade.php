<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styledash.css">
    <title>Grooming Supplies</title>
</head>
<body>
   <nav>
    <ul>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" onclick="return confirm('Anda Yakin Ingin Logout?')">Logout</button>
    </form>
    </ul>
</nav>
<center>
    <h1 class="text">Service</h1>
    <hr>
</center>
<div class="container">
    <div class="card">
        <div class="card-cover1">
            <img src="y.png">
        </div>
        <div class="card-content">
            <h3>Grooming Supplies</h3>
            <a class="tom1" href="/grooming">Lihat</a>
            <p class="count">
              <?php
                $count1;
              ?>
          </p>
        </div>
    </div>
    <div class="card">
        <div class="card-cover2">
            <img src="k.png">
        </div>
        <div class="card-content">
            <h3>Pet Food</h3>
            <a class="tom2" href="/Food">Lihat</a>
            <p class="count">
              <?php
                $count2;
              ?>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-cover3">
            <img src="keranjang.png">
        </div>
        <div class="card-content">
            <h3>Pemesanan</h3>
            <a class="tom2" href="/Pemesanan">Lihat</a>
            <p class="count">
              <?php
                $count3;
              ?>
            </p>
        </div>
    </div>
</div>
</body>
</html>