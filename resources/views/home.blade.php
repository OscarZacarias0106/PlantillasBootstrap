@extends('layouts.plantillas')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Informacion Requerida para el Registro
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Plantilla Generada Para Registro</p>
            </blockquote>
            <form>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Direccion de correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputdate" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="exampleInputdate" aria-describedby="dateHelp">
                        <div id="dateHelp" class="form-text"></div>
                    </div>

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Numero de Telefono</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                <button type="submit" class="btn btn-primary">Registrar Alumno</button>
            </form>
        </div>
    </div>
@endsection
