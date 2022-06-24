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

          <h2 class="fontsize"> List of Member </h2>

        <table class="center">
            <tr class="th_color">
                <th class="th_design"> Member Name </th>
               <th class="th_design"> Profil Image </th> 
                <th class="th_design"> Member Status </th>
                <th class="th_design"> Member Number </th>
                <th class="th_design"> Domicile </th>
                <th class="th_design" >Favorite Recipe </th>
                <th class="th_design"> Review Recipe </th>
                
                <th class="th_design"> Delete </th>
                <th class="th_design"> Edit </th>
            </tr>

            @foreach($member as $member)

            <tr>
              <td>{{$member->nama_member}}</td>

              <td width="200">
                <img class="img_size" src="/member/{{$member->image}}">
              </td>

              <td>{{$member->status->status_name}}</td>
              <td>{{$member->nomor_telp}}</td>
              <td>{{$member->domisili}}</td>
              <td>{{$member->resep_id}}</td>
              <td>{{$member->review_resep}}</td>
              
              <td>
                <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengghapus data ini?')" href="{{url('delete_member',$member->id)}}">Delete</a>
              </td>

              <td>
              <a class="btn btn-success" href="{{url('update_member',$member->id)}}">Edit</a>
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