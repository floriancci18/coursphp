<?php
require_once 'libs/Smarty.class.php';
$smarty = new Smarty(); // Humm des bonbons
$smarty->setTemplateDir('template');
$smarty->setCacheDir('cache');
$smarty->setCompileDir('templates_c');
// J'assigne des valeurs à mes variables
$smarty->assign('titre','Super maman');
$smarty->assign('contenu','Smarty je kiffe de fou');
// J'affiche le template avec les variables
$smarty->display('template.tpl');
?>