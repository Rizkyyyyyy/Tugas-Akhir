<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Jual Laptop
  </title>
  <link rel="stylesheet" href="./css/product.css">
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

    .card-footer {
      display: flex;
      width: 100%;
      justify-content: space-evenly;
      align-items: center;
      background: blue;
      padding: 3px 4px;
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
    <div class="section1">
      <h2>Produk Kami</h2>
      <br>
      <div class="product-container">
        <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "select * from produk");

        while ($produk = mysqli_fetch_array($query)) {
        ?>
          <div class="card">
            <div class="card-header">
              <p><?= $produk['nama'] ?></p>
            </div>
            <div class="card-container">
              <img src="<?= $produk['foto'] ?>" alt="" width="300px">
              <h3>Rp <?= $produk['harga'] ?></h3>
              <a class="btn" href="product_detail.php?id=<?= $produk['id'] ?>">Beli</a>
            </div>
              <div class="card-footer">
              <a href="https://www.instagram.com/rizkyyyrmdhni_/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" width="50px" alt="">
              </a>
              <a href="https://www.youtube.com/channel/UCp2YZh7bZ0Xq25bMUTN33Uw/videos">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" width="50px" alt="">
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <footer>
    <h5>copyright (c) 2022. Muhammad Rizky Ramadhani</h5>
  </footer>
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