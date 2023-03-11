<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
	<div class="row page-titles mx-0">
		<div class="col p-md-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Divisi</a></li>
				<li class="breadcrumb-item active">List</a></li>
			</ol>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data divisi</h4>
						<?= $this->session->flashdata('message'); ?>
						<?= validation_errors() ?>
						<a href="<?= base_url(
										'divisi/save_divisi'
									) ?>" class="btn btn-success">
							<i class="fa fa-plus-circle"></i> Tambah Data
						</a>
						<div class="table-responsive">
							<table class="table table-striped table-bordered zero-configuration">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama divisi</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									// $divisi = [''];
									foreach ($divisi as $row) { ?>
										<tr>
											<th><?= $no++ ?></th>
											<td><?= $row->divisi ?></td>
											<td>
												<a href="<?= base_url(
																'divisi/edit_divisi/' . $row->id_divisi
															) ?>" class="btn btn-warning">
													<i class="fa fa-edit"></i>
												</a>

												<a onclick="return confirm('Apakah yakin akan hapus data?')" href="<?= base_url(
																														'divisi/delete_divisi/' . $row->id_divisi,
																													) ?>" class="btn btn-danger btn sweet-confirm">
													<i class="fa fa-trash"></i>
												</a>
												<!-- <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button> -->

											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- #/ container -->


</div>
<!--**********************************

            Content body end






































        ***********************************-->