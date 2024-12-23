<h1>{{ $titulo }}</h1> {{-- Muestra el título --}}

<h2>{{ $listado[2] ?? 'No hay elemento' }}</h2> {{-- Asegura que el índice 2 existe antes de imprimirlo --}}

{{-- Evalúa si $director está definido --}}
<p>{{ $director ?? 'No hay director' }}</p>

{{-- Condicional para verificar si $titulo existe --}}
@if ($titulo)
    <h3>El título existe</h3>
@else
    <h3>El título no existe</h3>
@endif
