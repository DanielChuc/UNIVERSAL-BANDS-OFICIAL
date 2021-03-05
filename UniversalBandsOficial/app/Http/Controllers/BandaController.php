<?php

namespace App\Http\Controllers;

use App\Models\Banda;
use Illuminate\Http\Request;

class BandaController extends Controller
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
            $banda = Banda::where('cliente_id', 'LIKE', "%$keyword%")
                ->orWhere('codigo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $banda = Banda::latest()->paginate($perPage);
        }

        return view('banda.index', compact('banda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('banda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'codigo' => 'required|min:10',
        ]);
        $requestData = $request->all();

        Banda::create($requestData);

        return redirect('banda')->with('flash_message', 'Banda added!');
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
        $banda = Banda::findOrFail($id);

        return view('banda.show', compact('banda'));
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
        $banda = Banda::findOrFail($id);

        return view('banda.edit', compact('banda'));
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
            'codigo' => 'required|min:10',
        ]);
        $requestData = $request->all();

        $banda = Banda::findOrFail($id);
        $banda->update($requestData);

        return redirect('banda')->with('flash_message', 'Banda updated!');
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
        Banda::destroy($id);

        return redirect('banda')->with('flash_message', 'Banda deleted!');
    }
}
