<?php
include 'koneksi.php';

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
  <link rel="stylesheet" href="css/guest.css">
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
        <a href="product.php">Product</a>
      </li>
      <li>
        <a href="#">Guest Book</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <div class="section1">
      <h2>Guest Book</h2>
      <form action="guest_save.php" method="post">
        <input type="text" placeholder="Nama" name="nama">
        <input type="text" placeholder="No Telpon" name="no_telp">
        <input type="text" placeholder="Alamat" name="alamat">
        <input type="text" placeholder="Pesan" name="pesan">

        <button class="button" type="submit">
          Kirim
        </button>
      </form>
    </div>
    <table id="customers">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>No. Telepon</th>
        <th>Alamat</th>
        <th>Pesan</th>
      </tr>
      <?php
      $query = mysqli_query($koneksi, 'select * from pengunjung');
      $no = 1;
      while ($data = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td><?=$no ?></td>
          <td><?=$data['nama'] ?></td>
          <td><?=$data['no_telp'] ?></td>
          <td><?=$data['alamat'] ?></td>
          <td><?=$data['pesan'] ?></td>
      </tr>
      <?php $no++;
      } ?>
      
    </table>
  </div>
  <?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=01.00) && ($a<=11.00)){
        echo " , Selamat  Pagi !! ";
    }elseif(($a>11.01) && ($a<=15.00)){
        echo ", Selamat Siang !!";
    }elseif(($a>15.01) && ($a<=18.00)){
        echo ", Selamat sore !!";
    }elseif(($a>18.01) && ($a<=24.00)){
        echo ", Selamat malam !!";

    }else{
        echo ", <b> Selamat Malam </b>";
    }
 ?>
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