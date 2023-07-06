@extends('layouts.app')

@section('content')
<div class="container my-3">

    <div class="row g-4">
        <div class="col">
            <a class="btn btn-primary" href="{{ route("home") }}">Torna alla lista dei comics</a>
            {{-- <a class="btn btn-primary" href="{{ route("Comics.edit", $Comics) }}">Modifica questo prodotto</a> --}}
            {{-- <form action="{{ route('Comics.destroy', $Comics) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella il prodotto">
            </form> --}}
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <h1>{{$Comics->title}}</h1>
            <div>
                <small>{{$Comics->type}} {{$Comics->price}} {{$Comics->series}}</small>
            </div>
            <p>{{$Comics->description}}</p>
            @if ($Comics->thumb)
                <img src="{{$Comics->thumb}}" alt="{{$Comics->title}}">
            @else
                <img src="https://i0.wp.com/theperfectroundgolf.com/wp-content/uploads/2022/04/placeholder.png" alt="{{$Comics->title}}">
            @endif
        </div>
    </div>

</div>
@endsection
