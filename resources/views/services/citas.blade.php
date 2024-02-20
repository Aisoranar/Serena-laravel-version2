@extends('layaouts.app-master')

@section('content')

@auth
    <div class="container mt-5">
        <h1 class="mb-4">Agendar Cita</h1>

        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="motivo">Motivo de la Cita:</label>
                    <textarea class="form-control" id="motivo" rows="3" placeholder="Breve descripción" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="dia">Día:</label>
                    <select class="form-control" id="dia" onchange="updateHoraOptions()" required>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miércoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sábado">Sábado</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="hora">Hora:</label>
                    <select class="form-control" id="hora" required>
                        <!-- Initial time options for all days -->
                        <option value="7-8">7 am a 8 am</option>
                        <option value="8-9">8 am a 9 am</option>
                        <option value="9-10">9 am a 10 am</option>
                        <option value="10-11">10 am a 11 am</option>
                        <option value="11-12">11 am a 12 pm</option>
                        <option value="14-15">2 pm a 3 pm</option>
                        <option value="15-16">3 pm a 4 pm</option>
                        <option value="16-17">4 pm a 5 pm</option>
                        <option value="17-18">5 pm a 6 pm</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" required>
                </div>
            </div>

            <button class="btn btn-primary mt-3" type="button" onclick="agregarCita()">Agregar Cita</button>
        </form>
    </div>

@endauth

@guest
    <div class="container mt-5">
        <div class="alert alert-warning" role="alert">
            <p>Para acceder al contenido, <a href="/login">Inicia Sesión Aquí</a></p>
        </div>
    </div>
@endguest

@auth
    <script>
        // Disable form validation styling
        document.addEventListener('DOMContentLoaded', function () {
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        });

        function updateHoraOptions() {
            var dia = document.getElementById("dia").value;
            var horaDropdown = document.getElementById("hora");

            // Clear existing options
            horaDropdown.innerHTML = "";

            // Add time options based on the selected day
            if (dia === "Sábado") {
                horaDropdown.options.add(new Option("7 am a 8 am", "7-8"));
                horaDropdown.options.add(new Option("8 am a 9 am", "8-9"));
                horaDropdown.options.add(new Option("9 am a 10 am", "9-10"));
                horaDropdown.options.add(new Option("10 am a 11 am", "10-11"));
                horaDropdown.options.add(new Option("11 am a 12 pm", "11-12"));
            } else {
                // Default time options for other days
                horaDropdown.options.add(new Option("7 am a 8 am", "7-8"));
                horaDropdown.options.add(new Option("8 am a 9 am", "8-9"));
                horaDropdown.options.add(new Option("9 am a 10 am", "9-10"));
                horaDropdown.options.add(new Option("10 am a 11 am", "10-11"));
                horaDropdown.options.add(new Option("11 am a 12 pm", "11-12"));
                horaDropdown.options.add(new Option("2 pm a 3 pm", "14-15"));
                horaDropdown.options.add(new Option("3 pm a 4 pm", "15-16"));
                horaDropdown.options.add(new Option("4 pm a 5 pm", "16-17"));
                horaDropdown.options.add(new Option("5 pm a 6 pm", "17-18"));
            }
        }

        // Call the function initially to set the default options
        updateHoraOptions();

        function agregarCita() {
            // Get values from dropdowns and input fields
            var nombre = document.getElementById("nombre").value;
            var motivo = document.getElementById("motivo").value;
            var dia = document.getElementById("dia").value;
            var hora = document.getElementById("hora").value;
            var fecha = document.getElementById("fecha").value;

            // Check if it's Saturday and the time is within the allowed hours
            if (dia === "Sábado" && (hora < "7-8" || hora > "11-12")) {
                alert("Los horarios para los sábados son de 7 am a 12 pm. Por favor, elige un horario válido.");
                return;
            }

            // Create the message
            var mensaje = "Hola, mi nombre es " + nombre + ". \nMe gustaría agendar una cita con un Psicólogo. \n";
            mensaje += "Motivo de la Cita: " + motivo + "\n";
            mensaje += "Día: " + dia + "\n";
            mensaje += "Hora: " + hora + "\n";
            mensaje += "Fecha: " + fecha;

            // Construct the WhatsApp URL
            var url = "https://api.whatsapp.com/send?phone=573022997323&text=" + encodeURIComponent(mensaje);

            // Open the WhatsApp URL in a new tab
            window.open(url, "_blank");
        }
    </script>
@endauth

@endsection
