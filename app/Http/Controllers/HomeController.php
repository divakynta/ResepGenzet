<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $result1 = DB::select("SELECT recipes.categories_id, categories.categories_name, COUNT(*) as jumlah_recipe FROM recipes 
        JOIN categories on recipes.categories_id = categories.id 
        GROUP BY recipes.categories_id, categories.categories_name");

        return view('admin.home')->with('grafikpertama', $result1);
    }
}

class HomeController extends Controller
{

    public function index()
    {
        return view('home.userpage');
    }

    public function redirect()
   {

        $result1 = DB::select("SELECT recipes.categories_id, categories.categories_name as 'nama_kategori', COUNT(*) as jumlah_recipe FROM recipes 
        JOIN categories on recipes.categories_id = categories.id 
        GROUP BY recipes.categories_id, categories.categories_name");

       $usertype=Auth::user()->usertype;
                           
        if($usertype=='1')  
        {
            return view('admin.home')->with('grafik1', $result1);
        }

        else    
            {
                return view('home.userpage')->with('grafik1', $result1); 
            }
   }
}
