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

   <div style="position:relative; top:60px; right: -150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">@csrf
        <div>
            <label>Title</label>
            <input style="color: blue" type="text" name="title" placeholder="write a title" required>
        </div>

        <div>
            <label>Price</label>
            <input style="color: blue" type="number" name="price" placeholder="price" required>
        </div>

        <div>
            <label>Image</label>
            <input type="file" name="image" required>
        </div>

        <div>
            <label>Description</label>
            <input style="color: blue" type="text" name="description" placeholder="Description" required>
        </div>

        <div>
            <input style="color: black; background-color:white;" type="submit" value="Save">
        </div>
    </form>
   </div>
    <!-- container-scroller -->
    </div>
    <!-- plugins:js -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>