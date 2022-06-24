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

         .h2_font
         {
            font-size: 30px;
             padding-bottom: 30px;
         }

         .input_color
         {
           color: black;
         }

         .center
         {
           margin: auto;
           width: 50%;
           text-align: center;
           margin-top: 30px;
           border: 3px solid white;
         }

      </style>

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial/body -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}
        
          </div>

          @endif

              <div class="div_center">
                  <h2 class="h2_font"> Add Categories </h2>

                  <form action="{{url('/add_categories')}}" method="POST">

                  @csrf

                  <form>
                    <input class="input_color" type="text" name="categories" placeholder="Write categories name">

                  <input type="submit" name="submit" class="btn btn-primary" value="Add Categories">

                  </form

              </div>

              <table class="center">

              <tr>
                <td>Category Name</td>
                <td>Action</td>
              </tr>

              @foreach($data as $data)

              <tr>

                <td>{{$data->categories_name}}</td>

                <td>
                  <a onclick="return confirm('Apakah anda yakin ingin mengghapus data ini?')" class="btn btn-danger" 
                  href="{{url('delete_categories',$data->id)}}">Delete</a>

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