<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;//acostumbrarse a ponerlo en cada funcion que retorne un redirect un redireccionamiento.
use Illuminate\View\View;//acostumbrarse a ponerlo en cada funcion que retorne una vista.
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $proveedor = Proveedor::paginate(6);
        return view('index', ['proveedores' => $proveedor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       // este metodo solo muestra la vista del objeto creado
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse //siempre hay que poner esto por 
    {
        $request->validate([ //Validaciones sencillas hay mas predefinidas porfavor implementarlas.
            'nit'=>'required',
            'correo'=>'required',
            'telefono'=>'required'
        ]);
        //Este metodo si contiene toda la logica a la hora de crear los objetos en este caso los proveedores
        Proveedor::create($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Bravo! El proveedor fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedore): View//muestra el formulario a editar
    {
        //
        return view('edit',['proveedor'=>$proveedore]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedore): RedirectResponse//logica para editar/actualizar.
    {
        //validación:
        $request->validate([ //Validaciones sencillas hay mas predefinidas porfavor implementarlas.
            'nit'=>'required',
            'correo'=>'required',
            'telefono'=>'required'
        ]);
        //LOGICA:
        $proveedore->update($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Bravo! El proveedor fue Actualizado exitosamente');

       
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedore)//proveedore XD
    {
        //
        $proveedore->delete();
        return redirect()->route('proveedores.index')->with('success', 'Bravo! El proveedor fue Eliminado exitosamente');

    }

    //NOTA FINAL: TEN CUIDADO A LA HORA DE NOMBRAR LAS VARIABLES, ESTAS SON LA QUE TE ESTAN GENERANDO ERRORES.
}
