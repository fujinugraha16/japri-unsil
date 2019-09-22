<body class="bg-gradient-primary bg-japri">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="p-5">
              <div class="d-flex justify-content-center logo_color mb-4">
                <?php $this->load->view('svg/logo_japri_color') ?>
              </div>

              <?= $this->session->flashdata('message'); ?>

              <!-- form -->
              <form class="user" action="<?= base_url('login/aksi_login'); ?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block btn-login">Login</button>
                <hr>
              </form>
              <!-- akhir form -->
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
</body>