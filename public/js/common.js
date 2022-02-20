function reset(pk_id, data, value)
{
  var myData = data.split("|");
  var myValue = value.split("|");

  document.getElementById("pk_id").value = pk_id;

  for(var i = 0; i < myData.length; i++)
  {
    document.getElementById(myData[i]).value = myValue[i];
  }
}


function delete_operation(pk_id)
{
  document.getElementById("del_id").value = pk_id;
 
  if(pk_id > 0)
  { 
    var answer = confirm ("Warning: Are you sure to want procced delete operation?");
    if(answer)
    {
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        type:'POST',
        url:'delete',
        data: {_token: CSRF_TOKEN, pk_id:pk_id},
        success:function(data) {
          location.reload();
        }
      });
    }
  }
  else
  {
    alert("For delete operation select data first!");
  }
}


$(function () {
      $('#tbl_main').DataTable({
        'paging'      : false,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : false,
        'autoWidth'   : false
          })
      
    });

    function change_picture(input)
    {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
  
        reader.onload = function (e) {
        $('#img_prev')
          .attr('src', e.target.result)
          .width(80)
          .height(50);
        };
  
        reader.readAsDataURL(input.files[0]);
      } 
    }

    var elmn = document.getElementsByName("clcom");

    for (var j = 0; j < elmn.length; j++) 
    {
      elmn[j].style.backgroundColor = "coral";
      elmn[j].style.color = "white";
    }
