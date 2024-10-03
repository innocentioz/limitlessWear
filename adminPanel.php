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
      <div class="addCardsContainer">
        <div class="addCardsTitle">
          Добавить товар
        </div>

        <div class="addCardsForm">
          <input type="text" class="addTitleForCard" placeholder="Название товара">
          <input type="text" class="addPriceForCard" placeholder="Цена товара">

          <div class="addImage">
            <div class="addImageTitle">
              Загрузите изображения товара
            </div>
            <input type="file" name="image" id="" accept="image/*" multiple>
          </div>

          <div class="category-dropdown">
            <button onclick="showCategoryDropDown()" class="category-dropbtn">
              Выберите категорию товара
            </button>

            <div id="categoryDropDown" class="category-dropdown-content">
              <div class="category-dropdown-container">
                <a>
                  Обувь
                </a>
                <a>
                  Одежда
                </a>
                <a>
                  Аксесуары
                </a>
                <a>
                  Коллекции
                </a>
              </div>
            </div>
          </div>

          <div class="checkboxSizeContainer">
            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 35</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 36</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 37</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 38</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 39</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 40</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 41</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 42</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 43</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 44</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 45</label>
            </div>

            <div class="checkboxSizeBox">
              <input type="checkbox" name="size" id="size">
              <label for="size">RU 46</label>
            </div>
          </div>

          <div class="buttonSaveContainer">
            <form action="">
              <button class="buttonSaveCard">
                Добавить
              </button>
            </form>
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

    <script src="chunks/js/dropdowns.js"></script>
  </body>
</html>
