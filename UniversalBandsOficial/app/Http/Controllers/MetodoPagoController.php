<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
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
            $metodopago = MetodoPago::where('ejemplo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $metodopago = MetodoPago::latest()->paginate($perPage);
        }

        return view('metodo-pago.index', compact('metodopago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('metodo-pago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        MetodoPago::create($requestData);

        return redirect('metodo-pago')->with('flash_message', 'MetodoPago added!');
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
        $metodopago = MetodoPago::findOrFail($id);

        return view('metodo-pago.show', compact('metodopago'));
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
        $metodopago = MetodoPago::findOrFail($id);

        return view('metodo-pago.edit', compact('metodopago'));
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
        $requestData = $request->all();

        $metodopago = MetodoPago::findOrFail($id);
        $metodopago->update($requestData);

        return redirect('metodo-pago')->with('flash_message', 'MetodoPago updated!');
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
        MetodoPago::destroy($id);

        return redirect('metodo-pago')->with('flash_message', 'MetodoPago deleted!');
    }
}
