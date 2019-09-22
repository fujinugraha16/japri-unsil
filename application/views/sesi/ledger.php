<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Ledger</h1>
  <p class="mb-4">Daftar catatan dalam ledger</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahLedgerModal">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Pengeluaran</span>
        </a>

        <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('harga', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
              <th>Debit</th>
              <th>Kredit</th>
              <th>Saldo</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = $this->db->query("SELECT * FROM `ledger` ORDER BY `tanggal` DESC");
            $n = 1;
            setlocale(LC_MONETARY, "de_DE");

            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->tanggal . "</td>
                        <td>" . $row->keterangan . "</td>
                        <td>Rp. " . number_format($row->debit) . "</td>
                        <td>Rp. " . number_format($row->kredit) . "</td>
                        <td>Rp. " . number_format($row->saldo) . "</td>
                    </tr>";
              $n++;
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script>
  $(document).ready(function() {
    $('table').dataTable({
      "oLanguage": {
        "sSearch": "Cari Transaksi:",
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
      "aLengthMenu": [5, 10, 50],
    });

  });
</script>