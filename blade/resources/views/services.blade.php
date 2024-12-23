@extends('layouts.landing')
@section('title', 'Title-Services')
@section('content')
    <h1>Services</h1>

    @component('_components.card')
        @slot('title','Service 1')
        @slot('content','This is the content for service 1')
    @endcomponent
    @component('_components.card')
        @slot('title','Service 2')
        @slot('content','This is the content for service 2')
    @endcomponent
    @component('_components.card')
        @slot('title','Service 3')
        @slot('content','This is the content for service 3')
    @endcomponent
@endsection

