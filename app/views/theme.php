    <h6 class="titre">Théme </h6>

    <link href="public/css/formulairestyle.css" rel="stylesheet">


    <div class="row">
    <div class="col-md-3">
      <div class="btn-group" data-toggle="buttons">
        <form action=<?php echo'?p=uptheme';?> method="post" enctype="multipart/form-data">
          <h6> Couleur du théme </h6>
          <label class="btn col btn-green1 ">
    				<input  type="radio" name="theme" value='005205' id="option2" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
    			</label>

    			<label class="btn col btn-blue1">
    				<input type="radio" name="theme" value="152C55" id="option1" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
    			</label>

    			<label class="btn col btn-blue2">
    				<input type="radio" name="theme" value="5D0D45" id="option2" autocomplete="off" >
            <i class="fa fa-check-circle fa-2x icon"></i>
    			</label>

    			<label class="btn col btn-black" >
    				<input type="radio" name="theme" value="343a40" id="option2" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
    			</label>

    			<label class="btn col btn-yellow">
    				<input type="radio" name="theme" value="FFFB86" id="option2" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
    			</label>

    			<label class="btn col btn-red">
    				<input type="radio" name="theme"  value="791114" id="option2" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <label class="btn col btn-pink">
    				<input type="radio" name="theme" value="FD8D90" id="option2" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <label class="btn col btn-indigo">
    				<input type="radio" name="theme" id="option2" value="1B596D" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <label class="btn col btn-magenta">
            <input type="radio" name="theme" id="option2" value="9C2245" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <label class="btn col btn-orange">
            <input type="radio" name="theme" id="option2" value="FFB874" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <label class="btn col btn-green">
            <input type="radio" name="theme" id="option2" value="0D5929" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <label class="btn col btn-white">
            <input type="radio" name="theme" id="option2" value="FEFEF6" autocomplete="off">
            <i class="fa fa-check-circle fa-2x icon"></i>
          </label>
          <style>
          .btn-green1
          {
            background: #005205;
          }
          .btn-blue1 {
            background: #152C55;
          }
          .btn-yellow
          {
            background: #FFFB86;
          }
          .btn-red
        {background: #791114;
        }
        .btn-blue2{
          background: #5D0D45;
        }
          .btn-indigo
          {
            background: #1B596D;
          }
          .btn-magenta
          {
            background: #9C2245;

          }
          .btn-green
          {
            background: #8ABD5F;
          }
          .btn-orange
          {
            background: #FFB874;

          }
          .btn-white
          {
            background: #FEFEF6;
          }
          .btn-pink
          {
            background-color:#FD8D90;
          }
          .btn-black
          {
            background-color: #343a40;
          }
          input[type=radio]
          {
            display: none;
          }

          .col
          {
            width: 60px;
            height: 60px;
          }

          .btn .fa-2x {
          	opacity: 0;
          }
          .btn.active .fa-2x{
          	opacity: 1;
          }
          </style>
  	</div>

 </div>
 <div class="col-md-5"style="position:relative ; left: 130px; ">
   <h6> Logo </h6>
   <div class="gallery" style="height:168px; width:250px;">
       <img src="<?=$param[0]->logo?>" alt="Fjords" width="300" height="200"style="height:166px;width:248px;">
   </div>


<input type="file" name="logo" class="form-control" style="position:relative; Top:-110px;left : 260px; cursor:pointer;">


</div>
<div class="col-md-10">
  <h6> Message d'acceuil </h6>
  <div class="jumbotron msgacc col-md-11 border border-info" style="height:130px;background-color:#FFFFFF;">
    <div class="container">
      <h1 class="display-4" style="position:relative;top:-40px;left:250px"><?=$param[0]->msgacueille?></h1>
    </div>
  </div>
    <div class="form-group col-md-11">
      <label for="inputmsg">Votre message</label>
      <textarea class="form-control formu1" id="inputmsg" rows="3" name="msgacueille" maxlength="10" ></textarea>
    </div>
</div>
<div class="col-md-12"style="position:relative ; top : 30px;">
  <h6> Image d'acceuil </h6>

  <div class="row">
  <div class="gallery " style="width:280px; height:150px; margin-right:50px;">
    <?php $img = explode('?',$param[0]->imgacueille);?>
      <img src="<?=$img[0]?>" alt="Image 1" width="280" height="150" style="width:278px; height:148px;">
  </div>
  <div class="gallery " style="width:280px; height:150px;margin-right:50px;">
      <img src="<?=$img[1]?>" alt="Image 2" width="300" height="200" style="width:278px; height:148px;">
  </div>
  <div class="gallery" style="width:280px; height:150px;margin-right:50px;">
      <img src="<?=$img[2]?>" alt="Image 3" width="300" height="200" style="width:278px; height:148px;">
  </div>
</div>
<div class="row">
<input type="file" name="imgac1" class="form-control col-md-3" value="Image 1" style="height: 45px;cursor:pointer;margin-right:50px;margin-left:-3px;">
<input type="file" name="imgac2" class="form-control col-md-3" value="Image 2" style="height: 45px;cursor:pointer;margin-right:50px;margin-left:-7px;">
<input type="file" name="imgac3" class="form-control col-md-3" value="Image 3" style="height: 45px;cursor:pointer;margin-right:60px;margin-left:-13px;">
</div>
<br><br>
<div style="position: relative;right: 5px; top:20px;" >
<div class="row">
  <div class="form-group col-md-4" >
    <select  class="form-control " name="diapo" >
      <option  value="oui" <?php if ($img[3]=='oui') {echo 'selected="selected"';}?>>Image unique</option>
      <option value="non" <?php if ($img[3]=='non') {echo 'selected="selected"';}?>>Diaporama</option>
    </select>
  </div>
  <div class="col-md-4">
    <small style="color:red;"> *Si vous choisissez image unique seule la 1ére image sera affichée </small>
  </div>
</div>
</div>

  <style>
  div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 250px;

  }

  div.gallery:hover {
      border: 1px solid #777;
  }

  div.gallery img {
      width: 100%;
      height: auto;
  }


  </style>
  <button type="submit" class="btn btn-info" style="margin-top:30px;position:relative;left:840px;"><i class="fa fa-check-circle"></i> Enregistrer </button>

</form>
</div>
</div>
<a href="?p=param"><button  class="btn btn-xl btn-default" href="index.html" style="margin-top:30px;position:relative;top:-38px;left:746px;"><i class="fa fa-arrow-circle-left"></i> Retour</button></a>
