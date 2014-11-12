
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">Upload File</div>
						  <div class="panel-body">
							<form class="form-horizontal" role="form" action="<?php echo base_url()?>pengusul/pengusul/upload_File" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">KTP</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto1"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Akta Pendirian Badan Hukum</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto2"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">PBB </label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto3"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Tahun terakhir (SPPT & Bukti pembayarannya)</p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Register Badan Hukum  </label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto4"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Register badan hukum yang telah dilegalisasi oleh Pejabat Departemen Hukum dan HAM yang berwenang bagi pemohon yang berbadan hukum</p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Bukti Kepemilikan Tanah </label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto5"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Bukti kepemilikan tanah dan/atau surat tanah yang dilegalisasi oleh Pejabat Pembuat Akta Tanah (PPAT) dan/atau Pejabat yang berwenang</p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Persetujuan Pemakaian Tanah</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto6"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Surat keterangan persetujuan pemakaian tanah/lahan dari pemilik untuk lahan/tanah yang bukan milik pemohon</p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Surat kuasa </label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto7"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Surat kuasa (bagi pengurusan yang dikuasakan) beserta foto kopi KTP penerima kuasa</p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Surat Pemberitahuan Tetangga </label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto8"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Surat pemberitahuan tetangga atau berita acara hasil sosialisasi rencana pembangunan yang diketahui aparat kewilayahan setempat </p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Gambar Site Plan</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto9"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p></p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Gambar Rencana Bangunan</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto10"/> 
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Gambar rencana bangunan minimum skala 1:200 </p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Hasil Ukur</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto11"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Hasil ukur yang telah di verifikasi oleh Bidang Survey dan Investigasi Dinas Tata Ruang dan Cipta Karya  </p>
									</div>
									<label for="inputEmail3" class="col-sm-4 control-label">Surat Keterangan TABG</label>
									<div class="col-sm-8">
										<input type="file" class="form-control" id="inputFile" placeholder="" required="" name="foto12"/>
										<input type="hidden" value="1" name="ajax">
										<p class="help-block"></p>
										<p>Surat keterangan dari Tim Ahli Bangunan Gedung (TABG) untuk siteplan bangunan gedung </p>
									</div>
								</div>
								
								<div class="form-group last">
									<div class="col-sm-offset-4 col-sm-8">
										<button type="submit" class="btn btn-success btn-sm" id="cmdLogin">
											Upload</button>
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
