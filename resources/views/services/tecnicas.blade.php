@extends('layaouts.app-master')

@section('content')

<style>
    .card-img-top {
        height: 200px; /* Puedes ajustar la altura según tus necesidades */
        object-fit: cover;
    }

    @media (max-width: 767.98px) {
        .card-img-top {
            height: auto; /* Ajuste automático de altura en dispositivos móviles */
        }
    }
</style>

<div class="container mt-5">
    <h1 class="mb-4">Técnicas para Controlar Ataques de Ansiedad y Pánico</h1>

    <div class="row">

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Técnicas de Respiración">
                <div class="card-body">
                    <h5 class="card-title">Técnicas de Respiración</h5>
                    <p class="card-text">
                        Practicar técnicas de respiración profunda puede ayudar a calmar el sistema nervioso y reducir la intensidad de los ataques de ansiedad y pánico.
                    </p>
                    <p><strong>Cómo hacerlo:</strong> Respira lenta y profundamente, inhalando durante 4 segundos, sosteniendo la respiración durante 4 segundos y exhalando durante 4 segundos.</p>
                    <p><strong>Consejos:</strong> Practica la respiración profunda regularmente, incluso cuando no estés experimentando ansiedad, para fortalecer la técnica.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Mindfulness">
                <div class="card-body">
                    <h5 class="card-title">Mindfulness</h5>
                    <p class="card-text">
                        Practicar mindfulness o atención plena puede ayudar a mantener la calma y reducir la respuesta de ansiedad. Enfócate en el momento presente y acepta tus pensamientos y emociones.
                    </p>
                    <p><strong>Cómo hacerlo:</strong> Dedica unos minutos al día a la meditación mindfulness. Observa tus pensamientos sin juzgar y dirige tu atención a tu respiración.</p>
                    <p><strong>Consejos:</strong> Comienza con sesiones cortas y aumenta gradualmente. Encuentra aplicaciones o recursos en línea para guiar tus prácticas de mindfulness.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Técnicas de Visualización">
                <div class="card-body">
                    <h5 class="card-title">Técnicas de Visualización</h5>
                    <p class="card-text">
                        Practica la visualización positiva para cambiar tus pensamientos y reducir la ansiedad. Imagina un lugar tranquilo y seguro durante momentos de estrés.
                    </p>
                    <p><strong>Cómo hacerlo:</strong> Cierra los ojos y visualiza un entorno relajante. Detalla los colores, sonidos y sensaciones para aumentar la efectividad.</p>
                    <p><strong>Consejos:</strong> Practica la visualización regularmente, especialmente antes de situaciones que puedan desencadenar ansiedad.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Técnicas de Distorsión Cognitiva">
                <div class="card-body">
                    <h5 class="card-title">Técnicas de Distorsión Cognitiva</h5>
                    <p class="card-text">
                        Aprende a identificar y cambiar patrones de pensamiento negativos. Desafía tus pensamientos irracionales y reemplázalos con afirmaciones más realistas.
                    </p>
                    <p><strong>Cómo hacerlo:</strong> Identifica pensamientos negativos automáticos. Cuestiona su validez y reemplázalos con pensamientos más equilibrados.</p>
                    <p><strong>Consejos:</strong> Lleva un registro de tus pensamientos para identificar patrones. Practica la reestructuración cognitiva regularmente.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
