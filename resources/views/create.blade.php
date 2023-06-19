@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Agregar Proveedor</h2>
        </div>
        <div>
            <a href="{{ route('proveedores.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <div class="col-12">
        @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <strong>Pero bueno pedaso de animal!</strong><br>
            ¿Ni un maldito formulario sabes llenar?..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Nit</strong>
                        <input type="text" name="nit" class="form-control" placeholder="Nit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Teléfono</strong>
                        <input type="number" name="telefono" class="form-control" placeholder="Teléfono">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Correo</strong>
                        <input type="email" name="correo" class="form-control" placeholder="Correo">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
