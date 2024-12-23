@extends('layout.app')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action={{route('note.store')}} method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Notes</h1>
                <a class="text-right btn btn-primary" href={{route('note.index')}}>Back</a>

                <label for="title">Titulo</label>
                <input type="text" name="title" id="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="description">descripcion:</label>
                <input type="text" name="description" id="description">

                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value="create" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
@endsection
