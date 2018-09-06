<?php

require_once __DIR__ . '/smarty-config.php';

$smarty->display('eval:Smarty: {$smarty.version}
PHP: {$smarty.const.PHP_VERSION}');

$smarty->setLeftDelimiter('{{');
$smarty->setRightDelimiter('}}');
$smarty->display('test.smarty');
