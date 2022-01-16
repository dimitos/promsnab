<?php
    const ROOT = __DIR__;

    include ROOT . "/vendor/autoload.php";
    include ROOT . "/php/config.php";
    include ROOT . "/php/common.php";
    include ROOT . "/php/referer_init.php";

    db_connect();

    if (file_exists(ROOT . "/.env")) {
        Dotenv\Dotenv::createImmutable(ROOT)->load();
    } else {
        $_ENV["MODE"] = "prod";
    }

    if ($_ENV["MODE"] === "dev") {
        include ROOT . "/php/display-errors.php";
    }

    $page = get_page();

    if ($page->code === 404) {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    }


    //определяем с каким контроллером будем работать
    $controllerName =  isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    //определяем с какой функцией будем работать
    $actionName =  isset($_GET['action']) ? $_GET['action'] : 'index';

    //инициализируем шаблонизавтор
    $smarty = init_smarty();

    $smarty->assign([
        "page" => $page,
        "phone" => new Phone("+78612506550"),
        "email" => new Email("mail@trubateplo.ru"),
        "meta" => new Meta(),
        "inline_scripts" => inline_scripts(actual_bundle_path("dist/js", "inline")),
        "vendor_scripts" => external_scripts(actual_bundle_path("dist/js", "vendor")),
        "common_scripts" => external_scripts(actual_bundle_path("dist/js", "common")),
        "vendor_styles" => external_styles(actual_bundle_path("dist/css/prod", "vendor")),
        "common_styles" => styles_by_mode("common"),
        "referer" => [
            "utm_campaign" => $utm_campaign,
            "utm_source" => $utm_source,
            "utm_medium" => $utm_medium,
            "utm_term" => $utm_term,
            "utm_content" => $utm_content,
            "utm_campaign_original" => $utm_campaign_original,
            "utm_source_original" => $utm_source_original,
            "utm_medium_original" => $utm_medium_original,
            "utm_term_original" => $utm_term_original,
            "utm_content_original" => $utm_content_original,
            "referer" => $referer,
            "ref_type2" => $ref_type2
        ]
    ]);
    
    //загружаем страницу
    loadPage($smarty, $controllerName, $actionName);

    db_disconnect();
