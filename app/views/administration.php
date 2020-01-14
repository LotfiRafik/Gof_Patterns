
<link href="public/css/tableaustyle.css" rel="stylesheet">
<div class="col-md-11">
    <h6 class="titre"> Liste des employés</h6>
    <a href="?p=addemploye"style="margin-bottom :30px;" > <button style="margin-bottom :30px;" class="btn btn-lg btn-info"><i class="fa fa-plus-square"></i> Nouveau</button> </a>
    <div class="ttable">
    <table class="table">
    <thead  style ="background-color:#5BC0DE;"class="entet">
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Poste</th>
      <th scope="col">Salaire</th>
      <th scope="col">Date d'embauche</th>
      <th scope="col">Jours de congé restants</th>
    </tr>
  </thead>
  <tbody>
    <?php
  if($array != false)
  {
    foreach ($array as $element)
    {?>

      <tr  onclick="location.href='?p=upemploye&amp;id=<?php echo $element->id ?>'" style="cursor: pointer ; " class="lien" >
        <th scope="row"><?php echo $element->id ?></th>
        <td><?php echo $element->nom ?></td>
        <td><?php echo $element->prenom ?></td>
        <td><?php echo $element->poste ?></td>
        <td><?php echo $element->salaire ?></td>
        <td><?php echo $element->embauche ?></td>
        <td><?php echo $element->nbjour ?></td>
      </tr>
      <?php
    }
  }
    ?>
  </tbody>
</table>
</div>
<div class="col-md-10">
