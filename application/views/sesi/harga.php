<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Harga</h1>
  <p class="mb-4">Daftar harga print</p>

  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">

        <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('harga', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $n = 1; ?>
            <?php foreach ($harga as $row) : ?>
              <tr>
                <td><?= $n ?></td>
                <td><?= $row['barang'] ?></td>
                <td>Rp. <?= $row['harga'] ?></td>
                <td>
                  <a href="<?= base_url('harga/edit/') . $row['id_harga'] ?>" class="badge badge-primary">Edit</a>
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