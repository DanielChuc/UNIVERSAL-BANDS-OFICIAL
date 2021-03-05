<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $proveedor = Proveedor::where('nombreCompania', 'LIKE', "%$keyword%")
                ->orWhere('nombreContacto', 'LIKE', "%$keyword%")
                ->orWhere('cargoContacto', 'LIKE', "%$keyword%")
                ->orWhere('paginaWeb', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('pais', 'LIKE', "%$keyword%")
                ->orWhere('entidadFederativa', 'LIKE', "%$keyword%")
                ->orWhere('ciudad', 'LIKE', "%$keyword%")
                ->orWhere('codigoPostal', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $proveedor = Proveedor::latest()->paginate($perPage);
        }

        return view('proveedor.index', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombreCompania' => 'required|min:2',
            'nombreContacto' => 'required|min:2',
            'cargoContacto' => 'required|min:2',
            'paginaWeb' => 'required|min:2',
            'email' => 'required|min:2',
            'direccion' => 'required|min:2',
            'telefono' => 'required|min:10',
            'pais' => 'required|min:2',
            'entidadFederativa' => 'required|min:2',
            'ciudad' => 'required|min:2',
            'codigoPostal' => 'required|min:5',
        ]);
        $requestData = $request->all();

        Proveedor::create($requestData);

        return redirect('proveedor')->with('flash_message', 'Proveedor added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $proveedor = Proveedor::findOrFail($id);

        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);

        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombreCompania' => 'required|min:2',
            'nombreContacto' => 'required|min:2',
            'cargoContacto' => 'required|min:2',
            'paginaWeb' => 'required|min:2',
            'email' => 'required|min:2',
            'direccion' => 'required|min:2',
            'telefono' => 'required|min:10',
            'pais' => 'required|min:2',
            'entidadFederativa' => 'required|min:2',
            'ciudad' => 'required|min:2',
            'codigoPostal' => 'required|min:5',
        ]);
        $requestData = $request->all();

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($requestData);

        return redirect('proveedor')->with('flash_message', 'Proveedor updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Proveedor::destroy($id);

        return redirect('proveedor')->with('flash_message', 'Proveedor deleted!');
    }
}
