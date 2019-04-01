<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">

  <script type="text/javascript" src="<?= base_url(); ?>jquery.mobile/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>

</head>
<body>
  <div data-role="page" id="page1">
    <div data-role="header">
      <a href="index.php" data-icon="home">Inicio</a>
      <h1> <img src="images/leon.png" width="15%"> </h1>
      <a href="#" data-icon="grid">Login</a>

      <nav data-role="navbar">
        <ul>
          <li><a href="#page2">acerca</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">Sucursales</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </div>

    <div data-role="main">
      <div class="ui-content" style=" padding-left: 300px; padding-right: 300px;">
        <form class="" action="<?= base_url(); ?>index.php/login/mostrar" method="post" data-ajax="false">
          <center><input type="email" name="email" style="text-align:center" placeholder="E-mail"  required>
            <input type="password" name="pass" style="text-align:center" placeholder="Password" required>
            <button type="submit" name="button" style="width:30%">Ingresar</button>
          </center>
          </form>
        </div>
      </div>
      <div data-role="footer">

      </div>
    </div>

  </body>
  </html>
