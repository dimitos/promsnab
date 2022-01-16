<header class="header">
    <div class="header__container container">
        <a href="#" class="link header__link-logo hash">
            <img src="/img/svg/logo.svg" alt="Логотип компании ПромТеплоСнаб" width="170" height="76">
        </a>
        <div class="header__wr">
            <div class="header__item header__item-contacts">
                <div class="header__contacts">
                    <div class="header__contacts-item header__contacts-place">Краснодарский край</div>
                    <a href="{$phone->link}" class="header__contacts-item header__contacts-phone">{$phone->title}</a>
                    <a href="{$email->link}" class="header__contacts-item header__contacts-mail">{$email->title}</a>
                </div>
                <button class="btn header__button btn-clear js-request"
                    data-from='Кнопка "Оставить заявку" в шапке сайта'
                    type="button">
                    Перезвонить Вам?
                </button>
                <div class="menu__btn">
                    <div class="menu__btn-line"></div>
                    <div class="menu__btn-line"></div>
                    <div class="menu__btn-line"></div>
                </div>
            </div>
            <div class="header__item header__item-menu">
                <div class="menu">
                    <nav class="menu__content">
                        <div class="menu__closer">×</div>
                        <div class="menu__content-wr">
                            <ul class="menu__list">
                                <li class="menu__item"><a class="hash" href="#about">О предприятии</a></li>
                                <li class="menu__item"><a class="hash" href="#manufacture">Наше производство</a></li>
                                <li class="menu__item"><a class="hash" href="#product">Продукция</a></li>
                                <li class="menu__item"><a class="hash" href="#sertificate">Сертификаты</a></li>
                                <li class="menu__item"><a class="hash" href="#news">Новости</a></li>
                                <li class="menu__item"><a class="hash" href="#contact">Контакты</a></li>
                            </ul>
                            <div class="menu__contacts">
                                <div class="header__contacts-item header__contacts-place">Краснодарский край</div>
                                <a href="{$phone->link}" class="header__contacts-item header__contacts-phone">{$phone->title}</a>
                                <a href="{$email->link}" class="header__contacts-item header__contacts-mail">{$email->title}</a>
                                <button class="btn mob-menu__button btn-blue js-request"
                                    data-from='Кнопка "Перезвонить Вам?" в мобильном меню'
                                    type="button">
                                    Перезвонить Вам?
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
