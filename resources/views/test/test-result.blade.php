@extends('layaouts.app-master')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Resultado del Test</h1>

                <p class="card-text">El resultado del test es: <strong>{{ $result }}</strong></p>


                <p class="card-text">
                    Este resultado es proporcionado con fines informativos generales. No es un diagnóstico médico preciso.
                    Consulta a un profesional de la salud mental para obtener una evaluación más detallada y orientación adecuada.
                </p>
            </div>
        </div>
    </div>
@endsection
