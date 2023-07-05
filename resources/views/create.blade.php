@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create Comic</h1>
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{ route('Comics.store') }}" method="post">
                @csrf

                <label for="name">title</label>
                <input class="form-control" type="text" name="title">

                <label for="name">description</label>
                <input class="form-control" type="text" name="description">

                <label for="name">series</label>
                <input class="form-control" type="text" name="series">

                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb">

                <label for="name">type</label>
                <input class="form-control" type="text" name="type">

                <label for="name">price</label>
                <input class="form-control" type="text" name="price">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
            </form>
        </div>
    </div>

</div>
@endsection
