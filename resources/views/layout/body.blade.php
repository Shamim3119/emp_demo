<div align="center" style="width:100%;">
    <div align="left" style="width:80%; height:300px;">

        <a id='btnAdd' class='btn btn-warning'  data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-plus-sign'></span> Add Employee</a>
        <br />
        <br />
        @include('table.emp_data', ['employee',$employees])

    </div>
</div>