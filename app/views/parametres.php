
    <link href="public/css/formulairestyle.css" rel="stylesheet">

    <div class="row">
    <div class="col-md-10">
      <h6 class="titre"> Paramétres </h6>
   <form action=<?php echo'?p=param' ;?> method="post">
     <div class="form-row fform">
     <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;">Paramétres généraux </h4>

       <div class="form-group centrage col-md-3">
         <label for="inputrs">Raison sociale</label>
         <input type="text" class="form-control formu1" id="inputrs" name="raisonsocial" value="<?php echo $array[0]->raisonsocial?>"  >
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputspec">Spécialité</label>
         <input type="text" class="form-control formu1" id="inputspec" name="specialite" value="<?php echo $array[0]->specialite?>">
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputweb">Site web</label>
         <input type="text" class="form-control formu1" id="inputweb" name="siteweb" value="<?php echo $array[0]->siteweb?>">
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputgerant">Gérant</label>
         <input type="text" class="form-control formu1" id="inputgerant" name="gerant" value="<?php echo $array[0]->gerant?>">
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputrc">Numéro RC</label>
         <input type="number" class="form-control formu1" id="inputrc" name="rc" value="<?php echo $array[0]->rc?>">
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputfisc"> identifiant fiscal</label>
         <input type="text" class="form-control formu1" id="inpufisc" name="idfisc" value="<?php echo $array[0]->idfisc?>">
       </div>
     </div>
     <div class="form-row fform">
       <h4 style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" class="col-md-12 ">Contact </h4>
       <div class="form-group centrage col-md-3">
         <label for="inputphone">Téléphone</label>
         <input type="tel" class="form-control formu1" id="inputphone" name="tel" value="<?php echo $array[0]->tel?>">
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputmail">Adresse mail gérant</label>
         <input type="email" class="form-control formu1" id="inputmail" name="adrgerant" value="<?php echo $array[0]->adrgerant?>">
       </div>
       <div class="form-group centrage col-md-3">
         <label for="inputfax">Fax</label>
         <input type="tel" class="form-control formu1" id="inputfax" name="fax" value="<?php echo $array[0]->fax?>">
       </div>
       <div class="form-group centrage col-md-4">
         <label for="inputadresse">Adresse</label>
         <input type="text" class="form-control formu1" id="inputadresse" name="adress" value="<?php echo $array[0]->adress?>">
       </div>
     </div>
    <button type="submit" class="btn btn-info" style="position: relative; left: 860px; top:-30px;"> Enregistrer</button>
   </form>
 </div>
<!-- fin du formulaire -->
<div class="col-md-2">
  <a href="?p=admincomptes" class="btn btn-info btn-xl btn-circle"><i class="fa fa-users fa-2x icon" style="position:relative;right:2px"></i></a>
  <h5> Gérer les comptes</h5>
  <a href="?p=uptheme" class="btn btn-success btn-xl btn-circle"><i class="fa fa-paint-brush fa-2x icon"></i></a>
  <h5> Changer théme </h5>
</div>
</div>
