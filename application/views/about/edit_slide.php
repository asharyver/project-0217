<div class="row">
	<div class="col-lg-12">
		<!-- Advanced Tables -->

		<div class="panel panel-default">
			<div class="panel-heading">
				Edit Data Slide
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo site_url(); ?>about/update_slide" enctype="multipart/form-data" id="form">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label>Nama Promo</label>
						<input type="hidden" name="id" value="<?=$row->id_slider; ?>">
						<input type="text" name="nama" class="form-control" value="<?=$row->nama; ?>" placeholder="Input Nama Promo" data-validation="required" >
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea rows="2" class="form-control" name="ket" data-validation="required" ><?=$row->ket; ?></textarea>
					</div>
					<div class="form-group">
						<label>Gambar lama</label>&nbsp;&nbsp;
						<input type="hidden" name="fotolama" value="<?=$row->gambar; ?>">
						<img width="150" height="100" src="<?=base_url('./siminta/assets/about/'. $row->gambar); ?>">
					</div>
					<div class="form-group">
						<label>Gambar Promo</label>
						<input type="file" name="foto" class="form-control" class="form-control" data-validation="mime size"
							   data-validation-allowing="jpg, png, jpeg"
							   data-validation-max-size="512kb">
						* Max Image 512kb
						* Type Image jpg, jpeg, png
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save Changes</button>
						<a class="btn btn-danger" href="<?=site_url('about/slide'); ?>">Back</a>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
