@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>

    <div class="container">

    @foreach ( $movies as $item)
    <div class="card">
        <h2>{{$item['title']}}</h2>
        <h4>Original Title: {{$item['original_title']}}</h4>
        <div>
            <b>Nationality:</b>
            {{$item['nationality']}}
        </div>
        <div>
            <b>Date:</b>
            {{$item['date']}}
        </div>
        <div>
            <b>Rating:</b>
            {{$item['vote']}}
        </div>
    </div>
    @endforeach



    </div>


</main>

@endsection
