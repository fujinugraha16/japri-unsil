        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Admin</h1>
          <p class="mb-4">Daftar admin Japri.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahAdminModal">
                  <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                  </span>
                  <span class="text">Tambah Admin</span>
                </a>

                <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= form_error('username', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= form_error('password', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= $this->session->flashdata('message'); ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Kru</th>
                      <th>Bonus</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $n = 1;
                    foreach ($data as $row) {
                      echo "
                            <tr>
                                <td>" . $n . "</td>
                                <td>" . $row['nama'] . "</td>
                                <th>Rp. " . number_format($row['bonus']) . "</th>
                                <th>
                                  <a href='" . base_url('admin/bonus/') . $row['id_admin'] . "' class='badge badge-warning'>Ambil Bonus</a>
                                </th>
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