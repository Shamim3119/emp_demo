<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employee</title>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>


 
    <a id='btnAdd' class='btn btn-warning'  data-toggle='modal' data-target='#myModal' >
        <span class='glyphicon glyphicon-plus-sign'></span> Add Employee</a>

        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content" >
            <div class="modal-header" name="lblPHead">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal_head" id="titel_req"> Over Sales Statement of </h4>
            </div>
        		<div align="center">
 
                </div>

 
                
             <div class="modal-footer">
              <button type="button" class="btn btn-default  btn-sm btn-cancel" data-dismiss="modal">Close</button>
            </div>
         </div> 
        </div>
      </div>

      
      
    <script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    </body>
</html>
