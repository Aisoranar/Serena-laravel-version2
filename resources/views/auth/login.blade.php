@extends('layaouts.auth-master')

@section('content')
<form action="/login" method="POST">
    @csrf
    <h1>Iniciar Sesión</h1>
    @include('layaouts.partials.message')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

        <div class="text-center">
            <p class="mb-1">¿No tienes una cuenta?</p>
            <a href="/register" class="btn btn-success">Crear Cuenta</a>
        </div>
        
    </form>
@endsection
