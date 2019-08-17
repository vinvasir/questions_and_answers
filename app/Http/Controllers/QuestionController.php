<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->get();

        return view('questions.index', compact('questions'));
    }

    public function store(QuestionRequest $request)
    {
        Question::create(['body' => $request->body]);

        return redirect('questions', 201);
    }

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }
}
