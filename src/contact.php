<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="contact" class="page">
  <section id="price" class="section">
    <div class="container">
      <div class="section__header page__header">
        <h1 class="section__title text-center">
          Контактные данные
        </h1>
      </div>
      <!-- /.section__header -->

      <div class="contact">
        <div class="row justify-content-center gy-5">
          <div class="order-sm-2 order-lg-0 col-12 col-sm-6 col-lg-4">
            <div class="contact__item">
              <img src="img/layout/page/contact/contact/1.svg" alt="" class="contact__icon">
              <div class="contact__content">
                <h3 class="contact__title">
                  Позвоните нам
                </h3>

                <p class="contact__text">
                  Есть вопросы? Мы поможем!
                </p>
              </div>
              <!-- /.contact__content -->

              <div class="contact__action">
                <div class="callback-list">
                  <div class="callback-list__item">
                    <a class="link link--icon" href="tel:+77777777777">
                      <img class="callback-list__icon" src="img/icons/contact/phone.svg" alt="">
                      <span class="link__text callback-list__text">+7 777 777 77 77</span>
                    </a>
                  </div>
                  <!-- /.callback-list__item -->
                </div>
              </div>
              <!-- /.contact__action -->
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-4 -->

          <div class="order-sm-1 order-lg-0 col-12 col-sm-6 col-lg-4">
            <div class="contact__item">
              <img src="img/layout/page/contact/contact/2.svg" alt="" class="contact__icon">
              <div class="contact__content">
                <h3 class="contact__title">
                  Напишите нам
                </h3>

                <p class="contact__text">
                  Идеи? Предложения?
                  <br>
                  Мы открыты для любых
                  <br>
                  вопросов!
                </p>
              </div>
              <!-- /.contact__content -->

              <div class="contact__action">
                <div class="callback-list">
                  <div class="callback-list__item">
                    <a class="link link--icon" href="mailto:info@pinewoodhomes.ru">
                      <img class="callback-list__icon" src="img/icons/contact/mail.svg" alt="">
                      <span class="link__text callback-list__text">info@pinewoodhomes.ru</span>
                    </a>
                  </div>
                  <!-- /.callback-list__item -->
                </div>
              </div>
              <!-- /.contact__action -->
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-4 -->

          <div class="order-sm-0 order-lg-0 col-12 col-sm-6 col-lg-4">
            <div class="contact__item">
              <img src="img/layout/page/contact/contact/3.svg" alt="" class="contact__icon">
              <div class="contact__content">
                <h3 class="contact__title">
                  Закажите звонок
                </h3>

                <p class="contact__text">
                  Мы перезвоним Вам
                  <br>
                  в ближайшее время!
                </p>
              </div>
              <!-- /.contact__content -->

              <div class="contact__action">
                <button class="button button-outline">Заказать звонок</button>
              </div>
              <!-- /.contact__action -->
            </div>
            <!-- /.contact__item -->
          </div>
          <!-- /.col-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.contact -->
    </div>
    <!-- /.container -->

    <img src="img/common/forest.svg" alt="" class="contact__background">
  </section>

  <section id="map" class="section">
    <div class="container">
      <div class="map">
        <div class="map__address">
          <div class="callback-list">
            <div class="callback-list__item">
              <a class="link link--icon" href="" target="_blank">
                <img class="callback-list__icon" src="img/icons/contact/geo.svg" alt="">
                <span class="link__text callback-list__text">
                  Владимирская обл. г. Александров
                  <br>
                  ул. Ленина 13/7 БЦ Свечка, оф. 211
                </span>
              </a>
            </div>
            <!-- /.callback-list__item -->
          </div>
        </div>
        <!-- /.map__address -->

        <div class="map__wrapper">
          <iframe class="map__frame" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2ee8c0203e8011213a31527b420f11402ed2094b98b1d44e5451baad578b10f3&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
        </div>
        <!-- /.map__wrapper -->
      </div>
      <!-- /.map -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('layout/partials/footer.php') ?>