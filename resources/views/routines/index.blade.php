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

    <!-- Código de la página de rutinas -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (Auth::user()->role === 'entrenador')
        <h1>Rutinas</h1>

        <a href="{{ route('routines.create') }}" class="btn btn-primary">Crear Rutina</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Detalles</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($routines as $routine)
                    @if ($routine->user_id == auth()->user()->id)
                        <tr>
                            <td>{{ $routine->title }}</td>
                            <td>{{ $routine->details }}</td>
                            <td>
                                @if ($routine->image)
                                    <img src="{{ asset('storage/images/' . basename($routine->image)) }}" alt="Imagen de la rutina" width="100">
                                @else
                                    Sin imagen
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('routines.edit', $routine) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('routines.destroy', $routine) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta rutina?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
