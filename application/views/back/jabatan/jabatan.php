<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Master Karyawan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Karyawan</a></li>
            </ol>
        </div>
    </div>

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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Jabatan</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
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
            </div>
        </div>
    </div>
    <!-- #/ container -->


</div>
<!--**********************************

            Content body end






































        ***********************************-->
