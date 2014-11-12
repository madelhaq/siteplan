		<!-- ini isi -->
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">Pendaftaran Site Plane</div>
						  <div class="panel-body">
							<form class="form-horizontal" role="form" action="<?php echo base_url()?>portal/portal/savePendaftaran" method="POST">

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">No KTP Berlaku</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputUsername" placeholder="No KTP Berlaku" required="" name="no_ktp">
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-4 control-label">
										Nama Sesuai KTP</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputPassword" required="" placeholder="Nama Sesuai KTP" name="nama_ktp">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">Alamat Sesuai KTP</label>
									<div class="col-sm-8">
										<textarea class="form-control" placeholder="Alamat Sesuai KTP" required="" id="inputUsername" name="alamat"></textarea>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" id="inputUsername" placeholder="Email" required="" name="email">
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputUsername" placeholder="Password" required="" name="password">
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group last">
									<div class="col-sm-offset-4 col-sm-8">
										<button type="submit" class="btn btn-success btn-sm" id="cmdLogin">
											Daftar</button>
										<button type="reset" class="btn btn-default btn-sm">
											Reset</button>
									</div>
								</div>
							</form>
						  </div>
						</div>
						
				</div>
				
			</div>
		</div>
		<!-- akhir isi -->
