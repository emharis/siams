@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Edit Pegawai
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">

			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li>
						<a href="#formcontrols" data-toggle="tab">
							Biodata
						</a>
					</li>
					<li  class="active">
						<a href="#jscontrols" data-toggle="tab">
							Riwayat Pendidikan
						</a>
					</li>
				</ul>
			</div>

			<br/>

			<div class="tab-content">
				<div class="tab-pane active" id="formcontrols">
					<form id="edit-profile" class="form-horizontal">
						<fieldset>
							<h3>
								Biodata
							</h3>
							<table class="table">
								<tbody>
									<tr>
										<td>
											NIP
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('nip','032.42348.897.9',array('class'=>'span4'))}}
										</td>
										<td>
										</td>
										<td>
											Alamat
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('alamat','Jl. Bangkalan No 105, Surabaya',array('class'=>'span4'))}}
										</td>
									</tr>
									<tr>
										<td>
											Nama
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('nama','Rahmat Gunawan',array('class'=>'span4'))}}
										</td>
										<td>
										</td>
										<td>
											Domisili
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('domisili','Jl. Bangkalan No 105, Surabaya',array('class'=>'span4'))}}
										</td>
									</tr>
									<tr>
										<td>
											Tempat/Tgl Lahir
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('tempat','Surabaya',array('class'=>'span2'))}}&nbsp;{{Form::text('tgl_kahir',null,array('class'=>'span1'))}}
										</td>
										<td>
										</td>
										<td>
											Telp
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('telp','01/01/1975',array('class'=>'span4'))}}
										</td>
									</tr>
									<tr>
										<td>
											Agama
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('agama','Islam',array('class'=>'span4'))}}
										</td>
										<td>
										</td>
										<td>
											HP
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('hp','08732467832',array('class'=>'span4'))}}
										</td>
									</tr>
									<tr>
										<td>
											Status Perkawinan
										</td>
										<td>
											:
										</td>
										<td>
											<label class="radio inline">
												<input type="radio"  name="radiobtns" checked> Kawin
											</label>
											<label class="radio inline">
												<input type="radio" name="radiobtns"> Belum Kawin
											</label>
										</td>
										<td>
										</td>
										<td>
											Email
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('email','ramgun@gmail.com',array('class'=>'span4'))}}
										</td>
									</tr>
									<tr>
										<td>
											Jenis Kelamin
										</td>
										<td>
											:
										</td>
										<td>
											<label class="radio inline">
												<input type="radio"  name="radiojk" checked> Laki-laki
											</label>
											<label class="radio inline">
												<input type="radio" name="radiojk"> Perempuan
											</label>
										</td>
										<td>
										</td>
										<td>
										</td>
										<td>
										</td>
										<td>
										</td>
									</tr>
									<tr>
										<td>
											Tinggi/Berat Badan
										</td>
										<td>
											:
										</td>
										<td>
											{{Form::text('tinggi','176',array('class'=>'span1'))}}cm&nbsp;{{Form::text('berat_badan',65,array('class'=>'span1'))}}kg
										</td>
										<td>
										</td>
										<td>
										</td>
										<td>
										</td>
										<td>
										</td>
									</tr>
								</tbody>
							</table>
						</fieldset>
					</form>
				</div>
				<div class="tab-pane " id="jscontrols">
			<fieldset>
			<h3>Riwayat Pendidikan</h3>
			<table class="table table-bordered">
			<thead>
				<tr>
					<th>Jenjang Pendidikan</th>
					<th>Nama Instansi</th>
					<th>Jurusan</th>
					<th>Tahun Ijazah</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>SD</td>
					<td>SDN 15 Surabaya</td>
					<td>-</td>
					<td>1982</td>
					<td></td>
				</tr>
				<tr>
					<td>SMP</td>
					<td>SMPN 3 Surabaya</td>
					<td>-</td>
					<td>1985</td>
					<td></td>
				</tr>
				<tr>
					<td>SMA</td>
					<td>SMA 15 Surabaya</td>
					<td>-</td>
					<td>1988</td>
					<td></td>
				</tr>
				<tr>
					<td>S1</td>
					<td>Institut Kesenian Jakarta</td>
					<td>Seni Karawitan</td>
					<td>1992</td>
					<td></td>
				</tr>
			</tbody>
			</table>
			</fieldset>
				</div>
			</div>


		</div>
		<!-- /widget-content -->
	</div>
	<!-- /widget -->
</div>
<!-- /span6 -->


<!-- /span6 -->

<form id="edit-profile" class="form-horizontal span12" style="text-align: center;background-color:#d3d9da;padding-top:10px;padding-bottom: 10px;">


	<button type="submit" class="btn btn-primary">
		Save
	</button>
	<a href="{{URL::to('master/pegawai')}}" class="btn">
		Cancel
	</a>


</form>
@stop
