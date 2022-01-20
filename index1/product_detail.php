<?php
$id = $_GET['id'];
include 'koneksi.php';

$query = mysqli_query($koneksi, "select * from produk where id=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Jual Laptop
  </title>
  <link rel="stylesheet" href="css/detail.css">
  <style>
    .btn {
      background-color: blue;
      /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>Selamat Datang di Jual Laptop</h1>
  </div>
  <nav class="navbar">
    <ul>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="about.php">About</a>
      </li>
      <li>
        <a href="#">Product</a>
      </li>
      <li>
        <a href="guest_book.php">Guest Book</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <?php while ($produk = mysqli_fetch_array($query)) { ?>
      <div class="section1">
        <div class="card">
          <div class="card-header">
            <p id="nama_produk"><?= $produk['nama'] ?></p>
          </div>
          <div class="card-container">
            <img src="<?= $produk['foto'] ?>" alt="" width="300px">
            <h3>Rp <?= $produk['harga'] ?></h3>
            <br>
            <h4>Detail</h4>
            <p>
              <?= $produk['detail'] ?>
            </p>
            <br>
            <button class="btn" onclick="beli()">
              Beli Sekarang
            </button>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <footer>
    <h5>copyright (c) 2022. Muhammad Rizky Ramadhani</h5>
  </footer>

  <script>
    var nama = document.getElementById('nama_produk').innerHTML;

    function beli() {
      alert(`Produk dengan nama ${nama} telah masuk keranjang`);
      window.location.href = 'product.php';
    }
  </script>
</body>

</html>

<!DOCTYPE html>
       <html>
<body>
<audio hidden autoplay loop>
             <source src="videoplayback (1).mp4" type="audio/mp4"> 
             </audio>
             </body>
             </html>