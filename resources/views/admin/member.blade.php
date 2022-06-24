<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->


    <base href="/public"> 

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
              <h1 class="fontsize"> Add Member </h1>

            <form action="{{url('/add_member')}}" method="POST" enctype="multipart/form-data">

                @csrf

              <div class="div_design">
                  <label>Member Name :</label>
              <input class="text_color" type="text" name="nama_member" placeholder="Write the member name" required="">
              </div>

              <div class="div_design">
                  <label for="status_id">Change Status :</label>
              <select class="text_color" name="status_id" required="">
              <option value="">Select Status</option>

              @foreach($status as $status)
                  <option value="{{$status->id}}">
                      {{$status->status_name}}</option>

                @endforeach
                </select>
                </div>

              <div class="div_design">
                  <label>Number Member :</label>
              <input class="text_color" type="text" name="nomor_telp" placeholder="Write the number" required="">
              </div>
              <div>

              <div class="div_design">
                  <label>Domicile Member :</label>
              <input class="text_color" type="text" name="domisili" placeholder="Write the domicile" required="">
              </div>
              <div>

              <div class="div_design">
                  <label for="">Favorite Recipe :</label>
              <select class="text_color" name="resep_id" required="">
              <option value="">Select favorite</option>

              @foreach($recipe as $resep)
                  <option value="{{$resep->id}}">
                      {{$resep->recipe_name}}</option>

                @endforeach

           
                </select>
                </div>


              <!-- <div class="div_design">
                  <label>Favorite Recipe :</label>
              <input class="text_color" type="text" name="favorit_resep" placeholder="Write the favorite recipe" required="">
              </div>
              <div> -->

              <div class="div_design">
                  <label for="review_resep">Review Member :</label>
                  <input type="text" class="text_color" name="review_resep" 
                  rows="5" cols="50" placeholder="Write the review"
                  required=""></input>
              </div>
              <div>

              <div class="div_design">
                  <label>Profile Image :</label>
              <input type="file" name="image" required="">
              </div>

              <div class="div_design">
              <input type="submit" value="Add Member" class="btn btn-primary">

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