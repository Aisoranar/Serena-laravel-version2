@extends('layaouts.app-master')


@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Perfil de {{ $user->name }}</h1>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="profile_image" class="form-label">Foto de perfil:</label>
                        <input type="file" class="form-control" id="profile_image" name="profile_image">
                        <small class="text-muted">Sube una imagen con un tamaño máximo de 1024x1024 píxeles.</small>
                    </div>
                    

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="username" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required readonly>
                    </div>

                    {{-- Puedes agregar más campos según tus necesidades --}}

                    <div class="text-end">
                        <button type="button" class="btn btn-primary" onclick="enableEdit()">Editar</button>
                        <button type="submit" class="btn btn-success d-none" id="saveBtn">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function enableEdit() {
            // Habilitar la edición de los campos y mostrar el botón de "Guardar Cambios"
            document.getElementById('name').readOnly = false;
            document.getElementById('username').readOnly = false;
            document.getElementById('email').readOnly = false;

            document.getElementById('saveBtn').classList.remove('d-none');
        }
    </script>
@endsection
