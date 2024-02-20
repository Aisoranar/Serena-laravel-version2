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
    <h1 class="mb-4">Información sobre Psicopatologías y Manejo Emocional</h1>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/3.png') }}" class="card-img-top" alt="Imagen Depresión">
                <div class="card-body">
                    <h5 class="card-title">Depresión</h5>
                    <p class="card-text">
                        La depresión es un trastorno del estado de ánimo que afecta la manera en que una persona se siente,
                        piensa y maneja las actividades diarias. Puede generar sentimientos de tristeza, pérdida de interés
                        y falta de energía. El manejo emocional es crucial, y la terapia cognitivo-conductual ha demostrado ser eficaz.
                    </p>
                    <p><strong>Síntomas:</strong> Falta de energía, tristeza persistente, pérdida de interés en actividades.</p>
                    <p><strong>Consejos:</strong> Buscar apoyo social, establecer rutinas saludables, considerar la terapia psicológica.
                        Mantener una dieta equilibrada y practicar ejercicio regularmente también pueden ser beneficiosos.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="Imagen Ansiedad">

                <div class="card-body">
                    <h5 class="card-title">Ansiedad</h5>
                    <p class="card-text">
                        La ansiedad es una respuesta natural al estrés, pero cuando se vuelve abrumadora o persistente,
                        puede convertirse en un trastorno. Estrategias como la meditación, la respiración profunda y la
                        terapia pueden ayudar a manejar la ansiedad de manera efectiva.
                    </p>
                    <p><strong>Síntomas:</strong> Nerviosismo, inquietud, problemas para concentrarse, irritabilidad.</p>
                    <p><strong>Consejos:</strong> Técnicas de relajación, ejercicios de respiración, práctica de mindfulness.
                        Establecer límites claros, delegar tareas y aprender a decir "no" pueden ayudar a reducir el estrés.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/4.png') }}" class="card-img-top" alt="Imagen TOC">

                <div class="card-body">
                    <h5 class="card-title">Trastorno Obsesivo-Compulsivo (TOC)</h5>
                    <p class="card-text">
                        El TOC es un trastorno de ansiedad caracterizado por pensamientos obsesivos y comportamientos compulsivos.
                        La terapia de exposición y la respuesta de prevención son enfoques comunes en el tratamiento del TOC.
                    </p>
                    <p><strong>Síntomas:</strong> Pensamientos obsesivos, comportamientos compulsivos, rituales repetitivos, indecisión.</p>
                    <p><strong>Consejos:</strong> Terapia cognitivo-conductual, exposición gradual, técnicas de gestión del estrés.
                        Practicar la toma de decisiones consciente puede ayudar a reducir la indecisión.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="Imagen Trastorno de Estrés Postraumático (TEPT)">

                <div class="card-body">
                    <h5 class="card-title">Trastorno de Estrés Postraumático (TEPT)</h5>
                    <p class="card-text">
                        El TEPT es una reacción a eventos traumáticos. Puede incluir flashbacks, pesadillas y pensamientos intrusivos.
                        La terapia de exposición y la terapia cognitivo-conductual son enfoques comunes para el tratamiento del TEPT.
                    </p>
                    <p><strong>Síntomas:</strong> Flashbacks, pesadillas, hipervigilancia, evitación de recordatorios del trauma.</p>
                    <p><strong>Consejos:</strong> Terapia de exposición, terapia cognitivo-conductual, apoyo emocional, técnicas de relajación.
                        Practicar la aceptación y el autocuidado puede ser beneficioso.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="Imagen Trastorno de Pánico">
                <div class="card-body">
                    <h5 class="card-title">Trastorno de Pánico</h5>
                    <p class="card-text">
                        El trastorno de pánico implica episodios repentinos de miedo intenso que pueden incluir palpitaciones,
                        sudoración y temblores. La terapia cognitivo-conductual y la terapia de exposición son enfoques efectivos.
                    </p>
                    <p><strong>Síntomas:</strong> Palpitaciones, sudoración, sensación de muerte inminente, mareos.</p>
                    <p><strong>Consejos:</strong> Técnicas de respiración, terapia cognitivo-conductual, apoyo durante episodios.
                        La práctica regular de la atención plena puede ayudar a reducir la intensidad de los ataques de pánico.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/2.png') }}" class="card-img-top" alt="Imagen Trastorno Bipolar">
                <div class="card-body">
                    <h5 class="card-title">Trastorno Bipolar</h5>
                    <p class="card-text">
                        El trastorno bipolar implica cambios extremos en el estado de ánimo, desde episodios depresivos hasta maníacos.
                        La medicación y la terapia son opciones de tratamiento comunes.
                    </p>
                    <p><strong>Síntomas:</strong> Episodios depresivos, maníacos, cambios de energía y sueño, irritabilidad.</p>
                    <p><strong>Consejos:</strong> Medicación, terapia psicológica, apoyo emocional. Mantener un horario regular de sueño
                        y participar en actividades que proporcionen placer puede ser beneficioso.</p>
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
