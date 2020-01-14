
    <link href="public/css/tableaustyle.css" rel="stylesheet">
    <h6 class="titre" style="margin-right : 170px;"> Liste des candidats</h6>
    <a href="?p=addcandidat"style="margin-bottom :30px;" > <button style="margin-bottom :30px;" class="btn btn-lg btn-info"><i class="fa fa-plus-square"></i> Nouveau</button> </a>
    <div class="ttable" style="margin-right : 170px;">
    <table class="table " id='recrt'>
    <thead class="entet" style ="background-color:#5BC0DE;">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Numéro de télephone</th>
      <th scope="col">Adresse mail</th>
      <th scope="col">Intitulé du poste</th>
      <th scope="col">Etape suivante</th>
    </tr>
  </thead>
  <tbody>
    <?php
  		if($array != false)
  		{
  		foreach($array as $element)
  		{
  	?>
    <tr onclick="location.href='?p=upcandidat&amp;id=<?php echo $element->id ?>'" style="cursor: pointer ; " class="lien" >
      <td><?=$element->nom?></td>
      <td><?=$element->prenom?></td>
      <td><?=$element->telephone?></td>
      <td><?=$element->email?></td>
      <td><?=$element->poste?></td>
      <td><?=$element->etapsuiv?></td>
    </tr>

    <?php
      }
    }?>

  </tbody>
</table>
</div>
