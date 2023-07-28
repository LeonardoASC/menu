<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Pedido;
use App\Models\Cliente;
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
        // $pedidosEntregues = Pedido::where('status', 'entregue')->get();
        // return view('pages.comanda.index', ['comandas' => $comandas,'pedidosEntregues' => $pedidosEntregues, 'request' => $request->all() ]);

        $cpf = $request->session()->get('cpf'); // Obtém o CPF do cliente da sessão
        $pedidosEntregues = Pedido::join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
                    ->where('pedidos.status', 'entregue')
                    ->where('clientes.cpf', $cpf)
                    ->get(['pedidos.*']);

        return view('pages.comanda.index', ['comandas' => $comandas, 'pedidosEntregues' => $pedidosEntregues, 'request' => $request->all() ]);
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


    // public function store(Request $request)
    // {
    // $totalComanda = $request->input('total');
    // $cliente_id = $request->input('cliente_id_total');
    // $mesa_id = $request->input('mesa_id_total');

    // // Verifica se já existe uma comanda com o cliente_id e mesa_id informados
    // $comandaExistente = Comanda::where('cliente_id', $cliente_id)
    //                            ->where('mesa_id', $mesa_id)
    //                            ->first();

    // if ($comandaExistente) {
    //     // Atualiza o total da comanda existente
    //     $comandaExistente->total = $totalComanda;
    //     $comandaExistente->save();
    // } else {
    //     // Cria uma nova comanda, pois não existe uma comanda com o cliente_id e mesa_id informados
    //     $novaComanda = new Comanda();
    //     $novaComanda->total = $totalComanda;
    //     $novaComanda->cliente_id = $cliente_id;
    //     $novaComanda->mesa_id = $mesa_id;
    //     $novaComanda->save();
    // }

    // // Limpando a sessão (se necessário)
    // Session::flush();

    // return redirect()->route('home');
    // }

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
            dd($comanda->status);
        if($comanda->status == 1){
            //se comanda status for igual a 1 -> fazer apenas a adicação do valor
            //se comanda status for igual a 0 -> finalizar comanda
        }
            $comanda->update($request->all());
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
