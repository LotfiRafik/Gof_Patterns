
    <link href="public/css/tableaustyle.css" rel="stylesheet">
    <h6 class="titre" style="margin-right : 170px;"> Historique du salaire </h6>
    <h3 class="stitre"><?=$other[0]->nom?> <?=$other[0]->prenom ?></h3>
    <div class="ttable  " style="margin-right : 170px; margin-left : 150px">
    <table class="table table-hover">
    <thead class="entet" style ="background-color:#5BC0DE;">
    <tr>
      <th scope="col">Date de modification</th>
      <th scope="col">Salaire</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($array as $element)
    {?>
    <tr>
      <td><?= $element->date?> </td>
      <td><?= $element->salaire?></td>
    </tr>
    <?php
    } ?>
  </tbody>

</table>
</div>
<a href="?p=upemploye&amp;id=<?=$other[0]->id?>"><button  class="btn btn-xl btn-default" style="position:relative; left : 150px; margin-top:20px;"> Retour</button></a>
