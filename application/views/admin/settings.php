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
		<div class="row d-flex justify-content-center">
			<div class="col-lg-12 grid-margin stretch-card">
			</div>
			<div class="row">
                <form action="<?= base_url('admin/settings/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="card mb-3" style="max-width: 800px;">
                        <div class="col-lg-12" id="hilang">
                              <?= $this->session->flashdata('alert',true);?>
                          </div>
						<div class="row g-0">
							<div class="col-md-4 justify-content-center">
								<img  src="<?= base_url('template/upload/profile/'.$this->session->userdata('foto')) ?>"
									class="img-fluid rounded-start" alt="...">
                                    <input type="file" class="form-control" value="<?= $this->session->userdata('foto') ?>" name="foto" id="formFile">
							</div>
							<div class="col-md-8">
								<div class="card-body">
                                    <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user'); ?>">
                                <div class="row mb-3 d-flex justify-content-center">
												<label class="col-sm-3 col-form-label">Username</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="username" value="<?= $this->session->userdata('username'); ?>">
												</div>
								</div>

                                <div class="row mb-3 d-flex justify-content-center">
												<label class="col-sm-3 col-form-label">Nama</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="nama" value="<?= $this->session->userdata('nama'); ?>">
												</div>
								</div>

                                <div class="mt-3"align="right">
								<button type="submit" class="btn btn-danger">ADD</button>
							</div>

								</div>
							</div>
						</div>
					</div>
                </form>

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
