<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
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
            $evento = Evento::where('nombreEvento', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('pais', 'LIKE', "%$keyword%")
                ->orWhere('ciudad', 'LIKE', "%$keyword%")
                ->orWhere('fechas', 'LIKE', "%$keyword%")
                ->orWhere('capacidadLugares', 'LIKE', "%$keyword%")
                ->orWhere('lugaresDisponibles', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('categoria_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $evento = Evento::latest()->paginate($perPage);
        }

        return view('evento.index', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('evento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombreEvento' => 'required|min:5',
            //Formatos validos de archivos
            'imagenEvento' => 'mimes:jpg, jpeg, png, gif, svg|max:2048',
            'direccion' => 'required|min:5',
            'pais' => 'required|min:5',
            'ciudad' => 'required|min:5',
            'direccion' => 'required|min:5',
        ]);
        $requestData = $request->all();

        $evento = Evento::create($requestData);

        if ($request->hasFile('archivo')) {
            //Ponerle nombre a la imagen
            $file_name = 'imagen-'.time().'.'.$request->file('archivo')->getClientOriginalExtension();
            //Guardar la ruta del archivo
            $imagen_path = $request->file('archivo')->storeAs(
                '/',
                $file_name,
                'imagenes'
            );
            $evento->imagenEvento = $imagen_path;
            $evento->save();
        }

        return redirect('evento')->with('flash_message', 'Evento added!');
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
        $evento = Evento::findOrFail($id);

        return view('evento.show', compact('evento'));
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
        $evento = Evento::findOrFail($id);

        return view('evento.edit', compact('evento'));
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
            'nombreEvento' => 'required|min:5',
            'imagenEvento' => 'mimes:jpg, jpeg, png, gif, svg|max:2048',
            'direccion' => 'required|min:5',
            'pais' => 'required|min:5',
            'ciudad' => 'required|min:5',
            'direccion' => 'required|min:5',
        ]);
        $requestData = $request->all();

        $evento = Evento::findOrFail($id);
        $evento->update($requestData);

        return redirect('evento')->with('flash_message', 'Evento updated!');
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
        Evento::destroy($id);

        return redirect('evento')->with('flash_message', 'Evento deleted!');
    }
}
// The [C:\Users\Administrador\Desktop\Udemy Cursos\Trabajos_de_La_Escuela\UniversalBandsOficial - copia\public\storage] link already exists.

// The [C:\Users\Administrador\Desktop\Udemy Cursos\Trabajos_de_La_Escuela\UniversalBandsOficial - copia\public\UniversalBandsOficial] link has been connected to [C:\Users\Administrador\Desktop\Udemy Cursos\Trabajos_de_La_Escuela\UniversalBandsOficial - copia\storage\app/imagenes].
// The links have been created.
