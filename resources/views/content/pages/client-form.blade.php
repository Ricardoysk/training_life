@extends('layouts.layoutMaster')

@section('title', 'Formulario de Cliente')

@section('vendor-style')
    <!-- Estilos de vendor -->
@endsection

@section('vendor-script')
    <!-- Scripts de vendor -->
@endsection

@section('page-script')
    <script src="{{asset('assets/js/app-user-list.js')}}"></script>
@endsection

@section('content')
@php
$userRole = 'cliente'; // 

@endphp
@if ($userRole === 'cliente')


@endif
@php
$userRole = 'entrenador'; // 

@endphp
@if ($userRole === 'entrenador')
    <h3>Detalles del Cliente: </h3>
    <div class="card">
  <div class="card-body">
                        <td>
                            <a href="{{ route('pages-page-2') }}" class="btn btn-primary">Volver</a>
                        </td>
    <div class="row">
        <h5 class="card-header">Datos del Cliente {{ $cliente->name }}</h5>

        <div class="col-md-6">
        <form>
        <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" id="name" class="form-control" value="{{ $cliente->name }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" class="form-control" value="{{ $cliente->email }}" readonly>
    </div>
    <div class="form-group">
        <label for="peso">Peso</label>
        <input type="text" id="peso" class="form-control" value="{{ $cliente->peso }}" readonly>
    </div>
    <div class="form-group">
        <label for="altura">Altura</label>
        <input type="text" id="altura" class="form-control" value="{{ $cliente->altura }}" readonly>
    </div>
    <div class="form-group">
        <label for="genero">Género</label>
        <input type="text" id="genero" class="form-control" value="{{ $cliente->genero }}" readonly>
    </div>
    <div class="form-group">
        <label for="edad">Edad</label>
        <input type="text" id="edad" class="form-control" value="{{ $cliente->edad }}" readonly>
    </div>
    <div class="form-group">
        <label for="condicion_fisica_actual">Condición Física actual</label>
        <input type="text" id="condicion_fisica_actual" class="form-control" value="{{ $cliente->condicion_fisica_actual }}" readonly>
    </div>
    <div class="form-group">
        <label for="objetivo">Objetivo</label>
        <input type="text" id="objetivo" class="form-control" value="{{ $cliente->objetivo }}" readonly>
    </div>
    <div class="form-group">
        <label for="nivel_actividad">Nivel de actividad Física</label>
        <input type="text" id="nivel_actividad" class="form-control" value="{{ $cliente->nivel_actividad }}" readonly>
    </div>
    <div class="form-group">
        <label for="patologias">Patologias</label>
        <input type="text" id="patologias" class="form-control" value="{{ $cliente->patologias }}" readonly>
    </div>
    <div class="form-group">
        <label for="especificacion_patologia">Especificación de las patologias</label>
        <input type="text" id="especificacion_patologia" class="form-control" value="{{ $cliente->especificacion_patologia }}" readonly>
    </div>
    <div class="form-group">
        <label for="lesiones_molestias">Lesiones o molestias</label>
        <input type="text" id="lesiones_molestias" class="form-control" value="{{ $cliente->lesiones_molestias }}" readonly>
    </div>

        </form>
      </div>
        

      <div class="col-md-6">
        <form>
        <div class="form-group">
        <label for="bmi_imc">BMI / IMC</label>
        <input type="text" id="bmi_imc" class="form-control" value="{{ $cliente->bmi_imc }}" readonly>
    </div>
        <div class="form-group">
        <label for="grasa_corporal">Grasa corporal</label>
        <input type="text" id="grasa_corporal" class="form-control" value="{{ $cliente->grasa_corporal }}" readonly>
    </div>
    <div class="form-group">
        <label for="musculatura_corporal">Musculatura Corporal</label>
        <input type="text" id="musculatura_corporal" class="form-control" value="{{ $cliente->musculatura_corporal }}" readonly>
    </div>
    <div class="form-group">
        <label for="calorias_diarias_basales">Calorias diarias basales</label>
        <input type="text" id="calorias_diarias_basales" class="form-control" value="{{ $cliente->calorias_diarias_basales }}" readonly>
    </div>
    <div class="form-group">
        <label for="edad_cuerpo">Edad del cuerpo</label>
        <input type="text" id="edad_cuerpo" class="form-control" value="{{ $cliente->edad_cuerpo }}" readonly>
    </div>
    <div class="form-group">
        <label for="grasa_visceral">Grasa visceral</label>
        <input type="text" id="grasa_visceral" class="form-control" value="{{ $cliente->grasa_visceral }}" readonly>
    </div>
    <div class="form-group">
        <label for="brazo">Brazo</label>
        <input type="text" id="brazo" class="form-control" value="{{ $cliente->brazo }}" readonly>
    </div>
    <div class="form-group">
        <label for="pierna">Pierna</label>
        <input type="text" id="pierna" class="form-control" value="{{ $cliente->pierna }}" readonly>
    </div>
    <div class="form-group">
        <label for="cintura">Cintura</label>
        <input type="text" id="cintura" class="form-control" value="{{ $cliente->cintura }}" readonly>
    </div>
    <div class="form-group">
        <label for="cadera">Cadera</label>
        <input type="text" id="cadera" class="form-control" value="{{ $cliente->cadera }}" readonly>
    </div>
    <div class="form-group">
        <label for="pecho">Pecho</label>
        <input type="text" id="pecho" class="form-control" value="{{ $cliente->pecho }}" readonly>
    </div>
    <div class="form-group">
        <label for="evaluacion_fms">Evaluación FMS</label>
        <input type="text" id="evaluacion_fms" class="form-control" value="{{ $cliente->evaluacion_fms }}" readonly>
    </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        @endif
@endsection
    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <form action="{{ route('clientes.store', ['id' => $cliente->id]) }}" method="POST">

                    @csrf

                     Campos del formulario
                    <div class="mb-3">
                        <label for="condicion_fisica_actual" class="form-label">Condición Física Actual</label>
                        <textarea class="form-control" name="condicion_fisica_actual" id="condicion_fisica_actual" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="objetivo" class="form-label">Objetivo</label>
                        <textarea class="form-control" name="objetivo" id="objetivo" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                        <select class="form-control" name="nivel_actividad" id="nivel_actividad">
                            <option value="sedentario">Sedentario</option>
                            <option value="ligeramente_activo">Ligeramente Activo</option>
                            <option value="moderadamente_activo">Moderadamente Activo</option>
                            <option value="hiperactivo">Hiperactivo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="patologia" class="form-label">Patología</label>
                        <select class="form-select" name="patologia" id="patologia">
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="especificacion_patologia" class="form-label">Especificación de la Patología</label>
                        <textarea class="form-control" name="especificacion_patologia" id="especificacion_patologia" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="lesiones_molestias" class="form-label">Lesiones o Molestias</label>
                        <textarea class="form-control" name="lesiones_molestias" id="lesiones_molestias" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="bmi" class="form-label">BMI/IMC</label>
                        <input type="number" class="form-control" name="bmi" id="bmi" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="grasa_corporal" class="form-label">Grasa Corporal</label>
                        <input type="number" class="form-control" name="grasa_corporal" id="grasa_corporal" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="musculatura_corporal" class="form-label">Musculatura Corporal</label>
                        <input type="number" class="form-control" name="musculatura_corporal" id="musculatura_corporal" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="calorias_diarias_basales" class="form-label">Calorías Diarias Basales</label>
                        <input type="number" class="form-control" name="calorias_diarias_basales" id="calorias_diarias_basales" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="edad_cuerpo" class="form-label">Edad del Cuerpo</label>
                        <input type="number" class="form-control" name="edad_cuerpo" id="edad_cuerpo">
                    </div>

                    <div class="mb-3">
                        <label for="grasa_visceral" class="form-label">Grasa Visceral</label>
                        <input type="number" class="form-control" name="grasa_visceral" id="grasa_visceral" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="brazo" class="form-label">Brazo</label>
                        <input type="number" class="form-control" name="brazo" id="brazo" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="pierna" class="form-label">Pierna</label>
                        <input type="number" class="form-control" name="pierna" id="pierna" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="cintura" class="form-label">Cintura</label>
                        <input type="number" class="form-control" name="cintura" id="cintura" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="cadera" class="form-label">Cadera</label>
                        <input type="number" class="form-control" name="cadera" id="cadera" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="pecho" class="form-label">Pecho</label>
                        <input type="number" class="form-control" name="pecho" id="pecho" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="evaluacion_fms" class="form-label">Evaluación FMS</label>
                        <select class="form-control" name="evaluacion_fms" id="evaluacion_fms">
                            <option value="sentadilla">Sentadilla</option>
                            <option value="tobillo">Tobillo</option>
                            <option value="zancada">Zancada</option>
                            <option value="hombro">Hombro</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div> -->


