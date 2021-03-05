<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
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
            $detallepedido = DetallePedido::where('estadoPedido', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('producto_id', 'LIKE', "%$keyword%")
                ->orWhere('pedido_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $detallepedido = DetallePedido::latest()->paginate($perPage);
        }

        return view('detalle-pedido.index', compact('detallepedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('detalle-pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:2',
        ]);
        $requestData = $request->all();

        DetallePedido::create($requestData);

        return redirect('detalle-pedido')->with('flash_message', 'DetallePedido added!');
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
        $detallepedido = DetallePedido::findOrFail($id);

        return view('detalle-pedido.show', compact('detallepedido'));
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
        $detallepedido = DetallePedido::findOrFail($id);

        return view('detalle-pedido.edit', compact('detallepedido'));
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
            'nombre' => 'required|min:2',
        ]);
        $requestData = $request->all();

        $detallepedido = DetallePedido::findOrFail($id);
        $detallepedido->update($requestData);

        return redirect('detalle-pedido')->with('flash_message', 'DetallePedido updated!');
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
        DetallePedido::destroy($id);

        return redirect('detalle-pedido')->with('flash_message', 'DetallePedido deleted!');
    }
}
