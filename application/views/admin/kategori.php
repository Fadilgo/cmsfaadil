<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once('template/head.php')?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php require_once('template/nav.php')?>
      <!-- partial -->
        <!-- partial -->

          <!-- content-wrapper ends -->
          <!-- partial -->
          <div class="row">
            <div class="col-lg-12" id="hilang">
                <?= $this->session->flashdata('alert',true);?>
            </div>
          </div>
          <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModal">
  Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/kategori/simpan'); ?>" method="post">
            <div class="row mb-3 d-flex justify-content-center">
                <label class="col-sm-3 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kategori">
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">ADD</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
                    <p class="card-description"> Kategori <code>Website</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> No. </th>
                            <th> kategori Konten </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <?php $no=1;?>
                        <tbody>
                            <?php foreach ($kategori as $us){?>
                          <tr>
                            <td class="py-1">
                              <?= $no++ ;?>
                            </td>
                            <td><?= $us['nama_kategori']; ?></td>
                            <td> <a onClick="return confirm('yakin di hapus?')" href="<?= ('kategori/hapus/'.$us['id_kategori']) ?>"class="btn btn-danger btn-sm"><span class="mdi mdi-trash-can"></span></a>
                            <a href="<?= ('kategori/edit/'.$us['id_kategori']) ?>"class="btn btn-warning btn-sm"><span class="mdi mdi-square-edit-outline"></span></a>
                            </td>
                          </tr>
                          <?php }; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
<?php require_once('template/js.php');?>
  </body>
</html>