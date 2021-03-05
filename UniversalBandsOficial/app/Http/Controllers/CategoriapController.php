<?php

namespace App\Http\Controllers;

use App\Models\Categoriap;
use Illuminate\Http\Request;

class CategoriapController extends Controller
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
            $categoriap = Categoriap::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $categoriap = Categoriap::latest()->paginate($perPage);
        }

        return view('categoriap.index', compact('categoriap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('categoriap.create');
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

        Categoriap::create($requestData);

        return redirect('categoriap')->with('flash_message', 'Categoriap added!');
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
        $categoriap = Categoriap::findOrFail($id);

        return view('categoriap.show', compact('categoriap'));
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
        $categoriap = Categoriap::findOrFail($id);

        return view('categoriap.edit', compact('categoriap'));
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

        $categoriap = Categoriap::findOrFail($id);
        $categoriap->update($requestData);

        return redirect('categoriap')->with('flash_message', 'Categoriap updated!');
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
        Categoriap::destroy($id);

        return redirect('categoriap')->with('flash_message', 'Categoriap deleted!');
    }
}
