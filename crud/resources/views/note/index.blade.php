@extends('layout.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <h1>Notes</h1>
            @forelse ($notes as $note)
                <div class="col-md-12">
                    <p>{{ $note->title }}
                        <a class="btn btn-primary m-2" href={{ route('note.edit', $note->id) }}>Edit</a>
                        <a class="btn btn-warning m-2" href={{ route('note.show', $note->id) }}>Ver</a>
                    <form method="POST" action={{ route('note.destroy', $note->id) }}>
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete" class="btn btn-danger m-2">
                    </form>
                    </p>
                </div>
                <hr>
            @empty
                <div class="col-md-12">
                    <h1>Notes</h1>
                    <p>No notes found</p>
                </div>
            @endforelse
        </div>
        <a class="text-right btn btn-primary" href={{ route('note.create') }}>Create Note</a>
    </div>
@endsection
