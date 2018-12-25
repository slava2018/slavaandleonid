<?php
use app\classes\Factory;
// отображение ошибок
ini_set('display_errors', '0');

// автозагрузка классов
function __autoload($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
}

// библиотека функций
require_once "../lib/functions.php";

// создаём объекты
//$page = Factory::build("Cpage");
$page = new \app\classes\Cpage();
$authorization = new \app\classes\Сauthorization();
$authorization->go();