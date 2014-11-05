@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large"></i>
			<h3>Pendaftaran Kerja Praktek</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">

			<div class="tab-pane" id="formcontrols">
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>Semester</td>
								<td>:</td>
								<td>
									<select name="dosen">
									<option value="1">0141</option>
									<option value="1">0142</option>
									<option value="1">0151</option>
									<option value="1">0152</option>
								</select>
								</td>
								<td></td>
								<td>Dosen Pembimbing</td>
								<td>:</td>
								<td>
									<input type="text" name="dosen" class="span3"/>
									<a class="btn btn-primary" ><i class="icon-search"></i></a>
								</td>
							</tr>
							<tr>
								<td>NIM/Mahasiswa 1</td>
								<td>:</td>
								<td>
									<input type="text" class="span2" />&nbsp;
									<input type="text" class="span2" />
								</td>
								<td></td>
								<td>Instansi/Perusahaan</td>
								<td>:</td>
								<td>
									<input type="text" name="instansi" class="span3"/>
								</td>
							</tr>
							<tr>
								<td>NIM/Mahasiswa 2</td>
								<td>:</td>
								<td>
									<input type="text" class="span2" />&nbsp;
									<input type="text" class="span2" />
								</td>
								<td></td>
								<td>Alamat Instansi</td>
								<td>:</td>
								<td>
									<input type="text" name="instansi" class="span3"/>
								</td>
							</tr>
							<tr>
								<td>Prodi</td>
								<td>:</td>
								<td>
									<select name="prodi">
										<option value="1">Seni Tari</option>
										<option value="1">Seni Teater</option>
										<option value="1">Seni Rupa D1</option>
										<option value="1">Seni Rupa D2</option>
										<option value="1">Seni Rupa D3</option>
										<option value="1">Seni Karawitan</option>
									</select>
								</td>
								<td></td>
								<td>Telp Instansi</td>
								<td>:</td>
								<td>
									<input type="text" name="instansi" class="span3"/>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
						
						<div class="modal-footer">
                    <a href="{{URL::to('akademik/pkp')}}" class="btn" >
                        Cancel
                    </a>
                    <a class="btn btn-primary">
                        Save
                    </a>
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


@stop