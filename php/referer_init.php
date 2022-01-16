<?
    session_start();

    // Ставим дефолтные utm метки
    $utm_campaign = "";
    $utm_source = "";
    $utm_medium = "";
    $utm_term = "";
    $utm_content = "";
    $utm_campaign_original = "";
    $utm_source_original = "";
    $utm_medium_original = "";
    $utm_term_original = "";
    $utm_content_original = "";
    $referer = "";
    $ref_type2 = "SEO/unknown";

    if (isset($_GET["utm_campaign"]) || isset($_GET["utm_source"])) {
        // Присваиваем referer и все метки, если они есть
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $_SERVER['HTTP_REFERER'];
        }
        if (isset($_GET["utm_campaign"])) {
            $utm_campaign = trim(strtolower($_GET["utm_campaign"]));
            $utm_campaign_original = $utm_campaign;
        }
        if (isset($_GET["utm_source"])) {
            $utm_source = trim(strtolower($_GET["utm_source"]));
            $utm_source_original = $utm_source;
        }
        if (isset($_GET["utm_medium"])) {
            $utm_medium = $_GET["utm_medium"];
            $utm_medium_original = $utm_medium;
        }
        if (isset($_GET["utm_term"])) {
            $utm_term = $_GET["utm_term"];
            $utm_term_original = $utm_term;
        }
        if (isset($_GET["utm_content"])) {
            $utm_content = $_GET["utm_content"];
            $utm_content_original = $utm_content;
        }

        if (in_array($utm_source_original, ["v1", "v2", "v1-krd", "v2-krd", "v1-ufo", "v2-ufo", "v1-rus", "v2-rus", "intop-sales-v1", "intop-sales-v2", "intop-sales-v3", "intop-sales-v4", "intop-sales-v5", "soc"])) {

            if ($utm_source_original == "soc") {
                $ref_type2 = "soc";
                $utm_campaign = "InTop SMM продвижение";
                $utm_source = "Социальные сети";
            } else {
                if (preg_match("/^ga-.+/", $utm_campaign_original)) {
                    $utm_source = "Google Ads Поиск";
                } elseif (preg_match("/^yd-.+/", $utm_campaign_original)) {
                    $utm_source = "Яндекс Директ Поиск";
                } elseif (preg_match("/^rsya-.+/", $utm_campaign_original)) {
                    $utm_source = "Яндекс Директ РСЯ";
                } else {
                    $utm_source = "Интернет-реклама";
                }

                if (preg_match("/.+-krd$/", $utm_campaign_original)) {
                    $ref_type2 = "krd";
                    $utm_campaign = "Краснодарский край";
                } elseif (preg_match("/.+-anapa$/", $utm_campaign_original)) {
                    $ref_type2 = "anapa";
                    $utm_campaign = "Анапа";
                } elseif (preg_match("/.+-regions$/", $utm_campaign_original)) {
                    $ref_type2 = "regions";
                    $utm_campaign = "Регионы России";
                } else {
                    $ref_type2 = "ads";
                    $utm_campaign = "Общая кампания";
                }
            }
        }
    } elseif (isset($_SESSION["ref_type2"])) {
        $ref_type2 = $_SESSION["ref_type2"];
        if (isset($_SESSION["referer"])) {
            $referer = $_SESSION["referer"];
        }
        if (isset($_SESSION["utm_campaign"])) {
            $utm_campaign = $_SESSION["utm_campaign"];
        }
        if (isset($_SESSION["utm_source"])) {
            $utm_source = $_SESSION["utm_source"];
        }
        if (isset($_SESSION["utm_medium"])) {
            $utm_medium = $_SESSION["utm_medium"];
        }
        if (isset($_SESSION["utm_term"])) {
            $utm_term = $_SESSION["utm_term"];
        }
        if (isset($_SESSION["utm_content"])) {
            $utm_content = $_SESSION["utm_content"];
        }
        if (isset($_SESSION["utm_campaign_original"])) {
            $utm_campaign_original = $_SESSION["utm_campaign_original"];
        }
        if (isset($_SESSION["utm_source_original"])) {
            $utm_source_original = $_SESSION["utm_source_original"];
        }
        if (isset($_SESSION["utm_medium_original"])) {
            $utm_medium_original = $_SESSION["utm_medium_original"];
        }
        if (isset($_SESSION["utm_term_original"])) {
            $utm_term_original = $_SESSION["utm_term_original"];
        }
        if (isset($_SESSION["utm_content_original"])) {
            $utm_content_original = $_SESSION["utm_content_original"];
        }
    } elseif (isset($_COOKIE["ref_type2"])) {
        $ref_type2 = $_COOKIE["ref_type2"];
        if (isset($_COOKIE["referer"])) {
            $referer = $_COOKIE["referer"];
        }
        if (isset($_COOKIE["utm_campaign"])) {
            $utm_campaign = $_COOKIE["utm_campaign"];
        }
        if (isset($_COOKIE["utm_source"])) {
            $utm_source = $_COOKIE["utm_source"];
        }
        if (isset($_COOKIE["utm_medium"])) {
            $utm_medium = $_COOKIE["utm_medium"];
        }
        if (isset($_COOKIE["utm_term"])) {
            $utm_term = $_COOKIE["utm_term"];
        }
        if (isset($_COOKIE["utm_content"])) {
            $utm_content = $_COOKIE["utm_content"];
        }
        if (isset($_COOKIE["utm_campaign_original"])) {
            $utm_campaign_original = $_COOKIE["utm_campaign_original"];
        }
        if (isset($_COOKIE["utm_source_original"])) {
            $utm_source_original = $_COOKIE["utm_source_original"];
        }
        if (isset($_COOKIE["utm_medium_original"])) {
            $utm_medium_original = $_COOKIE["utm_medium_original"];
        }
        if (isset($_COOKIE["utm_term_original"])) {
            $utm_term_original = $_COOKIE["utm_term_original"];
        }
        if (isset($_COOKIE["utm_content_original"])) {
            $utm_content_original = $_COOKIE["utm_content_original"];
        }
    }

    // Если мы узнали источник, то запишем его
    if (($utm_campaign != "") || ($utm_source != "")) {
        SetCookie("ref_type2", $ref_type2, time() + (60 * 60 * 24 * 14));
        $_SESSION["ref_type2"] = $ref_type2;
        SetCookie("utm_campaign", $utm_campaign, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_campaign"] = $utm_campaign;
        SetCookie("utm_source", $utm_source, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_source"] = $utm_source;
        SetCookie("utm_medium", $utm_medium, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_medium"] = $utm_medium;
        SetCookie("utm_term", $utm_term, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_term"] = $utm_term;
        SetCookie("utm_content", $utm_content, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_content"] = $utm_content;
        SetCookie("utm_campaign_original", $utm_campaign_original, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_campaign_original"] = $utm_campaign_original;
        SetCookie("utm_source_original", $utm_source_original, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_source_original"] = $utm_source_original;
        SetCookie("utm_medium_original", $utm_medium_original, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_medium_original"] = $utm_medium_original;
        SetCookie("utm_term_original", $utm_term_original, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_term_original"] = $utm_term_original;
        SetCookie("utm_content_original", $utm_content_original, time() + (60 * 60 * 24 * 14));
        $_SESSION["utm_content_original"] = $utm_content_original;
        SetCookie("referer", $referer, time() + (60 * 60 * 24 * 14));
        $_SESSION["referer"] = $referer;
    } else {
        $utm_source = "SEO/другое";
        if (isset($_SERVER["HTTP_REFERER"])) $referer = $_SERVER["HTTP_REFERER"];
        $search = "";
        if (stristr($referer, "avito.ru")) { $utm_source = "Avito (переход по ссылке)"; }
        if (stristr($referer, "instagram.com")) { $utm_source = "Instagram (переход по ссылке)"; }
        if (stristr($referer, "facebook.com")) { $utm_source = "Facebook (переход по ссылке)"; }
        if (stristr($referer, "vk.com")) { $utm_source = "ВКонтакте (переход по ссылке)"; }
        if (stristr($referer, "yandex.ru")) { $search = "text="; $utm_source = "Yandex SEO"; }
        if (stristr($referer, "rambler.ru")) { $search = "words="; $utm_source = "Rambler"; }
        if (stristr($referer, "google.ru")) { $search = "q="; $utm_source = "Google SEO"; }
        if (stristr($referer, "google.com")) { $search = "q="; $utm_source = "Google SEO"; }
        if (stristr($referer, "mail.ru")) { $search = "q="; $utm_source = "Mail.Ru"; }
        if (stristr($referer, "bing.com")) { $search = "q="; $utm_source = "Bing"; }
        if (stristr($referer, "qip.ru")) { $search = "query="; $utm_source = "QIP"; }
    }
