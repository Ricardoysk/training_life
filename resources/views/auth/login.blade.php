@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        
        <div class="mx-auto">
          <div class="app-brand justify-content-center mb-4">
            <a href="{{url('/')}}" class="app-brand-link gap-2 mb-4">
              <span class="app-brand-logo">@include('_partials.macroslogin')</span>
              <span class="app-brand-text demo h3 mb-0 fw-bold"></span>
            </a>
          </div>
        </div>
       
        <div class="flex-row text-center mx-auto">
        <div class="mx-auto">
          <h3>Accede a un Estilo de Vida Activo y Motivador<br> con Nuestro Sistema de Login</h3>
          <p>
          En nuestro sistema de inicio de sesión, te brindamos una experiencia única y segura para acceder a tu cuenta personalizada. <br> Nuestro objetivo es facilitar tu viaje de entrenamiento y ayudarte a alcanzar tus metas de bienestar de una manera eficiente y motivadora.
          </p>
        </div>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
            <!-- <span class="app-brand-logo demo">
              <img src="{{asset('assets/img/pages/training_life.png')}}">
            </span>  -->
            <span class="app-brand-text demo h3 mb-0 fw-bold">Training Life</span>
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Bienvenidos a training life! 👋</h4>
        <p class="mb-4">Inicia sesión en tu cuenta y comienza la aventura.</p>

        @if (session('status'))
        <div class="alert alert-success mb-1 rounded-0" role="alert">
          <div class="alert-body">
            {{ session('status') }}
          </div>
        </div>
        @endif

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="login-email" class="form-label">Correo</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" placeholder="" autofocus value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Contraseña</label>
              @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">
                <small>¿Olvidaste tu contraseña?</small>
              </a>
              @endif
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="login-password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="mb-3">
            <!-- <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div> -->
          </div>
          <button class="btn btn-primary d-grid w-100" type="submit">Iniciar Sesión</button>
        </form>

        <p class="text-center">
          <span>¿No tienes cuenta?</span>
          @if (Route::has('register'))
          <a href="{{ route('register') }}">
            <span>Crear cuenta</span>
          </a>
          @endif
        </p>

        <div class="divider my-4">
          <div class="divider-text"></div>
        </div>

        <!-- <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
          </a>
        </div> -->
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
@endsection