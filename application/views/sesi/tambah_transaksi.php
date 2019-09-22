<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tambah Transaksi</h1>
  <p class="mb-2">Tambah transaksi</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data transaksi</h6>
    </div>
    <div class="card-body">
      <form class="transaksi-form" action="<?= base_url('transaksi/add'); ?>" method="post">
        <div class="form-group">
          <label class="col-form-label" for="nama"><b>Nama Pembeli</b></label>
          <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama pembeli">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="crew"><b>Nama Crew</b></label>
          <input type="text" class="form-control form-control-user" id="crew" name="crew" placeholder="Nama crew">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="cetakhp"><b>Jumlah Lembar Cetak Hitam Putih</b></label>
          <input type="number" class="form-control form-control-user" id="cetakhp" placeholder="0" name="cetakhp">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="cetaksw"><b>Jumlah Lembar Cetak 50% Warna</b></label>
          <input type="number" class="form-control form-control-user" id="cetaksw" placeholder="0" name="cetaksw">
        </div>
        <div class="form-group">
          <label class="col-form-label" for="cetakfw"><b>Jumlah Lembar Cetak 100% Warna</b></label>
          <input type="number" class="form-control form-control-user" id="cetakfw" placeholder="0" name="cetakfw">
        </div>
        <div class="row d-flex mt-n1">
          <div class="col-5">
            <div class="form-group">
              <label class="col-form-label" for="jilid"><b>Jumlah jilid</b></label>
              <input type="number" class="form-control form-control-user" id="jilid" placeholder="0" name="jilid">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="col-form-label" for="diskon"><b>Potongan</b></label>
              <div class="dropdown mb-4">
                <select class="btn btn-primary dropdown-toggle" id="diskon" name="diskon">
                  <?php foreach ($diskon as $row) : ?>
                    <option class='dropdown-item' value="<?= $row['id_discount']; ?>"><?= $row['nama'] . ' - ' . $row['potongan'];  ?>%</option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
      </form>
      <a href="<?= base_url('transaksi'); ?>" class="card-link d-flex justify-content-center mt-2">Kembali</a>
    </div>
  </div>
</div>


<!-- /.container-fluid -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#crew").autocomplete({
      source: "<?= site_url('crew/get_autocomplete/?'); ?>"
    });
  });
</script>
