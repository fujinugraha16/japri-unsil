<body id="page-top">
  <div class="row" id="wrapper">
    <div class="col-2">
      <?php $this->view('page/menu') ?>
    </div>

    <div class="col-10">
      <div id="content-wrapper" class="d-flex flex-column justify-content-end">
        <div id="content">
          <?php $this->view('page/nav'); ?>
          <div class="mt-100 z-index-n1">
            <?php $this->view('sesi/' . $sesi); ?>
          </div>
        </div>
        <?php $this->view('page/footer') ?>
      </div>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php $this->view('page/modal'); ?>