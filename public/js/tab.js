
var trPerAnim=1;
var indic=0;//permet de savoir combien de fois on a clické sur suivant ou précedent
var nbTr=$('tr').length-2;
var i=0;
var con;
$('tr').each(function(){
  if(i>0){
  if(i<trPerAnim+1){

  }
  else {
    $(this).hide();
  }
}
  i++;
});

$('.suivant').click(function(){
  if(nbTr%trPerAnim!=0)
  {
    con=parseInt(nbTr/trPerAnim)+1;
  }
  else {
    con =Math.round(nbTr/trPerAnim);
  }


if(!(con==indic+1))
  {

  indic++;
  var i=0;
  $('tr').each(function(){
    if(i>0){
    if((indic*trPerAnim)<i && i<(indic+1)*trPerAnim+1){
      $(this).show();
    }
    else {
      $(this).hide();
    }
  }
    i++;
  });

}
});
$('.precedent').click(function(){

  if(!(indic==0))
  {

  indic--;
  var i=0;
  $('tr').each(function(){
    if(i>0){
    if((indic*trPerAnim)<i && i<(indic+1)*trPerAnim+1){
      $(this).show();
    }
    else {
      $(this).hide();
    }
  }
    i++;
  });

}
});
