@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page chat')
<!-- @section('title', 'User List - Pages') -->

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jszip/jszip.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pdfmake/pdfmake.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
@endsection


@section('page-script')
<script src="{{asset('assets/js/app-user-list.js')}}"></script>

<script>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var imcData = {!! json_encode(session('imc')) !!};
    var classification = '';
    var description = '';

    if (imcData < 18.5) {
      classification = 'BAJO PESO';
      description = 'DELGADO';
    } else if (imcData >= 18.5 && imcData <= 24.9) {
      classification = 'ADECUADO';
    } else if (imcData >= 25.0 && imcData <= 29.9) {
      classification = 'SOBREPESO';
      description = 'SOBREPESO';
    } else if (imcData >= 30.0 && imcData <= 34.9) {
      classification = 'OBESIDAD GRADO 1';
      description = 'OBESIDAD';
    } else if (imcData >= 35.0 && imcData <= 39.9) {
      classification = 'OBESIDAD GRADO 2';
      description = 'OBESIDAD';
    } else if (imcData >= 40) {
      classification = 'OBESIDAD GRADO 3';
      description = 'OBESIDAD';
    }

    var categories = ['BAJO PESO', 'ADECUADO', 'SOBREPESO', 'OBESIDAD GRADO 1', 'OBESIDAD GRADO 2', 'OBESIDAD GRADO 3'];
    var imcValues = [0, 18.5, 24.9, 29.9, 34.9, 39.9, 100];
    var imcDataArray = Array(categories.length).fill(0);

    if (classification !== '') {
      var index = categories.indexOf(classification);
      if (index !== -1) {
        imcDataArray[index] = imcData - imcValues[index];
      }
    }

    var ctx = document.getElementById('imcChart').getContext('2d');
    var chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: categories,
    datasets: [
      {
        label: 'IMC',
        data: imcDataArray,
        backgroundColor: [
          '#FF6384', // Color para 'DELGADO' (Bajo peso)
          '#36A2EB', // Color para 'ADECUADO'
          '#FFCE56', // Color para 'SOBREPESO'
          '#800080', // Color para 'OBESIDAD GRADO 1'
          '#8B4513', // Color para 'OBESIDAD GRADO 2'
          '#FF0000'  // Color para 'OBESIDAD GRADO 3'
        ],
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      title: {
        display: true,
        text: 'Distribución de IMC'
      }
    }
  }
});


    var imcClassification = document.getElementById('imcClassification');
    imcClassification.innerHTML = classification;

    var imcDescription = document.getElementById('imcDescription');
    imcDescription.innerHTML = description;
  });
</script>






@endsection
<style>
  .legend-container {
    display: flex;
    justify-content: center;
    margin-bottom: 70px;
  }

  .legend-item {
    display: flex;
    align-items: center;
    margin-right: 20px;
  }

  .legend-color {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-right: 5px;
  }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Calcular IMC</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('calcularIMC') }}">
                        @csrf

                        <div class="form-group">
                            <label for="peso">Peso (kg)</label>
                            <input type="number" step="0.01" min="20" name="peso" id="peso" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="altura">Altura (m)</label>
                            <input type="number" step="0.01" min="1" name="altura" id="altura" class="form-control" required>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Calcular</button><br>
                    </form>
                </div>
            </div>
            @if(session('imc'))
            <div class="alert alert-success">
                El resultado del IMC es: {{ session('imc') }}
                @php
                $imc = session('imc');
                $classification = '';
                $description = '';

                if ($imc < 18.5) {
                    $classification = 'BAJO PESO';
                    $description = 'DELGADO';
                } elseif ($imc >= 18.5 && $imc <= 24.9) {
                    $classification = 'ADECUADO';
                } elseif ($imc >= 25.0 && $imc <= 29.9) {
                    $classification = 'SOBREPESO';
                    $description = 'SOBREPESO';
                } elseif ($imc >= 30.0 && $imc <= 34.9) {
                    $classification = 'OBESIDAD GRADO 1';
                    $description = 'OBESIDAD';
                } elseif ($imc >= 35.0 && $imc <= 39.9) {
                    $classification = 'OBESIDAD GRADO 2';
                    $description = 'OBESIDAD';
                } elseif ($imc >= 40) {
                    $classification = 'OBESIDAD GRADO 3';
                    $description = 'OBESIDAD';
                }
                @endphp

                <br>
                <strong>Clasificación de la OMS:</strong> {{ $classification }}
                @if(!empty($description))
                <br>
                <strong>Descripción popular:</strong> {{ $description }}
                @endif
            </div>
            @endif
        </div>
    </div>
</div><br><br><br><br>
<div class="legend-container">
  <span class="legend-item">
    <span class="legend-color" style="background-color: #FF6384;"></span>
    DELGADO (Bajo peso)
  </span>
  <span class="legend-item">
    <span class="legend-color" style="background-color: #36A2EB;"></span>
    ADECUADO
  </span>
  <span class="legend-item">
    <span class="legend-color" style="background-color: #FFCE56;"></span>
    SOBREPESO
  </span>
  <span class="legend-item">
    <span class="legend-color" style="background-color: #800080;"></span>
    OBESIDAD (Grado 1)
  </span>
  <span class="legend-item">
    <span class="legend-color" style="background-color: #8B4513;"></span>
    OBESIDAD (Grado 2)
  </span>
  <span class="legend-item">
    <span class="legend-color" style="background-color: #FF0000;"></span>
    OBESIDAD (Grado 3)
  </span>
</div>
<div class="chart-container mt-4">
        <canvas id="imcChart"></canvas>
    </div>

@endsection