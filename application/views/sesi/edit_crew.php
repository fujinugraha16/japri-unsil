<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Crew</h1>
    <p class="mb-2">Edit Crew</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="edit-form" action="<?= base_url('crew/edit/') . $crew_id['id_crew']; ?>" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $crew_id['id_crew'] ?>">
                            <label class="col-form-label" for="nama">Nama Crew</label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $crew_id['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" value="<?= $crew_id['tempat_lahir'] ?>">
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" value="<?= $crew_id['tgl_lahir'] ?>">
                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="col-form-label" for="alamat">Alamat</label>
                            <input type="textarea" class="form-control form-control-user" id="alamat" name="alamat" value="<?= $crew_id['alamat'] ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <fieldset disabled="disabled">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="disabledTextInput">Piutang</label>
                                        <input type="number" class="form-control form-control-user" id="disabledTextInput" name="piutang" value="<?= $crew_id['piutang'] ?>">
                                        <?= form_error('piutang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="disabledTextInput">Bagi Hasil</label>
                                        <input type="number" class="form-control form-control-user" id="disabledTextInput" name="bagihasil" value="<?= $crew_id['bagihasil'] ?>">
                                        <?= form_error('bagihasil', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label class="col-form-label" for="keterangan">Keterangan</label>
                            <input type="textarea" class="form-control form-control-user" id="keterangan" name="keterangan" value="<?= $crew_id['keterangan'] ?>">
                        </div>



                    </div>

                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
            <a href="<?= base_url('crew'); ?>" class="card-link d-flex justify-content-center">Kembali</a>
        </div>

    </div>
</div>
</div>