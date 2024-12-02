<?php
    $noticias = file_exists('noticias.json') ? json_decode(file_get_contents('noticias.json'), true) : [];
    if(!$noticias){
      $noticias = [];
  }

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
          <a class="blog-header-logo text-dark" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Globe</a>
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

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
        <a class="p-2 text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#"></a>
      </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?php echo htmlspecialchars($noticias[0]['titulo']); ?></h1>
        <p class="lead my-3"><?php echo htmlspecialchars($noticias[0]['subtitulo']); ?></p>
        <p class="lead mb-0"><a href="noticia.php?id=<?php echo $noticias[0]['id']?>"
            class="text-white font-weight-bold">Continuar Lendo</a></p>
      </div>
    </div>

    
    <?php 
    $contador = 0;
    foreach ($noticias as $noticia):
      
      if ($contador % 2  == 0) {
        echo "<div class=\"row mb-2\">";
      }
    ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="noticia.php?id=<?php echo $noticia['id']?>"><?php echo htmlspecialchars($noticia['titulo']); ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo htmlspecialchars($noticia['dataPost']); ?></div>
              <p class="card-text mb-auto"><?php echo htmlspecialchars($noticia['subtitulo']); ?></p>
              <a href="noticia.php?id=<?php echo $noticia['id']?>">Continuar lendo</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
              alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
              src="<?php echo htmlspecialchars($noticia['foto']); ?>"
              data-holder-rendered="true">
          </div>
        </div>

      
    <?php 
    
    if ($contador % 2  != 0) {
      echo "</div>";
    }
    $contador++;
    endforeach; 
  ?>
  
</body>
</html>

