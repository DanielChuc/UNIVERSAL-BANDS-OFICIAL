<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;

class EnvioController extends Controller
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
            $envio = Envio::where('cliente', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('pais', 'LIKE', "%$keyword%")
                ->orWhere('ciudad', 'LIKE', "%$keyword%")
                ->orWhere('codigoPostal', 'LIKE', "%$keyword%")
                ->orWhere('metodoPago_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $envio = Envio::latest()->paginate($perPage);
        }

        return view('envio.index', compact('envio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('envio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cliente' => 'required|min:5',
            'direccion' => 'required|min:2',
            'pais' => 'required|min:2',
            'ciudad' => 'required|min:2',
            'codigoPostal' => 'required|min:5',
        ]);
        $requestData = $request->all();

        Envio::create($requestData);

        return redirect('envio')->with('flash_message', 'Envio added!');
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
        $envio = Envio::findOrFail($id);

        return view('envio.show', compact('envio'));
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
        $envio = Envio::findOrFail($id);

        return view('envio.edit', compact('envio'));
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
            'cliente' => 'required|min:5',
            'direccion' => 'required|min:2',
            'pais' => 'required|min:2',
            'ciudad' => 'required|min:2',
            'codigoPostal' => 'required|min:5',
        ]);
        $requestData = $request->all();

        $envio = Envio::findOrFail($id);
        $envio->update($requestData);

        return redirect('envio')->with('flash_message', 'Envio updated!');
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
        Envio::destroy($id);

        return redirect('envio')->with('flash_message', 'Envio deleted!');
    }
}
