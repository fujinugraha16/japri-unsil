<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Diskon</h1>
  <p class="">Daftar diskon</p>
  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDiskonModal">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Diskon</span>
        </a>

        <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('harga', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Potongan</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php $n = 1; ?>
            <?php foreach ($diskon as $row) : ?>
              <tr>
                <td><?= $n; ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['potongan'] ?>%</td>
                <td>
                  <a href="<?= base_url('diskon/edit/') . $row['id_discount']; ?>" class="badge badge-primary">Edit</a>
                  <a href="<?= base_url('diskon/hapus/') . $row['id_discount']; ?>" class="badge badge-danger btn-delete">Hapus</a>
                </td>
              </tr>
              <?php $n++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<script>
  $(document).ready(function() {
    $('table').on("click", ".btn-delete", function() {
      if (confirm('Apakah anda yakin menghapus data ini?')) {
        return true;
      } else {
        return false;
      }
    })
  });
</script>