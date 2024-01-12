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

   <div>
    <form action="">
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="write a title" required>
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