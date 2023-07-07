@extends('layouts.layoutMaster')

@section('title', 'Crear Rutina')

@section('vendor-style')
    <!-- Agrega los estilos adicionales que necesites para esta página -->
@endsection

@section('vendor-script')
    <!-- Agrega los scripts adicionales que necesites para esta página -->
@endsection

@section('page-script')
    <!-- Agrega los scripts adicionales específicos para esta página -->
@endsection

@section('content')
    <h1>Crear Rutina</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('routines.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="details">Detalles:</label>
            <textarea name="details" id="details" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Imagen:</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
