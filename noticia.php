<?php 
require_once 'biblioteca_arquivo.php';

$id = $_GET['id'];
$noticia = pegarPeloId($id)

?>


<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.0/examples/blog/# -->
<html lang="en" foxified-44="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

  <!-- Bootstrap core CSS -->
  <link href="./Blog Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./Blog Template for Bootstrap_files/css" rel="stylesheet">
  <link href="./Blog Template for Bootstrap_files/blog.css" rel="stylesheet">
  <style type="text/css" id="operaUserStyle"></style>
  <script type="text/javascript" src="./Blog Template for Bootstrap_files/b50b7f30-3efc-40a4-958b-47c84a6ef83f"
    data-awssuidacr="7bd40001-4fe2-4f8e-b92a-9946065a504a"></script>
  <script type="text/javascript"
    src="./Blog Template for Bootstrap_files/afde4f0c-4096-4aeb-b345-d1aea539851b"></script>
  <style>
    .vue-notification-group {
      display: block;
      position: fixed;
      z-index: 5000
    }

    .vue-notification-wrapper {
      display: block;
      overflow: hidden;
      width: 100%;
      margin: 0;
      padding: 0
    }

    .notification-title {
      font-weight: 600
    }

    .vue-notification-template {
      display: block;
      box-sizing: border-box;
      background: white;
      text-align: left
    }

    .vue-notification {
      display: block;
      box-sizing: border-box;
      text-align: left;
      font-size: 12px;
      padding: 10px;
      margin: 0 5px 5px;
      color: #fff;
      background: #44A4FC;
      border-left: 5px solid #187FE7
    }

    .vue-notification.warn {
      background: #ffb648;
      border-left-color: #f48a06
    }

    .vue-notification.error {
      background: #E54D42;
      border-left-color: #b82e24
    }

    .vue-notification.success {
      background: #68CD86;
      border-left-color: #42a85f
    }

    .vn-fade-enter-active,
    .vn-fade-leave-active,
    .vn-fade-move {
      transition: all .5s
    }

    .vn-fade-enter-from,
    .vn-fade-leave-to {
      opacity: 0
    }
  </style>
  <style>
    .vue-notification-group {
      display: block;
      position: fixed;
      z-index: 5000
    }

    .vue-notification-wrapper {
      display: block;
      overflow: hidden;
      width: 100%;
      margin: 0;
      padding: 0
    }

    .notification-title {
      font-weight: 600
    }

    .vue-notification-template {
      display: block;
      box-sizing: border-box;
      background: white;
      text-align: left
    }

    .vue-notification {
      display: block;
      box-sizing: border-box;
      text-align: left;
      font-size: 12px;
      padding: 10px;
      margin: 0 5px 5px;
      color: #fff;
      background: #44A4FC;
      border-left: 5px solid #187FE7
    }

    .vue-notification.warn {
      background: #ffb648;
      border-left-color: #f48a06
    }

    .vue-notification.error {
      background: #E54D42;
      border-left-color: #b82e24
    }

    .vue-notification.success {
      background: #68CD86;
      border-left-color: #42a85f
    }

    .vn-fade-enter-active,
    .vn-fade-leave-active,
    .vn-fade-move {
      transition: all .5s
    }

    .vn-fade-enter-from,
    .vn-fade-leave-to {
      opacity: 0
    }
  </style>
  <link type="text/css" rel="stylesheet" href="./Blog Template for Bootstrap_files/css2">
  <link type="text/css" rel="stylesheet" href="./Blog Template for Bootstrap_files/css2">
</head>

<body>
  <div id="brk_yuan"></div>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php">Globe</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
              <circle cx="10.5" cy="10.5" r="7.5"></circle>
              <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="admin.php">Postar Noticia</a>
        </div>
      </div>
    </header>

   <h15><?php echo $noticia['dataPost'] ?></h15>
   <h1><?php echo $noticia['titulo'] ?></h1>
   <h2><?php echo $noticia['subtitulo'] ?></h2>
   <img src="<?php echo htmlspecialchars($noticia['foto']); ?>" alt="Girl in a jacket" width="1100" height="600">
   <h5><?php echo $noticia['texto_noticia']?></h5>
  
</body>
</html>

