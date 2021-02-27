<?php
namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(
                Cliente::create($request->all()),
                201
            );
    }

    public function show(int $id)
    {
        $cliente = Cliente::find($id);
        if (is_null($cliente)) {
            return response()->json('', 204);
        }

        return response()->json($cliente);
    }

    public function update(int $id, Request $request)
    {
        $cliente = Cliente::find($id);
        if (is_null($cliente)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        $cliente->fill($request->all());
        $cliente->save();

        return $cliente;
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = Cliente::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }

        return response()->json('', 204);
    }
}
