<table style='font-size:13px; width:100%;' id='tbl_main' class='table table-bordered table-striped'>
    <thead name="clcom">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Action</th>
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
            <td><img src="{{ asset('photo/'.$employee['photo'].'') }}" style="width:50px; height:40px;" /> </td>
            <td>
                <a href='#' onClick="delete_operation({{$employee['id']}})"  class='btn btn-danger btn-xs btn-cancel' >&nbsp;<span class='glyphicon glyphicon-trash'></span> &nbsp;</a>
		        <a title='Edit' onClick="reset({{$employee['id']}},'name|address|phone|email|photo','{{$employee['name']}}|{{$employee['address']}}|{{$employee['phone']}}|{{$employee['email']}}|{{$employee['photo']}}')" class='btn btn-warning btn-xs'  data-toggle='modal' data-target='#myModal' >&nbsp;<span class='glyphicon glyphicon-pencil'></span>&nbsp;</a>
            </td>
        </tr>
              
        @endforeach
    </tbody>
    <tfoot>
        <tr name='clcom'>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><br></th>
            <th><br></th>
        </tr>
    </tfoot>
</table> 