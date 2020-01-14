<link href="public/css/tableaustyle.css" rel="stylesheet">
    <div class="row">
      <div class="col-md-10">
    <h6 class="titre"> Annuaire </h6>
    <div class="row"  style="margin-left : 2px; margin-bottom:20px;">
      <input type="text" class="form-control col-md-3" style="border-top-right-radius: 0; border-bottom-right-radius: 0;" id="myInput" onkeyup="myFunction()" placeholder="Rechercher">
      <button  class="btn btn-outline-info" style="border-top-left-radius: 0 ; border-bottom-left-radius : 0"><i class="fa fa-search"></i></button>
    </div>
    <div class="ttable">
    <table class="table table-hover" id="myTable" >
    <thead  style ="background-color:#5BC0DE;" class="entet">
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Nom
        <a id='nom' href="#" style="margin-left:5px;"><i class="fa fa-sort-alpha-down"> </i></a>
      </th>
      <th scope="col">Prénom</th>
      <th scope="col">Poste
        <a id='poste' href="#" style="margin-left:5px;"><i class="fa fa-sort-alpha-down"> </i></a>
      </th>
      <th scope="col">Adresse mail</th>
      <th scope="col">télephone </th>
      <th scope="col">Projet
        <a id='projet' href="#" style="margin-left:5px;"><i class="fa fa-sort-alpha-down"> </i></a>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($array != false)
    {
    foreach($array as $element)
    {
    ?>
    <tr>
      <th scope="row"><?= $element->id?></th>
      <td><?= $element->nom?></td>
      <td><?= $element->prenom?></td>
      <td><?= $element->poste?></td>
      <td><?= $element->email?></td>
      <td><?= $element->telephone?></td>
      <td><?= $element->projet?></td>
    </tr>
    <?php
    }
    }
    ?>
  </tbody>

</table>
</div>
</div>
<div class="col-md-2">
  <a href="?p=anuxlsx" class="btn btn-success btn-xl btn-circle"><i class="fa fa-file-excel fa-2x icon"></i></a>
  <h5> Exporter Excel </h5>
</div>
</div>


<script type="text/javascript" src="public/js/filtre.js"></script>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, j,bool;
  input = document.getElementById("myInput");
  filter = input.value.toLowerCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  for (i=1; i< tr.length; i++) {
    bool=0;
    for(j = 0; j<6; j++){
    td = $('tr:eq('+i+')').find('td:eq('+j+')');
    if (td) {
      if (td.text().toLowerCase().replace("<span style='color:red;'>","").replace("<span>","").indexOf(filter.toLowerCase()) > -1) {
      var str = $('tr:eq('+i+')').find('td:eq('+j+')').text().toLowerCase();
       var mouloud=str.replace(filter.toLowerCase(),"<span style=' text-decoration: underline; background: #5bc0de; color:white;'>"+filter+"</span>");
       $('tr:eq('+i+')').find('td:eq('+j+')').empty();
       $('tr:eq('+i+')').find('td:eq('+j+')').append(mouloud);
        tr[i].style.display = "";
        bool=1;
      } else {
        var str = $('tr:eq('+i+')').find('td:eq('+j+')').text();
         var mouloud=str.replace("<span style=' text-decoration: underline; background: #5bc0de; color:white;'>","");
         mouloud.replace("</span>","");
         $('tr:eq('+i+')').find('td:eq('+j+')').empty();
         $('tr:eq('+i+')').find('td:eq('+j+')').append(mouloud);
        if (j == 5 && bool==0)
        tr[i].style.display = "none";
      }
    }
  }
  }
}
</script>
