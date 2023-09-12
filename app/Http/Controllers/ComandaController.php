<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Honorario;
use App\Models\Mesa;
use App\Http\Requests\StoreComandaRequest;
use App\Http\Requests\UpdateComandaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $comandas = Comanda::all();
        $valorTotal = Comanda::where('id', session('idcomanda'))->value('total');

        $cpf = $request->session()->get('cpf'); // Obtém o CPF do cliente da sessão
        $pedidosEntregues = Pedido::join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
                    ->where('pedidos.status', 'entregue')
                    ->where('clientes.cpf', $cpf)
                    ->get(['pedidos.*']);

        $honorario = Honorario::first();

       
            $garcom10 = intval(($valorTotal * $honorario->porcentagem_garcom) / 100);
            $cover = $honorario->preco_cover;


        $TotalFinal = $valorTotal + $cover + $garcom10;;

        return view('pages.comanda.index',
        [
            'valorTotal' => $valorTotal,
            'comandas' => $comandas,
            'pedidosEntregues' => $pedidosEntregues,
            'request' => $request->all(),
            'garcom10' => $garcom10,
            'TotalFinal' => $TotalFinal,
            'cover' => $cover,
            'porcentagem_garcom' => $honorario->porcentagem_garcom,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $totalComanda = $request->input('total');
        $cliente_id = $request->input('cliente_id_total');
        $mesa_id = $request->input('mesa_id_total');

        $total = new Comanda();
        $total->total = $totalComanda;
        $total->cliente_id = $cliente_id;
        $total->mesa_id = $mesa_id;
        $total->save();
        Session::flush();
        return redirect()->route('home');
    }


    /**
     * Display the specified resource.
     */
    public function show(Comanda $comanda)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comanda $comanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Comanda $comanda)
    {

        if ($comanda->status != 0) {
            $comanda->update(['status' => 0]);
        }
            return redirect()->route('home');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comanda $comanda)
    {
        //
    }
}
