@extends('layout.app')
@section('content')
<form method="POST" action={{route('note.update', $note->id)}}>
    @method('PUT')
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Notes</h1>
                <a class="text-right btn btn-primary" href={{route('note.index')}}>Back</a>

                <label for="title"></label>
                <input type="text" name="title" id="title" value="{{$note->title}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="description"></label>
                <input type="text" name="description" id="description" value="{{$note->description}}">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value="update" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>

@endsection
