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
				Manajemen Tugas Akhir
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span4">
				<table class="table">
					<tbody
						<tr>
							<td>
								Semester
							</td>
							<td>
								:
							</td>
							<td>
								<select name="dosen">
									<option value="1">
										0141
									</option>
									<option value="1">
										0142
									</option>
									<option value="1">
										0151
									</option>
									<option value="1">
										0152
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

<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Daftar Mahasiswa Tugas Akhir
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span4">
				<table class="table table-ket">
					<tbody
						<tr>
							<td>
								Semester
							</td>
							<td>
								:
							</td>
							<td>
								0141
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
                        <th>Dosen Pembimbing</th>
                        <th>Judul</th>
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
                        <td>Budi Darmawan, M.Sn</td>
                        <td>Eksplorasi Bentuk Tokoh Wayang Dengan Teknik Batik Lukis</td>
                        <td>Seni Rupa</td>
                        <td>Pengajuan</td>
                        <td style="text-align:center;font-size:1.5em;" >
                        	<a data-toggle="modal"><i class="icon-edit" ></i></a>
                        	<a data-toggle="modal"><i class="icon-trash" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3060451004</td>
                        <td>IGNASIUS TOMMY FEBRIAN</td>
                        <td>Budi Darmawan, M.Sn</td>
                        <td>Keramik Dalam ruang dan Memori Publik Jakarta</td>
                        <td>Seni Rupa</td>
                        <td>Pengajuan</td>
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