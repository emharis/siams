@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large">
			</i>
			<h3>
				Index Prestasi Mahasiswa
			</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="span4">
				<table class="table">
					<tbody
						<tr>
							<td>Program Studi</td>
                            <td>:</td>
                            <td>
                                <select name="dosen">
                                <option value="1">Semua</option>
                                    <option value="1">Seni Tari</option>
                                    <option value="1">Seni Rupa</option>
                                    <option value="1">Seni Teater</option>
                                    <option value="1">Seni Karawitan</option>
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


<div class="span6">
	<div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    Index Prestasi</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="area-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /line-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
</div>
<!-- /span6 -->
<div class="span6">

</div>


@stop