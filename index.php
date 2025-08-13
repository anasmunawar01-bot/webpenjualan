<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Aplikasi Kasir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 15px;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 col-lg-2 sidebar p-0">
      <h4 class="p-3 mb-0 border-bottom">Dashboard</h4>
      <a href="?page=kategori">Kategori</a>
      <a href="?page=produk">Produk</a>
      <a href="?page=transaksi">Transaksi</a>
      <a href="?page=laporan">Laporan</a>
      <a href="?page=pengaturan">Pengaturan</a>
    </nav>

    <!-- Konten -->
    <main class="col-md-10 col-lg-10 content">
      <div class="card">
        <div class="card-body">
          <?php
            // Struktur logika percabangan untuk memanggil menu
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            switch($page) {
              case 'kategori':
                include"modul/kategori.php";
              break;
              case 'produk':
                include"../modul/barang.php";
                break;
              case 'transaksi':
                echo "<h3>Riwayat Transaksi</h3><p>Daftar transaksi akan tampil di sini.</p>";
                break;
              case 'laporan':
                echo "<h3>Laporan Penjualan</h3><p>Grafik dan laporan penjualan akan tampil di sini.</p>";
                break;
              case 'pengaturan':
                echo "<h3>Pengaturan Aplikasi</h3><p>Menu pengaturan akan tampil di sini.</p>";
                break;
              default:
                echo "<h3>Selamat Datang di Dashboard Kasir</h3><p>Pilih menu di samping untuk memulai.</p>";
            }
          ?>
        </div>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
