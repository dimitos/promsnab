<section class="news">
<div class="scroll-top" id="news"></div>
    <div class="news__container container">
        <h2 class="news__title title-2">новости</h2>
        <div class="news-slider">
            <div class="slider">
                {foreach $data as $news}
                {$date = date_create($news['PS_PROP_NEWS_PUBLISH_DATE'])}
                {$img = trim($news['PS_PROP_NEWS_PHOTO_URLS'], " \" [,]\" ")}
                {$description = quill_decode($news['PS_PROP_NEWS_DESCRIPTION'])}
                <div class="news__item news-data">
                    <div class="news-text">{$description}</div>
                    <div class="news__item-wr">
                        <div class="news__item-image news-image" style="background-image: url('{$img}')">
                            <h3 class="news__item-title title-3 news-title">{$news['PS_PROP_NEWS_TITLE']}</h3>
                        </div>
                        <div class="news__item-inner">
                            <div class="news__item-txt">
                                {mb_strimwidth($description, 0, 140, "...")}
                            </div>
                            <button class="link ad__link" type="button">
                                <span class="ad__link-txt">Подробнее</span>
                                <svg class="ad__link-arrow" width="41" height="8" viewBox="0 0 41 8"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M40.3536 4.35355C40.5488 4.15829 40.5488 3.84171 40.3536 3.64645L37.1716 0.464466C36.9763
                                    0.269204 36.6597 0.269204 36.4645 0.464466C36.2692 0.659728 36.2692 0.976311 36.4645 1.17157L39.2929
                                    4L36.4645 6.82843C36.2692 7.02369 36.2692 7.34027 36.4645 7.53553C36.6597 7.7308 36.9763 7.7308
                                    37.1716 7.53553L40.3536 4.35355ZM0 4.5L40 4.5V3.5L0 3.5L0 4.5Z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
            <div class="slider-control">
                <div class="slider-dots"></div>
            </div>
        </div>
    </div>
</section>