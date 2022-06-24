<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css')

     <style type="text/css">
         .center
         {
             margin:auto;
             border: 2px solid white;
             text-align: center;
             margin-top: 30px;
             
         }

         .table-text {
          margin: 2px;
    display: -webkit-box;
    /* Relates to display width */
     -webkit-box-orient: vertical;
    /* Your line height */
    line-height: 1em;
    /* Double your line height
    for max-height to have 2 lines */
    max-height: 8em;
    -webkit-line-clamp: 8;
    overflow: hidden;
    text-overflow: ellipsis;
}

         .fontsize
         {
            text-align: center;
            font-size: 30px;
            padding-bottom: 20px;
         }

         .img_size
         {
           width: ;
           height: ;
         }

         .th_color
        {
            background: white;
        }

        .th_design
        {
            padding: 20px; 
        }

    </style>

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}
        
          </div>

          @endif

          <h2 class="fontsize"> List of Recipe </h2>

        <table class="center">
            <tr class="th_color">
                <th class="th_design"> Recipe Name </th>
                <th class="th_design"> Image </th>
                <th class="th_design"> Category </th>
                <th class="th_design"> Level </th>
                <th class="th_design"> Rating </th>
                <th class="th_design"> Cooking Methods </th>
                <th class="th_design"> Cooking Time </th>
                <th class="th_design"> Servings </th>
                <th class="th_design"> Recipe Info </th>
                <th class="th_design"> ingredients </th>
                <th class="th_design"> Steps </th>
                <th class="th_design"> Delete </th>
                <th class="th_design"> Edit </th>
            </tr>

            @foreach($recipe as $recipe)

            <tr>
              <td>{{$recipe->recipe_name}}</td>

              <td>
                <img class="img_size" src="/recipe/{{$recipe->image}}">
              </td>

              <td >{{$recipe->categories->categories_name}}</td>
              <td>{{$recipe->level}}</td>
              <td >{{$recipe->rating}}</td>
              <td>{{$recipe->cooking_methods}}</td>
              <td>{{$recipe->cooking_time}}</td>
              <td>{{$recipe->servings}}</td>
              <td width=250>{{$recipe->recipe_info}}</td>
              <td width=250>{{$recipe->ingredients}}</td>
              <td class="table-text">{{$recipe->steps}}</td>

              <td>
                <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengghapus data ini?')" href="{{url('delete_recipe',$recipe->id)}}">Delete</a>
              </td>

              <td>
              <a class="btn btn-success" href="{{url('update_recipe',$recipe->id)}}">Edit</a>
                </td>
            </tr>

            @endforeach

            
        </table>

      </div>
    </div>

      

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>