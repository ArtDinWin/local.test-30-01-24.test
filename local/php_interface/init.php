<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php");
}

// заплатка пока нет лицензии
// снятие ограничение Demo
global $SiteExpireDate;
if (DEMO && ($SiteExpireDate < time())) {
    $SiteExpireDate = time() * 1.1;
}


// spl_autoload_register(function ($className) {
//     $classFile = $_SERVER['DOCUMENT_ROOT'] . '/local/classes/' . $className . '.php';
//     if (file_exists($classFile)) {
//         require_once($classFile);
//     }
// });
?>