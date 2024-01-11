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
   <div style="position: relative; top: 60px; right:-150px">
    <table bgcolor="grey" border="3px">
        <tr>
            <th style="padding: 30px">Name</th>
            <th style="padding: 30px">Email</th>
            <th style="padding: 30px">Action</th>
        </tr>
        <tr align="center">
            <td>jxtsly</td>
            <td>jxtsly@gmail.com</td>
            <td><a href="">Delete</a></td>
        </tr>
    </table>
   </div>
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>