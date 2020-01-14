<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="public/favicon.ico" type="image/png-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rh-Lab : Gestion De Ressources Humaines</title>
  <!-- Bootstrap core CSS-->
  <link href="app/views/templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="app/views/templates/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="app/views/templates/fontawesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="app/views/templates/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="app/views/templates/css/sb-admin.css" rel="stylesheet">
    <script src="app/views/templates/vendor/jquery/jquery.min.js"></script>
    <script src="app/views/templates/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top binks" id="mainNav">
  <style>
  .sup { /** couleur de la barre sup */

    <?php if($param[0]->theme == '343a40' ) $col = '868e95';
elseif ($param[0]->theme == '005205' /*vert1*/) $col = '499866';
elseif ($param[0]->theme == '152C55' /*bleu1*/) $col = '50668F';
elseif ($param[0]->theme == '5D0D45' /*violet*/ ) $col = '9E4B85';
elseif ($param[0]->theme == 'FFFB86' /*jaune*/ ) $col = 'BAB62E';
elseif ($param[0]->theme == '791114' /*rouge*/ ) $col = 'CF6467';
elseif ($param[0]->theme == 'FD8D90' /*rose*/ ) $col = 'E45F62';
elseif ($param[0]->theme == '1B596D' /*indigo*/ ) $col = '4E8597';
elseif ($param[0]->theme == '9C2245' /*magenta*/ ) $col = 'B73E61';
elseif ($param[0]->theme == 'FFB874' /*orange*/ ) $col = 'DF9249';
elseif ($param[0]->theme == '0D5929' /*vert2*/ ) $col = '469664';
elseif ($param[0]->theme == 'FEFEF6' /*blanc*/ ) $col = '868e95';



?>
     background:#<?=$col?>;
     width: 1400px;
     position: relative;
     right: 16px;
     height: 56px;
   }
  .binks /* taille de la barre sup*/
   {
     height: 56px;
   }
  </style>

  <style>
     @media (min-width: 992px) {
       #mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
         background: #<?=$param[0]->theme?>;
       }
     }
  </style>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <style>
      .navbar-collapse{
        min-height: none;
        height: 20px;
            }
      </style>
      <ul class="navbar-nav navbar-sidenav " id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Acceuil" >
          <a class="nav-link nani"  href="?p=home">
            <i class="fa fa-fw fa-home fa-2x" ></i>
            <span class="nav-link-text">Accueil</span>
          </a>

        </li>
        <li class="nav-item "  data-toggle="tooltip" data-placement="right" title="GestionAd" >
          <a class="nav-link nani" href="?p=administration">
            <i class="fa fa-fw fa-address-card fa-2x "></i>
            <span class="nav-link-text">Gestion Administrative</span>
          </a>
        </li>
        <li class="nav-item"  data-toggle="tooltip" data-placement="right" title="Recrutements" >
          <a class="nav-link nani" href="?p=recrutement">
            <i class="fa fa-fw fa-handshake fa-2x "></i>
            <span class="nav-link-text">Recrutements</span>
          </a>
        </li>
        <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Annuaire" >
          <a class="nav-link nani" href="?p=annuaire">
            <i class="fa fa-fw fa-phone fa-2x "></i>
            <span class="nav-link-text">Annuaire</span>
          </a>
        </li>

        <?php

        if ($_SESSION['type']=='admin')
        {?>
        <li class="nav-item "  data-toggle="tooltip" data-placement="right" title="Parametres" >
          <a class="nav-link nani" href="?p=param">
            <i class="fa fa-fw fa-cogs fa-2x "></i>
            <span class="nav-link-text">Paramètres</span>
          </a>
        </li>
    <?php  }?>

      </ul>

      <img src="<?=$param[0]->logo?>" alt="Avatar"  class="avatar">
      <style>
      .avatar
      {
      position: relative;
      right: 16px;
      vertical-align: middle;
      width: 123px;
      height: 93px;
      margin: 0;
      padding: 0;
      border-bottom-right-radius: 15px;
      }
      </style>
      <div class="sup">
      <ul class="navbar-nav ml-auto">
            <style>

            .ml-auto /** position de l'identifiant */
            {
              position: relative;
              left : 1035px;
              top: 9px;
            }
            </style>
              <a href="?p=manuel" target="_blank"  class="nav-link" style="cursor:pointer; position:relative; left:-10px;top:1px;"><i class="fa fa-fw fa-info-circle"></i></a>
        <li class="nav-item dropdown">
          <a class="nav-link" id="deroul">
            <i class="fa fa-fw fa-user"></i><?=$_SESSION['identifiant']?></a>
            <div class="dropdown-content">
              <a href="#" data-toggle="modal" data-target="#exampleModal2"data-backdrop="static" data-keyboard="false"><i class="fa fa-fw fa-key"></i>Confidentialité</a>
              <a href="#" data-toggle="modal" data-target="#exampleModal"data-backdrop="static" data-keyboard="false"><i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
            </div>
        </li>
      </ul>
    </div>

</div>
  </nav>
</div>
  <div class="content-wrapper ">
    <style>
    .content-wrapper
    {
      background-color: #EEEDED;
    }
    </style>

  <div class="interne">

    <?=$content?>

</div>

</div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small> Copyright © Equipe 19 </small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Voulez vous vous déconnecter ?</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Appuyer sur le bouton déconnexion si vous voulez vous déconnecter</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-info" href="?p=deconnexion">Déconnexion</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Confidentialité</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <h6 style="position:relative; left: 150px;"> Modifier identifiant</h6>
            <form class="form-control" id="modal_post_id" method="post" action="javascript:void(0)">
              <div class="form-group">
                <label for="changeid">Nouvel identifiant</label>
                <input type="text" class="form-control" id="changeid" required></input>
              </div>
              <button type="submit" class="btn btn-info" style="position:relative;left:340px;">Enregistrer</button>
            </form>
            <h6 style="position:relative; left: 150px;margin-bottom:10px;margin-top:10px;"> Modifier mot de passe </h6>

            <form class="form-control" id="modal_post_mdp"  method="post" action="javascript:void(0)">
            <div class="form-group">
              <label for="changemdp">Ancien mot de passe</label>
              <input type="password" class="form-control" id="changemdp" required ></input>
          </div>
          <div class="form-group ">
            <label for="newemdp">Nouveau mot de passe</label>
            <input type="password" class="form-control" id="newmdp" ></input>
        </div>
        <div class="form-group ">
          <label for="rnewmdp">Retapez mot de passe</label>
          <input type="password" class="form-control" id="rnewmdp" required ></input>
      </div>
      <button type="submit" class="btn btn-info" style="position:relative;left:340px;"> Enregistrer </button>
      </form>
          </div>

        </div>
      </div>
    </div>


    <script src="app/views/templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="app/views/templates/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="app/views/templates/vendor/chart.js/Chart.min.js"></script>
    <script src="app/views/templates/vendor/datatables/jquery.dataTables.js"></script>
    <script src="app/views/templates/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="app/views/templates/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="app/views/templates/js/sb-admin-datatables.min.js"></script>
    <script src="app/views/templates/js/sb-admin-charts.min.js"></script>

    <script type="text/javascript" src="app/views/templates/js/modal_post.js"></script>

</body>

</html>
