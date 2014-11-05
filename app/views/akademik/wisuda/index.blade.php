@extends('layouts.master')

@section('main-content')
<style type="text/css">
	.table-ket tr td
	{
		border: none;
	}
	.table thead tr th
	{
		text-align: center;
		vertical-align: middle;
	}
	.angka
	{
		text-align: right;
	}
</style>
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Manajemen Wisuda
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span6">
				<table class="table">
					<tbody
						<tr>
							<td>
								Periode
							</td>
							<td>
								:
							</td>
							<td>
								<select name="dosen">
									<option value="1">
										Wisuda XII
									</option>
									<option value="1">
										Wisud XI
									</option>
									<option value="1">
										Wisuda X
									</option>
									<option value="1">
										Wisuda VIII
									</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
							</td>
							<td>
								<a class="btn btn-primary">
									Tampilkan
								</a>
								<a href="#myModal"  data-toggle="modal" class="btn btn-success">
									Open Wisuda
								</a>
								<a class="btn btn-success" href="{{URL::to('akademik/pta/new')}}">
									Pendaftaran
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<!-- /widget-content -->
	</div>
	<!-- /widget -->
</div>
<!-- /span6 -->

<!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header" style="text-align: center;">
                    <h5>Daftar Periode Wisuda</h5>
                </div>
                <div class="modal-body">
                    <table class="table  table-bordered">
                    	<thead>
                        	<tr>
                        		<th>No</th>
                        		<th>Nama</th>
                        		<th>Tanggal</th>
                        		<th>Tahun Akademik</th>
                        		<th>Status</th>
                        		<th></th>
                        	</tr>
                        </thead>
                        <tbody>
                        	<tr>
                        		<td>1</td>
                        		<td>Wisuda VIIII</td>
                        		<td>20 Juli 2000</td>
                        		<td>2000/2001</td>
                        		<td>closed</td>
                        		<td>
                        			<a><i class="icon-edit"></i></a>
                        			<a><i class="icon-trash"></i></a>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>2</td>
                        		<td>Wisuda XI</td>
                        		<td>20 Desember 2000</td>
                        		<td>2000/2001</td>
                        		<td>closed</td>
                        		<td>
                        			<a><i class="icon-edit"></i></a>
                        			<a><i class="icon-trash"></i></a>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>3</td>
                        		<td>Wisuda XI</td>
                        		<td>20 Juli 2001</td>
                        		<td>2001/2002</td>
                        		<td>closed</td>
                        		<td>
                        			<a><i class="icon-edit"></i></a>
                        			<a><i class="icon-trash"></i></a>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>4</td>
                        		<td>Wisuda XII</td>
                        		<td>20 Desember 2001</td>
                        		<td>2001/2002</td>
                        		<td>closed</td>
                        		<td>
                        			<a><i class="icon-edit"></i></a>
                        			<a><i class="icon-trash"></i></a>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>5</td>
                        		<td>Wisuda XIII</td>
                        		<td>20 Juli 2002</td>
                        		<td>2002/2003</td>
                        		<td>open</td>
                        		<td>
                        			<a><i class="icon-edit"></i></a>
                        			<a><i class="icon-trash"></i></a>
                        		</td>
                        	</tr>
                        </tbody>
                    </table>
                    
                    <br/>
                    
                    <table class="table table-bordered">
                    	<tbody>
                    		<tr>
                    			<td>Open Wisuda</td>
                    			<td>:</td>
                    			<td>
                    				<select name="dosen">
									<option value="1">
										2000/2001
									</option>
									<option value="1">
										2001/2002
									</option>
									<option value="1">
										2002/2003
									</option>
									<option value="1">
										2003/2004
									</option>
								</select>
                    			</td>
                    			<td>
                    				<input type="text" name="nama" class="span2" placeholder="Nama" />
                    			</td>
                    			<td>
                    				<a class="btn btn-primary"><i class="icon-save"></i></a>
                    			</td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">
                        Close
                    </button>
                </div>
            </div>

<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Daftar Mahasiswa Wisuda
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span4">
				<table class="table table-ket">
					<tbody
						<tr>
							<td>
								Periode
							</td>
							<td>
								:
							</td>
							<td>
								Wisuda XIII
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="span1">No</th>
                        <th>NIM</th>
                        <th>Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Status</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>3060451003</td>
                        <td>ERLITA HAQ MALIANY</td>
                        <td>Seni Rupa</td>
                        <td>Booked</td>
                        <td style="text-align:center;font-size:1.5em;" >
                        	<a data-toggle="modal"><i class="icon-edit" ></i></a>
                        	<a data-toggle="modal"><i class="icon-trash" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3060451004</td>
                        <td>IGNASIUS TOMMY FEBRIAN</td>
                        <td>Seni Rupa</td>
                        <td>Booked</td>
                        <td style="text-align:center;font-size:1.5em;" >
                        	<a data-toggle="modal"><i class="icon-edit" ></i></a>
                        	<a data-toggle="modal"><i class="icon-trash" ></i></a>
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