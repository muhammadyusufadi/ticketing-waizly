<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Karyawan</a></li>
                <li class="breadcrumb-item active">Tambah</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Jabatan</h4>
                        <div class="table-responsive">
                            <form action="<?= base_url('jabatan/save_jabatan') ?>" method="POST">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" class="form-control input-default" placeholder="" name="jabatan">

                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                                <button type="reset" class="btn btn-secondary btn-sm"> Reset </button>
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
