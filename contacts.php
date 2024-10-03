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
      <div class="contacts-container">
        <div class="contacts-title">Наши контакты</div>

        <div class="contacts-information">
          <div class="contacts-data">
            <span>Мы находимся по адресу:</span>
            <span>ул. Энтузиастов, д.31</span>
            <span
              >Номер телефона:
              <a href="tel:79373968855">+7-937-396-88-55</a></span
            >
          </div>

          <div class="contactsGeoMap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1870.420219365623!2d47.184282671608045!3d56.11703376701737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1726899019824!5m2!1sru!2sru"
              width="400"
              height="350"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
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
