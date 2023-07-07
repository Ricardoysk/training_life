@extends('layouts.layoutMaster')

@section('title', 'Home')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')

    @if ($userRole === 'cliente')
        <h4>Contenido para clientes</h4>
        <!-- Aquí puedes agregar el contenido específico para clientes -->
    @elseif ($userRole === 'entrenador')

        <h4>Contenido para entrenadores</h4>

        
        <iframe title="3_PAGINAS" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=50b525b5-5349-4d89-85fa-4f79d4260af8&autoAuth=true&ctid=60dac1b9-6047-489a-a134-b070386cccf7" frameborder="0" allowFullScreen="true"></iframe>


        @else
        <h4>Contenido genérico</h4>
        
        
        
        
        
        
        
        
        <!-- Aquí puedes agregar un contenido por defecto para otros roles o si no se ha especificado el rol -->
    @endif
@endsection




