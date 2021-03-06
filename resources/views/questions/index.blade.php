@extends('layouts.app')

@section('content')
    <form action="/questions" method="POST" class="border-bottom p-3">
        @csrf
        <div class="form-group">
            <textarea name="body" id="body"  class="form-control" placeholder="{{ old('body') ? null : $placeholder }}">{{old('body') ? old('body') : ''}}</textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Just ask</button>
        </div>

        @error('body')
        <div class="alert alert-danger mt-3">{{ $message }}</div>
        @enderror
    </form>

    <h2 class="bg-primary p-5 text-center text-white">Questions</h2>

    @foreach($questions as $question)
        <div class="card p-3 border-bottom mb-3 justify-content-center align-items-stretch">
            <h4 class="font-italic">
                <a href="/questions/{{$question->id}}" class="text-dark">
                    "{{ $question->body }}"
                </a>
            </h4>

            <div class="align-self-end">
                <span class="badge badge-primary">{{ $question->answers_count }} answers</span>
            </div>
        </div>
    @endforeach
@endsection
