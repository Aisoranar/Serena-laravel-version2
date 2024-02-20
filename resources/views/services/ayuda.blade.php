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
    <h1 class="mb-4">Líneas de Ayuda y Emergencia</h1>

    <div class="row">

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="Imagen Línea de Ayuda">
                <div class="card-body">
                    <h5 class="card-title">Línea de Ayuda para la Salud Mental</h5>
                    <p class="card-text">
                        Si necesitas apoyo inmediato, nuestra línea de ayuda está disponible las 24 horas. Nuestros profesionales capacitados están listos para ayudarte.
                    </p>
                    <p><strong>Servicios:</strong> Apoyo emocional, asesoramiento telefónico, derivación a profesionales.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <!-- Agrega más tarjetas según sea necesario para otras líneas de ayuda -->

    </div>
</div>

@endsection
