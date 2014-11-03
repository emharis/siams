@extends('layouts.master')

@section('main-content')
<div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-large"></i>
              <h3>Input Pegawai</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
									<h3>Biodata</h3>
										<div class="control-group">											
											<label class="control-label" for="username">NIP</label>
											<div class="controls">
												<input type="text" class="span4" id="username">
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
              <h3>Riwayat Pendidikan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
									<h3>SD</h3>
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama Sekolah </label>
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
										
										<h3>SMP/SLTP</h3>
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama Sekolah</label>
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
										
										<h3>SMA/SLTA/SMK</h3>
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama Sekolah</label>
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
											<label class="control-label" for="lastname">Jurusan</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<h3>Perguruan Tinggi</h3>
										
										<div class="control-group">											
											<label class="control-label" for="lastname">Nama Perguruan Tinggi</label>
											<div class="controls">
												<input type="text" class="span4" id="lastname">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="username">Jenjang</label>
											<div class="controls">
												<select name="jenjang" class="span2">
													<option value="1">D1</option>
													<option value="1">D2</option>
													<option value="1">D3</option>
													<option value="1">S1</option>
													<option value="1">S2</option>
												</select>
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
										
										
										
									</fieldset>
								</form>
								</div>            
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
        
        <form id="edit-profile" class="form-horizontal span12" style="text-align: center;background-color:#d3d9da;padding-top:10px;padding-bottom: 10px;">
									
									
											<button type="submit" class="btn btn-primary">Save</button> 
											<a href="{{URL::to('master/pegawai')}}" class="btn">Cancel</a>
									
									
									</form>
@stop
