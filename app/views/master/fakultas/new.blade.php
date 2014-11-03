@extends('layouts.master')

@section('main-content')
<div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-large"></i>
              <h3>Input Fakultas</h3>
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
												<input type="text" class="span4 " id="username" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<a class="btn" href="{{URL::to('master/fakultas')}}" >Cancel</a>
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