<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Inventory;

class InventoryController extends Controller {

    private $inventory;

    public function __construct(Inventory $inventory) {
        $this->inventory = $inventory;
    }

    public function index() {
        $user = Auth::user()->id_company;
        $inventory_list = $this->inventory->where('id_company', $user)->paginate(5);
        return view('inventory', compact('inventory_list'));
    }
    public function add(){
        $title = 'Adicionar';
        return view('inventory_add_edit', compact('title'));
    }

}
