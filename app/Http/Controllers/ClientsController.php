<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;

class ClientsController extends Controller {

    private $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function index() {
          $user = Auth::user()->id_company;
          $clients = $this->client->where('id_company', $user)->paginate(5);
          return view('clients')->with('clients', $clients);  
    }

    public function add() {
        $title = 'Adicionar';
        return view('clients_add_edit', compact('title'));
    }

    public function store(Request $request) {
        $data = $request->except(['_token']);
        //$data = $request->all();
        $data['id_company'] = Auth::user()->id_company;
        $rules = $this->client->rules;

        $this->validate($request, $rules);

        $insert = $this->client->insert($data);

        if ($insert) {
            return 'Inserido com sucesso';
        } else {
            return 'Falha ao inserir';
        }
    }

    public function edit($id) {
        $client = $this->client->find($id);
        $title = 'Editar';

        return view('clients_add_edit', compact('client', 'title'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $client = $this->client->find($id);
        $update = $client->update($data);

        if ($update) {
            return "Editado com sucesso";
        } else {
            return "Falha ao editar";
        }
    }

    public function show($id) {
        $client = $this->client->find($id);
        $title = $client->name;

        return view('client_show', compact('client', 'title'));
    }

    public function destroy($id) {
        if ($id != null) {
            $client = $this->client->find($id);
            $delete = $client->delete();
            if ($delete) {
                return "Deletado com sucesso";
            } else {
                return "Não foi possível deletar";
            }
        } else {
            return "Id nulo";
        }
    }

}
