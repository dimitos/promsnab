/**
 * Mobile menu
 */
 const setHeightMobileMenu = () => $('.menu__content').css({'height': window.innerHeight});
 setHeightMobileMenu();
 $(window).resize(() => setHeightMobileMenu());

 $('.menu__btn').on('click', () => {
     $('.menu__content').css({'right': '0'});
     $('.menu').addClass('menu-opened');
     $('.page').css({'overflow': 'hidden'});
 })
 const closeMobileMenu = () => {
     $('.menu__content').css({'right': '-550px'});
     $('.menu').removeClass('menu-opened');
     $('.page').css({'overflow': 'initial'});
 }

 $('.menu__closer').on('click', () => closeMobileMenu());
 for (let i = 0; i < $('.menu__item').length; i++) {
     $('.menu__item').eq(i).on('click', () => closeMobileMenu());
 }
 for (let i = 0; i < $('.menu__contacts .header__contacts-item').length; i++) {
     $('.menu__contacts .header__contacts-item').eq(i).on('click', () => closeMobileMenu());
 }