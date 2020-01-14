
<link href="public/css/formulairestyle.css" rel="stylesheet">

<?php
if($_GET['p'] === 'upcandidat')
{
?>
<div class="row">
<div class="col-md-10">
<h6 class="titre"> Fiche Candidat </h6>

<form  method="post" action=<?php echo'?p=upcandidat&id='.$array[0]->id ?>>
 <div class="form-row fform">
 <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Informations candidat </h4>

   <div class="form-group centrage col-md-3">
     <label for="inputnom">Nom</label>
     <input type="text" class="form-control formu1" id="inputnom"  value='<?php echo $array[0]->nom ?>' name="nom" required >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputprenom">Prénom</label>
     <input type="text" class="form-control formu1" id="inputprenom"  value='<?php echo $array[0]->prenom ?>' name='prenom' required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputtel">Numéro de téléphone</label>
     <input type="tel" class="form-control formu1" id="inputtel" value='<?php echo $array[0]->telephone ?>' name="telephone" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputmail">Adresse mail</label>
     <input type="email" class="form-control formu1" id="inputmail" value='<?php echo $array[0]->email ?>' name="email" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputposte">Poste désiré</label>
     <input type="text" class="form-control formu1" id="inputaposte" value='<?php echo $array[0]->poste ?>'  name="poste" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputexp">Experience</label>
     <input type="text" class="form-control formu1" id="inputexp" value='<?php echo $array[0]->experience ?>'  name="experience" required>
   </div>
 </div>
 <div class="form-row fform">
 <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Entretien</h4>

   <div class="form-group centrage col-md-3">
     <label for="inputdateentr">Date entretien</label>
     <input type="date" class="form-control formu1" id="inputdateentr" value='<?php echo $array[0]->da_entretien ?>' name="da_entretien" required >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputsalaire">Salaire désiré</label>
     <input type="number" class="form-control formu1" id="inputsalaire" value='<?php echo $array[0]->salaire ?>' name="salaire" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputstatut">Statut</label>
     <input type="text" class="form-control formu1" id="inputstatut" value='<?php echo $array[0]->statut ?>' name="statut" >
   </div>
   <div class="form-group centrage col-md-5">
     <label for="inputcomment">Commentaire</label>
     <textarea class="form-control formu1" id="inputcomment" rows="2"  name="commentaire" ><?php echo $array[0]->commentaire ?></textarea>
   </div>
   <div class="form-group centrage col-md-5">
     <label for="inputetapesui">Etape suivante</label>
     <textarea class="form-control formu1" id="inputetapesui" rows="2" name="etapsuiv" ><?php echo $array[0]->etapsuiv ?></textarea>
   </div>
   <div class="form-group centrage col-md-11">
     <label for="inputentretien">Entretien</label>
     <textarea class="form-control formu1" id="inputentretien" rows="4" name="question" ><?php echo $array[0]->question ?></textarea>
   </div>
 </div>
<button type="submit" class="btn btn-info" style="position: relative; left: 870px;">Enregistrer</button>
</form>
<a href="?p=recrutement"><button  class="btn btn-default" style="position: relative; left: 790px;top:-38px;"> Retour</button></a>

</div>
<div class="col-md-2">
  <a href="#" data-toggle="modal" data-target="#erasemodal" data-backdrop="static" data-keyboard="false" class="btn btn-outline-danger btn-xl btn-circle"><i class="fa fa-times fa-2x icon"></i></a>
  <h5> Supprimer </h5>
  <div class="modal fade" id="erasemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Supprimer un candidat</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">Appuyez sur le button supprimer ou sur annuler pour revenir en arriére.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <a class="btn btn-danger" href="?p=deleteCandidat&id=<?=$_GET['id'] ?>">Supprimer</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?php
}
elseif($_GET['p'] === 'addcandidat')
{

/*----------NOUVEAU Candidat -*----------------*/
?>


<div class="row">
<div class="col-md-10">
<h6 class="titre"> Nouveau Candidat </h6>

<form  method="post" action="?p=addcandidat">
 <div class="form-row fform">
 <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Informations candidat </h4>

   <div class="form-group centrage col-md-3">
     <label for="inputnom">Nom</label>
     <input type="text" class="form-control formu1" id="inputnom"   name="nom" required >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputprenom">Prénom</label>
     <input type="text" class="form-control formu1" id="inputprenom"   name='prenom' required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputtel">Numéro de téléphone</label>
     <input type="tel" class="form-control formu1" id="inputtel"  name="telephone" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputmail">Adresse mail</label>
     <input type="email" class="form-control formu1" id="inputmail"  name="email" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputposte">Poste désiré</label>
     <input type="text" class="form-control formu1" id="inputaposte"   name="poste" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputexp">Experience</label>
     <input type="text" class="form-control formu1" id="inputexp" name="experience" required>
   </div>
 </div>
 <div class="form-row fform">
 <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Entretien</h4>

   <div class="form-group centrage col-md-3">
     <label for="inputdateentr">Date entretien</label>
     <input type="date" class="form-control formu1" id="inputdateentr"  name="da_entretien" required >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputsalaire">Salaire désiré</label>
     <input type="number" class="form-control formu1" id="inputsalaire"  name="salaire" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputstatut">Statut</label>
     <input type="text" class="form-control formu1" id="inputstatut"  name="statut" >
   </div>
   <div class="form-group centrage col-md-5">
     <label for="inputcomment">Commentaire</label>
     <textarea class="form-control formu1" id="inputcomment" rows="2"  name="commentaire" ></textarea>
   </div>
   <div class="form-group centrage col-md-5">
     <label for="inputetapesui">Etape suivante</label>
     <textarea class="form-control formu1" id="inputetapesui" rows="2" name="etapsuiv" ></textarea>
   </div>
   <div class="form-group centrage col-md-11">
     <label for="inputentretien">Entretien</label>
     <textarea class="form-control formu1" id="inputentretien" rows="4" name="question" ></textarea>
   </div>
 </div>
<button type="submit" class="btn btn-info" style="position: relative; left:870px; top:-32px;">Enregistrer</button>
</form>
<a href="?p=recrutement"><button  class="btn btn-default" style="position: relative; left: 790px;top:-70px;">Retour</button></a>

</div>
</div>
<?php
}
?>
