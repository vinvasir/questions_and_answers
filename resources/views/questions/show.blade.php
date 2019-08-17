@extends('layouts.app')

@section('content')
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
@endsection
