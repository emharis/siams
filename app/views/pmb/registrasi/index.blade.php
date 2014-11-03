@extends('layouts.master')

@section('main-content')
<div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-large"></i>
              <h3>Registrasi PMB</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
									<h3>Biodata</h3>
										<div class="control-group">											
											<label class="control-label" for="username">Nomor Formulir</label>
											<div class="controls">
												<input type="text" class="span4 disabled" id="username"  disabled>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="firstname">Periode</label>
											<div class="controls">
												<select name="periode"  >
													<option value="1">2011/2012</option>
													<option value="2">2012/2013</option>
													<option value="3">2013/2014</option>
												</select>
												<p class="help-block">Tahun Akademik Pendaftaran</p>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Tempat/Tgl Lahir</label>
											<div class="controls">
												<input type="text" class="span2" id="lastname">
												<input type="text" class="span1	" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
																			
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Agama</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Status Perkawinan</label>
											<div class="controls">
												<label class="radio inline">
                                              <input type="radio"  name="radiobtns"> Kawin
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> Belum Kawin
                                            </label>
										</div> <!-- /control-group -->
										</div>
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Jenis Kelamin</label>
											<div class="controls">
												<label class="radio inline">
                                              <input type="radio"  name="radiobtns"> Laki-laki
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> Perempuan
                                            </label>
										</div> <!-- /control-group -->
										</div>
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Tinggi/Berat Badan</label>
											<div class="controls">
                                              <input class="span1" type="text" /> cm
                                              <input class="span1" type="text" /> kg
										</div> <!-- /control-group -->
										</div>
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Status Pekerjaan</label>
											<div class="controls">
												<label class="radio inline">
                                              <input type="radio"  name="radiobtns"> Bekerja
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> Belum Bekerja
                                            </label>
										</div> <!-- /control-group -->			
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Pekerjaan</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama Instansi</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Alamat</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Domisili</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Telp</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">HP</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Email</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<h3>Data Orang Tua/Wali</h3>
										
										<div class="control-group">											
											<label class="control-label" for="lastname"><b>Nama Ayah</b></label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Pekerjaan Ayah</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Alamat Ayah</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Telp Ayah</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">HP Ayah</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname"><b>Nama Ibu</b></label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Pekerjaan Ibu</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Alamat Ibu</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Telp Ibu</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">HP Ibu</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname"><b></b>Nama Wali</b></label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname"><b>Pekerjaan Wali</b></label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Alamat Wali</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Telp Wali</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">HP Wali</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										 <br />
										
											
										
									</fieldset>
								</form>
								</div>            
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
        
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-large"></i>
              <h3>Data Akademik</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
									<h3>Asal Sekolah</h3>
										<div class="control-group">											
											<label class="control-label" for="username">Asal Sekolah</label>
											<div class="controls">
												<label class="radio inline">
                                              <input type="radio"  name="radiobtns"> SMA
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> SMK
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> SMEA
                                            </label>
                                            
                                            <label class="radio inline">
                                              <input type="radio" name="radiobtns"> MAN
                                            </label>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
																			
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama Sekolah Asal</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Jurusan</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Tahun Lulus</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Tanggal Ijazah</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Nomor Ijazah</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Rata-rata NEM</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<h3>Data Pilihan </h3>
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Jenjang</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Fakultas</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Program Studi</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
																			
										 <br />
										
											
										
									</fieldset>
								</form>
								</div>            
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
        
        <div class="span12" style="text-align: center;">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
@stop
