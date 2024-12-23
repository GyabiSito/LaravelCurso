@extends('layouts.master')
<h1>Pagina generica</h1>

@section('titulo', 'Pagina generica')

@section('header')
@parent()
<h2>Hola</h2>
@stop

@section('content')
<h1>Contenido</h1>
@stop
