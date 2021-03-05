<?php

namespace App\Http\Controllers;

use App\Models\Tarjetum;
use Illuminate\Http\Request;

class TarjetaController extends Controller
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
            $tarjeta = Tarjetum::where('numeroTarjeta', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('expira', 'LIKE', "%$keyword%")
                ->orWhere('cvv', 'LIKE', "%$keyword%")
                ->orWhere('monto', 'LIKE', "%$keyword%")
                ->orWhere('metodoPago_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tarjeta = Tarjetum::latest()->paginate($perPage);
        }

        return view('tarjeta.index', compact('tarjeta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tarjeta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numeroTarjeta' => 'required|min:16',
            'nombre' => 'required|min:5',
            'expira' => 'required',
            'cvv' => 'required|min:3',
        ]);
        $requestData = $request->all();

        Tarjetum::create($requestData);

        return redirect('tarjeta')->with('flash_message', 'Tarjetum added!');
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
        $tarjetum = Tarjetum::findOrFail($id);

        return view('tarjeta.show', compact('tarjetum'));
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
        $tarjetum = Tarjetum::findOrFail($id);

        return view('tarjeta.edit', compact('tarjetum'));
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
            'numeroTarjeta' => 'required|min:16',
            'nombre' => 'required|min:5',
            'expira' => 'required',
            'cvv' => 'required|min:3',
        ]);
        $requestData = $request->all();

        $tarjetum = Tarjetum::findOrFail($id);
        $tarjetum->update($requestData);

        return redirect('tarjeta')->with('flash_message', 'Tarjetum updated!');
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
        Tarjetum::destroy($id);

        return redirect('tarjeta')->with('flash_message', 'Tarjetum deleted!');
    }
}
