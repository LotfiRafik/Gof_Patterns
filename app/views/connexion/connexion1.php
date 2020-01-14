<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Connexion</title>
  <!-- Bootstrap core CSS-->
  <link href="app/views/templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="app/views/templates/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="app/views/templates/fontawesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="app/views/templates/css/sb-admin.css" rel="stylesheet">
  <link href="app/views/templates/bootstrapmatdes.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

</head>
      <style>
  .theback{
      background-image: url('public/img_conex/back.jpg');
      background-position: top;
          }
        </style>
<body class=" cd-full-width theback" >
  <div class=" container ">
    <style>
    .cardass{
      border-radius: 20px;
      opacity: 0.8;
      position: relative;
      top: 120px;
      max-width: none;
      max-height: none;
      width: 500px;
            }
      </style>
    <div class="card card-login mx-auto mt-5 cardass">
      <div class="card-header text-center">Connexion</div>
      <div class="card-body cardo">

        <form method="post" action="?p=connexion">
          <div class="form-group">
            <label for="exampleInputId" class="bmd-label-floating"><i class="fa fa-fw fa-user"></i></label>
            <input class="form-control" id="exampleInputId" type="text" aria-describedby="emailHelp" placeholder="Identifiant" name="identifiant" required >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="bmd-label-floating"><i class="fa fa-fw fa-key"></i></label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Mot de passe" name="password" required >
          </div>
          <?php
          if($error)
          {
            echo '<p style="color:red;">Mot de passe ou Identifiant Incorrect  </p>';
          }
          ?>
          <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="app/views/templates/vendor/jquery/jquery.min.js"></script>
  <script src="app/views/templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="app/views/templates/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
