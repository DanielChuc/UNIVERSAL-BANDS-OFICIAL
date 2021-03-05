<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionalidadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ContenidosPrincipales.hola');
    }

    public function indexTienda()
    {
        return view('tiendaEnLinea.index');
    }

    public function blog()
    {
        return view('tiendaEnLinea.blog');
    }

    public function contacto()
    {
        return view('tiendaEnLinea.contacto');
    }

    public function articulos()
    {
        return view('tiendaEnLinea.articulos');
    }

    public function nosotros()
    {
        return view('tiendaEnLinea.nosotros');
    }

    //////////////////////////////////////////////////////////////////////////////////////
    ////////////////Compra De Entrada
    public function enviarDatosDeCompra()
    {
        $evento = \App\Models\Evento::all();

        return view('compraDeEntradas.elegirEvento2')->with(['evento' => $evento]);
    }

    public function formularioDeCompra($evento)
    {
        $eventos = \App\Models\Evento::findOrFail($evento);
        $clientes = \App\Models\Cliente::all();

        return view('compraDeEntradas.compra', compact('eventos', 'clientes'));
    }

    public function compraObtenida(Request $request, $evento)
    {
        $bandas = new \App\Models\Banda();
        $evpe = new \App\Models\EventoPermitido();
        $evento = \App\Models\Evento::findOrFail($evento);

        $idCliente = $request->input('cliente_id');
        $evento_id = $evento->id;
        $banda_id = $request->input('codigo');

        $cliente = \App\Models\Cliente::findOrFail($idCliente);

        /*
         * Asignamos el cliente
         */
        $bandas->cliente_id = $idCliente;
        $bandas->codigo = $banda_id;
        $bandas->save();

        // DB::table('eventos')->where('id', $evento_id)->update($eventos - 1);
        $evento = \App\Models\Evento::findOrFail($evento_id);
        $evento->lugaresDisponibles = $evento->lugaresDisponibles - 1;
        $evento->save();

        $evpe->banda_id = $bandas->id;
        $evpe->evento_id = $evento_id;
        $evpe->save();

        return redirect()->route('compraConfirmada', ['id' => $bandas->id, 'id2' => $evpe->evento_id]);
    }

    public function compraConfirmada($id, $id2)
    {
        $banda = \App\Models\Banda::findOrFail($id);
        $evento = \App\Models\Evento::findOrFail($id2);

        //dd($banda);

        return view('compraDeEntradas.compraConfirmada', ['banda' => $banda, 'evento' => $evento]);
    }

    /////////////////////////////////////////////////////////////////////////////////////////
    /////////Validar Las Entradas
    public function enviarDatosValidar()
    {
        $evento = \App\Models\Evento::all();

        return view('controlDeEntradas.elegirEvento')->with(['evento' => $evento]);
    }

    public function validar($id)
    {
        $evento = \App\Models\Evento::findOrFail($id);
        $cliente = new Cliente();
        $codigo = '';
        $valido = 0;

        return view('controlDeEntradas.pase', compact('cliente', 'codigo', 'valido', 'evento'));
    }

    public function analizar($id, Request $request)
    {
        $codigo = $request->input('codigo');
        $evento = \App\Models\Evento::findOrFail($id);

        $data = DB::table('evento_permitidos')
                ->join('bandas', 'evento_permitidos.banda_id', '=', 'bandas.id'
                )
                    ->where('bandas.codigo', '=', $codigo)
                    ->where('evento_permitidos.evento_id', '=', $id)
                ->first();
        $valido = 1;

        if ($data != null) {
            $banda = \App\Models\Banda::findOrFail($data->banda_id);
            $cliente = $banda->cliente;

            $valido = 2;

            $now = new \DateTime();

            // \App\Models\Banda::findOrFail();

            $logEntrada = new \App\Models\LogEntrada();
            $logEntrada->cliente_id = $cliente->id;
            $logEntrada->evento_id = $id;
            $logEntrada->codigoDeEntrada = $codigo;
            $logEntrada->fechaHoraEntrada = $now->format('Y-m-d H:i:s');
            $logEntrada->save();
        } else {
            $cliente = new Cliente();
        }

        return view('controlDeEntradas.pase', compact('cliente', 'codigo', 'valido', 'evento'));
    }

    public function seccionIOT()
    {
        return view('iot.seccionIOT');
    }
}
