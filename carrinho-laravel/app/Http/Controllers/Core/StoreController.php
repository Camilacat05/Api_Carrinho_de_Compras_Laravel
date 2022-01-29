<?php

namespace App\Http\Controllers\Core;
use App\Models\Core\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Core\StoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     /*    $validation = \Validator::make($request->all(),[
            'cnpj' => 'nullable|min:3' requer no minino 3 caracteres no cnpj
            'email' => 'nullable|unique:store' fala que o email é unico na tabela store, não pode ter o mesmo email no formulário 
        ]);
        if ($validation->fails()) {
            return response()->json([$validation->errors()], 422);
        } */

        $data = Store::all();

        return response()->json(['data' => $data]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request) /** garavar os store no banco */
    {
        $data = $request->all();
        Store::create($data); /**grava os dados no banco, sempre criando um novo objeto com todos os campos */

        return response()->json(['data' => $data]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) /** para buscar um registro especifico no banco por id */
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataRequest = $request->all();
        $data = Store::FindOrFail($id); /**metodo para procurar pelo o id */
        $data->update($dataRequest);
        return response()->json(['msg' =>'dados atualizados com sucesso !', 'data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Store::find($id);
        $data->delete();

        return response()->json(['msg' => 'excluido com sucesso!!', 'data' => $data]);  
    }
}
