@extends('blog.template.layout')

@section('titulo')
<h1>UNIDAD 2: FUNDAMENTOS DE LA ARQUITECTURA CLIENTE - SERVIDOR</h1>
@endsection

@section('uni')

@foreach($temas as $tema)


<h3>{{$tema['tema']}}</h3>

<br>

<p>{{$tema['concepto']}}</p>

@endforeach


@endsection


