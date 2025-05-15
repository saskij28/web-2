<?php include_once 'top.php'; require_once 'koneksi.php'; ?>
<?php
$stmt = $pdo->query("SELECT * FROM bidang_ilmu ORDER BY id DESC");
$data = $stmt->fetchAll();
?>
<div class="app-wrapper">
  <?php include_once 'navbar.php'; ?>
  <?php include_once 'sidebar.php'; ?>

  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h3 class="mb-0">Daftar Bidang Ilmu</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Bidang Ilmu</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
      
      <a href="bidang_ilmu_tambah.php" class="btn btn-primary mb-3">+ Tambah</a>
      <table class="table table-bordered" style="text-align: center;">
        <thead>
          <tr><th>#</th><th>Nama</th><th>Deskripsi</th><th>Aksi</th></tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($data as $row): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['deskripsi'] ?></td>
              <td>
                <a href="bidang_ilmu_edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="bidang_ilmu_hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </main>

  <?php include_once 'footer.php'; ?>
</div>

