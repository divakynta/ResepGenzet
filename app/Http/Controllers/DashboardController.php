<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $result1 = DB::select("SELECT recipes.categories_id, categories.categories_name, COUNT(*) as jumlah_recipe FROM recipes 
        JOIN categories on recipes.categories_id = categories.id 
        GROUP BY recipes.categories_id, categories.categories_name");

        return view('admin.home')->with('grafikpertama', $result1);
    }
}
