@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Comics List</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <a class="btn btn-primary" href="{{ route("Comics.create") }}">Aggiungi un nuovo prodotto</a>
            </div>
        </div>
        <div>
            <ul>
                @foreach ($Comics as $Comic)
                    <li><a href="{{ route("Comics.show", $Comic->id) }}">{{$Comic->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection
