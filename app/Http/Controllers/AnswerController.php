<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Question;

class AnswerController extends Controller
{
    public function store(Question $question, AnswerRequest $request)
    {
        $question->answers()->create(['body' => $request->answer]);

        return redirect('/questions/' . $question->id, 201);
    }
}
