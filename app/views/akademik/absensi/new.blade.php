@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large"></i>
			<h3>Input Absensi Mahasiswa</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">

			<div class="tab-pane" id="formcontrols">
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="username">Semester</label>
							<div class="controls">
								<select name="dosen">
									<option value="1">0141</option>
									<option value="1">0142</option>
									<option value="1">0151</option>
									<option value="1">0152</option>
								</select>
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username">Tanggal</label>
							<div class="controls">
								<input type="text" class="span2" name="tgl" value="{{date('d-m-Y')}}" />
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username">Kelas</label>
							<div class="controls">
								<select name="dosen">
									<option value="1">MAT01</option>
									<option value="1">MAT04</option>
									<option value="1">BIO01</option>
									<option value="1">KIM01</option>
								</select>
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username"></label>
							<div class="controls">
								<button type="submit" class="btn btn-primary">
									Proses
								</button>
							</div>
							<!-- /controls -->
						</div>
						<!-- /form-actions -->
					</fieldset>
				</form>

			</div>

		</div>
		<!-- /widget-content -->
	</div>
	<!-- /widget -->
</div>

<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large"></i>
			<h3>Absensi Mahasiswa</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span4">
				<table class="table">
					<tbody
					<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td>22-10-2014</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td>MT001</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="span4">
				<table class="table">
					<tbody
					<tr style="border-bottom: none;" >
						<td>Mata Kuliah</td>
						<td>:</td>
						<td>Matematika Dasar I</td>
					</tr>
					<tr>
						<td>Dosen</td>
						<td>:</td>
						<td>M. Ian Iriawan</td>
					</tr>
					</tbody>
				</table>
			</div>
			
			<table class="table">
				<tbody>
					<tr><td></td></tr>
				</tbody>
			</table>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="span1">No</th>
						<th>Nama</th>
						<th class="span1">Hadir</th>
						<th class="span1">Ijin</th>
						<th class="span1" >Alpha</th>
						<th class="span1"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Nia Amalia</td>
						<td>
							<input type="radio" name="pil1" >
						</td>
						<td>
							<input type="radio" name="pil1">
						</td>
						<td>
							<input type="radio" name="pil1">
						</td>
						<td style="text-align:center;font-size:1.5em;" ></td>
					</tr>
					<tr>
						<td>2</td>
						<td>M. Rahman Agus Setiawan</td>
						<td>
							<input type="radio" name="pil2">
						</td>
						<td>
							<input type="radio" name="pil2">
						</td>
						<td>
							<input type="radio" name="pil2">
						</td>
						<td style="text-align:center;font-size:1.5em;" ></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Nita Yalina</td>
						<td>
							<input type="radio" name="pil3">
						</td>
						<td>
							<input type="radio" name="pil3">
						</td>
						<td>
							<input type="radio" name="pil3" >
						</td>
						<td style="text-align:center;font-size:1.5em;" ></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Maulana Rahman</td>
						<td>
							<input type="radio" >
						</td>
						<td>
							<input type="radio" >
						</td>
						<td>
							<input type="radio" >
						</td>
						<td style="text-align:center;font-size:1.5em;" ></td>
					</tr>
				</tbody>
			</table>
			
			<div style="text-align: center;">
				<a class="btn btn-primary">SAVE</a>
				<a class="btn">RESET</a>
			</div>
		</div>
		<!-- /widget-content -->
	</div>
	<!-- /widget -->
</div>
<!-- /span6 -->
@stop