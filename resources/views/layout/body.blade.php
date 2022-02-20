<div align="center" style="width:100%;">
    <div align="left" style="width:90%; height:500px;">

        <a id='btnAdd' class='btn btn-warning' onclick="reset(0,'name|address|phone|email|photo','||||');"  data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-plus-sign'></span> Add Employee</a>
        <br />
        <br />
        @include('table.emp_data', ['employee',$employees])

    </div>
</div>