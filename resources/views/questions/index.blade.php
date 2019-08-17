@extends('layouts.app')

@section('content')
    <form action="/questions" method="POST" class="border-bottom p-3">
        @csrf
        <div class="form-group">
            <textarea name="body" id="body"  class="form-control"></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Just ask</button>
        </div>
    </form>

    <h2 class="bg-primary p-5 text-center text-white">Questions</h2>

    @foreach($questions as $question)
        <div class="border-bottom mb-3 justify-content-center align-items-stretch">
            {{ $question->body }}
        </div>
    @endforeach
@endsection
