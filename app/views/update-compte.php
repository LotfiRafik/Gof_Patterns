
<h6 class="titre col-md-10"> Modifier compte </h6>
    <link href="public/css/formulairestyle.css" rel="stylesheet">

<div class="row">
<div class="col-md-12">
  <div class="row" style="margin-top:30px;">
  <div class="col-md-10" >
 <div class=" fform">
   <h4  style="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" class="col-md-12 ">Modification </h4>
   <div class="form-group centrage col-md-4" style="position:relative; left:180px;">
     <label for="inputidt">Identifiant</label>
     <input type="text"  class="form-control formu1" id="inputidt" value="<?=$array[0]->identifiant ?>" disabled>
   </div>
   <form method="post" action=<?php echo'?p=upUserPassword&id='.$_GET['id'] ?>>
 <div class="form-row">
   <div class="form-group centrage col-md-4">
     <label for="inputnpw">Nouveau mot de passe</label>
     <input type="password" name="password" class="form-control formu1" id="inputnpw" required>
   </div>
   <div class="form-group centrage col-md-4">
     <label for="inputrpw">Retapez le mot de passe</label>
     <input type="password" name="Rpassword" class="form-control formu1" id="inputrpw" required>
   </div>
 </div>
 <button type="submit" class="btn btn-outline-info" style="position:absolute ; right : 70px; top:155px;">Modifier</button>
</form>
<form method="post" action=<?php echo'?p=upUserType&id='.$_GET['id'] ?> >
   <div class="form-group centrage col-md-5" style="position:relative;top:-10px;left:-15px;" >
     <label for="inputprfl">Modifier type de profil</label>
     <select  class="form-control " name="type" id="inputprfl" required>
       <option <?php if ($array[0]->type=='gestionnaire') {echo 'selected="selected"';}?> value="gestionnaire">Gestionnaire</option>
       <option <?php if ($array[0]->type=='admin') {echo 'selected="selected"';}?> value="admin">Administrateur</option>
     </select>
   </div>
   <button type="submit" class="btn btn-outline-info" style="position:absolute ; right :400px; top:230px;"> Modifier</button>
</form>
</div>

</div>
<div class="col-md-2">
  <a data-toggle="modal" data-target="#erasemodal" data-backdrop="static" data-keyboard="false" href="?p=deleteCompte&id=<?=$_GET['id'] ?>"  class="btn btn-outline-danger btn-xl btn-circle"><i class="fa fa-times fa-2x icon"></i></a>
  <h5> Supprimer </h5>
  <div class="modal fade" id="erasemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Voulez vous supprimer ce compte?</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body"><span style="color:red">ATTENTION :</span> Si le compte est supprimé il ne peut plus être récupéré</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <a class="btn btn-danger" href="?p=deleteCompte&id=<?=$_GET['id'] ?>">Supprimer</a>
        </div>
      </div>
    </div>
  </div>

</div>
</div>


</div>
<a href="?p=admincomptes"><button  class="btn btn-default"  style="position: relative; left: 900px;top:-20px;">Retour</button></a>

</div>
