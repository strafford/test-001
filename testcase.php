<?php

require_once __DIR__ . '/smarty-config.php';

function Zsmarty_block_t ($params, $content, Smarty_Internal_Template $template, &$repeat)
{
  if (isset($content)) {
    return "blah";
  }
}

$smarty->registerPlugin('block', 'tz', 'Zsmarty_block_t');

$smarty->display(__FILE__);

__HALT_COMPILER();
?>Hello
This is not translated
{t}This is translated{/t} 
{tz}This is z translated{/tz} 

PHP: {$smarty.const.PHP_VERSION}
Smarty: {$smarty.version}
