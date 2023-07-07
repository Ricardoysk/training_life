@extends('layouts.blankLayout')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-wrapper authentication-cover d-flex align-items-center justify-content-center">
    
    <!-- Register Card -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">Training Life</span>
          </a>
        </div>
        <!-- /Logo -->

        <!-- Register Card -->
        <h4 class="mb-2">La aventura comienza aquí 🚀</h4>
        <p class="mb-4">¡Haga que la administración de su aplicación sea fácil y divertida!</p>

        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="role" class="form-label">{{ __('Role') }}</label>
            <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" required onchange="toggleFields(this.value)">
              <option value="cliente">Cliente</option>
              <option value="entrenador">Entrenador</option>
            </select>
            @error('role')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <!-- CLIENTE FORM -->
          <div id="clienteFields" class="mb-3" style="display: none;">
            <label for="peso" class="form-label">{{ __('Peso') }}</label>
            <input type="number" step="0.01" class="form-control @error('peso') is-invalid @enderror" id="peso" name="peso" :value="old('peso')" />
            @error('peso')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="altura" class="form-label">{{ __('Altura') }}</label>
            <input type="number" step="0.01" class="form-control @error('altura') is-invalid @enderror" id="altura" name="altura" :value="old('altura')" />
            @error('altura')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="genero" class="form-label">{{ __('Género') }}</label>
            <select id="genero" name="genero" class="form-control @error('genero') is-invalid @enderror">
              <option value="hombre">Hombre</option>
              <option value="mujer">Mujer</option>
              <option value="otro">Otro</option>
            </select>
            @error('genero')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="number" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" :value="old('edad')" />
            @error('edad')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <!-- ENTRENADOR FORM -->
          <div id="entrenadorFields" class="mb-3" style="display: none;">
            <label for="especialidad" class="form-label">{{ __('Especialidad') }}</label>
            <select id="especialidad" name="especialidad" class="form-control @error('especialidad') is-invalid @enderror">
              <option value="Preparadorfisico">Preparador Físico</option>
              <option value="otro">Otro</option>
            </select>
            @error('especialidad')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          
          <div class="mb-3">
            <label for="username" class="form-label">NOMBRE DE USUARIO</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" placeholder="" autofocus value="{{ old('name') }}" />
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">CORREO ELECTRÓNICO</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="" value="{{ old('email') }}" />
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          
          <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">CONTRASEÑA</label>
            <div class="input-group input-group-merge @error('password') is-invalid @enderror">
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer">
                <i class="bx bx-hide"></i>
              </span>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password-confirm">CONFIRMAR CONTRASEÑA</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password-confirm" />
              <span class="input-group-text cursor-pointer">
                <i class="bx bx-hide"></i>
              </span>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-block waves-effect waves-float waves-light">{{ __('Registro') }}</button>
        </form>

        <p class="text-center">
          <small class="mr-25">¿Ya tienes una cuenta?</small>
          <a href="{{ route('login') }}"><small>Iniciar sesión</small></a>
        </p>
      </div>
    </div>
    <!-- /Register Card -->

  </div>
</div>
@endsection

@section('page-script')
{{-- Page js files --}}

<script>
  function toggleFields(role) {
    const clienteFields = document.getElementById("clienteFields");
    const entrenadorFields = document.getElementById("entrenadorFields");

    if (role === "cliente") {
      clienteFields.style.display = "block";
      entrenadorFields.style.display = "none";
    } else if (role === "entrenador") {
      clienteFields.style.display = "none";
      entrenadorFields.style.display = "block";
    } else {
      clienteFields.style.display = "none";
      entrenadorFields.style.display = "none";
    }
  }
</script>

@endsection

