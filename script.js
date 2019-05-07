
function printOsp() {

  $.ajax({

    url:"getAllOspiti.php",
    method:"GET",
    success:function(data){

      var ospiti= JSON.parse(data);

      // console.log(ospiti);

      var template=$("#ospiti-template").html();

      var compiled=Handlebars.compile(template);

      var cont=$(".osp-container");

      for (var i = 0; i < ospiti.length; i++) {
        var ospite=ospiti[i];

        var pers=compiled(ospite);

        cont.append(pers);
      }
    },
  });
}

function init() {

  printOsp();
}

$(document).ready(init);
