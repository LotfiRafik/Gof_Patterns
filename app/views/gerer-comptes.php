    <link href="public/css/tableaustyle.css" rel="stylesheet">
    <link href="public/css/formulairestyle.css" rel="stylesheet">
    <script src="jquery-3.3.1.min (2).js"></script>

    <h6 class="titre col-md-10" > Gérer les comptes </h6>
    <div id="newcompte" style="display:none;">
    <form  method="post" action="?p=adduser" >
     <div class="form-row fform" style="margin-right : 200px; margin-left : 150px">
     <h4 class="col-md-12" style="border-top-left-radius:15px; border-top-right-radius:15px;background-color:#A7E8A7;padding-bottom:5px;font-size:20px;text-align: center;" >Ajouter nouveau compte </h4>
       <div class="form-group centrage col-md-4" style="margin-left:100px;">
         <label for="inputident">Identifiant</label>
         <input type="text" class="form-control formu1" id="inputident" name="identifiant" required="required" >
       </div>
       <div class="form-group centrage col-md-4">
         <label for="inputtype">Profil</label>
         <select id="inputtype"  class="form-control" name="type">
           <option value="gestionnaire">Gestionnaire</option>
           <option value="admin">Administrateur</option>
         </select>
       </div>
       <div class="form-group centrage col-md-4" style="margin-left:100px;">
         <label for="inputpw">Mot de passe</label>
         <input type="password" class="form-control formu1" id="inputpw" name="password" required>
       </div>
       <div class="form-group centrage col-md-4"style="">
         <label for="inputrpw">Retapez le mot de passe</label>
         <input type="password" class="form-control formu1" id="inputrpw" name="Rpassword" required>
       </div>


       <button type="submit" class="form-group centrage btn  btn-info" style="height: 40px;position:relative;top:10px;left:650px;"> Enregistrer</button>
     </div>
     </form>
     <button id='caché' class="btn btn-outline-info btn-lg btn-circle " style="position:absolute; left : 350px;top: 375px;"><i class="fa fa-lg fa-angle-double-up"></i></a>
     </div>
    <button id="new" style="margin-bottom :30px;margin-right : 170px; margin-left : 150px" class="btn btn-lg btn-info"><i class="fa fa-plus-square"></i> Nouveau</button>
    <?php
    if(isset($other))
    {
      if(in_array('exist', $other)) { echo '<p style="color:red;position:relative;left:150px;">Identifiant existe déja !  </p>'; }
      else if(in_array('pass',$other))  { echo '<p style="color:red;position:relative;left:150px">Les deux mots de passe ne correspondent pas !</p>'; }

    }
    ?>
    <div class="ttable" style="margin-right : 200px; margin-left : 150px;">

      <script>
      $(function(){
        $("#new").click(function(){
          $("#newcompte").slideToggle();
          $("#new").slideToggle();
        })
          $("#caché").click(function(){
            $("#newcompte").slideToggle();
            $("#new").slideToggle();


        });

      });
      </script>
    <table class=" table" >
    <thead style ="background-color:#5BC0DE;" class="entet">
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Identifiant</th>
      <th scope="col">Profil</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($array as $element)
      {
    ?>
    <tr onclick="location.href='?p=upUserType&amp;id=<?php echo $element->id ?>'" style="cursor: pointer ; " class="lien" >
      <th scope="row"><?php echo $element->id?></th>
      <td><?php echo $element->identifiant?></td>
      <td><?php echo $element->type?></td>
    </tr>
    <?php
      }
    ?>

  </tbody>
</table>
</div>
<a href='?p=param'><button  class="btn btn-xl btn-default" href="index.html" style="position:relative; left : 150px; margin-top:20px;"> Retour</button><a/>
