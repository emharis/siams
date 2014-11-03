@extends('layouts.master')

@section('main-content')
<div class="span12">
    <div class="widget">
        <div class="widget-header"> <i class="icon-th-large"></i>
            <h3>Seleksi PMB Calon Mahasiswa</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <style type="text/css">
                table.input tbody tr td {
                    border: none;
                }
            </style>
            <table class="table input">
                <tbody>
                    <tr>
                        <td class="span2" >Tahun Akademik</td>
                        <td class="span1" >:</td>
                        <td class="span2" >
                            <select name="takad">
                                <option value="1">2011/2012</option>
                                <option value="1">2012/2013</option>
                                <option value="1">2013/2014</option>
                                <option value="1">2014/2015</option>
                                <option value="1">2015/2016</option>
                            </select>
                        </td>
                        <td></td>
                        <td></td></tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a class="btn btn-primary">Proses</a></td>
                        <td></td>
                        <td></td></tr>
                </tbody>
            </table>
        </div>
        <!-- /widget-content --> 
    </div>
    <!-- /widget -->
</div>

<div class="span12">
    <div class="widget">
        <div class="widget-header"> <i class="icon-th-large"></i>
            <h3>Calon Mahasiswa</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="tab-pane" >

                <fieldset>
                    <div class="control-group">										
                        <a href="{{URL::to('pmb/regis')}}" class="pull-right btn btn-primary">New</a>	
                        <label class="control-label" for="username">Filter Data</label>
                        <div class="controls">
                            <input type="text" class="span4 " id="username" >
                        </div> <!-- /controls -->				

                    </div> <!-- /control-group -->

                </fieldset>

            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="span1">No</th>
                        <th>Nama</th>
                        <th>Pilihan I</th>
                        <th>Pilihan II</th>
                        <th>Asal Sekolah</th>
                        <th>Asal Daerah</th>
                        <th>Usia (th)</th>
                        <th>JK</th>
                        <th>Nilai</th>
                        <th class="span2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ardi Rahman</td>
                        <td>Seni Tari</td>
                        <td>Seni Karawitan</td>
                        <td>SMAN 1 Sidoarjo</td>
                        <td>Sidoarjo</td>
                        <td style="text-align:right">18</td>
                        <td>Laki-laki</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nailul Author el Habibi</td>
                        <td>Seni Teater</td>
                        <td>Seni Rupa</td>
                        <td>SMA YPM 3 Surabaya</td>
                        <td>Surabaya</td>
                        <td style="text-align:right">18</td>
                        <td>Laki-laki</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ika Rahmawati</td>
                        <td>Seni Tari</td>
                        <td>Seni Karawitan</td>
                        <td>SMAN 1 Pontianak</td>
                        <td>Pontianak</td>
                        <td style="text-align:right">18</td>
                        <td>Perempuan</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hanifa Ardianti</td>
                        <td>Seni Karawitan</td>
                        <td>Seni Tari</td>
                        <td>SMK Diponegoro</td>
                        <td>Sidoarjo</td>
                        <td style="text-align:right">18</td>
                        <td>Perempuan</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Nafisa Attahira</td>
                        <td>Seni Tari</td>
                        <td>Seni Teater</td>
                        <td>SMAN 1 Sidoarjo</td>
                        <td>Sidoasrjo</td>
                        <td style="text-align:right">18</td>
                        <td>Perempuan</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Rafid Ibnu Shina</td>
                        <td>Seni Teater</td>
                        <td>Seni Karawitan</td>
                        <td>SMAN 4 Sidoarjo</td>
                        <td>Sidoarjo</td>
                        <td style="text-align:right">18</td>
                        <td>Laki-laki</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Syamsul Hidayat</td>
                        <td>Seni Rupa</td>
                        <td>Seni Tari</td>
                        <td>SMAN 1 Pontianak</td>
                        <td>Pontianak</td>
                        <td style="text-align:right">18</td>
                        <td>Laki-laki</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Lusiana Silalahi</td>
                        <td>Seni Rupa</td>
                        <td>Seni Tari</td>
                        <td>SMAN 4 Malang</td>
                        <td>Malang</td>
                        <td style="text-align:right">18</td>
                        <td>Perempuan</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Fairuz Aziz</td>
                        <td>Seni Teater</td>
                        <td>Seni Karawitan</td>
                        <td>SMK 1 Bojonegoro</td>
                        <td>Bojonegoro</td>
                        <td style="text-align:right">18</td>
                        <td>Laki-laki</td>
                        <td>375</td><td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-ok" ></i></a>&nbsp;
                            <a href="#" ><i class="icon-remove" ></i></a>
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