		<!-- ini isi -->
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">Login</div>
						  <div class="panel-body">
							<form class="form-horizontal" role="form" action="<?php echo base_url()?>portal/portal/loginPengusul" method="POST">

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputUsername" placeholder="User ID" required="" name="log_email">
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-4 control-label">
										Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" required="" placeholder="Password" name="log_pass">
									</div>
								</div>
								<div class="form-group last">
									<div class="col-sm-offset-4 col-sm-8">
										<button type="submit" class="btn btn-success btn-sm" id="cmdLogin">
											Log in</button>
										<button type="reset" class="btn btn-default btn-sm">
											Reset</button>
									</div>
								</div>
							</form>
						  </div>
						</div>
						<div class="panel panel-primary">
						<div class="panel-heading">Calender</div>
						  <div class="panel-body">
							<p>...</p>
						  </div>
						</div>
				</div>
				<div class="col-md-9">
					 <div class="panel panel-primary">
						<div class="panel-heading">SELAMAT DATANG</div>
						  <div class="panel-body">
							<h2>Selamat Datang di Beranda Siteplan Online</h2>
							<p><h4>Halaman ini adalah halaman yang digunakan untuk mengusulkan siteplan</h4></p>
							<p>...</p>
							<p>...</p>
							<p>...</p>
							<p>...</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- akhir isi -->
