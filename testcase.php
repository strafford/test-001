<?php

require_once 'smarty-config.php';

$smarty->display(__FILE__);

__halt_compiler();
?>PHP: {$smarty.const.PHP_VERSION}
Smarty: {$smarty.version}
<b>{assign var="s" value="rghuir gerg egerg eaz azefziuher zreg ergh ieazd aazdad"}
{$s|wordwrap:20:"<br />\n":true}</b>
