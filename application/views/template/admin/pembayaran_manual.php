<div class="container">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h4 class="m-0 font-weight-bold text-primary">
				<center>Form Pembayaran Manual</center>
			</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div class="collapse show" id="collapseCardExample">
					<div class="card-body" align="left">
						<form id="form_tagihan" class="user" method="POST">

							<div class="form-row">
								<div class="form-group col-md-8">
									<label>Nama Pelanggan</label>
									<select class="form-control" id="no_kontrol" name="no_kontrol" required>
										<?php foreach ($id as $row) { ?>
											<option value="<?= $row['no_kontrol'] ?>" selected><?= $row['no_kontrol'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-md-4">
									<label>Nomor Rumah </label>
									<select class="form-control" id="bulan" name="bulan">
									</select>
								</div>
								<div class="form-group col-md-4">
									<label> Periode </label>
									<input class="form-control" type="month" id="tahun" name="tahun" required></input>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Meteran Awal </label>
									<input type="number" class="form-control" id="st_awal" name="st_awal" required min="0" max="10000" step="1" / />
								</div>
								<div class="form-group col-md-4">
									<label> Meteran Akhir </label>
									<input type="number" class="form-control" id="st_akhir" name="st_akhir" required min="0" max="10000" step="1" />
								</div>
								<div class="form-group col-md-4">
									<label> Pemakaian </label>
									<select class="form-control" id="pemakaian" name="pemakaian">
										<?php for ($i = 1; $i <= 50; $i++) { ?>
											<option value='<?php echo $i; ?>'> <?php echo $i; ?> </option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Biaya Tagihan </label>
									<input type="text" class="form-control" id="biaya" name="biaya" required />
								</div>
								<div class="form-group col-md-4">
									<label> Tanggal Bayar </label>
									<input class="form-control" type="date" id="tahun" name="tahun" required></input>
								</div>
								<div class="form-group col-md-4">
									<label> Lunas </label>
									<select class="form-control" id="lunas" name="lunas">
										<option value='tidak'>Tidak</option>
										<option value='ya'>Ya</option>
									</select>
								</div>
							</div>
							<br>
							<button type="submit" class="btn btn-primary" id="submitMohon">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->