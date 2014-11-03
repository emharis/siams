@extends('layouts.master')

@section('main-content')
<div class="span12">
    <div class="widget">
        <div class="widget-header"> <i class="icon-th-large"></i>
            <h3>Input Tahun Akademik</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">

            <div class="tab-pane" id="formcontrols">
                    {{Form::open(array('url'=>URL::to('master/takad/new'),'class'=>'form-horizontal'))}}
                    <fieldset>
                        <div class="control-group">											
                            <label class="control-label" >Nama</label>
                            <div class="controls">
                                {{Form::text('nama',null,array('class'=>'span10'))}}
                            </div> <!-- /controls -->				
                        </div> <!-- /control-group -->
                        <div class="control-group">											
                            <label class="control-label" >Awal - Akhir</label>
                            <div class="controls">
                                <input name="awal" type="text" class="span2 datepicker" placeholder="awal" >
                                <input name="akhir" type="text" class="span2 datepicker  " placeholder="akhir">
                            </div> <!-- /controls -->				
                        </div> <!-- /control-group -->
                        <div class="control-group">											
                            <label class="control-label" >Aktif</label>
                            <div class="controls">
                                <select name="aktif">
                                    <option value="Y">Aktif</option>
                                    <option value="N" selected="selected">Tidak Aktif</option>
                                </select>
                            </div> <!-- /controls -->				
                        </div> <!-- /control-group -->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save</button> 
                            <a class="btn" href="{{URL::to('master/takad')}}" >Cancel</a>
                        </div> <!-- /form-actions -->
                    </fieldset>
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