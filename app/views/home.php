
   <div class="jumbotron msgacc col-md-8 border border-info" style="position:relative;left: 150px;margin-bottom: -20px;margin-top: -20px;height:100px;background-color:#FFFFFF;">
     <div class="container">
    <h1 class="display-4" style="position:absolute; left:270px; bottom:30px; "><?=$this->array[0]->msgacueille?></h1>



  </div>
</div>
<br><br>
      <?php $img = explode('?',$this->array[0]->imgacueille);?>
  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide border border-info"  style="height: 330px;width: 710px;position: relative;left:230px; top:30px; margin-bottom:50px;"data-ride="carousel">
<?php if ($img[3]=='non') {?>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
        <?php }?>

      <div class="carousel-inner">
        <div class="carousel-item active" style=" height:330px;">
          <img class="d-block w-100" src="<?=$img[0]?>" alt="First slide" style=" height:330px; width:1055px;">
        </div>
        <?php if ($img[3]=='non') {?>
        <div class="carousel-item" style=" height:330px;">
          <img class="d-block w-100" src="<?=$img[1]?>" alt="Second slide" style=" height:330px; width:1055px;">
        </div>
        <div class="carousel-item" style=" height:330px;">
          <img class="d-block w-100" src="<?=$img[2]?>" alt="Third slide" style=" height:330px; width:1055px;">
        </div>
      <?php }?>
      </div>
      <style>
      .carousel
      {
        width: 800px;
        position: relative;
        margin-left : 120px;
        top: -40px;
      }
    .carousel-item
    {
      height: 300px;

    }
      </style>
      <?php if ($img[3]=='non') {?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    <?php } ?>
    </div>
    <div class="card border border-info " style="width: 16rem; position : relative ;right:790px; height:400px;" >
    <img class="card-img-top" src="public/acc/excel.jpg" alt="Card image cap" style=" height:220px;">
    <div class="card-body">
      <h5 class="card-title">Télécharger l'annuaire</h5>
      <p class="card-text">Exporter vers Excel l'annuaire des employés</p>
      <a href="?p=anuxlsx" class="btn btn-info">Allons y</a>
    </div>
    </div>


  </div>

    <style>
    .msgacc
    {
      background-color: #ffffff ;


    }

    </style>


    <div class="row">
  <div class="card border border-info " style="width: 16rem; position : relative ; left : 40px; height:420px;" >
  <img class="card-img-top" src="public/acc/Pluk.jpg" alt="Card image cap" style=" height:220px;">
  <div class="card-body">
    <h5 class="card-title">Ajouter un candidat</h5>
    <p class="card-text">Ajouter une potentielle recrue pour votre entreprise</p>
    <a href="?p=addcandidat" class="btn btn-info">Allons y</a>
  </div>
</div>
<div class="card border border-info " style="width: 16rem; position : relative ; left : 150px; height:420px; ">
<img class="card-img-top" src="public/acc/hire.jpg" alt="Card image cap" style=" height:220px;">
<div class="card-body">
<h5 class="card-title">Nouvel employé</h5>
<p class="card-text">Ajouter une nouvelle fiche d'employé</p>
<a href="?p=addemploye" class="btn btn-info">Allons y</a>
</div>
</div>
<div class="card border border-info " style="width: 16rem; position: relative; left : 260px; height:420px;">
<img class="card-img-top" src="public/acc/conge.jpg" alt="Card image cap" style=" height:220px;">
<div class="card-body">
<h5 class="card-title">Ajouter un congé</h5>
<p class="card-text">Remplir la fiche de demande de congé et générer un nouveau titre de congés</p>
<a href="?p=calender&v=true" class="btn btn-info">Allons y</a>
</div>
</div>
</div>
