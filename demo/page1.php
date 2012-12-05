<?php
 /**
 * Example Application

 * @package Example-application
 */

require('../libs/Smarty.class.php');

$smarty = new Smarty;



//$smarty->force_compile = true;




$page->assign('placeholder_name', 'content');

$smarty->display('page1.tpl');
?>
