<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersController extends Controller {

    private $provider;

    public function __construct() {
        $this->provider = app('provider');
    }

    public function index() {
        $providers = $this->provider->paginate(5);
        return view('providers.providers', compact('providers'));
    }

    public function add() {
        $title = 'Adicionar';
        return view('providers.providers_add_edit', compact('title'));
    }

    public function store(Request $request) {
        $data = $request->except(['_token']);
        $data['id_company'] = Auth::user()->id_company;
        $rules = $this->provider->rules;

        $this->validate($request, $rules);

        $insert = $this->provider->insert($data);

        if ($insert) {
            redirect('/providers');
        } else {
            return 'Falha ao inserir';
        }
    }

    public function edit($id) {
        $provider = $this->provider->find($id);
        $title = 'Editar';

        return view('providers.providers_add_edit', compact('provider', 'title'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $provider = $this->provider->find($id);
        $update = $provider->update($data);

        if ($update) {
            redirect('/providers');
        } else {
            return "Falha ao editar";
        }
    }

    public function destroy($id) {
        if ($id != null) {
            $provider = $this->provider->find($id);
            $delete = $provider->delete();
            if ($delete) {
                redirect('/providers');
            } else {
                return "Não foi possível deletar";
            }
        } else {
            return "Id nulo";
        }
    }

}
