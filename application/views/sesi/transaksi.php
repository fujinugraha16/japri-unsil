<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Transaksi</h1>
  <p class="mb-4">Daftar catatan transaksi yang ada</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tanggal</th>
              <th>Nama Kru</th>
              <th>Nama Admin</th>
              <th>Harga (sebelum diskon)</th>
              <th>Harga (sesudah diskon)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = $this->db->query("SELECT `id_transaksi`, c.`nama` AS `crew`, a.`nama` as `admin`, `print`, `tanggal`, `harga_awal`, `harga_diskon` FROM `transaksi` t ,`admin` a, `crew` c WHERE t.`crew` = c.`id_crew` AND a.`id_admin` = t.`admin` ORDER BY `tanggal` DESC");
            $n = 1;
            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->tanggal . "</td>
                        <td>" . $row->crew . "</td>
                        <td>" . $row->admin . "</td>
                        <td>Rp. " . number_format($row->harga_awal) . "</td>
                        <td>Rp. " . number_format($row->harga_diskon) . "</td>
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
      "aLengthMenu": [5, 10, 50]
    });
  });
</script>