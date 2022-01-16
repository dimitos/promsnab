<section class="first">
    <picture>
        <source srcset="/img/main-first-500.webp" media="(max-width: 500px)" type="image/webp" />
        <source srcset="/img/main-first-500.png" media="(max-width: 500px)" />
        <source srcset="/img/main-first.webp" type="image/webp" />
        <img class="image first__img"
            src="/img/main-first.png"
            width="759"
            height="720"
            alt="Производство труб в ППУ изоляции"
            decoding="async"/>
    </picture>
    <div class="first__container container">
        <h1 class="first__title title-1">Производство труб в ППУ изоляции</h1>
        <p class="first__text">Комплектующие теплотрасс, фасонные изделия</p>
        <div class="first__wr">
            <button class="btn first__button btn-blue js-request"
                data-h="Оставьте свои контактные данные и наш специалист свяжется с Вами"
                data-from='Кнопка "Оставить заявку" на первом экране'
                type="button">
                Оставить заявку
            </button>
            <div class="first__badge-wr">
                <div class="first__badge first__badge-1">
                    <picture>
                        <source srcset="/img/laurel-500.webp" media="(max-width: 500px)" type="image/webp" />
                        <source srcset="/img/laurel-500.png" media="(max-width: 500px)" />
                        <source srcset="/img/laurel.webp" type="image/webp" />
                        <img class="image first__badge-laurel"
                            src="/img/laurel.png"
                            width="191"
                            height="180"
                            alt="laurel"
                            decoding="async"/>
                    </picture>
                    <picture>
                        <source srcset="/img/made-kuban-500.webp" media="(max-width: 500px)" type="image/webp" />
                        <source srcset="/img/made-kuban-500.png" media="(max-width: 500px)" />
                        <source srcset="/img/made-kuban.webp" type="image/webp" />
                        <img class="image first__badge-img"
                            src="/img/made-kuban.png"
                            width="107"
                            height="107"
                            alt="badge"
                            decoding="async"/>
                    </picture>
                </div>
                <div class="first__badge first__badge-2">
                    <picture>
                        <source srcset="/img/laurel-500.webp" media="(max-width: 500px)" type="image/webp" />
                        <source srcset="/img/laurel-500.png" media="(max-width: 500px)" />
                        <source srcset="/img/laurel.webp" type="image/webp" />
                        <img class="image first__badge-laurel"
                            src="/img/laurel.png"
                            width="191"
                            height="180"
                            alt="laurel"
                            decoding="async"/>
                    </picture>
                    <picture>
                        <source srcset="/img/badge-500.webp" media="(max-width: 500px)" type="image/webp" />
                        <source srcset="/img/badge-500.png" media="(max-width: 500px)" />
                        <source srcset="/img/badge.webp" type="image/webp" />
                        <img class="image first__badge-img"
                            src="/img/badge.png"
                            width="144"
                            height="142"
                            alt="badge"
                            decoding="async"/>
                    </picture>
                </div>
            </div>
        </div>
        {$news = mysqli_fetch_array($data)}
        {$date = date_create($news['PS_PROP_NEWS_PUBLISH_DATE'])}
        {$img = trim($news['PS_PROP_NEWS_PHOTO_URLS'], " \" [,]\" ")}
        {$description = quill_decode($news['PS_PROP_NEWS_DESCRIPTION'])}
        <div class="ad news-data">
            <div class="news-text">{$description}</div>
            <div class="ad__img news-image" style="background-image: url('{$img}')">
                <div class="ad__title title-4 news-title">{$news["PS_PROP_NEWS_TITLE"]}</div>
            </div>
            <div class="ad__wr">
                <div class="ad__txt">
                    {mb_strimwidth($description, 0, 140, "...")}
                </div>
                <div class="ad__footer">
                    <div class="ad__date">{getDateRu(date_format($date, ' d.m.Y'))}</div>
                    <button class="link ad__link" type="button">
                        <span class="ad__link-txt">Подробнее</span>
                        <svg class="ad__link-arrow" width="41" height="8" viewBox="0 0 41 8"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.3536 4.35355C40.5488 4.15829 40.5488 3.84171 40.3536 3.64645L37.1716 0.464466C36.9763
                            0.269204 36.6597 0.269204 36.4645 0.464466C36.2692 0.659728 36.2692 0.976311 36.4645 1.17157L39.2929
                            4L36.4645 6.82843C36.2692 7.02369 36.2692 7.34027 36.4645 7.53553C36.6597 7.7308 36.9763 7.7308
                            37.1716 7.53553L40.3536 4.35355ZM0 4.5L40 4.5V3.5L0 3.5L0 4.5Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
