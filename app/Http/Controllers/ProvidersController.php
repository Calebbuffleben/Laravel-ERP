<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Provider;

class ProvidersController extends Controller {

    private $provider;

    public function __construct(Provider $provider) {
        $this->provider = $provider;
    }

    public function index() {
        $providers = $this->provider->paginate(5);
        return view('providers', compact('providers'));
    }

    public function add() {
        $title = 'Adicionar';
        return view('providers_add_edit', compact('title'));
    }

    public function store(Request $request) {
        $data = $request->except(['_token']);
        $data['id_company'] = Auth::user()->id_company;
        $rules = $this->provider->rules;

        $this->validate($request, $rules);

        $insert = $this->provider->insert($data);

        if ($insert) {
            return 'Inserido com sucesso';
        } else {
            return 'Falha ao inserir';
        }
    }

    public function edit($id) {
        $provider = $this->provider->find($id);
        $title = 'Editar';

        return view('providers_add_edit', compact('provider', 'title'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $provider = $this->provider->find($id);
        $update = $provider->update($data);

        if ($update) {
            return "Editado com sucesso";
        } else {
            return "Falha ao editar";
        }
    }

    public function destroy($id) {
        if ($id != null) {
            $provider = $this->provider->find($id);
            $delete = $provider->delete();
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
