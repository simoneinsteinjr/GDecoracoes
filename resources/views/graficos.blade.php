@extends('admin')
@section('content')
    <div class="container">
        </br>
        <div class="text-center">
           <h5>Estatisticas das Reservas</h5>
            <hr class="mt-2 mb-2">
        </div>
        <div class="row ">

            <div class="col-8 offset-2">
                <div class="sample-chart-wrapper">
                    <canvas id="line-chart-sample" height="120"></canvas>
                </div>
            </div>
        </div>
    </div>

    @section('js')
        <script src="{{url('js/chartjs/chart.min.js')}}"></script>
        <script src="{{url('js/chartjs/chart-script.js')}}"></script>
    @endsection
@endsection