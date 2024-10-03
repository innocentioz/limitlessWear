<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Limitless Wear - Магазин по продаже лимитированной одежды</title>
    <link rel="icon" href="media/img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/12377a8sd8as0d88asd.css" />
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
      <div class="payment-container">
        <div class="paymentTitle">Оплата</div>

        <div class="accordionContainer">
          <button class="accordion">Способы возврата</button>
          <div class="panel">
            <p>
              *Если вы считаете, что вам пришел товар с браком или товар
              ненадлежащего качества, свяжитесь с нами по почте
              SUPPORT@STEPANBATALOV.COM. Приложите к обращению фото и подробное
              описание вашей проблемы, наша команда свяжется с вами и мы
              обязательно решим этот вопрос в частном порядке *Обмен товара
              производится исключительно через возврат и оформление нового
              заказа
            </p>
          </div>

          <button class="accordion">Способы оплаты</button>
          <div class="panel">
            <p>
              Мы принимаем оплату банковскими картами: Visa, Mastercard, МИР.
              СБП и др.
            </p>
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

    <script src="chunks/js/accordion.js"></script>
  </body>
</html>
