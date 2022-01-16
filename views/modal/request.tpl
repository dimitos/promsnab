<div class="intopModal intopModal-request">
    <button class="intopModal__close arcticmodal-close" type="button">
        <svg class="intopModal__icon intopModal__icon-close" aria-hidden="true" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.3333 8.55341L23.4467 6.66675L16 14.1134L8.55333 6.66675L6.66667 8.55341L14.1133 16.0001L6.66667 23.4467L8.55333 25.3334L16 17.8867L23.4467 25.3334L25.3333 23.4467L17.8867 16.0001L25.3333 8.55341Z"/>
        </svg>
    </button>
    <div class="intopModal__whiteContent">
        <section class="request">
            <h2 class="request__heading">Перезвонить Вам?</h2>
            <form class="request__form">
                <div class="request__fields">
                    <label class="request__field request__field-name">
                        <input class="request__input request__input-name" type="text" placeholder="Ваше имя">
                    </label>
                    <label class="request__field request__field-phone">
                        {* <input class="request__input request__input-phone" type="tel" inputmode="phone" placeholder="Ваш телефон"> *}
                        <input class="request__input request__input-phone" type="tel" placeholder="Ваш телефон">
                    </label>
                    <input class="request__input request__input-from" type="hidden">
                </div>
                <div class="request__conditions">
                    {*
                    <div class="request__condition request__condition-offer">
                        <input class="request__checkbox request__checkbox-condition request__checkbox-offer" type="checkbox" checked>
                        <span class="request__text request__text-condition">Принимаю условия <button class="request__link request__link-offer" data-modal="offer">Публичной оферты</button></span>
                    </div>
                    *}
                    <div class="request__condition request__condition-privacy">
                        <input class="request__checkbox request__checkbox-condition request__checkbox-privacy" type="checkbox" checked>
                        <span class="request__text request__text-condition">Согласен на обработку
                            <button class="request__link request__link-privacy" data-modal="privacy" type="button">персональных данных</button>
                        </span>
                    </div>
                </div>
                <button class="request__submit btn btn-blue" type="button">Оставить заявку</button>
            </form>
        </section>
    </div>
</div>
