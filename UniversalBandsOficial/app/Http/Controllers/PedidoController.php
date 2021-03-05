<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
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
            $pedido = Pedido::where('nombreDestinatario', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('ciudad', 'LIKE', "%$keyword%")
                ->orWhere('entidadFederativa', 'LIKE', "%$keyword%")
                ->orWhere('pais', 'LIKE', "%$keyword%")
                ->orWhere('fechaPedido', 'LIKE', "%$keyword%")
                ->orWhere('fechaEnvio', 'LIKE', "%$keyword%")
                ->orWhere('cliente_id', 'LIKE', "%$keyword%")
                ->orWhere('metodoPago_id', 'LIKE', "%$keyword%")
                ->orWhere('envio_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pedido = Pedido::latest()->paginate($perPage);
        }

        return view('pedido.index', compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombreDestinatario' => 'required|min:2',
            'direccion' => 'required|min:2',
            'ciudad' => 'required|min:2',
            'entidadFederativa' => 'required|min:2',
            'pais' => 'required|min:2',
            'fechaPedido' => 'required|min:2',
            'fechaEnvio' => 'required|min:2',
        ]);
        $requestData = $request->all();

        Pedido::create($requestData);

        return redirect('pedido')->with('flash_message', 'Pedido added!');
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
        $pedido = Pedido::findOrFail($id);

        return view('pedido.show', compact('pedido'));
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
        $pedido = Pedido::findOrFail($id);

        return view('pedido.edit', compact('pedido'));
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
            'nombreDestinatario' => 'required|min:2',
            'direccion' => 'required|min:2',
            'ciudad' => 'required|min:2',
            'entidadFederativa' => 'required|min:2',
            'pais' => 'required|min:2',
            'fechaPedido' => 'required|min:2',
            'fechaEnvio' => 'required|min:2',
        ]);
        $requestData = $request->all();

        $pedido = Pedido::findOrFail($id);
        $pedido->update($requestData);

        return redirect('pedido')->with('flash_message', 'Pedido updated!');
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
        Pedido::destroy($id);

        return redirect('pedido')->with('flash_message', 'Pedido deleted!');
    }
}
