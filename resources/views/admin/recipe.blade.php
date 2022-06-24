<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

     @include('admin.css')

     <style type="text/css">
         .div_center
         {
             text-align: center;
             padding-top: 40px;

         }

         .fontsize
         {
            font-size: 30px;
             padding-bottom: 30px;
         }

         .text_color
         {
           color: black;
           padding-bottom: 20px;
         }

         label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 15px; 
        }

    </style>
     
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial/body-->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}
        
          </div>

          @endif

          <div class="div_center">
              <h1 class="fontsize"> Add Recipe </h1>

            <form action="{{url('/add_recipe')}}" method="POST" enctype="multipart/form-data">

                @csrf

              <div class="div_design">
                  <label>Recipe Name :</label>
              <input class="text_color" type="text" name="recipe_name" placeholder="Write the recipe name" required="">
              </div>

              <div class="div_design">
                  <label>Image :</label>
              <input type="file" name="image" required="">
              </div>

              <div class="div_design">
                  <label for="categories_id">Category :</label>
              <select class="text_color" name="categories_id" required="">
              <option value="">Select Category</option>
               @foreach($categories as $categories)
                  <option value="{{$categories->id}}">
                      {{ $categories->categories_name}}</option>
                @endforeach
                </select>
                </div>

              <div class="div_design">
                  <label>Level :</label>
              <input class="text_color" type="text" name="level" placeholder="Write the level" required="">
              </div>
              <div>

              <div class="div_design">
                  <label>Rating :</label>
              <input class="text_color" type="number" min="0" name="rating" placeholder="Write the rating" required="">
              </div>
              <div>

              <div class="div_design">
                  <label>Cooking Methods :</label>
              <input class="text_color" type="text" name="cooking_methods" placeholder="Write the cooking methods" required="">
              </div>
              <div>

              <div class="div_design">
                  <label>Cooking Time :</label>
              <input class="text_color" type="number" min="0" name="cooking_time" placeholder="Write the cooking time" required="">
              </div>
              <div>

              <div class="div_design">
                  <label>Servings :</label>
              <input class="text_color" type="text" name="servings" placeholder="Write the servings" required="">
              </div>
              <div>

              <div class="div_design">
                  <label for="recipe_info">Recipe Information :</label>
                  <textarea class="text_color" name="recipe_info" rows="4" cols="50" placeholder="Write the recipe information" required=""></textarea>
              </div>

              <div class="div_design">
                  <label for="ingredients">ingredients :</label>
                  <textarea class="text_color" name="ingredients" rows="8" cols="50" placeholder="Write the ingredients" required=""></textarea>
              </div>
              <div>

              <div class="div_design">
                  <label for="steps">Steps :</label>
                  <textarea class="text_color" name="steps" 
                  rows="8" cols="50" placeholder="Write the steps"
                  required=""></textarea>
              </div>
              <div>

              <div class="div_design">
              <input type="submit" value="Add Recipe" class="btn btn-primary">

              </div>

            </form>
                  
        
        </div>
    </div>
</div>
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>