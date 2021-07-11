@extends('modelo.plantilla')

@section('title', 'Página Crear de Películas')

@section('content')
    <h1>Bienvenidos a la página de Editar Peliculas</h1>
    <h6>Tu Nombre:</h6><BR>
     <INPUT type=text name=nombre size=30><BR>
        <h6>Descripcion:</h6>
        <BR>
            <TEXTAREA name=comentario rows=5 cols=40 wrap=virtual>
            </TEXTAREA><BR>
                <h6>Categoria:</h6><BR>
                    <INPUT type=text name=nombre size=30><BR>
                        <INPUT type=submit value="Enviar" >
@endsection