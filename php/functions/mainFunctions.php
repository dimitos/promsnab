<?php
/**
 * Формирование запрашиваемой страницы
 * @param $smarty
 * @param $controllerName
 * @param $actionName
 * @return void
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once ROOT . PATH_PREFIX . $controllerName . PATH_POSTFIX;
    $page = get_page();
    $function = $actionName . 'Action';
    $function($smarty, $page);
}

 /**
  * Загрузка шаблона
  *
  * @param object $smarty объект шаблонизатора
  * @param string $templateName название файла шаблона
  */

 function loadTemplate($smarty, string $templateName){
     $smarty->display($templateName);
 }


/**
 *  Получаем все новости
 * @return mysqli_result
 */
function getNews(){
	$query = "SELECT * FROM `PS_PROP_NEWS` WHERE `PS_PROP_NEWS_PUBLISH` = 'Да' ORDER BY `PS_PROP_NEWS_PUBLISH_DATE` DESC ";
    return db_query($query);
}


/**
 * Функция декодирования форматированного текста из админки
 * @param string $json
 * @return string
 */
function quill_decode($json): string
{
    if (empty(trim($json))) {
        return "";
    }
    $lexer = new nadar\quill\Lexer(urldecode($json));
    return $lexer->render();
}

/**
 * Вывод русского названия месяца в дате обычного формата
 * @param date
 * @return string
 */
function getDateRu($date){
    $_monthsList = array(
        ".01." => "января",
        ".02." => "февраля",
        ".03." => "марта",
        ".04." => "апреля",
        ".05." => "мая",
        ".06." => "июня",
        ".07." => "июля",
        ".08." => "августа",
        ".09." => "сентября",
        ".10." => "октября",
        ".11." => "ноября",
        ".12." => "декабря"
      );

      //заменяем число месяца на название:
    $_mD = date(".m.", strtotime($date)); //для замены
    $date = str_replace($_mD, " ".$_monthsList[$_mD]." ", $date);
    return $date; 
}



