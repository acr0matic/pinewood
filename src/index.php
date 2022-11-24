<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="home">
  <section id="hero" class="section">
    <div class="container">
      <div class="hero">
        <div class="row flex-column-reverse flex-md-row">
          <div class="col-12 col-md-6 position-relative" style="z-index: 2;">
            <div class="hero__content">
              <h1 class="hero__title section__title">
                Отделка
                <br>
                <span>деревянных домов</span>
                <br>
                в Москве и области
              </h1>

              <p class="hero__description">
                с оптимизацией сметы до 30%
                <br>
                и гарантией до 15 лет
              </p>

              <div class="hero__action">
                <button class="button button--big button-primary">РАСЧИТАТЬ СТОИМОСТЬ РАБОТ</button>
                <button class="button button--icon button-primary">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 2.75C4.98858 2.75 2.75 4.98858 2.75 7.75V20.25C2.75 23.0114 4.98858 25.25 7.75 25.25H20.25C23.0114 25.25 25.25 23.0114 25.25 20.25V7.75C25.25 4.98858 23.0114 2.75 20.25 2.75H7.75ZM0.25 7.75C0.25 3.60786 3.60786 0.25 7.75 0.25H20.25C24.3921 0.25 27.75 3.60786 27.75 7.75V20.25C27.75 24.3921 24.3921 27.75 20.25 27.75H7.75C3.60786 27.75 0.25 24.3921 0.25 20.25V7.75ZM14.6042 10.2366C13.8239 10.1209 13.0271 10.2541 12.327 10.6174C11.6268 10.9807 11.0591 11.5555 10.7045 12.26C10.3498 12.9646 10.2264 13.763 10.3517 14.5418C10.477 15.3205 10.8447 16.0399 11.4024 16.5976C11.9602 17.1554 12.6796 17.5231 13.4583 17.6484C14.2371 17.7737 15.0355 17.6502 15.7401 17.2956C16.4446 16.941 17.0194 16.3733 17.3827 15.6731C17.746 14.973 17.8792 14.1762 17.7635 13.3959C17.6455 12.6001 17.2747 11.8633 16.7057 11.2943C16.1368 10.7254 15.4 10.3546 14.6042 10.2366ZM11.1755 8.39834C12.3424 7.79288 13.6705 7.57076 14.9709 7.76359C16.2973 7.96029 17.5253 8.57838 18.4735 9.52657C19.4217 10.4748 20.0398 11.7028 20.2365 13.0292C20.4293 14.3296 20.2072 15.6577 19.6017 16.8246C18.9963 17.9914 18.0383 18.9377 16.864 19.5287C15.6898 20.1197 14.3591 20.3255 13.0612 20.1166C11.7633 19.9078 10.5642 19.295 9.63468 18.3654C8.70512 17.4358 8.09233 16.2368 7.88348 14.9389C7.67462 13.641 7.88035 12.3103 8.47138 11.1361C9.06241 9.9618 10.0087 9.00381 11.1755 8.39834ZM20.875 5.875C20.1846 5.875 19.625 6.43464 19.625 7.125C19.625 7.81536 20.1846 8.375 20.875 8.375H20.8875C21.5779 8.375 22.1375 7.81536 22.1375 7.125C22.1375 6.43464 21.5779 5.875 20.8875 5.875H20.875Z" fill="white" />
                  </svg>
                </button>
              </div>
              <!-- /.hero__action -->
            </div>
            <!-- /.hero__content -->
          </div>
          <!-- /.col-6 -->

          <div class="hero__offset col-12 col-md-6 col-xxl-5 px-xxl-0 position-relative">
            <div class="slider hero__slider">
              <div class="swiper slider-hero">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <picture class="hero__picture lazy">
                      <img class="image image--cover lazy__item" data-src="https://picsum.photos/1500?random=1" alt="">
                      <img class="preloader" src="img/misc/preloader.svg" alt="">
                    </picture>
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide">
                    <picture class="hero__picture lazy">
                      <img class="image image--cover lazy__item" data-src="https://picsum.photos/1500?random=2" alt="">
                      <img class="preloader" src="img/misc/preloader.svg" alt="">
                    </picture>
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide">
                    <picture class="hero__picture lazy">
                      <img class="image image--cover lazy__item" data-src="https://picsum.photos/1500?random=3" alt="">
                      <img class="preloader" src="img/misc/preloader.svg" alt="">
                    </picture>
                  </div>
                  <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->
              </div>
              <!-- /.swiper -->

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
            <!-- /.slider hero__slider -->

            <img class="hero__background" src="img/layout/page/index/hero/background.svg" alt="">
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.hero -->
    </div>
    <!-- /.container -->
  </section>

  <section id="process" class="section">
    <div class="process">
      <div class="container">
        <div class="section__header">
          <div class="row align-items-center">
            <div class="col-12 col-md-6">
              <h2 class="section__title">
                Прозрачный и понятный
                <br>
                процесс работы
              </h2>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6 col-lg-5 col-xxl-6 offset-lg-1 offset-xxl-0">
              <p class="section__description">
                Вы будете получать фото и видео
                <br>
                отчеты на всем протяжении работы
              </p>
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.section__header -->

        <div class="process__wrapper swiper swiper--bootstrap slider-process">
          <div class="row justify-content-between swiper-wrapper">
            <div class="col-6 col-lg-4 swiper-slide">
              <div class="process__item">
                <div class="process__step">
                  1
                </div>
                <!-- /.process__step -->

                <div class="process__wrapper">
                  <h3 class="process__title">Заявка</h3>
                  <p class="process__description">
                    Вы оставляете заявку на сайте или звоните нам по телефону
                  </p>
                </div>
                <!-- /.process__wrapper -->
              </div>
              <!-- /.process__item -->
            </div>
            <!-- /.col-4 -->

            <div class="col-6 col-lg-4 swiper-slide">
              <div class="process__item">
                <div class="process__step">
                  2
                </div>
                <!-- /.process__step -->

                <div class="process__wrapper">
                  <h3 class="process__title">Выезд на объект</h3>
                  <p class="process__description">
                    В удобное для вас время специалист приезжает на объект для замера и просчета
                  </p>
                </div>
                <!-- /.process__wrapper -->
              </div>
              <!-- /.process__item -->
            </div>
            <!-- /.col-4 -->

            <div class="col-6 col-lg-4 swiper-slide">
              <div class="process__item">
                <div class="process__step">
                  3
                </div>
                <!-- /.process__step -->

                <div class="process__wrapper">
                  <h3 class="process__title">Согласование сметы</h3>
                  <p class="process__description">
                    Перед началом работ вы знаете точную стоимость и сроки всех услуг
                  </p>
                </div>
                <!-- /.process__wrapper -->
              </div>
              <!-- /.process__item -->
            </div>
            <!-- /.col-4 -->

            <div class="col-6 col-lg-4 swiper-slide">
              <div class="process__item">
                <div class="process__step">
                  4
                </div>
                <!-- /.process__step -->

                <div class="process__wrapper">
                  <h3 class="process__title">Заключение договора</h3>
                  <p class="process__description">
                    Вы заключаете официальный договор, где прописаны все наши обязательства
                  </p>
                </div>
                <!-- /.process__wrapper -->
              </div>
              <!-- /.process__item -->
            </div>
            <!-- /.col-4 -->

            <div class="col-6 col-lg-4 swiper-slide">
              <div class="process__item">
                <div class="process__step">
                  5
                </div>
                <!-- /.process__step -->

                <div class="process__wrapper">
                  <h3 class="process__title">Процесс работы</h3>
                  <p class="process__description">
                    Мы выполняем работы, присылаем отчеты, а вы частями оплачиваете каждый принятый этап
                  </p>
                </div>
                <!-- /.process__wrapper -->
              </div>
              <!-- /.process__item -->
            </div>
            <!-- /.col-4 -->

            <div class="col-6 col-lg-4 swiper-slide">
              <div class="process__item">
                <div class="process__step">
                  6
                </div>
                <!-- /.process__step -->

                <div class="process__wrapper">
                  <h3 class="process__title">Сдача проекта</h3>
                  <p class="process__description">
                    Все работы проверяет отдел по контролю качества и только после этого вы принимаете объект
                  </p>
                </div>
                <!-- /.process__wrapper -->
              </div>
              <!-- /.process__item -->
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->

          <div class="swiper-scrollbar"></div>
        </div>
        <!-- /.process__wrapper -->
      </div>
      <!-- /.container -->

      <img src="img/layout/page/index/process/background.svg" alt="" class="process__background">
    </div>
    <!-- /.process -->
  </section>

  <section id="portfolio-recent" class="section">
    <div class="container">
      <div class="section__header">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <h2 class="section__title">
              Более <span>130 выполненых проектов</span>
              <br class="d-none d-xl-block">
              по всей
              <br class="d-none d-md-block d-xl-none">
              Москве и области
            </h2>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-6 col-lg-5 col-xxl-6 offset-lg-1 offset-xxl-0">
            <p class="section__description">
              По предварительной записи, Вы можете
              посетить объект,
              который уже готов
              или находится
              в процессе отделки
            </p>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.section__header -->

      <div class="portfolio-recent">
        <div class="portfolio-recent__slider slider">
          <div class="swiper slider-recent-portfolio">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card portfolio-card">
                  <picture class="portfolio-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=1" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="portfolio-card__content">
                    <h3 class="portfolio-card__title">
                      КП Золотые сосны
                      <br>
                      290 Название проекта
                      <br>
                      КП Золотые сосны
                    </h3>
                    <button class="portfolio-card__button button button--arrow button-primary">Смотреть проект</button>
                  </div>
                  <!-- /.portfolio-card__content -->
                </div>
                <!-- /.portfolio-card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="card portfolio-card">
                  <picture class="portfolio-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=2" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="portfolio-card__content">
                    <h3 class="portfolio-card__title">
                      КП Золотые сосны
                    </h3>
                    <button class="portfolio-card__button button button--arrow button-primary">Смотреть проект</button>
                  </div>
                  <!-- /.portfolio-card__content -->
                </div>
                <!-- /.portfolio-card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="card portfolio-card">
                  <picture class="portfolio-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=3" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="portfolio-card__content">
                    <h3 class="portfolio-card__title">
                      КП Золотые сосны
                      <br>
                      290 Название проекта
                    </h3>
                    <button class="portfolio-card__button button button--arrow button-primary">Смотреть проект</button>
                  </div>
                  <!-- /.portfolio-card__content -->
                </div>
                <!-- /.portfolio-card -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper slider-recent -->

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- /.portfolio-recent__slider slider -->

        <div class="portfolio-recent__action">
          <a href="" class="button button-outline">Смотреть все проекты</a>
        </div>
        <!-- /.portfolio-recent__action -->
      </div>
      <!-- /.portfolio-recent -->
    </div>
    <!-- /.container -->
  </section>

  <section id="service-recent" class="section">
    <div class="container">
      <div class="section__header">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <h2 class="section__title">
              Предоставляем
              <br>
              <span>широкий спектр услуг</span>
            </h2>
          </div>
          <!-- /.col-6 -->

          <div class="col-12 col-md-6 col-lg-5 col-xxl-6 offset-lg-1 offset-xxl-0">
            <p class="section__description">
              Несем ответственность
              <br>
              и предоставляем гарантию,
              <br>
              прописанную в официальном договоре
            </p>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.section__header -->

      <div class="service-recent">
        <div class="service-recent__slider slider">
          <div class="swiper slider-recent-service">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card service-card">
                  <picture class="service-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=4" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="service-card__content">
                    <h3 class="service-card__title">
                      КП Золотые сосны
                    </h3>

                    <p class="service-card__description">
                      Подготовка дома к покраске
                      и увеличение срока службы каркаса
                    </p>

                    <button class="service-card__button button button--arrow button-primary">Оставить заявку</button>
                  </div>
                  <!-- /.service-card__content -->
                </div>
                <!-- /.service-card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="card service-card">
                  <picture class="service-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=5" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="service-card__content">
                    <h3 class="service-card__title">
                      КП Золотые сосны
                    </h3>

                    <p class="service-card__description">
                      Подготовка дома к покраске
                      и увеличение срока службы каркаса
                    </p>

                    <button class="service-card__button button button--arrow button-primary">Оставить заявку</button>
                  </div>
                  <!-- /.service-card__content -->
                </div>
                <!-- /.service-card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="card service-card">
                  <picture class="service-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=6" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="service-card__content">
                    <h3 class="service-card__title">
                      КП Золотые сосны
                    </h3>

                    <p class="service-card__description">
                      Подготовка дома к покраске
                      и увеличение срока службы каркаса
                    </p>

                    <button class="service-card__button button button--arrow button-primary">Оставить заявку</button>
                  </div>
                  <!-- /.service-card__content -->
                </div>
                <!-- /.service-card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="card service-card">
                  <picture class="service-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=7" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="service-card__content">
                    <h3 class="service-card__title">
                      КП Золотые сосны
                    </h3>

                    <p class="service-card__description">
                      Подготовка дома к покраске
                      и увеличение срока службы каркаса
                    </p>

                    <button class="service-card__button button button--arrow button-primary">Оставить заявку</button>
                  </div>
                  <!-- /.service-card__content -->
                </div>
                <!-- /.service-card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="card service-card">
                  <picture class="service-card__picture lazy">
                    <img class="image image--cover lazy__item" data-src="https://picsum.photos/700?random=8" alt="">
                    <img class="preloader" src="img/misc/preloader.svg" alt="">
                  </picture>

                  <div class="service-card__content">
                    <h3 class="service-card__title">
                      КП Золотые сосны
                    </h3>

                    <p class="service-card__description">
                      Подготовка дома к покраске
                      и увеличение срока службы каркаса
                    </p>

                    <button class="service-card__button button button--arrow button-primary">Оставить заявку</button>
                  </div>
                  <!-- /.service-card__content -->
                </div>
                <!-- /.service-card -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper slider-recent -->

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- /.service-recent__slider slider -->

        <div class="service-recent__action">
          <a href="" class="button button-outline">Смотреть все услуги</a>
        </div>
        <!-- /.service-recent__action -->
      </div>
      <!-- /.service-recent -->
    </div>
    <!-- /.container -->
  </section>

  <section id="quiz" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title">
          Ответьте на <span>5 простых вопросов</span>
          <br>
          и получите расчеты по вашему объекту
        </h2>
      </div>
      <!-- /.section__header -->

      <div class="quiz">
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="quiz__content quiz-content">
              <form action="" data-target="quiz" data-subject="Рассчеты по объекту">
                <div class="quiz__slider swiper slider-quiz">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="swiper slider-quiz-inner">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="quiz-content__counter">
                              Вопрос 1 / 5
                            </div>
                            <!-- /.quiz-content__counter -->

                            <h3 class="quiz-content__title">Укажите площадь дома:</h3>
                            <div class="input">
                              <input placeholder="500 м2" autocomplete="off" type="number" name="quiz_area" class="input__field">
                              <span class="input__warning">Некорректное значение</span>
                            </div>
                            <!-- /.input -->
                          </div>
                          <!-- /.swiper-slide -->

                          <div class="swiper-slide">
                            <div class="quiz-content__counter">
                              Вопрос 2 / 5
                            </div>
                            <!-- /.quiz-content__counter -->

                            <h3 class="quiz-content__title">Укажите метериал дома:</h3>
                            <div class="row gy-4 gy-xxl-5">
                              <div class="col-6 col-sm-4">
                                <label class="checkbox checkbox--image" style="--image: url('../img/layout/section/quiz/content/material/1.jpg');">
                                  <input type="radio" name="material">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Клееный брус</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-6 col-sm-4">
                                <label class="checkbox checkbox--image" style="--image: url('../img/layout/section/quiz/content/material/2.jpg');">
                                  <input type="radio" name="material">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">
                                    Профилированный
                                    <br>
                                    брус
                                  </span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-6 col-sm-4">
                                <label class="checkbox checkbox--image" style="--image: url('../img/layout/section/quiz/content/material/3.jpg');">
                                  <input type="radio" name="material">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">
                                    Оцилиндрованное
                                    <br>
                                    бревно
                                  </span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-6 col-sm-4">
                                <label class="checkbox checkbox--image" style="--image: url('../img/layout/section/quiz/content/material/4.jpg');">
                                  <input type="radio" name="material">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Лафет</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-6 col-sm-4">
                                <label class="checkbox checkbox--image" style="--image: url('../img/layout/section/quiz/content/material/5.jpg');">
                                  <input type="radio" name="material">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Рубленное бревно</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.swiper-slide -->

                          <div class="swiper-slide">
                            <div class="quiz-content__counter">
                              Вопрос 3 / 5
                            </div>
                            <!-- /.quiz-content__counter -->

                            <h3 class="quiz-content__title">Есть ли у вас смета на внутреннюю отделку?</h3>
                            <div class="row gy-2 gy-sm-4 gy-xxl-5">
                              <div class="col-12 col-sm-6 col-xxl-4">
                                <label class="checkbox">
                                  <input type="radio" name="estimate">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Да, смета есть</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-12 col-sm-6 col-xxl-4">
                                <label class="checkbox">
                                  <input type="radio" name="estimate" checked>
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">У меня нет сметы</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->
                            </div>
                          </div>
                          <!-- /.swiper-slide -->

                          <div class="swiper-slide">
                            <div class="quiz-content__counter">
                              Вопрос 4 / 5
                            </div>
                            <!-- /.quiz-content__counter -->

                            <h3 class="quiz-content__title">Когда планируете начать работы по внутренней отделке?</h3>
                            <div class="row gy-2 gy-sm-4 gy-xxl-5">
                              <div class="col-12 col-sm-6 col-xxl-4">
                                <label class="checkbox">
                                  <input type="radio" name="deadline" checked>
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Как можно быстрее</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-12 col-sm-6 col-xxl-8">
                                <label class="checkbox">
                                  <input type="radio" name="deadline">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">В течение этого года</span>
                                </label>
                              </div>
                              <!-- /.col-8 -->

                              <div class="col-12 col-sm-6 col-xxl-4">
                                <label class="checkbox">
                                  <input type="radio" name="deadline">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">В течение месяца</span>
                                </label>
                              </div>
                              <!-- /.col-4 -->

                              <div class="col-12 col-sm-6 col-xxl-8">
                                <label class="checkbox">
                                  <input type="radio" name="deadline">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Пока нет точного плана</span>
                                </label>
                              </div>
                              <!-- /.col-8 -->
                            </div>
                          </div>
                          <!-- /.swiper-slide -->

                          <div class="swiper-slide">
                            <div class="quiz-content__counter">
                              Вопрос 5 / 5
                            </div>
                            <!-- /.quiz-content__counter -->

                            <h3 class="quiz-content__title">Когда планируете начать работы по внутренней отделке?</h3>
                            <div class="row gy-2 gy-sm-4">
                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Шлифовка и покраска</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Плиточные работы</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Отделка и устройство потолков, пола и стен</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Установка дверей и окон</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Прокладка инженерных систем</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Сантехнические услуги</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <label class="checkbox">
                                  <input type="checkbox" name="type">
                                  <span class="checkbox__mark"></span>
                                  <span class="checkbox__label">Все работы «под ключ»</span>
                                </label>
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <div class="input">
                                  <input placeholder="Свой вариант" autocomplete="off" type="text" name="type" class="input__field input__field--block">
                                  <span class="input__warning">Некорректное значение</span>
                                </div>
                                <!-- /.input -->
                              </div>
                              <!-- /.col-6 -->
                            </div>
                          </div>
                          <!-- /.swiper-slide -->

                          <div class="swiper-slide">
                            <div class="quiz-content__counter">
                              Остался последний шаг
                            </div>
                            <!-- /.quiz-content__counter -->

                            <h3 class="quiz-content__title">
                              Получите оптимизацию сметы
                              <br>
                              и точный план всех работ
                            </h3>

                            <div class="row">
                              <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                <div class="input">
                                  <input placeholder="Ваш телефон" autocomplete="off" type="tel" name="quiz_tel" class="input__field input__field--block">
                                  <span class="input__warning">Некорректное значение</span>
                                </div>
                                <!-- /.input -->
                              </div>
                              <!-- /.col-6 -->

                              <div class="col-12 col-sm-6">
                                <div class="input">
                                  <input placeholder="Ваша почта" autocomplete="off" type="email" name="quiz_email" class="input__field input__field--block">
                                  <span class="input__warning">Некорректное значение</span>
                                </div>
                                <!-- /.input -->
                              </div>
                              <!-- /.col-6 -->
                            </div>
                            <!-- /.row -->

                            <div class="quiz-content__action">
                              <button data-sending="Отправляем..." type="submit" class="button button--arrow button-primary">Получить рассчет</button>
                            </div>
                            <!-- /.quiz-content__action -->
                          </div>
                          <!-- /.swiper-slide -->
                        </div>
                        <!-- /.swiper-wrapper -->

                        <div class="quiz-control">
                          <button class="button button--arrow button-outline"><span>Назад</span></button>
                          <button class="button button--arrow button-primary"><span>Далее</span></button>
                        </div>
                        <!-- /.quiz-control -->
                      </div>
                      <!-- /.swiper slider-quiz-inner -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <div class="quiz-content__counter">
                        Остался последний шаг
                      </div>
                      <!-- /.quiz-content__counter -->

                      <h3 class="quiz-content__title">
                        Спасибо!
                      </h3>

                      <p class="quiz-content__text">
                        Наш менеджер свяжется с вами
                        <br>
                        в течении 15 минут
                      </p>
                    </div>
                    <!-- /.swiper-slide -->
                  </div>
                  <!-- /.swiper-wrapper -->

                  <div class="quiz-control hidden">
                    <button class="button button--arrow button-outline">Начать с начала</button>
                  </div>
                  <!-- /.quiz-control -->
                </div>
                <!-- /.swiper slider-quiz -->
              </form>
            </div>
            <!-- /.quiz__content quiz-content -->
          </div>
          <!-- /.col-7 -->

          <div class="col-12 col-lg-5">
            <div class="quiz__info quiz-info">
              <div class="quiz-info__top">
                <div class="quiz-info__author">
                  <picture class="quiz-info__avatar">
                    <img class="image image--cover" src="img/layout/section/quiz/info/avatar.jpg" alt="">
                  </picture>

                  <div>
                    <h4 class="quiz-info__name">Иванов Борис</h4>
                    <div class="quiz-info__role">Инженер проектов</div>
                  </div>
                </div>
                <!-- /.quiz-info__author -->

                <p class="quiz-info__about">
                  Здравствуйте, меня зовут Борис, и я помогу Вам понять, какой бюджет нужен для отделки вашего дома под ключ
                </p>
              </div>
              <!-- /.quiz-info__top -->

              <div class="quiz-info__content">
                <h3 class="quiz-info__title">Ответив на вопросы, Вы получите:</h3>
                <ul class="quiz-info__list">
                  <li>
                    <img src="img/layout/section/quiz/info/1.svg" alt="">
                    Ориентировочную стоимость
                  </li>

                  <li>
                    <img src="img/layout/section/quiz/info/2.svg" alt="">
                    Точную подборку проектов, исходя из ваших ответов,
                    либо предложим новый вариант
                  </li>

                  <li>
                    <img src="img/layout/section/quiz/info/3.svg" alt="">
                    Один из 3-х подарков
                    при заказе отделки у нас
                  </li>
                </ul>
              </div>
              <!-- /.quiz-info__content -->
            </div>
            <!-- /.quiz__info quiz-info -->
          </div>
          <!-- /.col-5 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.quiz -->
    </div>
    <!-- /.container -->

    <img class="quiz-background" src="img/layout/section/quiz/background.svg" alt="">
  </section>
</main>

<?php include_once('layout/partials/footer.php') ?>