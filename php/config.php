<?


    //используемый шаблон
    $template = 'pages';

    //Пути к файлам шаблонов (*.tpl)
    define('TEMPLATE_PREFIX', "../views/{$template}/");
    define('TEMPLATE_POSTFIX', ".tpl");


    // Константы для обращения к контроллерам
    define ('PATH_PREFIX', '/controllers/');
    define ('PATH_POSTFIX', 'Controller.php');



    $mysqli = null;

    mb_internal_encoding("UTF-8");
    date_default_timezone_set("Europe/Moscow");
