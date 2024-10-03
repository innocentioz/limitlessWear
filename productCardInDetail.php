<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limitless Wear - Магазин по продаже лимитированной одежды</title>
    <link rel="icon" href="media/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/12377a8sd8as0d88asd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
      include('templates/header.php');
    ?>

    <content class="main-container">

        <container class="shoes-container"> 

            <div class="header-catalog-content">
                <a href="index.php" class="catalog-to-back">Каталог </a> / <a href="all_shoes.php" class="shoes-list">Обувь</a> / <a href="" class="catalog-shoes-title">Nike Air Jordan 1 High OG Spider-Man Across the Spider-Verse Kids</a>
            </div>

           <div class="shoes-detail-info-container">
              <div class="shoes-image-slider">
                <a class="shoes-arrow-image-back" onclick="prevSlide()">
                  <img src="media/img/arrow.svg" alt="">
                </a>

                <div class="shoes-image-block">

                  <button class="addToFavoriteBtn">
                    <!-- <svg width="32" height="29" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.1003 0C16.7293 0 18.0976 0.54932 19.2052 1.64796C20.3129 2.7466 20.8668 4.08759 20.8668 5.67092C20.8668 6.44643 20.7039 7.23002 20.3781 8.02169C20.0523 8.81335 19.6939 9.51616 19.303 10.1301C18.912 10.7441 18.2523 11.5357 17.3238 12.5051C16.3953 13.4745 15.6134 14.2581 14.9781 14.8559C14.3428 15.4537 13.3248 16.3665 11.9239 17.5944L10.4089 18.9515L8.89403 17.6429C7.52572 16.3827 6.51577 15.4537 5.8642 14.8559C5.21262 14.2581 4.42258 13.4745 3.49408 12.5051C2.56559 11.5357 1.90586 10.7441 1.51492 10.1301C1.12397 9.51616 0.773748 8.81335 0.464249 8.02169C0.15475 7.23002 0 6.44643 0 5.67092C0 4.08759 0.553841 2.7466 1.66152 1.64796C2.7692 0.54932 4.12123 0 5.71759 0C7.60717 0 9.17095 0.727041 10.4089 2.18112C11.6469 0.727041 13.2107 0 15.1003 0ZM10.5067 16.0918C12.1031 14.6701 13.2677 13.6118 14.0008 12.9171C14.7338 12.2224 15.5401 11.3903 16.4198 10.4209C17.2994 9.45153 17.9102 8.60332 18.2523 7.87628C18.5944 7.14924 18.7654 6.41412 18.7654 5.67092C18.7654 4.63691 18.4152 3.78061 17.7148 3.10204C17.0143 2.42347 16.1428 2.08418 15.1003 2.08418C14.3184 2.08418 13.5772 2.31037 12.8768 2.76276C12.1764 3.21514 11.6795 3.79677 11.3863 4.50765H9.43158C9.17095 3.79677 8.69041 3.21514 7.98997 2.76276C7.28952 2.31037 6.53206 2.08418 5.71759 2.08418C4.67507 2.08418 3.81173 2.42347 3.12757 3.10204C2.44342 3.78061 2.10134 4.63691 2.10134 5.67092C2.10134 6.41412 2.26423 7.14924 2.59002 7.87628C2.91581 8.60332 3.52666 9.45153 4.42258 10.4209C5.3185 11.3903 6.13297 12.2224 6.866 12.9171C7.59902 13.6118 8.74743 14.6701 10.3112 16.0918L10.4089 16.1888L10.5067 16.0918Z" fill="#9B9B9B">
                    </svg> -->

                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="32" height="32" rx="8" fill="url(#paint0_linear_60_200)">
                      <g clip-path="url(#clip0_60_200)">
                      <g filter="url(#filter0_d_60_200)">
                      <path d="M19.6567 11.6207C19.8394 11.4363 20.0876 11.3318 20.3471 11.3299C20.6066 11.3279 20.8563 11.4288 21.0416 11.6105C21.227 11.7921 21.3329 12.0398 21.3362 12.2993C21.3395 12.5588 21.24 12.809 21.0594 12.9954L15.8327 19.5294C15.7429 19.626 15.6346 19.7036 15.5141 19.7575C15.3937 19.8114 15.2636 19.8404 15.1317 19.8429C14.9998 19.8454 14.8687 19.8213 14.7463 19.772C14.6239 19.7227 14.5127 19.6492 14.4194 19.556L10.954 16.092C10.7699 15.9078 10.6665 15.6579 10.6665 15.3975C10.6666 15.137 10.7701 14.8872 10.9544 14.703C11.1386 14.5189 11.3885 14.4155 11.6489 14.4155C11.9094 14.4156 12.1592 14.5191 12.3434 14.7034L15.084 17.4447L19.6307 11.6514C19.639 11.6408 19.6479 11.6308 19.6574 11.6214L19.6567 11.6207Z" fill="white">
                      </g>
                      </g>
                      <defs>
                      <filter id="filter0_d_60_200" x="10.6665" y="11.3298" width="10.6698" height="10.5132" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix">
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                      <feOffset dy="2">
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0">
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_60_200">
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_60_200" result="shape">
                      </filter>
                      <linearGradient id="paint0_linear_60_200" x1="16" y1="0" x2="16" y2="32" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#89F09C">
                      <stop offset="1" stop-color="#3CC755">
                      </linearGradient>
                      <clipPath id="clip0_60_200">
                      <rect width="10.6667" height="10.6667" fill="white" transform="translate(10.6667 10.6667)">
                      </clipPath>
                      </defs>
                      </svg>
                      
                  </button>

                  <img id="slider-image" src="media/img/NikeAirJordan1SpiderMan/1.png" alt="">
                </div>

                <a class="shoes-arrow-image-next" onclick="nextSlide()">
                  <img src="media/img/arrow.svg" alt="">
                </a>
              </div>

              <div class="shoes-detail-desc-container">
                <div class="shoes-desc-title">
                  Nike Air Jordan 1 High OG Spider-Man Across the Spider-Verse Kids
                </div>

                <div class="shoes-desc-price">
                  33.000 руб.
                </div>

                <div class="shoes-size-container">
                  <div class="shoes-size">
                    RU 35
                  </div>

                  <div class="shoes-size">
                    RU 36
                  </div>

                  <div class="shoes-size">
                    RU 37
                  </div>

                  <div class="shoes-size">
                    RU 38
                  </div>

                  <div class="shoes-size">
                    RU 39
                  </div>

                  <div class="shoes-size">
                    RU 40
                  </div>

                  <div class="shoes-size">
                    RU 41
                  </div>

                  <div class="shoes-size">
                    RU 42
                  </div>

                  <div class="shoes-size">
                    RU 43
                  </div>

                  <div class="shoes-size">
                    RU 44
                  </div>

                  <div class="shoes-size">
                    RU 45
                  </div>

                  <div class="shoes-size">
                    RU 46
                  </div>
                </div>

                <button class="shoes-add-to-basket">
                  <div class="shoes-add-size">
                    RU 42
                  </div>

                  <div class="shoes-add-line">
                  </div>

                  <div class="shoes-add-to-basket-title">
                    Добавить в корзину
                  </div>
                </button>
              </div>
           </div>

           <div class="tabs-container">
              <div class="tab-container">
                <button class="tablinks" onclick="openTab(event, 'shippingMethod')">СПОСОБЫ ДОСТАВКИ</button>
                <button class="tablinks" onclick="openTab(event, 'returnPolicy')">СПОСОБЫ ВОЗВРАТА</button>
                <button class="tablinks" onclick="openTab(event, 'paymentMethod')">СПОСОБЫ ОПЛАТЫ</button>
                <div id="underline"></div> <!-- Подчеркивание -->
              </div>
              
              <div id="shippingMethod" class="tabContent">
                  <div class="tabContentColumn">
                    Мы работаем над тем, чтобы наши клиенты были самыми счастливыми, поэтому стараемся доставлять заказы максимально быстро и комфортно для Вас. 

                    <span>Сейчас доступны следующие варианты доставки:</span>
      
                    <span style="color: #545454;">- доставка домой или в офис курьерской службой. </span> 
                  
                    Доставка осуществляется для всех заказов 
                  
                    <span style="color: #545454;"> 
                      - Доставка курьерской службой производится в рамках сроков обозначенных после оформления заказа. Доставка осуществляется по России и СНГ 
                    </span>

                    <span style="color: #545454;">
                      - Доставка в любой регион России и стран СНГ осуществляется курьерской службой. Срок доставки: от 3х рабочих дней.
                    </span> 
                  </div>
                </div>
              
              <div id="returnPolicy" class="tabContent">
                <div class="tabContentColumn">
                  <span>
                    *Если вы считаете, что вам пришел товар с браком или товар ненадлежащего качества, свяжитесь с нами по почте SUPPORT@STEPANBATALOV.COM. Приложите к обращению фото и подробное описание вашей проблемы, наша команда свяжется с вами и мы обязательно решим этот вопрос в частном порядке  
                  </span>
                  <span>
                    *Обмен товара производится исключительно через возврат и оформление нового заказа
                  </span>
                </div>
              </div>
              
              <div id="paymentMethod" class="tabContent"> 
                <div class="tabContentColumn">
                  <span>Мы принимаем оплату банковскими картами:</span>
                  <span>Visa, Mastercard, МИР.</span>
                  <span>СБП и др.</span>
                </div>
              </div>
           </div>
          
          </div>
        </container>
    </content>
    
    <?php 
      include('templates/modals.php')
    ?>

    <?php 
      include('templates/footer.php')
    ?>

    <script src="chunks/js/slider.js"></script>
    <script src="chunks/js/tabs.js"></script>
    <script src="chunks/js/dropdowns.js"></script>
</body>
</html>