<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Moretti Desantiego</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="../../../assets/css/codebase.min.css">
    <link rel="stylesheet" href="../../../assets/js/sweetalert2.min.css">
  </head>
  <body style = "padding-top: 20vh; background:#00000085; overflow: hidden;">
    <div class = "row">
      <div class = "col-lg-4"></div>
      <div class = "col-lg-4">
        <? if ( empty ( $_GET [ 'url' ] ) ): ?> 
        <div class="block">
          <div class="block-header block-header-default">
            <h3 class="block-title">Создания действия</h3>
          </div>
          <div class="block-content">
            <div class="mb-4">
              <label class="form-label" for="doText">Введите название действия</label>
              <input type="text" class="form-control" id="doText" placeholder="Действие">
            </div>
            <div class="mb-4">
              <label class="form-label" for="doUrl">Введите ссылка на картинку</label>
              <input type="text" class="form-control" id="doUrl" placeholder="url">
            </div>
            <div class="mb-4"><center><button class = "btn btn-success" onclick = "saveAction()">Создать действие</button></center></div>
          </div>
        </div>
        <? else: ?>
        <div style = "width: 100%;">
          <img src = "<?=$_GET [ 'url' ];?>" style = "width: 100%;">
        </div>
        <? endif; ?>
      </div>
      <div class = "col-lg-4"></div>
    </div>
    <script src="../../../assets/js/codebase.app.min.js"></script>
    <script src="../../../assets/js/sweetalert2.min.js"></script>
    <script>
      function saveAction() {
        let doText = document.getElementById('doText').value;

        if ( doText.length < 3 )
        {
          Swal.fire(
					  "Произошла ошибка",
					  "Введите текст действия подробнее!",
					  "error"
				  )
          return 1;
        }

        let doUrl = document.getElementById('doUrl').value;
        if ( doUrl.length != 0 && doUrl.length < 5 )
        {
          Swal.fire(
					  "Произошла ошибка",
					  "Введите ссылка на картинку!",
					  "error"
				  )
          return 1;
        }
        cef.set_focus(false);
        cef.emit('action:main', "create_action", doText, doUrl );
      }
    </script>
  </body>
</html>