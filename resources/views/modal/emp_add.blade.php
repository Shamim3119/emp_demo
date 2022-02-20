<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content" >
            <div class="modal-header" name="clcom">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal_head" id="lblTl">Fill flowing attribute of update</h4>
            </div>
            <div class="modal-body" id="lblBd" align="center">

            <form id="empData" action="execute" method="POST"  role="form" enctype="multipart/form-data">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="pk_id" id="pk_id" value="0">
                <table style="width:80%;">
                  <tr>
                      <td colspan="2"> 
                        <div class="form-group">
                          <label for="usr">Name</label>
                          <input type="text" value="Mehrima" placeholder="Name" class="form-control input-sm" name="name" id="name" >
                          </div>
                      </td>
                  </tr>      
                  <tr>
                      <td colspan="2">
                        <div class="form-group">
                          <label for="usr">Address</label>
                          <input type="text" value="Mehrima"  placeholder="Address" class="form-control input-sm" name="address" id="address" >
                          </div>
                      </td>
                  </tr> 
                  <tr>
                      <td colspan="2">
                        <div class="form-group">
                          <label for="usr">Phone</label>
                          <input type="text" value="Mehrima"  placeholder="Phone" class="form-control input-sm" name="phone" id="phone" >
                          </div>
                      </td>
                  </tr> 
                  <tr>
                      <td colspan="2">
                        <div class="form-group">
                          <label for="usr">Email</label>
                          <input type="text" value="mehrima@gmail.com"  placeholder="Email" class="form-control input-sm" name="email" id="email" >
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td colspan="2">
                        <div class="form-group">
                          <label for="usr">Photo</label>
                          <input type="file" name="photo" id="photo" style="width:250px;" onchange="change_picture(this)"/><br />
                          <img src="images/"  id="img_prev" name="img_prev" style=" width:80px; height:50px;" />
                          </div>
                      </td>
                  </tr>
 
                  <tr>
                    <td colspan="2" align="center">
                      <button type="submit" class="btn btn-warning btn-sm" > 
                        	<span class="glyphicon glyphicon-saved"></span> Update
                      </button>
                    </td>
                  </tr> 
                </table>
              </form>
            </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default  btn-sm btn-cancel" data-dismiss="modal">Close</button>
            </div>
         </div> 
        </div>
      </div>


  <form id="dtDel" action="delete" method="POST"  role="form"  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="pk_id" id="del_id" value="0"> 
  </form>



