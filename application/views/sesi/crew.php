<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Crew</h1>
  <p class="mb-4">Daftar crew dan catatan piutang serta bonus.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <div class="row">
          <div class="col-5">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahCrewModal">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Crew</span>
            </a>

            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('tempat_lahir', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('tgl_lahir', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

          </div>

        </div>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Kru</th>
              <th>Jumlah Tagihan</th>
              <th>Bagi Hasil</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $n = 1; ?>
            <?php foreach ($crew as $row) : ?>
              <tr>
                <td><?= $n; ?></td>
                <td><?= $row['nama']; ?></td>
                <td>Rp. <?= number_format($row['piutang']); ?></td>
                <td>Rp. <?= number_format($row['bagihasil']); ?></td>
                <td><?= $row['keterangan']; ?></td>
                <td>
                  <a href="<?= base_url('crew/potongan/') . $row['id_crew']; ?>" class="badge badge-info">Bayar</a>
                  <a href="<?= base_url('crew/bagihasil/') . $row['id_crew']; ?>" class="badge badge-warning">Ambil Bonus</a>
                  <a href="<?= base_url('crew/edit/') . $row['id_crew'] ?>" class="badge badge-primary">Edit</a>
                  <a href="<?= base_url('crew/hapus/') . $row['id_crew'] ?>" class="badge badge-danger btn-delete">Hapus</a>
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
    });

    $('table').dataTable({
      "oLanguage": {
        "sSearch": "Cari Crew:",
        "sEmptyTable": "Data tidak tersedia",
        "sInfo": "Menampilkan _START_ ke _END_ dari _TOTAL_ entri",
        "sInfoEmpty": "Menampilkan 0 ke 0 dari 0 entri",
        "sInfoFiltered": "(filter dari _MAX_ entri total)",
        "sInfoPostFix": "",
        "sLengthMenu": "Tampilkan _MENU_ Entri",
        "sLoadingRecords": "Loading...",
        "sProcessing": "Memproses...",
        "sZeroRecords": "Tidak ada data yang cocok",
        "sDecimal": "",
        "sThousands": ","
      },
      "aLengthMenu": [5, 10, 50]
    });

  });
</script>