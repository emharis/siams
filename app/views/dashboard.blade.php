@extends('layouts.master')

@section('main-content')
<div class="span12">
    <div class="widget">
        <div class="widget-header"> <i class="icon-bookmark"></i>
            <h3>Akses Cepat</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="shortcuts"> 
                <a href="{{URL::to('mater/takad')}}" class="shortcut"><i class="shortcut-icon icon-calendar"></i><span class="shortcut-label">Tahun Akademik</span> </a>
                <a href="{{URL::to('mater/ruang')}}" class="shortcut"><i class="shortcut-icon icon-home"></i><span class="shortcut-label">Ruangan</span> </a>
                <a href="{{URL::to('master/mahasiswa')}}" class="shortcut"><i class="shortcut-icon icon-user"></i><span class="shortcut-label">Mahasiswa</span> </a>

            <!-- /shortcuts --> 
        </div>
        <!-- /widget-content --> 
    </div>
    <!-- /widget -->
</div>
<!-- /span6 --> 

@stop