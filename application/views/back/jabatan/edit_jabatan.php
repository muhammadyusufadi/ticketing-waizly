<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Karyawan</a></li>
                <li class="breadcrumb-item active">Edit</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Jabatan</h4>
                        <div class="table-responsive">
                            <form action="<?= base_url('jabatan/update_jabatan') ?>" method="POST">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="hidden" class="form-control input-default" placeholder=""
                                        name="id_jabatan" value="<?= $jbt->id_jabatan ?>">
                                    <input type="text" class="form-control input-default" placeholder="" name="jabatan"
                                        value="<?= $jbt->jabatan ?>">

                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"> Edit </button>
                                <button type="reset" class="btn btn-secondary btn-sm"> Reset </button>
                            </form>
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