@extends('layouts.master')

@section('main-content')
<div class="span12">
	<div class="widget">
		<div class="widget-header">
			<i class="icon-th-large"></i>
			<h3>Entry Data Pengajuan Cuti</h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">

			<div class="tab-pane" id="formcontrols">
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="username">NIP</label>
							<div class="controls">
								<input type="text" class="span2" name="nip" value="153155341354" />
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username">Nama</label>
							<div class="controls">
								<input type="text" class="span2" name="nip" value="Budi Raharjo" />
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username">Jenis Cuti</label>
							<div class="controls">
								<select name="dosen">
									<option value="1">Cuti Hamil/Melahirkan</option>
									<option value="1">Cuti Tahunan</option>
								</select>
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username">Tanggal</label>
							<div class="controls">
								<input type="text" class="span2" name="tgl" value="{{date('d-m-Y')}}" />
								<input type="text" class="span2" name="tgl" value="{{date('d-m-Y')}}" />
							</div>
							<!-- /controls -->
						</div>
						<div class="control-group">
							<label class="control-label" for="username"></label>
							<div class="controls">
								<button type="submit" class="btn btn-primary">
									Save
								</button>
								<button class="btn">
									Cancel
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
<!-- /span6 -->
@stop