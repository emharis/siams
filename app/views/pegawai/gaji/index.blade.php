@extends('layouts.master')@section('main-content')<div class="span12">    <div class="widget">        <div class="widget-header"> <i class="icon-th-large"></i>            <h3>Data Gaji Pegawai</h3>        </div>        <!-- /widget-header -->        <div class="widget-content">            <div class="tab-pane" >                <fieldset>                    <div class="control-group">										                        <label class="control-label" for="username">Filter Data</label>                        <div class="controls">                            <input type="text" class="span4 " id="username" >                        </div> <!-- /controls -->				                    </div> <!-- /control-group -->                </fieldset>            </div>            <table class="table table-bordered">                <thead>                    <tr>                        <th class="span1">No</th>                        <th>NIP</th>                        <th>Nama</th>                        <th>Jab</th>                        <th>Dept</th>                        <th>Bln</th>                        <th>Thn</th>                        <th>Gapok</th>                        <th>Tunj Total</th>                        <th>Uang Lembur</th>                        <th>Gaji</th>                        <th class="span2"></th>                    </tr>                </thead>                <tbody>                    <tr>                    	<td>1</td>                    	<td>4531343654</td>                    	<td>Ahmad Fanani</td>                    	<td>Staff</td>                    	<td>BAAK</td>                    	<td>Oktober</td>                    	<td>2014</td>                    	<td style="text-align: right;" >2.500.000</td>                    	<td style="text-align: right;" >750.000</td>                    	<td style="text-align: right;" >250.000</td>                    	<td style="text-align: right;"> 3.500.000</td>                    	<td style="font-size: 1.3em;text-align: center;">                    		<a href="#myModal"  data-toggle="modal"><i class="icon-print" ></i></a>                    	</td>                    </tr>                    <tr>                    	<td>2</td>                    	<td>42135432123</td>                    	<td>Neni Suhaeni</td>                    	<td>Staff</td>                    	<td>BAAK</td>                    	<td>Oktober</td>                    	<td>2014</td>                    	<td style="text-align: right;" >2.500.000</td>                    	<td style="text-align: right;" >750.000</td>                    	<td style="text-align: right;" >250.000</td>                    	<td style="text-align: right;"> 3.500.000</td>                    	<td style="font-size: 1.3em;text-align: center;">                    		<a href="#myModal"  data-toggle="modal"><i class="icon-print" ></i></a>                    	</td>                    </tr>                    <tr>                    	<td>1</td>                    	<td>4531324615</td>                    	<td>Ahmad Fanani</td>                    	<td>Kepala Prodi</td>                    	<td>Prodi Seni Tari</td>                    	<td>Oktober</td>                    	<td>2014</td>                    	<td style="text-align: right;" >3.000.000</td>                    	<td style="text-align: right;" >1.500.000</td>                    	<td style="text-align: right;" >500.000</td>                    	<td style="text-align: right;"> 5.000.000</td>                    	<td style="font-size: 1.3em;text-align: center;">                    		<a href="#myModal"  data-toggle="modal"><i class="icon-print" ></i></a>                    	</td>                    </tr>                </tbody>            </table>                        <!-- Modal -->            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">                <div class="modal-header" style="text-align: center;">                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">                        ×                    </button>                    <h5>SLIP GAJI</h5>                    <h5>STKW SURABAYA</h5>                </div>                <div class="modal-body">                    <div class="span4" >                        <style type="text/css">                            table.krs tbody tr td{                                border: none;                            }                        </style>                        <table class="table krs table-condensed">                            <tbody>                                <tr>                                    <td>Nama</td>                                    <td>:</td>                                    <td>M. Agus Rahman Hermawan</td>                                </tr>                                <tr>                                    <td>NIP</td>                                    <td>:</td>                                    <td>4532.463543.1354</td>                                </tr>                                <tr>                                    <td>Jabatan / Departemen</td>                                    <td>:</td>                                    <td>Staff / BAAK</td>                                </tr>                            </tbody>                        </table>                    </div>                    <div class="span3" >                        <table class="table krs table-condensed">                            <tbody>                                <tr>                                    <td>Bulan/Tahun</td>                                    <td>:</td>                                    <td>Oktober/2014</td>                                </tr>                                <tr>                                    <td>Tanggal Penerbitan</td>                                    <td>:</td>                                    <td>{{date('d-m-Y')}}</td>                                </tr>                                                            </tbody>                        </table>                    </div>                    <div class="span7">                        <table class="table ">                            <thead>                                <tr>                                    <th>PENERIMAAN</th>                                    <th></th>                                    <th></th>                                    <th>POTONGAN</th>                                    <th></th>                                </tr>                            </thead>                            <tbody>                                <tr>                                	<td>Gaji Pokok</td>                                	<td style="text-align: right;">2.500.000</td>                                	<td></td>                                	<td>Iuran</td>                                	<td style="text-align: right;">15.000</td>                                </tr>                                <tr>                                	<td>Tunjangan Jabatan</td>                                	<td style="text-align: right;">1.000.000</td>                                	<td></td>                                	<td></td>                                	<td style="text-align: right;"></td>                                </tr>                                <tr>                                	<td>Tunjangan Istri</td>                                	<td style="text-align: right;">500.000</td>                                	<td></td>                                	<td></td>                                	<td style="text-align: right;"></td>                                </tr>                                <tr>                                	<td>Tunjangan Anak</td>                                	<td style="text-align: right;">250.000</td>                                	<td></td>                                	<td></td>                                	<td style="text-align: right;"></td>                                </tr>                                <tr>                                	<td>Uang Lembur</td>                                	<td style="text-align: right;">78.000</td>                                	<td></td>                                	<td></td>                                	<td style="text-align: right;"></td>                                </tr>                                <tr>                                	<td>Transportasi</td>                                	<td style="text-align: right;">150.000</td>                                	<td></td>                                	<td></td>                                	<td style="text-align: right;"></td>                                </tr>                                <tr>                                	<td>Uang Makan</td>                                	<td style="text-align: right;">400.000</td>                                	<td></td>                                	<td></td>                                	<td style="text-align: right;"></td>                                </tr>                                <tr >                                	<td style="border-top:solid 2px darkgrey; " ><b>TOTAL PENERIMAAN</b></td>                                	<td style="border-top:solid 2px darkgrey; text-align: right;">4.878.000</td>                                	<td></td>                                	<td style="border-top:solid 2px darkgrey; " ><b>TOTAL POTONGAN</b></td>                                	<td style="border-top:solid 2px darkgrey; text-align: right;">15.000</td>                                </tr>                                <tr>                                	<td style="border-top:solid 2px darkgrey; " colspan="2" ><b>TOTAL GAJI</b></td>                                	<td></td>                                	<td colspan="2" style="border-top:solid 2px darkgrey; text-align: right;">4.863.000</td>                                </tr>                            </tbody>                        </table>                    </div>                </div>                <div class="modal-footer">                    <button class="btn" data-dismiss="modal" aria-hidden="true">                        Cancel                    </button>                    <button class="btn btn-primary">                        Print                    </button>                </div>            </div>                    </div>        <!-- /widget-content -->     </div>    <!-- /widget --></div><!-- /span6 --> @stop