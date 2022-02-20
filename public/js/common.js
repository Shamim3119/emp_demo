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

  $(function () 
  {
    $('#tbl_main').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
        })  
  });

  $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
    $("#myModal a.btn").on("click", function(e) {
        console.log("button pressed");   // just as an example...
        $("#myModal").modal('hide');     // dismiss the dialog
    });
  });
  $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
      $("#myModal a.btn").off("click");
  });

  $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
      $("#myModal").remove();
  });

  $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
    "backdrop"  : "static",
    "keyboard"  : false,
    "show"      : false                     // ensure the modal is shown immediately
  });



  var elmn = document.getElementsByName("clcom");

  for (var j = 0; j < elmn.length; j++) 
  {
    elmn[j].style.backgroundColor = "coral";
    elmn[j].style.color = "white";
  }
