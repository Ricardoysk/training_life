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
$userRole = 'entrenador'; // 
$configData = Helper::appClasses();
@endphp
@if ($userRole === 'entrenador')

<div class="card">
    <div class="card-body">
        <form action="{{ route('clientes.store', ['id' => $cliente->id]) }}" method="POST">
            <h5 class="card-header">Edición de avances para el Cliente {{ $cliente->name }}</h5>
            @csrf
            <td>
                <a href="{{ route('clientes.form', $cliente->id) }}" class="btn btn-primary">Detalles</a>
                <a href="{{ route('pages-page-2') }}" class="btn btn-primary">Volver</a>

            </td>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="condicion_fisica_actual" class="form-label">Condición Física Actual</label>
                        <textarea class="form-control" name="condicion_fisica_actual" id="condicion_fisica_actual" rows="3">{{ $cliente->condicion_fisica_actual }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="objetivo" class="form-label">Objetivo</label>
                        <textarea class="form-control" name="objetivo" id="objetivo" rows="3">{{ $cliente->objetivo }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="nivel_actividad" class="form-label">Nivel de Actividad</label>
                        <select class="form-control" name="nivel_actividad" id="nivel_actividad">
                            <option value="sedentario" {{ $cliente->nivel_actividad == 'sedentario' ? 'selected' : '' }}>Sedentario</option>
                            <option value="ligeramente_activo" {{ $cliente->nivel_actividad == 'ligeramente_activo' ? 'selected' : '' }}>Ligeramente Activo</option>
                            <option value="moderadamente_activo" {{ $cliente->nivel_actividad == 'moderadamente_activo' ? 'selected' : '' }}>Moderadamente Activo</option>
                            <option value="hiperactivo" {{ $cliente->nivel_actividad == 'hiperactivo' ? 'selected' : '' }}>Hiperactivo</option>
                        </select>
                    </div>
<!-- ESTO DE PATOLOGIA NO TOMA BIEN DE ACUERDO A LA BD-->
                    <div class="mb-3">
                    <label for="patologia" class="form-label">Patología?</label>
                        <select class="form-control" name="patologia" id="patologia">
                            <option value="si" {{ $cliente->patologia === 'si' ? 'selected' : '' }}>Sí</option>
                            <option value="no" {{ $cliente->patologia === 'no' ? 'selected' : '' }}>No</option>
                        </select>
                        </div>


                    <div class="mb-3">
                        <label for="especificacion_patologia" class="form-label">Especificación de la Patología</label>
                        <textarea class="form-control" name="especificacion_patologia" id="especificacion_patologia" rows="3">{{ $cliente->especificacion_patologia }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="lesiones_molestias" class="form-label">Lesiones o Molestias</label>
                        <textarea class="form-control" name="lesiones_molestias" id="lesiones_molestias" rows="3">{{ $cliente->lesiones_molestias }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="bmi" class="form-label">BMI/IMC</label>
                        <input type="number" class="form-control" name="bmi" id="bmi" step="0.01" value="{{ $cliente->bmi }}">
                    </div>

                    <div class="mb-3">
                        <label for="grasa_corporal" class="form-label">Grasa Corporal</label>
                        <input type="number" class="form-control" name="grasa_corporal" id="grasa_corporal" step="0.01" value="{{ $cliente->grasa_corporal }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="musculatura_corporal" class="form-label">Musculatura Corporal</label>
                        <input type="number" class="form-control" name="musculatura_corporal" id="musculatura_corporal" step="0.01" value="{{ $cliente->musculatura_corporal }}">
                    </div>

                    <div class="mb-3">
                        <label for="calorias_diarias_basales" class="form-label">Calorías Diarias Basales</label>
                        <input type="number" class="form-control" name="calorias_diarias_basales" id="calorias_diarias_basales" step="0.01" value="{{ $cliente->calorias_diarias_basales }}">
                    </div>

                    <div class="mb-3">
                        <label for="edad_cuerpo" class="form-label">Edad del Cuerpo</label>
                        <input type="number" class="form-control" name="edad_cuerpo" id="edad_cuerpo" value="{{ $cliente->edad_cuerpo }}">
                    </div>

                    <div class="mb-3">
                        <label for="grasa_visceral" class="form-label">Grasa Visceral</label>
                        <input type="number" class="form-control" name="grasa_visceral" id="grasa_visceral" step="0.01" value="{{ $cliente->grasa_visceral }}">
                    </div>

                    <div class="mb-3">
                        <label for="brazo" class="form-label">Brazo</label>
                        <input type="number" class="form-control" name="brazo" id="brazo" step="0.01" value="{{ $cliente->brazo }}">
                    </div>

                    <div class="mb-3">
                        <label for="pierna" class="form-label">Pierna</label>
                        <input type="number" class="form-control" name="pierna" id="pierna" step="0.01" value="{{ $cliente->pierna }}">
                    </div>

                    <div class="mb-3">
                        <label for="cintura" class="form-label">Cintura</label>
                        <input type="number" class="form-control" name="cintura" id="cintura" step="0.01" value="{{ $cliente->cintura }}">
                    </div>

                    <div class="mb-3">
                        <label for="cadera" class="form-label">Cadera</label>
                        <input type="number" class="form-control" name="cadera" id="cadera" step="0.01" value="{{ $cliente->cadera }}">
                    </div>

                    <div class="mb-3">
                        <label for="pecho" class="form-label">Pecho</label>
                        <input type="number" class="form-control" name="pecho" id="pecho" step="0.01" value="{{ $cliente->pecho }}">
                    </div>

                    <div class="mb-3">
                        <label for="evaluacion_fms" class="form-label">Evaluación FMS</label>
                        <select class="form-control" name="evaluacion_fms" id="evaluacion_fms">
                            <option value="sentadilla" {{ $cliente->evaluacion_fms == 'sentadilla' ? 'selected' : '' }}>Sentadilla</option>
                            <option value="tobillo" {{ $cliente->evaluacion_fms == 'tobillo' ? 'selected' : '' }}>Tobillo</option>
                            <option value="zancada" {{ $cliente->evaluacion_fms == 'zancada' ? 'selected' : '' }}>Zancada</option>
                            <option value="hombro" {{ $cliente->evaluacion_fms == 'hombro' ? 'selected' : '' }}>Hombro</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>

@endif


@endsection


