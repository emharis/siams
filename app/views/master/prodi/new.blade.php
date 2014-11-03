@extends('layouts.master')

@section('main-content')
<div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-large"></i>
              <h3>Input Prodi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            	
            	<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
										<div class="control-group">											
											<label class="control-label" for="username">Nama</label>
											<div class="controls">
												<input type="text" class="span10 " id="username" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="username">Kode</label>
											<div class="controls">
												<input type="text" class="span2 " >
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
											<label class="control-label" for="username">Fakultas</label>
											<div class="controls">
												<select name="jenjang" class="span8">
													<option value="1">FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM</option>
													<option value="1">FAKULTAS TEKNOLOGI INDUSTRI</option>
													<option value="1">FAKULTAS TEKNIK SIPIL DAN PERENCANAAN</option>
													<option value="1">FAKULTAS TEKNOLOGI KELAUTAN</option>
													<option value="1">FAKULTAS TEKNOLOGI INFORMASI</option>
												</select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<a class="btn" href="{{URL::to('master/prodi	')}}" >Cancel</a>
										</div> <!-- /form-actions -->
									</fieldset>
										</fieldset>
										</form>
										</div>
            
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
@stop