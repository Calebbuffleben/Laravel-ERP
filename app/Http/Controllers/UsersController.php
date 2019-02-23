<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller {

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index() {
        $user_id_company = Auth::user()->id_company;
        $user = $this->user->where('id_company', $user_id_company)->paginate(5);
        return view('users', compact('user'));
    }

    public function add() {
        $title = 'Adicionar';
        return view('users_add_edit', compact('title'));
    }

    public function store(Request $request) {
        $data = $request->except(['_token']);
        $data['id_company'] = Auth::user()->id_company;
        $rules = $this->user->rules;

        $this->validate($request, $rules);

        $insert = $this->user->insert($data);

        if ($insert) {
            return 'Inserido com sucesso';
        } else {
            return 'Falha ao inserir';
        }
    }

    public function edit($id) {
        $user = $this->user->find($id);
        $title = 'Editar';

        return view('users_add_edit', compact('user', 'title'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $user = $this->user->find($id);
        $update = $user->update($data);

        if ($update) {
            return "Editado com sucesso";
        } else {
            return "Falha ao editar";
        }
    }

    public function destroy($id) {
        if ($id != null) {
            $user = $this->user->find($id);
            $delete = $user->delete();
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
