<div class="col-lg-6">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Form Jabatan</h4>
			<?= $this->session->flashdata('message'); ?>
			<?= validation_errors() ?>
			<div class="table-responsive">
				<form action="<?= base_url('jabatan/save_jabatan') ?>" method="POST">
					<div class="form-group">
						<label for="">Jabatan</label>
						<input type="text" class="form-control input-default" placeholder="" name="jabatan">

					</div>
					<button type="submit" class="btn btn-primary btn-sm"> Save </button>
					<button type="reset" class="btn btn-danger btn-sm"> Reset </button>
				</form>
			</div>
		</div>
	</div>
</div>