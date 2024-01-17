<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">

   @include("admin.navbar")


   <form action="{{url('/uploadchef')}}" method="P ost" enctype="multipart/form-data">@csrf

    <div>

      
            <label>Name</label>
            <input style="color: blue;" type="text" name="name" placeholder="Enter name" required>  
    
        </div>

    <div>

            <label>Speciality</label>
            <input style="color: blue;" type="text" name="speciality" placeholder="Enter the speciality" required>
    </div>

    <div>

        <input  type="file" name="image" required>
</div>

<div>

   
    <input style="color: black; background-color:white;" type="submit" value="save" required>
</div>

   </form>

  

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>