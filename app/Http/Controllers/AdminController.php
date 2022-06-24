<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

use App\Models\Recipe;

use App\Models\Member;

use App\Models\Status;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){
        $result1 = DB::select("SELECT recipes.categories_id, categories.categories_name as 'categories_name', COUNT(*) as jumlah_recipe FROM recipes 
        JOIN categories on recipes.categories_id = categories.id 
        GROUP BY recipes.categories_id, categories.categories_name");

        return view('admin.home', compact("grafikpertama", $result1));
    }
}

class AdminController extends Controller
{

    //CRUD categories
   public function view_categories()
   {
       $data=categories::all();

       return view('admin.categories', compact("data"));
   }

   public function add_categories(Request $request)
   {
       $data=new categories;

       $data->categories_name=$request->categories;

       $data->save();

       return redirect()->back()->with('message','Categories Added Successfully');
   }

   public function delete_categories($id)
   {
       
    $data=categories::find($id);

    $data->delete();

    return redirect()->back()->with('message','Categories Deleted Successfully');

   }


   //CRUD recipes
   public function view_recipe()
   {
       $categories=categories::all();

       $recipe=recipe::all();

       return view('admin.recipe',compact("categories"));
   }

   public function add_recipe(Request $request)
   {
       $recipe=new recipe;

       $recipe->recipe_name=$request->recipe_name;

       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('recipe',$imagename);
       $recipe->image=$imagename;

       $recipe->categories_id=$request->categories_id;
       $recipe->level=$request->level;
       $recipe->rating=$request->rating;
       $recipe->cooking_methods=$request->cooking_methods;
       $recipe->cooking_time=$request->cooking_time;
       $recipe->servings=$request->servings;
       $recipe->recipe_info=$request->recipe_info;
       $recipe->ingredients=$request->ingredients;
       $recipe->steps=$request->steps;

       $recipe->save();

       return redirect()->back()->with('message','Recipe Added Successfully');

   }

   public function show_recipe()
       {
           $recipe=recipe::all();
           return view('admin.show_recipe',compact("recipe"));
       }

    public function delete_recipe($id)
       {
           $recipe=recipe::find($id);

           $recipe->delete();

           return redirect()->back()->with('message','Recipe Deleted Successfully');
       }
    
    public function update_recipe($id)
       {
            $recipe=recipe::find($id);

            $categories=categories::all();

            return view('admin.update_recipe',compact("recipe",'categories'));
       }

    public function update_recipe_confirm(Request $request,$id)
        {
            $recipe=recipe::find($id);

            $recipe->recipe_name=$request->recipe_name;

            $image=$request->image;

            if($image)
            
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('recipe',$imagename);
                $recipe->image=$imagename; 

            }
            
            $recipe->categories_id=$request->categories_id;
            $recipe->level=$request->level;
            $recipe->rating=$request->rating;
            $recipe->cooking_methods=$request->cooking_methods;
            $recipe->cooking_time=$request->cooking_time;
            $recipe->servings=$request->servings;
            $recipe->recipe_info=$request->recipe_info;
            $recipe->ingredients=$request->ingredients;
            $recipe->steps=$request->steps;

            $recipe->save();
            
            return redirect()->back()->with('message','Recipe Updated Successfully');

     
        }



             //CRUD status
   public function view_status()
   {
       $data=status::all();

       return view('admin.status', compact("data"));
   }

   public function add_status(Request $request)
   {
       $data=new status;

       $data->status_name=$request->status;

       $data->save();

       return redirect()->back()->with('message','Status Added Successfully');
   }

   public function delete_status($id)
   {
       
    $data=status::find($id);

    $data->delete();

    return redirect()->back()->with('message','Status Deleted Successfully');

   }

        //CRUD members

   public function view_member()
   {
       $status=status::all();

       $recipe=recipe::all();
       return view('admin.member')
       ->with('status', $status)
       ->with('recipe' , $recipe);
   }

   public function add_member(Request $request)
   {
       $member=new member;

       $member->nama_member=$request->nama_member;
       $member->status_id=$request->status_id;
       $member->nomor_telp=$request->nomor_telp;
       $member->domisili=$request->domisili;
       $member->resep_id=$request->resep_id;
       $member->review_resep=$request->review_resep;
       
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('member',$imagename);
       $member->image=$imagename; 

       $member->save();

       return redirect()->back()->with('message','member Added Successfully');

   }

   public function show_member()
       {
            $member=member::all();

            $status=status::all();

            $recipe=recipe::all();

           return view('admin.show_member',compact("member", "status", "recipe"));
       }

    public function delete_member($id)
       {
           $member=member::find($id);

           $member->delete();

           return redirect()->back()->with('message','member Deleted Successfully');
       }
    
    public function update_member($id)
       {
            $member=member::find($id);

            $categories=categories::all();

            $status=status::all();

            $recipe=recipe::all();

            return view('admin.update_member',compact("member",'categories', 'status', 'recipe'));
       }

    public function update_member_confirm(Request $request,$id)
        {
            $member=member::find($id);

            $member->nama_member=$request->nama_member;
            $member->status_id=$request->status_id;
            $member->nomor_telp=$request->nomor_telp;
            $member->domisili=$request->domisili;
            $member->resep_id=$request->resep_id;
            $member->review_resep=$request->review_resep;
       
       $image=$request->image;

            if($image)
            
            {
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('member',$imagename);
                $member->image=$imagename; 

            }
            

            $member->save();
            
            return redirect()->back()->with('message','Member Updated Successfully');

     
        }

}
