@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Group
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="tab-pane" >

				<fieldset>
					<div class="control-group">
						<a href="{{URL::to('master/group/new')}}" class="pull-right btn btn-primary">
							New
						</a>
						<label class="control-label" for="username">
							Filter Data
						</label>
						<div class="controls">
							<input type="text" class="span4 " id="username" >
						</div> <!-- /controls -->

					</div> <!-- /control-group -->

				</fieldset>

			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="span1">
							No
						</th>
						<th>
							Nama
						</th>
						<th class="span1">
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Sysadmin</td>
						<td>
							<a><i class="icon-edit"></i></a>
							<a><i class="icon-trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Baak Admin</td>
						<td>
							<a><i class="icon-edit"></i></a>
							<a><i class="icon-trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Mhs</td>
						<td>
							<a><i class="icon-edit"></i></a>
							<a><i class="icon-trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Sysadmin</td>
						<td>
							<a><i class="icon-edit"></i></a>
							<a><i class="icon-trash"></i></a>
						</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Dosen</td>
						<td>
							<a><i class="icon-edit"></i></a>
							<a><i class="icon-trash"></i></a>
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>
		<!-- /widget-content -->
	</div>
	<!-- /widget -->
</div>
<!-- /span6 -->
@stop