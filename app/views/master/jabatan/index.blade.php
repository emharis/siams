@extends('layouts.master')

@section('main-content')
<div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-large"></i>
              <h3>Jabatan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <div class="tab-pane" >

				<fieldset>
				<div class="control-group">										
					<a href="{{URL::to('master/jabatan/new')}}" class="pull-right btn btn-primary">New</a>	
					<label class="control-label" for="username">Filter Data</label>
					<div class="controls">
						<input type="text" class="span4 " id="username" >
					</div> <!-- /controls -->				
					
				</div> <!-- /control-group -->

				</fieldset>

				</div>
              <table class="table table-bordered">
				<thead>
					<tr>
						<th class="span1">No</th>
						<th>Nama</th>
						<th class="span1"></th>
					</tr>
				</thead>
				<tbody>
				<?php $rownum=1; ?>
					@foreach($jabs as $jb)
					<tr >
						<td>{{$rownum++}}</td>
						<td>{{$jb->nama}}</td>
						<td style="font-size: 1.3em;" >
							<a><i class="icon-edit"></i></a>
							&nbsp;
							<a><i class="icon-trash"></i></a>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			  </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
@stop