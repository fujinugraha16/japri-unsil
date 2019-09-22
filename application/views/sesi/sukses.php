<div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Tambah Transaksi</h1>
          <p class="mb-4">Tambah transaksi</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data transaksi</h6>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                      <tr>
                          <td>Nama Admin</td>
                          <td><?php echo $admin?></td>
                        </tr>
                      <tr>
                          <td>Nama Pembeli</td>
                          <td><?php echo $nama?></td>
                        </tr>
                        <?php
                            if($crew !== ''){
                                echo "
                                <tr>
                                <td>Nama Crew</td>
                                <td>".$crew."</td>
                            </tr>

                                ";
                            }
                        ?>
                  </tbody>
                </table>
              </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Barang</th>
                      <th>Harga</th>
                      <th>Kuantitas</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $total = (int)(($cetakfw*$fw)+($cetakhp*$hp)+($cetaksw*$sw)+($jl*$jilid));
                      $diskon = (int)(($vdiskon* $total)/100);

                      echo "
                      <tr>
                        <td>1</td>
                        <td>Cetak Biasa</td>
                        <td>Rp. ".$hp."</td>
                        <td>".$cetakhp."</td>
                        <td>Rp. ".number_format($hp*$cetakhp)."</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cetak 50% Warna</td>
                      <td>Rp. ".$sw."</td>
                      <td>".$cetaksw."</td>
                      <td>Rp. ".number_format($sw*$cetaksw)."</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Cetak 100% warna</td>
                      <td>Rp. ".$fw."</td>
                      <td>".$cetakfw."</td>
                      <td>Rp. ".number_format($fw*$cetakfw)."</td>
                      </tr>

                            <tr>
                            <td>3</td>
                            <td>Jilid</td>
                            <td>Rp. ".$jl."</td>
                            <td>".$jilid."</td>
                            <td>Rp. ".number_format($jl*$jilid)."</td>
                            </tr>
                    <tr>
                    <td colspan='3'>Diskon ".$ndiskon."</td>
                    <td>".$vdiskon."%</td>
                    <td>- Rp. ".number_format($diskon)."</td>
                    </tr>
                      <tfoot>
                      <tr>
                        <th colspan='3'>Jumlah</th>
                        <th>".(int)($cetakfw+$cetakhp+$cetaksw+1)."</th>
                        <th>Rp. ".number_format($total-$diskon)."</th>
                      </tr>
                    </tfoot>
  ";

                      ?>
                  </tbody>
                </table>
                <form action="<?php echo base_url('transaksi/all'); ?>" method="post" >
                    <input type="hidden" name="admin" value="<?php echo $admin?>">
                    <input type="hidden" name="iddiskon" value="<?php echo $iddiskon?>">
                    <input type="hidden" name="namapb" value="<?php echo $nama?>">
                    <input type="hidden" name="crew" value="<?php echo $crew?>">
                    <input type="hidden" name="hawal" value="<?php echo $total?>">
                    <input type="hidden" name="jkertas" value="<?php echo (int)($cetakfw+$cetakhp+$cetaksw)?>">
                    <input type="hidden" name="hdiskon" value="<?php echo $total-$diskon?>">
                    <input type="hidden" name="jilid" value="<?php echo $jilid?>">
                    <div class="row d-flex justify-content-end" style="margin:0">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small mt-2">
                          <input type="checkbox" class="custom-control-input" name="bayar" value="yes" id="checkcrew">
                          <label class="custom-control-label" for="checkcrew">Langsung Bayar</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary addItem mt-n1">Tambah</button>
                    </div>
                    </div>
                </form>
              </div>
            </div>
          </div>

        </div>
