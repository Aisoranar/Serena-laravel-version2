@extends('layaouts.app-master')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Test Psicológico</h1>

    <form action="{{ route('process-test') }}" method="post">
        @csrf

        <!-- Preguntas sobre Depresión -->
        <div class="form-group">
            <label for="question1">¿Con qué frecuencia te sientes triste sin razón aparente?</label>
            <select class="form-control" id="question1" name="question1">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question2">¿Has perdido interés en actividades que solías disfrutar?</label>
            <select class="form-control" id="question2" name="question2">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <!-- Preguntas sobre Ansiedad -->
        <div class="form-group">
            <label for="question3">¿Experimentas nerviosismo o ansiedad sin razón aparente?</label>
            <select class="form-control" id="question3" name="question3">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question4">¿Tienes dificultades para concentrarte debido a la ansiedad?</label>
            <select class="form-control" id="question4" name="question4">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <!-- Preguntas sobre Trastorno Obsesivo-Compulsivo (TOC) -->
        <div class="form-group">
            <label for="question5">¿Te resulta difícil controlar tus pensamientos obsesivos?</label>
            <select class="form-control" id="question5" name="question5">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question6">¿Realizas comportamientos repetitivos para reducir la ansiedad?</label>
            <select class="form-control" id="question6" name="question6">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <!-- Preguntas sobre Trastorno de Estrés Postraumático (TEPT) -->
        <div class="form-group">
            <label for="question7">¿Has experimentado un evento traumático y revives esos recuerdos?</label>
            <select class="form-control" id="question7" name="question7">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question8">¿Evitas situaciones que te recuerdan el evento traumático?</label>
            <select class="form-control" id="question8" name="question8">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <!-- Preguntas sobre Trastorno de Pánico -->
        <div class="form-group">
            <label for="question9">¿Experimentas episodios repentinos de miedo intenso sin razón aparente?</label>
            <select class="form-control" id="question9" name="question9">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question10">¿Sientes palpitaciones o molestias en el pecho durante los ataques de pánico?</label>
            <select class="form-control" id="question10" name="question10">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <!-- Preguntas sobre Trastorno Bipolar -->
        <div class="form-group">
            <label for="question11">¿Experimentas cambios extremos en tu estado de ánimo sin motivo aparente?</label>
            <select class="form-control" id="question11" name="question11">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question12">¿Has experimentado episodios de excesiva energía y actividad?</label>
            <select class="form-control" id="question12" name="question12">
                <option value="0">Nunca</option>
                <option value="1">Raramente</option>
                <option value="2">A veces</option>
                <option value="3">Frecuentemente</option>
                <option value="4">Siempre</option>
            </select>
        </div>

        <!-- Preguntas adicionales ... -->

        <!-- Agrega más preguntas según sea necesario -->

        <button type="submit" class="btn btn-primary">Enviar Test</button>
    </form>
</div>

@endsection
