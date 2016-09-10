<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


require_once './inc/smarty/libs/Smarty.class.php';


$smarty = new Smarty();

 $template_dir;
 $compile_dir;
 $config_dir;
 $cache_dir ;

$smarty->setTemplateDir('/Applications/MAMP/htdocs/estruturaMVC/templates/');
$smarty->setCompileDir('/Applications/MAMP/htdocs/estruturaMVC/templates_c/');
$smarty->setConfigDir('/Applications/MAMP/htdocs/estruturaMVC/configs/');
$smarty->setCacheDir('/Applications/MAMP/htdocs/estruturaMVC/cache/');


$smarty->assign('name','Ned');

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display('smarty.tpl');

//echo 'Seriooo';

?>