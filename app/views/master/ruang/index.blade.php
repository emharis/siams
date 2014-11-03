@extends('layouts.master')

@section('main-content')
<div class="span12">
    <div class="widget">
        <div class="widget-header"> <i class="icon-th-large"></i>
            <h3>Ruang</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="tab-pane" >

                <fieldset>
                    <div class="control-group">										
                        <a href="{{URL::to('master/ruang/new')}}" class="pull-right btn btn-primary">New</a>	
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
                        <th>Kode</th>
                        <th>Nama</th>
                        <th class="span1"></th>
                    </tr>
                </thead>
                <tbody>
                <?php $rownum=1; ?>
                @foreach($ruangs as $ru)
                	<tr>
                        <td>{{$rownum++}}</td>
                        <td>{{$ru->kode}}</td>
                        <td>{{$ru->nama}}</td>
                        <td style="text-align:center;font-size:1.5em;" >
                            <a href="#" ><i class="icon-edit" ></i></a>
                            <a href="#" ><i class="icon-trash" ></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /widget-content --> 
    </div>
    <!-- /widget -->
</div>
<!-- /span6 --> 
@stop