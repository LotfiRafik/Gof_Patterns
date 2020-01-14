$(function () {
  $("#modal_post2_id").submit(function () {

    $.ajax({
      method: "POST",
      url: "./?p=conge",

      data : {
          nomemploye: $('#identemp').val(),
          datebegin: $('#debutcong').val(),
          datend: $('#fincong').val(),
          type: $('#typecong').val()
      },

      success: function (res) {


        var error = JSON.parse(res);

        if (error.o == 'o') {
            alert("le nombre de jour restant pour cette employé est insuffisant")
        }
        else
         location.href="public/word/Titre de conges/Titre de conges_"+error.nom+" "+error.prenom+".doc";

      }
    })
  })
})
