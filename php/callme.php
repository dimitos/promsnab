<?

    const ROOT = __DIR__ . "/..";

    include ROOT . "/vendor/autoload.php";
    include ROOT . "/php/common.php";
    include_once ROOT . "/php/config.php";

    if (file_exists(ROOT . "/.env")) {
        Dotenv\Dotenv::createImmutable(ROOT)->load();
    } else {
        $_ENV["MODE"] = "prod";
    }

    $smarty = init_smarty();

    const SITENAME = "трубатепло.рф";
    const EMAILFROM = "info@xn--80abnypedpdh.xn--p1ai";
    $emails = ["info@xn--80abnypedpdh.xn--p1ai"];

    if (isset($_POST) && isset($_POST["phone"])) {

        $data = array_merge($_POST, [
            "sitename" => SITENAME
        ]);

        $smarty->assign("data", $data);
        $message = $smarty->fetch(ROOT . "/views/letter.tpl");

        $sub = "Перезвонить. " .
                (!empty($_POST["name"]) ? ($_POST["name"] . ", ") : " ") .
                $_POST["phone"] . " (заявка с сайта " . SITENAME . ")";

        $headers = "From: =?utf-8?B?" . base64_encode(SITENAME) . "?= <" . EMAILFROM . ">\n"
            . "Content-type: text/html; charset=utf-8\r\n";

        foreach ($emails as $email_to) {
            if (!mail($email_to, $sub, $message, $headers)) {
                http_response_code(400);
                echo json_encode([
                    "result" => "failure",
                    "error" => "Ошибка отправки заявки"
                ], JSON_UNESCAPED_UNICODE);
            }
        }

        echo json_encode(["result" => "success"], JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(400);
        echo json_encode([
            "result" => "failure",
            "error" => "Не указан номер телефона"
        ], JSON_UNESCAPED_UNICODE);
    }
?>
