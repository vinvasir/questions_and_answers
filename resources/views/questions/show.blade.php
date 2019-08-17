@extends('layouts.app')

@section('content')
    <h3 class="card">
        <a href="/" class="text-center font-weight-bold text-black-50">Back</a>
    </h3>

    <h2 class="bg-primary p-5 text-center text-white">{{ $question->body }}</h2>


    @forelse($answers as $answer)
        <div class="card p-3 border-bottom mb-3 justify-content-center align-items-stretch">
            <h4 class="font-italic">
                "{{ $answer->body }}"
            </h4>
        </div>
    @empty
        <p class="border-bottom p-3 font-weight-bold">
            No answers yet! Be the first to answer by using the form below.
        </p>
    @endforelse

    <form action="/questions/{{$question->id}}/answers" method="POST">
        @csrf

        <div class="form-group">
            <h4 class="bg-primary text-white p-3">
                Answer the question!
            </h4>

            <textarea  name="answer" class="form-control">{{old('answer')}}</textarea>

            <div class="text-right">
                <a href="/" class="btn btn-danger">Cancel</a>

                <button class="btn btn-primary" type="submit">Answer question</button>
            </div>

            @error('answer')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
    </form>
@endsection
