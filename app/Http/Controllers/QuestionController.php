<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::withCount('answers')->latest()->get();

        $placeholder = $this->placeHolder();

        return view('questions.index', compact('questions','placeholder'));
    }

    public function store(QuestionRequest $request)
    {
        Question::create(['body' => $request->body]);

        return redirect('questions', 201);
    }

    public function show(Question $question)
    {
        $answers = $question->answers()->latest()->get()->reverse();

        return view('questions.show', compact('question','answers'));
    }

    private function placeHolder()
    {
        return collect([
            'How do you get protein?',
            'You must have cheat days?',
            'But bacon tho?',
            'Which country consumes the most meat per capita?'
        ])->random();
    }
}
