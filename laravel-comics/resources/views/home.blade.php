{{-- estendere layout --}}
@extends('layouts._main')

{{-- contenuto titolo --}}
@section('title')
    Prova Homepage
@endsection

{{-- contenuto main --}}
@section('main')
    <div>
        <h2>
            Current series
        </h2>

        <div class="container">
            @foreach ($comics as $comic )
                <div>
                    {{$comic['title']}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
