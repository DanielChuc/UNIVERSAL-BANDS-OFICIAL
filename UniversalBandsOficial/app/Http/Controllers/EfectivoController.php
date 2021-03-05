<?php

namespace App\Http\Controllers;

use App\Models\Efectivo;
use Illuminate\Http\Request;

class EfectivoController extends Controller
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
            $efectivo = Efectivo::where('cliente', 'LIKE', "%$keyword%")
                ->orWhere('tipoMoneda', 'LIKE', "%$keyword%")
                ->orWhere('monto', 'LIKE', "%$keyword%")
                ->orWhere('cambio', 'LIKE', "%$keyword%")
                ->orWhere('metodoPago_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $efectivo = Efectivo::latest()->paginate($perPage);
        }

        return view('efectivo.index', compact('efectivo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('efectivo.create');
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
            'tipoMoneda' => 'required',
            'monto' => 'required',
            'cambio' => 'required',
        ]);
        $requestData = $request->all();

        Efectivo::create($requestData);

        return redirect('efectivo')->with('flash_message', 'Efectivo added!');
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
        $efectivo = Efectivo::findOrFail($id);

        return view('efectivo.show', compact('efectivo'));
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
        $efectivo = Efectivo::findOrFail($id);

        return view('efectivo.edit', compact('efectivo'));
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
            'tipoMoneda' => 'required',
            'monto' => 'required',
            'cambio' => 'required',
        ]);
        $requestData = $request->all();

        $efectivo = Efectivo::findOrFail($id);
        $efectivo->update($requestData);

        return redirect('efectivo')->with('flash_message', 'Efectivo updated!');
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
        Efectivo::destroy($id);

        return redirect('efectivo')->with('flash_message', 'Efectivo deleted!');
    }
}
