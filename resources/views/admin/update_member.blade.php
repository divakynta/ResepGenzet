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
              <h1 class="fontsize"> Update Member </h1>

            <form action="{{url('/update_member_confirm', $member->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

              <div class="div_design">
                  <label>Change Member Name :</label>
              <input class="text_color" type="text" name="nama_member" placeholder="Write the member name" required="" value="{{$member->nama_member}}"> 
              
              </div>

              <div class="div_design">
                  <label>Current Status :</label>
              <select class="text_color" name="status_id" required="">
              <option value="" selected="">Select Status</option>

              @foreach($status as $status)
                  <option value="{{$status->id}}"
                      {{ $status->id == $status->status_id ?'selected': null }}
                      > {{ $status->status_name }}</option>
                @endforeach
              
                </select>
                </div>

              <div class="div_design">
                  <label>Number Member :</label>
              <input class="text_color" type="number" name="nomor_telp" placeholder="Write the number" required="" value="{{$member->nomor_telp }}">
              </div>
              <div>

              <div class="div_design">
                  <label>Domicile Member :</label>
              <input class="text_color" type="text" name="domisili" placeholder="Write the domicile" required="" value="{{$member->domisili}}">
              </div>
              <div>


              <div class="div_design">
                  <label>Favorite Recipe :</label>
              <select class="text_color" type="text" name="resep_id" required="">
              <option value="" selected="">Select Favorite Recipe</option>

              @foreach($recipe as $recipe)
                  <option value="{{$recipe->id}}"
                      {{ $recipe->id == $recipe->recipe_id ?'selected': null }}
                      > {{ $recipe->recipe_name }}</option>
                @endforeach
              
                </select>
                </div>

              <div class="div_design">
                  <label for="review_resep">Review Member :</label>
                  <textarea class="text_color" name="review_resep" 
                  rows="5" cols="50" placeholder="Write the review"
                  required="">{{$member->review_resep}}</textarea>
              </div>
              <div>

              <div class="div_design">
                  <label>Current Profile Image :</label>
              <img style="margin:auto;" height="100" width="100" src="/member/{{$member->image}}">
              </div>

              <div class="div_design">
                  <label>Change Profile Image :</label>
              <input type="file" name="image" required="">
              </div>

              <div class="div_design">
              <input type="submit" value="Updated Member" class="btn btn-primary">

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