<h3 class="mb-4">Data Produk</h3>
<!-- Form Input Produk -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white">Tambah Kategori</div>
  <div class="card-body">
    <form method="post" action="">
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Kategori</label>
          <input type="text" class="form-control" name="kd" placeholder="Masukkan nama produk">
        </div>
        <div class="col-md-4">
          <label class="form-label">Gambar</label>
          <input type="file" class="form-control" name="nama_produk" placeholder="Masukkan nama produk">
        </div>
        
        <div class="col-md-1 d-flex align-items-end">
          <button type="submit" class="btn btn-success w-500">Tambah</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Tabel Produk -->
<div class="card">
  <div class="card-header bg-dark text-white">Daftar Produk</div>
  <div class="card-body">
    <table class="table table-bordered table-hover">
      <thead class="table-secondary">
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Teh Botol</td>
          <td>Minuman</td>
          <td>5000</td>
          <td>50</td>
          <td>
            <a href="#" class="btn btn-warning btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Roti Bakar</td>
          <td>Makanan</td>
          <td>15000</td>
          <td>20</td>
          <td>
            <a href="#" class="btn btn-warning btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>