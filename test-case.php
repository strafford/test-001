<?php

require_once __DIR__ . '/smarty-config.php';

function plug($params, $smarty)
{
  return print_r($params, true);
}

$smarty->configLoad("eval:id=1");
$smarty->registerPlugin('function', 'plug', 'plug', false, ['id', 'class', 'style']);

if($smarty->isCached(__FILE__))
{
  print "(from cache)\n";
}

$smarty->display(__FILE__);

__halt_compiler()
?>Cfg: {#id#}
Plug: {plug id={#id#}}
Smarty: {$smarty.version}
