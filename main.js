

function ajaxCall() {
  $.ajax({
    url: "api.php",
    method: "get",
    success: function (data) {



      for (var i = 0; i < data.length; i++) {

        var objApi = data[i];

        $("#target").append("<li style = 'margin: 5px 0'>" + objApi.name + " " + objApi.lastname + " " + objApi.price + " " + objApi.status + " " + "</li>")
      }
    },
    error: function(error) {
      console.error(error);
    }
  })
}



function init() {
  ajaxCall()
}




$(document).ready(init)
