<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT."app".DS);
define("CONFIG",APP."config".DS);
define("CONTROLLERS",APP."controllers".DS);
define("CORE",APP."core".DS);
define("MODELS",APP."models".DS);
define("VIEW",APP."views".DS);


//config
define("USERNAME","root");
define("DATABASE","test");
define("PASSWORD","");
define("DB_TYPE","mysql");
define("HOST","localhost");
define("SERVER","http://mvc.test/");



// require_once(CORE.DS."app.php");
require_once("../vendor/autoload.php");
$app=new MVC\core\app();


?>