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
		<div class="col-lg-12" id="hilang">
                <?= $this->session->flashdata('alert',true);?>
            </div>
		<div class="card mb-5">
			<form action="<?=base_url("admin/caraousel/simpan");?>" method="post" enctype='multipart/form-data'>
				<H3 class="card-header">File</H3>
				<div class="card-body">
          <div class="row mb-4">
            <label for="formText" class="form-label">Insert Judul</label>
            <input type="text" class="form-control" id="formText" name="judul">
          </div>
          <div class="row mb-3">
            <label for="formFile" class="form-label">Insert Gambar Landscape</label>
            <input type="file" class="form-control" name="foto" id="formFile">
          </div>
          <div  align="right">
								<button type="submit" class="btn btn-danger">ADD</button>
							</div>
				</div>
			</form>
		</div>

		<div class="container">
			<div class="row">

			<?php foreach($caraousel as $cara){ ?>
		<div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
			<div class="card" style="width:21rem;">
				<img src="<?= base_url('template/upload/caraousel/'.$cara['foto']) ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Judul</h5>
					<p class="card-text"><?= $cara['judul'] ?></p>
					<a onClick="return confirm('yakin di hapus?')"
												href="<?= ('caraousel/hapus/'.$cara['foto']) ?>"
												class="btn btn-danger btn-sm"><span
													class="mdi mdi-trash-can"></span></a>
				</div>
			</div>
		</div>

		<?php }; ?>
	</div>
	</div>
	</div>
	<?php require_once('template/js.php');?>
</body>

</html>
