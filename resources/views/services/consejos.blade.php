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
                <h1 class="mb-4">Consejos Alimenticios y Salud Mental</h1>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Alimentación Saludable">
                            <div class="card-body">
                                <h5 class="card-title">Alimentación Saludable</h5>
                                <p class="card-text">
                                    Una dieta equilibrada es fundamental para mantener la salud mental. Consumir alimentos ricos en nutrientes
                                    puede tener un impacto positivo en el estado de ánimo y la función cerebral.
                                </p>
                                <p><strong>Consejos:</strong> Incluye frutas y verduras en tu dieta diaria, consume grasas saludables, limita el azúcar y la cafeína.</p>
                                <p>La hidratación adecuada también es crucial para el bienestar mental.</p>
                                <a href="#" class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Ejercicio Físico">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio Físico Regular</h5>
                        <p class="card-text">
                            La actividad física regular no solo beneficia tu cuerpo, sino también tu mente. Realizar ejercicio libera endorfinas, mejorando tu estado de ánimo y reduciendo el estrés.
                        </p>
                        <p><strong>Consejos:</strong> Encuentra una actividad que disfrutes, establece metas realistas y realiza ejercicios aeróbicos y de fuerza.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Buen Sueño">
                    <div class="card-body">
                        <h5 class="card-title">Buen Sueño</h5>
                        <p class="card-text">
                            Un sueño adecuado es esencial para la salud mental. Establece un horario regular de sueño, crea un ambiente propicio para descansar y evita estimulantes antes de acostarte.
                        </p>
                        <p><strong>Consejos:</strong> Apaga dispositivos electrónicos antes de dormir, mantén una temperatura confortable y evita cenas pesadas.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Socialización">
                    <div class="card-body">
                        <h5 class="card-title">Socialización Positiva</h5>
                        <p class="card-text">
                            Mantener conexiones sociales positivas contribuye a la salud mental. Comparte tiempo con amigos y familiares, participa en actividades sociales y cultiva relaciones significativas.
                        </p>
                        <p><strong>Consejos:</strong> Programa actividades sociales, practica la empatía y comunica abiertamente tus sentimientos.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Mindfulness">
                    <div class="card-body">
                        <h5 class="card-title">Prácticas de Mindfulness</h5>
                        <p class="card-text">
                            La atención plena (mindfulness) puede mejorar la salud mental. Practica técnicas de meditación, respiración consciente y enfoque en el presente.
                        </p>
                        <p><strong>Consejos:</strong> Dedica tiempo diario a la meditación, realiza pausas conscientes durante el día y practica la gratitud.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Hidratación">
                    <div class="card-body">
                        <h5 class="card-title">Hidratación Adecuada</h5>
                        <p class="card-text">
                            Mantén tu cuerpo bien hidratado para favorecer la salud mental. La deshidratación puede afectar negativamente el estado de ánimo y la concentración.
                        </p>
                        <p><strong>Consejos:</strong> Bebe suficiente agua a lo largo del día, incluye infusiones y alimentos con alto contenido de agua en tu dieta.</p>
                        <a href="#" class="btn btn-primary">Más información</a>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
