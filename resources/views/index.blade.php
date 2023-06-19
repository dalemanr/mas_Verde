@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-dark">Proveedores</h2>
        </div>
        <div>
            <a href="{{ route('proveedores.create') }}" class="btn btn-success">Nuevo Proveedor</a>
        </div>
    </div>

    @if(Session::get('success'))
    <div class="alert alert-success mt-4">
        <strong>{{ Session::get('success') }}</strong> <br>
    </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-dark">
            <tr class="text-secondary">
                <th>Id</th>
                <th>Nit</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Acción</th>
            </tr>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td class="fw-bold">{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nit }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>
                        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('proveedores.destroy', $proveedor) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $proveedores->links() }}
    </div>
</div>
@endsection
