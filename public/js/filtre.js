$(function () {
  $("#nom").click(function () {

    $.ajax({
      method: "POST",
      url: "./?p=filtre",
      data : {
          id: 'nom'
      },
        success: function (res) {
        var liste = JSON.parse(res)
        $('tbody').empty();
        for (var i = 0; i < liste.length ; i++){
          $('tbody').append('<tr id="'+i+'">');
          $("#"+i+"").append('<th scope="row">'+liste[i].id+'</th>');
          $("#"+i+"").append('<td>'+liste[i].nom+'</td>');
          $("#"+i+"").append('<td>'+liste[i].prenom+'</td>');
          $("#"+i+"").append('<td>'+liste[i].poste+'</td>');
          $("#"+i+"").append('<td>'+liste[i].email+'</td>');
          $("#"+i+"").append('<td>'+liste[i].telephone+'</td>');
          $("#"+i+"").append('<td>'+liste[i].projet+'</td>');


        }

        }

  })
})



$("#poste").click(function () {

  $.ajax({
    method: "POST",
    url: "./?p=filtre",
    data : {
        id: 'poste'
    },
      success: function (res) {
      var liste = JSON.parse(res)
      $('tbody').empty();
      for (var i = 0; i < liste.length ; i++){
        $('tbody').append('<tr id="'+i+'">');
        $("#"+i+"").append('<th scope="row">'+liste[i].id+'</th>');
        $("#"+i+"").append('<td>'+liste[i].nom+'</td>');
        $("#"+i+"").append('<td>'+liste[i].prenom+'</td>');
        $("#"+i+"").append('<td>'+liste[i].poste+'</td>');
        $("#"+i+"").append('<td>'+liste[i].email+'</td>');
        $("#"+i+"").append('<td>'+liste[i].telephone+'</td>');
        $("#"+i+"").append('<td>'+liste[i].projet+'</td>');


      }

      }

})
})





$("#projet").click(function () {

  $.ajax({
    method: "POST",
    url: "./?p=filtre",
    data : {
        id: 'projet'
    },
      success: function (res) {
      var liste = JSON.parse(res)
      $('tbody').empty();
      for (var i = 0; i < liste.length ; i++){
        $('tbody').append('<tr id="'+i+'">');
        $("#"+i+"").append('<th scope="row">'+liste[i].id+'</th>');
        $("#"+i+"").append('<td>'+liste[i].nom+'</td>');
        $("#"+i+"").append('<td>'+liste[i].prenom+'</td>');
        $("#"+i+"").append('<td>'+liste[i].poste+'</td>');
        $("#"+i+"").append('<td>'+liste[i].email+'</td>');
        $("#"+i+"").append('<td>'+liste[i].telephone+'</td>');
        $("#"+i+"").append('<td>'+liste[i].projet+'</td>');


      }

      }

})
})


})
