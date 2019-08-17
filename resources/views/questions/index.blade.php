@extends('layouts.app')

@section('content')
    <h2 class="bg-primary p-5 text-center text-white">Questions</h2>

    @foreach($questions as $question)
        <div class="border-bottom mb-3 justify-content-center align-items-stretch">
            {{ $question->body }}
        </div>
    @endforeach
@endsection
