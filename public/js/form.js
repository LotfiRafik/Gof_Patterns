$(function () {
  var ind= 1;
  $("#suiv").click(function () {

    if(ind==1 && ($('#inputnom').val() =='' || $('#inputprenom').val() == '' || $('#inputdatenais').val() == '' || $('#inputadresse').val() == '' )){
    $( "#clique" ).trigger( "click" );
    }
    else if(ind==2 && ($('#inputcong').val() == '' ||  $('#inputdateem').val() == '' || $('#inputposte').val() == '' || $('#inputresp').val() == '' || $('#inputsalaire').val() == '')){
    $( "#clique" ).trigger( "click" );
    }
    else if(ind==3 && ($('#inputphone').val() == '' || $('#inputmail').val() == '' || $('#inputcbancaire').val() == ''  )){
    $( "#clique" ).trigger( "click" );
    }
    else {

    if (ind==1 || ind==3) {
      $("#ret").empty()
      $("#ret").append('<button class="btn btn-outline-secondary retour"><i class="fa fa-arrow-circle-left"></i> Retour</button>')
      $(".retour").css('left',"765px")
    }
    else {
      $("#ret").empty()
      $("#ret").append('<button class="btn btn-outline-secondary retour"><i class="fa fa-arrow-circle-left"></i> Retour</button>')
      $(".retour").css('left',"780px")
    }
    ind++;
    if (ind<5){
    $("#"+(ind-1)+"").hide( )
    $("#"+ind+"").show( "slide", { direction: "right"  }, 600 );
  }
 if (ind==4){
    $("#suiv").css('display','none')
    $("#enreg").css('display','')
  }
}
  })

  $("#ret").click(function () {
    ind--;
    if (ind==3){
      $("#suiv").css('display','')
      $("#enreg").css('display','none')
    }
    if (ind==3){
      $(".retour").css('left',"780px")
    }
    else if (ind!=0) {
      $(".retour").css('left',"765px")
    }
    if (ind==1){
      $("#ret").empty()
      $("#ret").append('<a href="?p=administration"><button class="btn btn-default retour"> Retour</button></a>')
    }
    if(ind>0)
    {
    $("#"+(ind+1)+"").hide()
    $("#"+ind+"").show("slide", { direction: "left"  }, 600 )
  }
})
})
