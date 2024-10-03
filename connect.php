<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Limitless Wear - Магазин по продаже лимитированной одежды</title>
    <link rel="icon" href="media/img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/12377a8sd8as0d88asd.css" />
    <link rel="stylesheet" href="css/12512578129579183sads.css" />
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

    <content class="main-container">
      <div class="reg-auth-box">
        <div class="connect-container">
          <div class="authorization-container">
            <div class="auth-container-box">
              <div class="auth-title">Вход в аккаунт</div>

              <div class="auth-input">
                <div class="auth-login-input">
                  <input type="text" class="login-input" placeholder="Логин">
                  <div class="login-input-icon">
                    <img src="media/img/user-icon.svg" alt="" />
                  </div>
                </div>

                <div class="auth-password-input">
                  <input
                    type="password"
                    class="password-input"
                    placeholder="Пароль"
                  />
                  <div class="password-input-icon">
                    <img src="media/img/password-icon.svg" alt="" />
                  </div>
                </div>
              </div>

              <div class="connect-button">
                <button type="submit" class="auth-button">Войти</button>
              </div>
            </div>
          </div>
        </div>

        <div class="reg-container">
          <div class="registration-container">
            <div class="reg-container-box">
              <div class="reg-title">Не существует аккаунта?</div>

              <div class="reg-input">
                <div class="reg-login-input-container">
                  <input
                    type="text"
                    class="reg-login-input"
                    placeholder="Логин"
                  />
                  <div class="reg-input-icon">
                    <img src="media/img/user-icon-white.svg" alt="" />
                  </div>
                </div>

                <div class="reg-password-container">
                  <input
                    type="password"
                    class="reg-password-input"
                    placeholder="Пароль"
                  />
                  <div class="reg-password-input-icon">
                    <img src="media/img/password-icon-white.svg" alt="" />
                  </div>
                </div>
              </div>

              <div class="reg-button-container">
                <button type="submit" class="reg-button">
                  Зарегистрировать
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </content>

    <?php 
      include('templates/modals.php')
    ?>

    <?php 
      include('templates/footer.php')
    ?>
    
  </body>
</html>
