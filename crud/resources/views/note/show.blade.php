@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Notes</h1>
                <a class="text-right btn btn-primary" href={{ route('note.index') }}>Back</a>
                <p><strong>Title:</strong> {{ $note->title }}</p>
                <p><strong>Description:</strong> {{ $note->description }}</p>
            </div>
        </div>
    </div>
@endsection
