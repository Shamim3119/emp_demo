<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employee</title>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
            <!--
      <p>{{ $employees }}</p>
-->
      <table style='font-size: 14px; width: 100%' id='tbl_main' class='table table-bordered table-striped'>
        <thead id="thHd">
          <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Img</th>
            </tr>
        </thead>
        <tbody>
          @foreach($employees as $employee)
          <tr>
            <td>{{ $employee['id'] }}</td>
            <td>{{ $employee['name'] }}</td>
            <td>{{ $employee['address'] }}</td>
            <td>{{ $employee['phone'] }}</td>
            <td>{{ $employee['email'] }}</td>
            <td>{{ $employee['img'] }}</td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
        </tfoot>
      </table>   
    </body>
</html>