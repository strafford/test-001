<?php

require __DIR__ . "/smarty-config.php";

//$smarty->assign('title', 'site name');
$content = $smarty->fetch('eval:{$title = "new title"}
{include file="subcontent.smarty"}
Smarty: {$smarty.version|escape}');

$smarty->assign('content', $content);
$smarty->display(__FILE__);

__halt_compiler()
?>{$title}

{$content}
