<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showTestForm()
    {
        return view('test.test');
    }

    public function processTest(Request $request)
    {
        // Ponderación de preguntas (puedes ajustar estos valores según la importancia de cada pregunta)
        $weights = [
            'question1' => 1,
            'question2' => 1,
            'question3' => 2,
            'question4' => 2,
            'question5' => 2,
            'question6' => 2,
            'question7' => 2,
            'question8' => 2,
            'question9' => 2,
            'question10' => 2,
            'question11' => 2,
            'question12' => 2,
            // Agrega más preguntas con sus ponderaciones según sea necesario
        ];

        // Calcular la puntuación ponderada
        $score = 0;
        foreach ($weights as $question => $weight) {
            $score += $request->input($question) * $weight;
        }

        // Lógica para determinar el resultado basado en la puntuación.
        if ($score >= 18) {
            $result = 'Depresión';
        } elseif ($score >= 12) {
            $result = 'Ansiedad';
        } else {
            $result = 'Sin preocupaciones significativas';
        }

        // Puedes almacenar el resultado en la base de datos, mostrarlo en una nueva vista, etc.
        return view('test.test-result', ['result' => $result]);
    }
}
