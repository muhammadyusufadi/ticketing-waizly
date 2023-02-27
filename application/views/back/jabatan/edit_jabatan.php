<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
	<<<<<<< HEAD <div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Edit Jabatan</h4>
						<?= $this->session->flashdata('message'); ?>
						<?= validation_errors() ?>
						<div class="table-responsive">
							<form action="<?= base_url('jabatan/update_jabatan') ?>" method="POST">
								<div class="form-group">
									<label for="">Jabatan</label>
									<input type="text" class="form-control input-default" placeholder="" name="jabatan">
									=======
									<div class="container-fluid mt-3">
										<div class="row">
											<div class="col-lg-3 col-sm-6">
												<h1>JABATAN</h1>
											</div>
										</div>
										<!-- <div class="alert alert-success"> Selamat Datang <b> <?= $this->session->username; ?> </b> </div> -->
									</div>
									<div class="container-fluid mt-3">
										<div class="row">
											<div class="col-lg-6">
												<div class="card">
													<div class="card-body">
														<h4 class="card-title">Edit Jabatan</h4>
														<?= $this->session->flashdata('message'); ?>
														<?= validation_errors() ?>
														<div class="table-responsive">
															<form action="<?= base_url('jabatan/update_jabatan') ?>" method="POST">
																<div class="form-group">
																	<label for="">Jabatan</label>
																	<input type="text" class="form-control input-default" placeholder="" name="jabatan">
																	>>>>>>> d3eb5c355f8b7ccaa01962db2bcd888f2b33599b

																</div>
																<button type="submit" class="btn btn-primary btn-sm"> Save </button>
																<button type="reset" class="btn btn-danger btn-sm"> Reset </button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- <div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Jabatan</h4>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Jabatan</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									// $jabatan = [''];
									foreach ($jabatan as $row) { ?>
										<tr>
											<th><?= $no++ ?></th>
											<td><?= $row->jabatan ?></td>
											<td>
												<a href="<?= base_url(
																'jabatan/edit_jabatan/' . $row->id_jabatan
															) ?>" class="btn btn-primary">
													EDIT
												</a>

												| DELETE
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div> -->
										</div>
									</div>
									<!-- #/ container -->
								</div>
								<!--**********************************

            Content body end






































        ***********************************-->