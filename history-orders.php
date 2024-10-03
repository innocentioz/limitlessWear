<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Limitless Wear - Магазин по продаже лимитированной одежды</title>
    <link rel="icon" href="media/img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/12377a8sd8as0d88asd.css" />
    <link rel="stylesheet" href="css/12512578129579183sads.css" />
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php 
      include('templates/header.php');
    ?>

    <div class="history-orders-content">
      <div class="header-history-orders-content">
        <a
          href="profile.php"
          class="history-orders-back-to-profile"
          >Профиль
        </a>
        /
        <a href="history-orders.php" class="history-orders-link"
          >История заказов</a
        >
      </div>

      <div class="history-orders-content-title">История заказов</div>

      <div class="history-orders-content-desc">Вы еще ничего не заказывали</div>
    </div>
    
    <?php 
      include('templates/modals.php')
    ?>

    <?php 
      include('templates/footer.php')
    ?>
  </body>
</html>
