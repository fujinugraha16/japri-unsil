<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-6">
            <h1 class="h3 mb-2 text-gray-800">Edit Diskon</h1>
            <p class="mb-2">Edit Diskon</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form class="edit-form" action="<?= base_url('diskon/edit/') . $diskon_id['id_discount']; ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $diskon_id['id_discount'] ?>">
                            <label class="col-form-label" for="nama">Nama Diskon</label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $diskon_id['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="potongan">Potongan</label>
                            <input type="number" class="form-control form-control-user" id="potongan" name="potongan" value="<?= $diskon_id['potongan'] ?>">
                            <?= form_error('potongan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">Edit</button>
                        </div>
                    </form>
                    <a href="<?= base_url('diskon'); ?>" class="card-link d-flex justify-content-center">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>