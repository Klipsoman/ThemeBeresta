<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon.png">
  <title>Beresta</title>
  <?php wp_head(); ?>
</head>

<body>

  <header class="header" id="header">
    <div class="header__wrapper">
      <div class="header__logo"><a href="#"><img class="header__img"
            src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a></div>
      <div class="header__contact">
        <a href="tel:89817871908" class="header__phone phone">+7 (981) 787-19-08</a>
        <div class="header__location location">Ленинградская область, Гатчинский район, коттеджный посёлок
          Поместье Бауэр, 78</div>
      </div>

      <div class="header__network">
        <a href="https://instagram.com/banyaberesta?igshid=OGQ5ZDc2ODk2ZA==" target="blank"><img
            src="<?= get_template_directory_uri(); ?>/img/icons/instagram.png" alt="instagram"></a>
        <a href="https://vk.com/banyaberesta" target="blank"><img
            src="<?= get_template_directory_uri(); ?>/img/icons/vk.png" alt="vk"></a>
      </div>

      <!--       <button class="header__reserve reserve-btn" data-reserve>Забронировать</button> -->

      <div class="burger" id="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="mobile-menu" id="mobile-menu">
        <nav class="mobile-menu__nav">
          <ul class="mobile-menu__menu">
            <li class="mobile-menu__item"><a href="#about" class="mobile-menu__link">О бане</a></li>
            <li class="mobile-menu__item"><a href="#pictures" class="mobile-menu__link">Галерея</a></li>
            <li class="mobile-menu__item"><a href="#price" class="mobile-menu__link">Цены</a></li>
            <li class="mobile-menu__item"><a href="#rules" class="mobile-menu__link">Правила</a></li>
          </ul>
        </nav>
        <div class="mobile-menu__info">
          <div class="mobile-menu__network header__network">
            <a href="https://instagram.com/banyaberesta?igshid=OGQ5ZDc2ODk2ZA==" target="blank"><img
                src="<?= get_template_directory_uri(); ?>/img/icons/instagram.png" alt="instagram"></a>
            <a href="https://vk.com/banyaberesta" target="blank"><img
                src="<?= get_template_directory_uri(); ?>/img/icons/vk.png" alt="vk"></a>
          </div>
          <a href="tel:89817871908" class="mobile-menu__phone header__phone phone">+7 (981) 787-19-08</a>
          <!--           <button class="mobile-menu__reserve header__reserve reserve-btn">Забронировать</button> -->
        </div>
      </div>
      <div class="mobile-menu__wrapper"></div>

      <nav class="header__nav menu" id="header__nav">
        <ul class="header__menu">
          <li class="header__item"><a href="#about" class="header__link">О бане</a></li>
          <li class="header__item"><a href="#pictures" class="header__link">Галерея</a></li>
          <li class="header__item"><a href="#price" class="header__link">Цены</a></li>
          <li class="header__item"><a href="#rules" class="header__link">Правила</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="main">
    <section class="inner" id="inner">
      <div class="container">
        <div class="inner__wrapper">
          <h1 class="inner__header"><span class="inner__beresta">Береста –</span> это уютная и комфортная
            семейная баня для вашего отдыха</h1>
          <div class="inner__items">
            <div class="inner__item"><img class="inner__icon icon"
                src="<?= get_template_directory_uri(); ?>/img/icons/sryb.png" alt="">
              <p class="inner__item text">Уникальная
                эко-баня из
                сруба с печью на дровах и просторным бассейном</p>
            </div>
            <div class="inner__item"><img class="inner__icon icon"
                src="<?= get_template_directory_uri(); ?>/img/icons/barbeq.png" alt="">
              <p class="inner__item text">Тихий
                внутренний
                дворик с беседкой и зоной барбекю</p>
            </div>
            <div class="inner__item"><img class="inner__icon icon"
                src="<?= get_template_directory_uri(); ?>/img/icons/location.png" alt="">
              <p class="inner__item text">Всего
                20
                км от
                КАДа по хорошей дороге</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="container">
        <div class="about__wrapper">

          <h2 class="about__title">О БАНЕ</h2>
          <div class="about__line"></div>

          <p class="about__description text"> Если вы устали от городской суеты и стрессов, и хотите окунуться
            в
            настоящую атмосферу уюта, то
            Береста - именно
            то, что вам нужно! <br>
            Наша баня из сруба дерева с дровяной печью и всеми удобствами создана для того, чтобы вы смогли
            насладиться
            моментами уединения и истинного отдыха в окружении природы. Вы сможете расслабиться и отдохнуть,
            наслаждаясь
            ароматом пропитанного деревом пара и теплом древесной печи. А приятная компания семьи и близких
            добавят этому
            опыту еще больше радости и удовольствия.
            Позвольте себе насладиться уникальным опытом истинного релакса. У нас вы найдете все необходимое
            для комфортного
            отдыха: просторную парную, комнату отдыха с удобной мебелью и современными удобствами и
            просторный бассейн. Мы
            гарантируем, что ваше время, проведенное в нашей бане, станет настоящим подарком для души и
            тела.
            Ждем вас с нетерпением!</p>
        </div>
      </div>

    </section>

    <section class="pictures" id="pictures">
      <div class="pictures__wrapper">

        <div class="pictures__box a picture">
          <img class="pictures__a" src="<?= get_template_directory_uri(); ?>/img/relax_zone/1DSC_0330.JPG"
            alt="relax_zone">
          <div class="pictures__title pictures__title--overlay">Зона отдыха</div>
        </div>

        <div class="pictures__box b picture">
          <img class="pictures__b" src="<?= get_template_directory_uri(); ?>/img/sauna/DSC_0284.JPG" alt="sauna">
          <div class="pictures__title pictures__title--overlay">Баня</div>
        </div>

        <div class="pictures__box c picture">
          <img class="pictures__c" src="<?= get_template_directory_uri(); ?>/img/bathroom/DSC_0267.JPG" alt="bathroom">
          <div class="pictures__title pictures__title--overlay">Помывочная и санузел</div>
        </div>

        <div class="pictures__box d picture">
          <img class="pictures__d" src="<?= get_template_directory_uri(); ?>/img/swimming_pool/DSC_0271.JPG"
            alt="swimming_pool">
          <div class="pictures__title pictures__title--overlay">Бассейн</div>
        </div>

        <div class="pictures__box e">
          <img class="pictures__e picture" src="<?= get_template_directory_uri(); ?>/img/territory/1DSC_0303.JPG"
            alt="territory">
          <div class="pictures__title">Территория</div>
        </div>

      </div>
    </section>

    <section class="price" id="price">
      <div class="container">
        <div class="price__wrapper">
          <h2 class="price__title">Стоимость за час аренды бани</h2>
          <div class="about__line"></div>

          <div class="price__schedulle schedulle">
            <div class="schedulle__item">
              <span></span>
              <span>пн-чт / пт-вс*</span>
            </div>
            <div class="schedulle__item">
              <span>день (9:00 - 17:00)</span>
              <span>2300 / 2500</span>
            </div>
            <div class="schedulle__item">
              <span>вечер (17:00 - 00:00)</span>
              <span>2500 / 3000</span>
            </div>
          </div>

          <div class="price__min-time text box">Минимальное время бронирования 3 часа. <br> При заказе от 4-х
            часов + 1 час
            в подарок.</div>

          <div class="price__holiday text">*в том числе праздничные дни и каникулы</div>

          <!--           <button class="price__reserve reserve-btn">Забронировать</button> -->
        </div>
      </div>
      </div>
    </section>

    <section class="rules" id="rules">
      <div class="container">
        <div class="rules__description">
          <h2 class="rules__title title">Правила посещения бани:</h2>

          <div class="rules__rule text"><img class="rules__icon icon"
              src="<?= get_template_directory_uri(); ?>/img/icons/rules.png" alt="">
            Регулярность посещения бани не должна превышать пределов разумного и
            здоровья. Важно слушать свои
            ощущения и не перегреваться, особенно для людей с сердечно-сосудистыми заболеваниями, беременным
            женщинам и лицам с другими медицинскими противопоказаниями к посещению бани
          </div>
          <div class="rules__rule text"><img class="rules__icon icon"
              src="<?= get_template_directory_uri(); ?>/img/icons/rules.png" alt="">
            В бане строго запрещено курение. Курение может представлять угрозу
            здоровью и безопасности людей,
            а
            также способствовать возникновению пожара. Пожалуйста, соблюдайте это правило во избежание
            неприятных
            последствий
          </div>
          <div class="rules__rule text"><img class="rules__icon icon"
              src="<?= get_template_directory_uri(); ?>/img/icons/rules.png" alt="">
            Употребление спиртного, даже слабоалкогольного, категорически запрещено
            при посещении бани
          </div>
          <div class="rules__rule text"><img class="rules__icon icon"
              src="<?= get_template_directory_uri(); ?>/img/icons/rules.png" alt="">
            Перед посещением бани рекомендуется принять душ. Это поможет очистить
            кожу и улучшит процесс
            потоотделения во время парения
          </div>
          <div class="rules__rule text"><img class="rules__icon icon"
              src="<?= get_template_directory_uri(); ?>/img/icons/rules.png" alt="">
            Во избежание возможных травм и постоянного наблюдения за соблюдением
            правил безопасности, детям
            необходимо находиться в бане под присмотром взрослых
          </div>

        </div>
      </div>
    </section>

    <section class="map">
      <div class="map__wrapper">

        <h2 class="map__title title">Легкий путь к отдыху</h2>
        <p class="map__description text">Дорога из центра Санкт-Петербурга на автомобиле займёт всего 60 минут
          без пробок, на общественном транспорте – около 90 минут. Расстояние от КАДа всего 16 км.</p>

        <p class="map__location">Ленинградская область, Гатчинский район, коттеджный посёлок
          Поместье Бауэр, 78</p>

        <p class="map__description text">Координаты для навигатора <b>59.675618, 30.102779</b></p>

        <iframe
          src="https://yandex.ru/map-widget/v1/?um=constructor%3A3e1ec137c07a577e9b28a85d22fddcc0195e17c1033bad2031e7c44b78c910e6&amp;source=constructor&scroll=false"
          width="100%" height="500" frameborder="0"></iframe>
        <!--         <iframe
          src="https://yandex.ru/map-widget/v1/?um=constructor%3Af0c91d1177b5cbd4f32e0b16a889537f5e46736a47db4810adfb5e9ec4f90e3b&amp;source=constructor&scroll=false"
          width="100%" height="500" frameborder="0"></iframe> -->
      </div>
    </section>

  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__phone">
          <p class="footer__title">ТЕЛЕФОН</p> <a href="tel:89817871908" class="foooter__phone phone">+7 (981)
            787-19-08</a>
        </div>
        <div class="footer__adress">
          <p class="footer__title">АДРЕС</p>
          <p class="footer__location location">Ленинградская область, Гатчинский район, коттеджный посёлок
            Поместье Бауэр, 59.675727, 30.102175</p>
        </div>

        <div class="footer__network">
          <p class="footer__title">СОЦИАЛЬНЫЕ СЕТИ</p>
          <a href="https://instagram.com/banyaberesta?igshid=OGQ5ZDc2ODk2ZA==" target="blank"><img
              src="<?= get_template_directory_uri(); ?>/img/icons/instagram.png" alt="instagram"></a>
          <a href="https://vk.com/banyaberesta" target="blank"><img
              src="<?= get_template_directory_uri(); ?>/img/icons/vk.png" alt="vk"></a>
        </div>
      </div>
      <nav>
        <ul class="footer__menu">
          <li class="footer__item"><a href="#about" class="footer__link">О бане</a></li>
          <li class="footer__item"><a href="#pictures" class="footer__link">Галерея</a></li>
          <li class="footer__item"><a href="#price" class="footer__link">Цены</a></li>
          <li class="footer__item"><a href="#rules" class="footer__link">Правила</a></li>
        </ul>
      </nav>
      <div class="footer__copy text">
        © 2023 Beresta. Все права защищены. При копировании материалов сайта необходима ссылка на источник.
      </div>
    </div>
  </footer>

  <div class="modal-form" id="modal-form">
    <div class="modal-form__body">
      <div class="modal-form__cancel-btn" id="modal-form__cancel-btn"></div>
      <div class="modal-form__title">Оставить заявку</div>
      <?= 
       do_shortcode('[contact-form-7 id="c90b2e1" title="Форма бронирования"]'); 
      // do_shortcode('[contact-form-7 id="181e99f" title="Контактная форма 1"]'); if local server   
       ?>
      <div style="color: #FFF;">
        Оператор свяжется с Вами для подтверждения выбранного времени посещения
      </div>
      <!--       <form class="modal-form__form" action="">
        <fieldset class="modal-form__fieldset">
          <input class="modal-form__input" type="text" name="name" placeholder="Имя">
        </fieldset>
        <fieldset class="modal-form__fieldset">
          <input class="modal-form__input" type="text" name="phone" placeholder="Телефон">
        </fieldset>
        <fieldset class="modal-form__fieldset">
          <input class="modal-form__button" type="submit" value="Отправить">
        </fieldset>
      </form> -->
    </div>
  </div>

  <div class="modal-gallery" id="modal-gallery">
    <div class="modal-gallery__body">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php 
            require_once ABSPATH . 'wp-admin/includes/file.php';

            $galleryNames = array(
              0 => 'bathroom',
              1 => 'relax_zone',
              2 => 'sauna',
              3 => 'territory',
              4 => 'swimming_pool',
            );
            foreach ($galleryNames as $name) {
              
              $files = list_files( TEMPLATEPATH . "/img" . '/' . $name, 1 );
              
              foreach ($files as $file) {
              $strPath = explode('/', $file)[9] . '/' .  explode('/', $file)[10] . '/' . explode('/', $file)[11];
              // $strPath = explode('/', $file)[4] . '/' .  explode('/', $file)[5] . '/' . explode('/', $file)[6]; - if local server
            ?>
          <div class="swiper-slide">
            <img src="<?= get_template_directory_uri(); ?>/<?= $strPath; ?>" alt="<?= $name; ?>" loading="lazy">
          </div>
          <?php
            }
          }
          ?>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>

</html>