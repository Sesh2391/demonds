@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="card-group no-padding">
	<div class="col-md-10 col-sm-10 col-10">
		<label class="h3 padding-3">LASTEST SAMPLES</label>
	</div>
	<div class="col-md-2 col-sm-2 col-2">
                <div class="badge badge-success ml-3 float-right">
                        <span class=""><i class="fa fa-check"></i></span>
                        <div class="info-box-content">
                                <span class="info-box-text">Status</span>
                        </div>
                </div>
        </div>
</div>

<div class="card-group no-padding">
  <div class="col-md-2 col-sm-8 col-12">
    <div class="info-box">
      <span class="info-box-icon"><i class="fa fa-fw fa-tachometer-alt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Current</span>
        <span class="info-box-number">1,410</span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-8 col-12">
    <div class="info-box">
      <span class="info-box-icon "><i class="fas fa-fw fa-tint"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Humidity</span>
        <span class="info-box-number">13,648</span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-8 col-12">
    <div class="info-box">
      <span class="info-box-icon"><i class="fab fa-fw fa-cloudversify"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">PPM</span>
        <span class="info-box-number">1,410</span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-8 col-12">
    <div class="info-box">
      <span class="info-box-icon"><i class="fas fa-fw fa-smog"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Smoke/fire</span>
        <span class="info-box-number">1,410</span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-8 col-12">
    <div class="info-box">
      <span class="info-box-icon"><i class="fas fa-fw fa-thermometer-full"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Temperature</span>
        <span class="info-box-number">1,410</span>
      </div>
    </div>
  </div>
  <div class="col-md-2 col-sm-8 col-12">
    <div class="info-box">
      <span class="info-box-icon"><i class="fas fa-fw fa-bolt"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Voltage</span>
        <span class="info-box-number">1,410</span>
      </div>
    </div>
  </div>
</div>


<div class="container">
	<div class="card-group row">
		<div class="col-md-6 col-sm-6 col-12">
			<div class="card">
				<div class="card-header p-3 mb-3 bg-dark text-white">
					Temperature/Humidity
				</div> 
				<div class="card-container p-0 m-0">
					<div class="bg-white rounded shadow">
						{!! $chart->container() !!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-12">
			<div class="card">
				<div class="card-header p-3 mb-3 bg-dark text-white">
					Temperature-door
				</div>
				<div class="p-6 m-20 bg-white rounded shadow">
					{!! $chart2->container() !!}
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-8 col-12">
                        <div class="card">
                                <div class="card-header p-3 mb-3 bg-dark text-white">
                                        Voltage-Current
                                </div>
				<div class="card-body card-group row">
                                <div class="p-3 m-15 bg-white rounded shadow">
                                       	{!! $chart_Voltage->container() !!}
                                </div>
				 <div class="p-3 m-15 bg-white rounded shadow">
                                        {!! $chart_current->container() !!}
                                </div>
				</div>
                        </div>
                </div>
		<div class="col-md-4 col-sm-4 col-12">
                	<div class="card">
                		<div class="card-header p-3 mb-3 bg-dark text-white">
                			Door-Dust
                		</div>
                		<div class="card-body card-group row">
                		<div class="p-1 m-15 bg-white rounded shadow">
					<div class="h6 text-center bg-success ml-1 float-left">
      						<span ><i class="fas fa-door-closed"></i></span>
              					<div class="info-box-content">
               					<span class="info-box-text">Status door</span>
               					</div>
      					</div>
				</div>
                		<div class="p-2 m-15 bg-white rounded shadow">
					{!! $chart_dust->container() !!}
                		</div>
				</div>
				</div>
			</div>
                </div>
	</div>
</div>


<script src="{{ LarapexChart::cdn() }}"></script>

<!-- Or use the cdn directly -->

<!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->

<!-- Or use the local library as asset the package already provides a publication with this file *see below -->

{{--<!-- <script src="{{ asset('vendor/larapex-charts/apexchart.js') }}"></script> -->--}}

{{ $chart->script() }}

{{ $chart2->script() }}

{{ $chart_Voltage->script() }}

{{ $chart_current->script() }}

{{ $chart_dust->script() }}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop

