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
				Manajemen Kerja Praktek
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
								<a class="btn btn-success" href="{{URL::to('akademik/pkp/new')}}">
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
				Daftar Mahasiswa Kerja Praktek
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
                        <th>Mahasiswa</th>
                        <th>Dosen Pembimbing</th>
                        <th>Instansi/Perusahaan</th>
                        <th>Judul KP</th>
                        <th>Program Studi</th>
                        <th>Status</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                        015034897 - Muhammad Iriawan <br/>
                        014354644 - Muhammad Iwan Darmawan
                        </td>
                        <td>Budi Darmawan, M.Sn</td>
                        <td>Dinas Pariwisatan dan Kebudayaan Surabaya</td>
                        <td></td>
                        <td>Seni Rupa</td>
                        <td>Pengajuan</td>
                        <td style="text-align:center;font-size:1.5em;" >
                        	<a data-toggle="modal"><i class="icon-edit" ></i></a>
                        	<a data-toggle="modal"><i class="icon-trash" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                        02435453543 - Irsyad Amin<br/>
                        02435435345 - Aulia Kencana
                        </td>
                        <td>Arya Sugita, M.Sn</td>
                        <td>PT. Surya Citra Televisi, Surabaya</td>
                        <td></td>
                        <td>Seni Teater</td>
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