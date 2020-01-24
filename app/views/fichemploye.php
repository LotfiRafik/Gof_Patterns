
<link href="public/css/formulairestyle.css" rel="stylesheet">


<div class="row">
<div class="col-md-10">

  <style>
   .enreg {
     position: absolute;
     right: 25px;
   }
   .retour {
     position: relative;
     left: 800px
   }
   .suiv{
     position: absolute;
     right: 18px;
   }
   </style>

  <?php
  if($_GET['p'] === 'upemploye')
  {
  ?>

  <h6 class="titre"> Fiche Employé </h6>

<form  method="post" action=<?php echo'?p=upemploye&id='.$this->array[0]->id ?> enctype="multipart/form-data" >
 <div class="form-row fform">
 <h4 style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;"  class="col-md-12 ">Informations personnelles </h4>

   <div class="form-group centrage col-md-3">
     <label for="inputnom">Nom</label>
     <input type="text" class="form-control formu1" id="inputnom" value='<?php echo $this->array[0]->nom ?>' name="nom" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputprenom">Prénom</label>
     <input type="text" class="form-control formu1" id="inputprenom" value='<?php echo $this->array[0]->prenom ?>' name="prenom" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputdatenais">Date de naissance</label>
     <input type="date" class="form-control formu1" id="inputdatenais" value='<?php echo $this->array[0]->naissance ?>' name="naissance" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputsitu">Situation familiale</label>
     <select id="inputsitu" class="form-control formu1"  name="situation">
       <option <?php if ($this->array[0]->situation=='Célibataire') {echo 'selected="selected"';}?> >Célibataire</option>
       <option <?php if ($this->array[0]->situation=='Marié') {echo 'selected="selected"';}?> >Marié</option>
     </select>
   </div>
   <div class="form-group centrage col-md-4">
     <label for="inputadresse">Adresse</label>
     <input type="text" class="form-control formu1" id="inputadresse" value='<?php echo $this->array[0]->adresse ?>' name="adresse" required>
   </div>
 </div>
 <div class="form-row fform">
   <h4 class="col-md-12" style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Informations professionnelles </h4>
   <div class="form-group centrage col-md-3">
     <label for="inputdateem">Date d'embauche</label>
     <input type="date" class="form-control formu1" id="inputdateem" value='<?php echo $this->array[0]->embauche ?>' name="embauche" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputposte">Poste occupé</label>
     <input type="text" class="form-control formu1" id="inputposte" value='<?php echo $this->array[0]->poste ?>'  name="poste" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputstatut">Statut</label>
     <select id="inputstatut" class="form-control formu1"  name="statut">
       <option <?php if ($this->array[0]->statut=='Actif') {echo 'selected="selected"';}?> >Actif</option>
       <option <?php if ($this->array[0]->statut=='Désactivé') {echo 'selected="selected"';}?> >Désactivé</option>
       <option <?php if ($this->array[0]->statut=='Retraité') {echo 'selected="selected"';}?> >Retraité</option>
     </select>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputresp">Responsable hiérarchique</label>
     <input type="text" class="form-control formu1" id="inputresp"  value='<?php echo $this->array[0]->responsable ?>' name="responsable" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputsalaire">Salaire</label>
     <input type="number" class="form-control formu1" id="inputsalaire" value='<?php echo $this->array[0]->salaire ?>' name="salaire" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputprojet">Projet</label>
     <input type="text" class="form-control formu1" id="inputprojet" value='<?php echo $this->array[0]->projet ?>' name="projet" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputimma">Immatriculation sociale</label>
     <input type="text" class="form-control formu1" id="inputimma"  value='<?php echo $this->array[0]->immatriculation ?>' name="immatriculation"  >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputcong">Jours de congés restants</label>
     <input type="number" class="form-control formu1" id="inputcong" value='<?php echo $this->array[0]->nbjour ?>' name="nbjour" required >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputdatedem">Date de démission</label>
     <input type="date" class="form-control formu1" id="inputdatedem" value='<?php echo $this->array[0]->demission ?>' name="demission">
   </div>
   <div class="form-group centrage ">
     <label for="inputcv">CV</label>
     <input type="file" class="form-control-file" id="inputcv" name="cv">
     <?php
     if(isset($other['cv']))
     {
       if($other['tycv'] === 'pdf') {$newtab = 'target="_blank"'; } else { $newtab ='';}
       ?>
       <a href="?p=cdtdown&amp;id=<?php echo $_GET['id'];?>&amp;t=cv&amp;ty=<?php echo $other['tycv'];?>" <?php echo $newtab ?> > Telecharger CV </a><br/><br/> <?php			}
     ?>
   </div>
   <div class="form-group centrage ">
     <label for="inputcontrat">Contrat de travail</label>
     <input type="file" class="form-control-file" id="inputcontrat" name="cdt">
     <?php
     if(isset($other['cdt']))
     {
         if($other['tycdt'] === 'pdf') {$newtab = 'target="_blank"'; } else { $newtab ='';}
       ?>
       <a href="?p=cdtdown&amp;id=<?php echo $_GET['id'];?>&amp;t=cdt&amp;ty=<?php echo $other['tycdt'];?>" <?php echo $newtab ?>> Telecharger Contrat de travail </a>
       <?php
     }
     ?>
   </div>
 </div>
 <div class="form-row fform">
   <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Contact</h4>
   <div class="form-group centrage col-md-3">
     <label for="inputphone">Numéro de telephone</label>
     <input type="tel" class="form-control formu1" id="inputphone" value='<?php echo $this->array[0]->telephone ?>' name="telephone" required  >
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputmail">Email</label>
     <input type="email" class="form-control formu1" id="inputmail" value='<?php echo $this->array[0]->email ?>' name="email" required>
   </div>
   <div class="form-group centrage col-md-3">
     <label for="inputmail">Coordonnées bancaires</label>
     <input type="text" class="form-control formu1" id="inputmail" value='<?php echo $this->array[0]->cbancaire ?>' name="cbancaire" required>
   </div>

 </div>
  <div class="form-group fform">
    <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Commentaire  </h4>
    <textarea class="form-control formu1" id="inputcomment" rows="4" name="commentaire"><?php echo $this->array[0]->commentaire ?></textarea>
</div>
<button type="submit" class="btn btn-info " style=" position: relative;left: 860px;top:-30px" >Enregistrer</button>
</form>
<a href="?p=administration"><button  class="btn btn-default retour " style=" position: relative;left:770px; top:-68px" >Retour</button></a>
</div>

<div class="col-md-2">
<a href="#" class="btn btn-primary btn-xl btn-circle dropdown-toggle" role="button"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="worddrop" ><i class="fa fa-file-word fa-2x icon"></i></a>
<div class="dropdown-menu" aria-labelledby="worddrop">
<a href="?p=contrat_de_travail&amp;id=<?php echo $this->array[0]->id ?>" class="dropdown-item"> Contrat de travail </a>
<a href="?p=attestation_de_travail&amp;id=<?php echo $this->array[0]->id ?>" class="dropdown-item"> Attestation de travail </a>
<a href="?p=certificat_de_travail&amp;id=<?php echo $this->array[0]->id ?>" class="dropdown-item"> Certificat de travail </a>
</div>
<h5> Word </h5>
<a  href="?p=calender&id=<?=$_GET['id']?>" class="btn btn-danger btn-xl btn-circle"><i class="fa fa-calendar-check fa-2x icon"></i></a>
<h5>Congés</h5>
<a href="?p=salaire&amp;id=<?php echo $this->array[0]->id ?>" class="btn btn-success btn-xl btn-circle"><i class="fa fa-dollar-sign fa-2x icon"></i></a>
<h5>Salaire</h5>
<a href="?p=eva&id=<?=$_GET['id']?>" class="btn btn-info btn-xl btn-circle"><i class="fa fa-chart-line fa-2x icon"></i></a>
<h5> Evaluation </h5>



</div>

</div>



<?php
/*------------------ NOUVEAU EMPLOYE------------------------------- */
}
elseif($_GET['p'] === 'addemploye')
{
?>


<h6 class="titre"> Nouveau Employé </h6>

<form  method="post" action="?p=addemploye"  enctype="multipart/form-data" >
<div class="form-row fform" id="1" style="display: ; margin-top:50px;">
<h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;">Informations personnelles </h4>
 <div class="form-group centrage validate-input col-md-3" data-validate="Nom requis">
   <label for="inputnom">Nom</label>
   <input type="text" class="form-control formu1" id="inputnom"  name="nom" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputprenom">Prénom</label>
   <input type="text" class="form-control formu1" id="inputprenom"  name="prenom" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputdatenais">Date de naissance</label>
   <input type="date" class="form-control formu1" id="inputdatenais"  name="naissance" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputsitu">Situation familiale</label>
   <select id="inputsitu" class="form-control formu1"  name="situation">
     <option >Célibataire</option>
     <option >Marié</option>
   </select>
 </div>
 <div class="form-group centrage col-md-4">
   <label for="inputadresse">Adresse</label>
   <input type="text" class="form-control formu1" id="inputadresse" name="adresse" required>
 </div>
</div>
<div class="form-row fform" id='2' style="display:none;">
 <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;">Informations professionnelles </h4>
 <div class="form-group centrage col-md-3">
   <label for="inputdateem">Date d'embauche</label>
   <input type="date" class="form-control formu1" id="inputdateem"  name="embauche" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputposte">Poste occupé</label>
   <input type="text" class="form-control formu1" id="inputposte"   name="poste" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputstatut">Statut</label>
   <select id="inputstatut" class="form-control formu1"  name="statut">
     <option >Actif</option>
     <option >Désactivé</option>
     <option >Retraité</option>
   </select>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputresp">Responsable hiérarchique</label>
   <input type="text" class="form-control formu1" id="inputresp"   name="responsable" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputsalaire">Salaire</label>
   <input type="number" class="form-control formu1" id="inputsalaire" name="salaire" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputprojet">Projet</label>
   <input type="text" class="form-control formu1" id="inputprojet"  name="projet" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputimma">Immatriculation sociale</label>
   <input type="text" class="form-control formu1" id="inputimma"   name="immatriculation"  >
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputcong">Jours de congés restants</label>
   <input type="number" class="form-control formu1" id="inputcong"  name="nbjour"  required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputdatedem">Date de démission</label>
   <input type="date" class="form-control formu1" id="inputdatedem"  name="demission">
 </div>
 <div class="form-group centrage ">
   <label for="inputcv">CV</label>
   <input type="file" class="form-control-file" id="inputcv" name="cv">
 </div>
 <div class="form-group centrage ">
   <label for="inputcontrat">Contrat de travail</label>
   <input type="file" class="form-control-file" id="inputcontrat" name="cdt">
 </div>
</div>
<div class="form-row fform" id='3' style="display:none; margin-top:50px;">
 <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;">Contact</h4>
 <div class="form-group centrage col-md-3">
   <label for="inputphone">Numéro de telephone</label>
   <input type="tel" class="form-control formu1" id="inputphone"  name="telephone" required  >
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputmail">Email</label>
   <input type="email" class="form-control formu1" id="inputmail"  name="email" required>
 </div>
 <div class="form-group centrage col-md-3">
   <label for="inputcbancaire">Coordonnées bancaires</label>
   <input type="text" class="form-control formu1" id="inputcbancaire" name="cbancaire" required>
 </div>

</div>
<div class="form-group fform" id='4' style="display:none;  margin-top:50px;">
  <h4 class="col-md-12 " style ="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;">Commentaire  </h4>
  <textarea class="form-control formu1" id="inputcomment" rows="4"  name="commentaire"></textarea>
</div>
<span id='enreg' style="display:none;"><button type="submit" id='clique' class="btn btn-info enreg" > Enregistrer</button></span>
</form>
<span id='suiv' style="display:;"><button  class="btn btn-outline-info suiv" > Suivant <i class="fa fa-arrow-circle-right"></i> </button></span>
<span id='ret'><a href="?p=administration"><button class="btn btn-default retour"> Retour</button></a></span>


<script type="text/javascript" src="public/js/form.js"></script>

<?php
}
?>
