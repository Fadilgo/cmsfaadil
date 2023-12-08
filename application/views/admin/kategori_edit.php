<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once('template/head.php')?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php require_once('template/nav.php')?>
          <!-- content-wrapper ends -->
          <!-- partial -->
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            
                </div>
                
              </div>
              <?php foreach($kategori as $us){ ?>
              <form action="<?= base_url('admin/kategori/update'); ?>" method="post">
                <input type="hidden" class="form-control" value="<?=$us['id_kategori']; ?>" name="id_kategori">
            <div class="row mb-5 d-flex justify-content-center">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?=$us['nama_kategori']; ?>" name="nama_kategori">
                </div>
              </div>
            <div class="footer" align="right">
        <a href="<?= base_url('admin/kategori')?>" class="btn btn-secondary">Close</a>
        <button type="submit" class="btn btn-danger">ADD</button>
      </div>
        </form>
        <?php }; ?>
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