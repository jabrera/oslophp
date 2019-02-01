<<<<<<< HEAD
<?php
define("PROJECT_CODE", "oslophp");
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__FILE__));
if(strpos($_SERVER["HTTP_HOST"], "localhost") !== false)
	define("ABSOLUTE_ROOT", "/". PROJECT_CODE ."/");
else
	define("ABSOLUTE_ROOT", "/". PROJECT_CODE ."/");
if(isset($_GET["url"]))
	$url = $_GET["url"];
=======
<?php
define("PROJECT_CODE", "oslophp");
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__FILE__));
if(strpos($_SERVER["HTTP_HOST"], "localhost") !== false)
	define("ABSOLUTE_ROOT", "/". PROJECT_CODE ."/");
else
	define("ABSOLUTE_ROOT", "/". PROJECT_CODE ."/");
if(isset($_GET["url"]))
	$url = $_GET["url"];
>>>>>>> refs/remotes/origin/master
require_once(ROOT . DS . "library" . DS . "init.php");