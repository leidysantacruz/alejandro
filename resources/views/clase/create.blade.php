@extends('layouts.plantilla')

@section('content')

<h1>Crear </h1>
<form action="{{route('clase.store')}}" method="POST">

    @csrf
    
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br><br>
    <label>
        precio:
        <br>
        <input type="text" name="precio">
    </label>
    <br><br>
    <label>
        existencias:
        <br>
        <input type="text" name="existencias">
    </label>
    <br><br>
    <label>
        proveedor:
        <br>
        <input type="text" name="proveedor">
    </label>
    <br><br>
    

    <button type="submit">Enviar Formulario:</button>


