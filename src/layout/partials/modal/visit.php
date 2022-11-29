<div class="modal modal-callback micromodal-slide" id="modal-visit" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container" role="dialog">
      <div class="modal__header">
        <h3 class="modal__title">
          Посетить готовый объект
        </h3>

        <svg class="modal__close" data-micromodal-close width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path data-micromodal-close d="M2 2L24 24M24 2L2 24" stroke="#424242" stroke-width="4" stroke-linecap="round" />
        </svg>
      </div>

      <div class="modal__content">
        <form action="" data-target="callback" data-subject="Запись на услугу" data-additional="" class="modal__form form form-section">
          <div class="form__wrapper">
            <div class="input mb-3">
              <input placeholder="Ваше имя" autocomplete="off" type="text" name="user_name" class="input__field input__field--block">
              <span class="input__warning">Некорректное значение</span>
            </div>
            <!-- /.input -->

            <div class="input mb-4">
              <input placeholder="Ваш телефон" autocomplete="off" type="tel" name="user_email" class="input__field input__field--block">
              <span class="input__warning">Некорректное значение</span>
            </div>
            <!-- /.input -->

            <div class="input mb-4">
              <input placeholder="Ваш телефон" autocomplete="off" type="tel" name="user_phone" class="input__field input__field--block">
              <span class="input__warning">Некорректное значение</span>
            </div>
            <!-- /.input -->

            <button class="button button--arrow button-primary" type="submit" data-sending="Отправка...">Отправить заявку</button>
          </div>
          <!-- /.form__wrapper -->
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->