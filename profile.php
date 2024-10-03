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
  </head>
  <body>
    <?php 
      include('templates/header.php');
    ?>

    <div class="history-orders-container">
      <a class="history-orders" href="history-orders.php">
        <div class="history-orders-title">История заказов</div>

        <div class="history-orders-icon">
          <img src="media/img/models-icon.svg" alt="" />
        </div>
      </a>
    </div>

    <div class="profile-container">
      <div class="profile-box">
        <div class="nickname-container">
          <div class="nickname-title">Никнейм</div>

          <div class="nickname-string">
            <div class="nickname-user">innocentioz</div>

            <a class="nickname-change-icon" href="">
              <img src="media/img/edit-icon.svg" alt="" />
            </a>
          </div>
        </div>

        <div class="password-container">
          <div class="password-title">Пароль</div>

          <div class="password-string">
            <div class="password-user">**********</div>

            <a class="password-change-icon" href="">
              <img src="media/img/edit-icon.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="exit-container">
      <a class="exit-profile" href="">
        <div class="exit-profile-title">Выйти</div>

        <div class="exit-profile-icon">
          <img src="media/img/models-icon.svg" alt="" />
        </div>
      </a>
    </div>

    <?php 
      include('templates/modals.php')
    ?>

    <?php 
      include('templates/footer.php')
    ?>

  </body>
</html>
