<footer class="footer">
    <div class="footer__container container">
        <div class="footer__wrapper">
            <div class="footer__item">
                <a href="#" class="link header__link-logo hash">
                    <img src="/img/svg/logo.svg" alt="Логотип компании ПромТеплоСнаб" width="170" height="76">
                </a>
            </div>
            <div class="footer__item">
                <ul class="menu__list">
                    <li class="menu__item hash"><a class="hash" href="#about">О предприятии</a></li>
                    <li class="menu__item hash"><a class="hash" href="#manufacture">Наше производство</a></li>
                    <li class="menu__item hash"><a class="hash" href="#product">Продукция</a></li>
                    <li class="menu__item hash"><a class="hash" href="#sertificate">Сертификаты</a></li>
                    <li class="menu__item hash"><a class="hash" href="#news">Новости</a></li>
                    <li class="menu__item hash"><a class="hash" href="#contact">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__item">
                <div class="footer__item-left">
                    <a href="tel:+79881234567" class="header__contacts-item header__contacts-place">
                        Краснодарский край
                    </a>
                    <a href="{$phone->link}" class="header__contacts-item header__contacts-phone">{$phone->title}</a>
                    <a href="{$email->link}" class="header__contacts-item header__contacts-mail">{$email->title}</a>
                </div>
                <div class="footer__item-right">
                    <button class="btn header__button btn-clear js-request" data-from='Кнопка "Перезвонить Вам?" в блоке "Контакты"' type="button">Перезвонить Вам?</button>
                </div>
            </div>
        </div>
    </div>
</footer>
