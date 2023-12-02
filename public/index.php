<?php

define('ROOT', dirname(__DIR__).DIRECTORY_SEPARATOR);
define('APP', ROOT.'App'.DIRECTORY_SEPARATOR);
define('VIEWS', APP.'Views'.DIRECTORY_SEPARATOR);
define('PUBLIC_FOLDER', 'public');
define('PUBLIC_FOLDER_PATH', ROOT.PUBLIC_FOLDER.DIRECTORY_SEPARATOR);

// require ROOT.'vendor/autoload.php';


// $router = new Router();
require_once APP.'Config/Config.php';
require_once APP.'Model/db.php';

    if(!isset($_GET["controller"])) $_GET["controller"] = "pais";
    if(!isset($_GET["action"])) $_GET["action"] = "listar";
$controller_path = APP.'Controllers\\'.$_GET["controller"].'.php';

/* Check if controller exists */
if(!file_exists($controller_path)) $controller_path = APP.'Controllers\\pais.php';

/* Load controller */
require_once $controller_path;
$controllerName = $_GET["controller"].'Controller';
$controller = new $controllerName();

/* Check if method is defined */
$dataToView["data"] = array();
if(method_exists($controller,$_GET["action"])) $dataToView["data"] = $controller->{$_GET["action"]}();


require_once VIEWS."home/".$controller->view.'.php';

?>