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
			<div class="span10">
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
							<td></td>
							<td>
								Program Studi
							</td>
							<td>
								:
							</td>
							<td>
								<select name="dosen">
									<option value="1">
										Semua
									</option>
									<option value="1">
										Seni Tari
									</option>
									<option value="1">
										Seni Rupa
									</option>
									<option value="1">
										Seni Teater
									</option>
									<option value="1">
										Seni Karawitan
									</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Angkatan
							</td>
							<td>
								:
							</td>
							<td>
								<select name="dosen">
									<option value="1">
										Semua
									</option>
									<option value="1">
										2010
									</option>
									<option value="1">
										2011
									</option>
									<option value="1">
										2012
									</option>
									<option value="1">
										2013
									</option>
									<option value="1">
										2014
									</option>
								</select>
							</td>
							<td></td>
							<td>Periode</td>
							<td>:</td>
							<td>
								<input type="text" class="date-picker span2" name="awal" />-
								<input type="text" class="date-picker span2" name="awal" />
							</td>
						</tr>
						<tr>
							<td>
								Biaya
							</td>
							<td>
								:
							</td>
							<td>
								<select name="dosen">
									<option value="1">
										Semua
									</option>
									<option value="1">
										SP
									</option>
									<option value="1">
										SPP
									</option>
									<option value="1">
										Kemahasiswaan
									</option>
									<option value="1">
										Wisuda
									</option>
									<option value="1">
										Kerja Praktek
									</option>
								</select>
							</td>
							<td></td>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
						</tr>
						<tr>
							<td colspan="7">
								<a class="btn btn-primary">
									Tampilkan
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
				Daftar Pembayaran Mahasiswa
			</h3>
			<a class="btn btn-danger pull-right" style="margin: 5px;" >PDF</a>
			<a class="btn btn-success pull-right" style="margin: 5px;" >Excel</a>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<table  class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Biaya</th>
						<th>Jumlah</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr>
						<td>1</td>
						<td>01/01/2011</td>
						<td>0532476783</td>
						<td>Muhammad Iwan Darmawan</td>
						<td>SPP - Januari</td>
						<td class="number" >Rp.800.000</td>
						<td></td>
					</tr>
					<tr style="font-size: 1.3em;background-color: whitesmoke;">
						<td colspan="5" ><b>Total </b></td>
						<td class="number"><b>Rp. 35.000.000</b></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


@stop