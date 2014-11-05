@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Pembayaran Mahasiswa
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span4">
				<table class="table">
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
                        </tr>
						<tr>
							<td>
								NIM
							</td>
							<td>
								:
							</td>
							<td>
								<input type="text" name="nim" class="span4" />
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
							</td>
							<td>
								<a class="btn btn-primary">
									Proses
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
				Data Pembayaran Mahasiswa
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
		<style type="text/css">
			.table-ket td{
				border: none;
			}
		</style>
			<table  class="table table-bordered table-condensed">
				<tbody>
					<tr>
						<td class="span2">NIM</td>
						<td>:</td>
						<td>05348973998232</td>
					</tr>
					<tr>
						<td class="span2">Nama</td>
						<td>:</td>
						<td>Raditya Mulawarman</td>
					</tr>
					<tr>
						<td class="span2">Program Studi</td>
						<td>:</td>
						<td>Seni Tari</td>
					</tr>
				</tbody>
			</table>
			<br/>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Biaya</th>
						<th>Jumlah</th>
						<th>Sudah Dibayar</th>
						<th>Kekurangan</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>1</td>
					<td>SP</td>
					<td class="number" >Rp. 3.500.000</td>
					<td class="number" >Rp. 1.500.000</td>
					<td class="number" >Rp. 2.000.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Juli</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp. 0</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Agustus</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp. 0</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - September</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp. 0</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>3</td>
					<td>SPP - Oktober</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - November</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Desember</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Januari</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Februari</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Maret</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - April</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Mei</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>2</td>
					<td>SPP - Juni</td>
					<td class="number" >Rp. 800.000</td>
					<td class="number" >Rp.0</td>
					<td class="number" >Rp. 800.000</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
					<tr>
					<td>4</td>
					<td>Kemahasiswaan 2013</td>
					<td class="number" >Rp. 100.000</td>
					<td class="number" >Rp. 100.000</td>
					<td class="number" >Rp. 0</td>
					<td>
						<a><i class="icon-download-alt"></i></a>
					</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


@stop