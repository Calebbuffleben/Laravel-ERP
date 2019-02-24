<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sale;

class SalesController extends Controller {

    private $sale;

    public function __construct(Sale $sale) {
        $this->sale = $sale;
    }

    public function index() {
        $user = Auth::user()->id_company;
        $sales = $this->sale->where('id_company', $user)->paginate(10);
        return view('sales')->with('sales_list', $sales);
    }
    public function add() {
        $title = 'Adicionar';
        return view('sales.sales_add_edit', compact('title'));
    }

    public function store(Request $request) {
        $data = $request->except(['_token']);
        $data['id_company'] = Auth::user()->id_company;
       // $rules = $this->sale->rules;

        $this->validate($request);

        $insert = $this->sale->insert($data);

        if ($insert) {
            redirect ('/sales');
        } else {
            return 'Falha ao inserir';
        }
    }

}
