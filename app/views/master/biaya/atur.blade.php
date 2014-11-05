@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Pengaturan Biaya
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="tab-pane" >

				<fieldset>
					<div class="control-group">
						<a href="{{URL::to('master/prodi/new')}}" class="pull-right btn btn-primary">
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
							Program Studi
						</th>
						<th>
							Biaya
						</th>
						<th class="span1">
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td class="number">
							Seni Tari
						</td>
						<td>
							<table class="table">
								<tbody>
									<tr>
										<td>
											SP
										</td>
										<td class="number">
											Rp. 3.500.000
										</td>
									</tr>
									<tr>
										<td>
											SPP
										</td>
										<td class="number">
											Rp. 850.000
										</td>
									</tr>
									<tr>
										<td>
											Kemahasiswaan
										</td>
										<td class="number">
											Rp. 150.000
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="text-align:center;font-size:1.5em;" >
							<a href="#" >
								<i class="icon-edit" >
								</i>
							</a>
							<a href="#" >
								<i class="icon-trash" >
								</i>
							</a>
						</td>
					</tr>
					<tr>
						<td>
							2
						</td>
						<td>
							Seni Rupa
						</td>
						<td>
							<table class="table">
								<tbody>
									<tr>
										<td>
											SP
										</td>
										<td class="number">
											Rp. 3.500.000
										</td>
									</tr>
									<tr>
										<td>
											SPP
										</td>
										<td class="number">
											Rp. 850.000
										</td>
									</tr>
									<tr>
										<td>
											Kemahasiswaan
										</td>
										<td class="number">
											Rp. 150.000
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="text-align:center;font-size:1.5em;" >
							<a href="#" >
								<i class="icon-edit" >
								</i>
							</a>
							<a href="#" >
								<i class="icon-trash" >
								</i>
							</a>
						</td>
					</tr>
					<tr>
						<td>
							3
						</td>
						<td>
							Seni Teater
						</td>
						<td>
							<table class="table">
								<tbody>
									<tr>
										<td>
											SP
										</td>
										<td class="number">
											Rp. 3.500.000
										</td>
									</tr>
									<tr>
										<td>
											SPP
										</td>
										<td class="number">
											Rp. 850.000
										</td>
									</tr>
									<tr>
										<td>
											Kemahasiswaan
										</td>
										<td class="number">
											Rp. 150.000
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="text-align:center;font-size:1.5em;" >
							<a href="#" >
								<i class="icon-edit" >
								</i>
							</a>
							<a href="#" >
								<i class="icon-trash" >
								</i>
							</a>
						</td>
					</tr>
					<tr>
						<td>
							4
						</td>
						<td>
							Seni Karawitan
						</td>
						<td>
							<table class="table">
								<tbody>
									<tr>
										<td>
											SP
										</td>
										<td class="number">
											Rp. 3.500.000
										</td>
									</tr>
									<tr>
										<td>
											SPP
										</td>
										<td class="number">
											Rp. 850.000
										</td>
									</tr>
									<tr>
										<td>
											Kemahasiswaan
										</td>
										<td class="number">
											Rp. 150.000
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td style="text-align:center;font-size:1.5em;" >
							<a href="#" >
								<i class="icon-edit" >
								</i>
							</a>
							<a href="#" >
								<i class="icon-trash" >
								</i>
							</a>
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