@extends('layaouts.app-master')

@section('content')

<style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            -webkit-box-direction: normal;
            margin: 0;
        }

        .hero {
            color: #ffffff;
            padding: 40px 0;
            text-align: center;
        }

        .hero img {
            margin-bottom: 20px; /* Añadido un margen inferior a la imagen */
            max-width: 40%; /* Limita el tamaño máximo al 60% del ancho del contenedor padre */
            height: auto; /* La altura se ajustará automáticamente para mantener la proporción */
            display: block; /* Evita el espacio adicional en la parte inferior de la imagen */
            margin: 0 auto; /* Centra la imagen en la pantalla */
        }

        #servicios {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #fff;
            -webkit-box-direction: normal;
            padding: 0;
            max-width: 1100px;
            margin: 0 auto;
        }

        .service-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .service-card {
            flex: 0 0 30%;
            margin-bottom: 20px;
            text-align: center;
        }

        .service-card img {
            max-width: 50px;
            height: auto;
        }

        .img-fluid {
            max-width: 400px;
            height: auto;
            border-radius: 10%;
        }

        .btn-agenda {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            -webkit-box-direction: normal;
            text-align: center;
            margin: 5px 0;
            display: inline-block;
            background-color: #cd3c3c77;
            color: #fff;
            font-size: 18px;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            position: relative;
            z-index: 1; /* Añadido un índice z para asegurarse de que el botón esté sobre el fondo de la tarjeta */
        }

        .service-card a {
            color: #fff; /* Texto blanco en los enlaces */
            font-size: 16px; /* Tamaño de fuente más grande */
            text-decoration: none;
            display: block; /* Convertir enlaces en bloques para ocupar todo el ancho de la tarjeta */
        }
        #servicios {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #fff;
            -webkit-box-direction: normal;
            padding: 20px 0; /* Añadido un padding superior e inferior */
            max-width: 1100px;
            margin: 0 auto;
            text-align: center; /* Centrar el contenido */
        }

        .service-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Centrar los elementos */
        }

        .service-card {
            flex: 0 0 30%;
            margin: 20px; /* Añadido un margen alrededor de cada tarjeta */
            text-align: center;
            background-color: #cd3c3c77; /* Color de fondo de las tarjetas */
            padding: 20px; /* Añadido espacio interno en las tarjetas */
            border-radius: 10px; /* Bordes redondeados en las tarjetas */
            transition: background-color 0.3s ease;
        }

        .service-card:hover {
            background-color: #cd3c3c; /* Cambio de color al pasar el ratón sobre las tarjetas */
        }

        .service-card img {
            max-width: 80px; /* Tamaño de los iconos más grandes */
            height: auto;
            margin-bottom: 10px; /* Añadido un margen inferior a los iconos */
        }
        footer {     
        text-align: center; /* Centrado del texto */
        color: #fff; /* Color del texto blanco */
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        margin: 0;
        bottom: 0; /* Fija el footer en la parte inferior de la pantalla */
        width: 100%; /* Ancho completo */
    }

    .typewriter-text {
        overflow: hidden;
        border-right: 0.05em solid #fff; /* Reducir el grosor del borde derecho */
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: 0.15em;
        animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
    }

    @keyframes typing {
        from {
            width: 0;
        }
        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {
        from, to {
            border-color: transparent;
        }
        50% {
            border-color: #fff;
        }
    }
</style>


    @auth
        <div id="welcomeMessage" class="alert alert-success" role="alert">
            ¡Bienvenido, {{ ucfirst(auth()->user()->name ?? auth()->user()->username) }}! 
            Estás autenticado en la página.
        </div>

        <section class="hero">
        <div class="container">
            <div class="typewriter-text">
            <h1>S.E.R.E.N.A</h1>
            <h1><span id="salud"></span></h1>
            </div>
            <p>El proyecto "Serena" tiene como objetivo central desarrollar una plataforma web destinada a promover la salud mental en el ámbito universitario. Esta plataforma busca ofrecer herramientas para el agendamiento de citas y proporcionar recursos que fomenten el equilibrio emocional, la resiliencia y la nutrición, elementos fundamentales para el bienestar de los estudiantes.</p>
            <img src="{{ asset('assets/img/1.png') }}" class="img-fluid rounded-circle mx-auto d-block" alt="Serena">
            <a href="/test" class="btn-agenda">¡Haz el TEST ahora!</a>
        </div>
        </section>


        <div class="container" id="servicios">
            <h2>Servicios</h2>
            <div class="service-group">
                <div class="service-card">                
                        <img src="{{ asset('assets/img/calendar.png') }}" class="img-fluid mx-auto d-block" alt="calendar">
                        <a href="/citas">Agendamiento de Citas</a>
                    </a>
                </div>
                <div class="service-card">
                        <img src="{{ asset('assets/img/phone.png') }}" class="img-fluid mx-auto d-block" alt="phone">
                        <a href="/ayuda">Líneas de Ayuda y Emergencia</a>
                    </a>
                </div>
                <div class="service-card">                
                        <img src="{{ asset('assets/img/smile.png') }}" class="img-fluid mx-auto d-block" alt="calendar">
                        <a href="/informacion">Información sobre Psicopatologías y Manejo Emocional</a>
                    </a>
                </div>
                <div class="service-card">                
                        <img src="{{ asset('assets/img/estrella.png') }}" class="img-fluid mx-auto d-block" alt="calendar">
                        <a href="/tecnicas">Técnicas para Controlar Ataques de Ansiedad y Pánico</a>
                    </a>
                </div>
                <div class="service-card">                
                        <img src="{{ asset('assets/img/corazon.png') }}" class="img-fluid mx-auto d-block" alt="calendar">
                        <a href="/consejos">Consejos Alimenticios y Salud Mental</a>
                    </a>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <p>Derechos de autor © 2023 Aisor Anaya - Juan Gómez.</p>
                </div>
        </footer>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const saludSpan = document.getElementById('salud');
            const palabras = ['Salud', 'Equilibrio', 'Resiliencia', 'Emocional', 'Nutrición', 'Apoyo'];
            let indicePalabra = 0;
            let indiceLetra = 0;

            function escribirPalabra() {
                if (indicePalabra < palabras.length) {
                    const palabraActual = palabras[indicePalabra];
                    saludSpan.innerHTML = palabraActual.substring(0, indiceLetra + 1);
                    indiceLetra++;

                    if (indiceLetra === palabraActual.length) {
                        indicePalabra++;
                        indiceLetra = 0;

                        if (indicePalabra === palabras.length) {
                            indicePalabra = 0; // Reinicia el índice de la palabra al principio
                        }

                        setTimeout(escribirPalabra, 1000); // Pausa antes de la próxima palabra
                    } else {
                        setTimeout(escribirPalabra, 100); // Velocidad de escritura de cada letra
                    }
                }
            }

            setTimeout(escribirPalabra, 1000); // Inicia la animación después de un segundo
        });


        </script>
        
    @endauth




    @guest
    <div class="alert alert-warning" role="alert">
    <p>Para acceder al contenido, <a href="/login"> Inicia Sesión Aquí</a></p>
    </div>   
    
    @endguest
    

    @auth
    <script>
        // Espera 5 segundos y luego oculta el mensaje
        setTimeout(function() {
            document.getElementById('welcomeMessage').style.display = 'none';
        }, 2500);
    </script>
    @endauth


@endsection
