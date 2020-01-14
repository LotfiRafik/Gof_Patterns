$(function () {
  $("#modal_post_id").submit(function () {

    $.ajax({
      method: "POST",
      url: "./?p=upmyuser",

      data : {
          identifiant: $('#changeid').val(),
          modifier: 'identifiant'
      },

      success: function (res) {
        if (res =="") {
          alert("Identifiant modifier avec succés")
        }

          var error = JSON.parse(res)
          if (error.exist == "exist") {
              alert('Identifiant existe déja')
          }
        }
    })
  })
  $("#modal_post_mdp").submit(function () {

    $.ajax({
      method: "POST",
      url: "./?p=upmyuser",

      data : {
          'old-password': $('#changemdp').val(),
          password: $('#newmdp').val(),
          Rpassword: $('#rnewmdp').val(),
          modifier: 'password'
      },

      success: function (res) {
        if (res == "") {
          alert("Mot de passe modifier avec succés")
        }
        var error = JSON.parse(res);

        if (error.old == "old") {
            alert("Mot de passe incorrect")
        }
        if (error.new == "new") {
            alert("Retapez le bon Mot de passe")
        }


      }

    })
  })
})
