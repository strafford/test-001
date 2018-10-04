<?php

require_once __DIR__ . '/vendor/autoload.php';

$smarty = new \Smarty();

$_SERVER['DOCUMENT_ROOT'] = __DIR__;

$smarty->setConfigDir($_SERVER['DOCUMENT_ROOT']);
$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT']);

if(!is_dir($_SERVER['DOCUMENT_ROOT'] . '/cache'))
  mkdir($_SERVER['DOCUMENT_ROOT'] . '/cache');
$smarty->setCacheDir($_SERVER['DOCUMENT_ROOT'] . '/cache');

if(!is_dir($_SERVER['DOCUMENT_ROOT'] . '/cache/templates'))
  mkdir($_SERVER['DOCUMENT_ROOT'] . '/cache/templates');
$smarty->setCompileDir($_SERVER['DOCUMENT_ROOT'] . '/cache/templates');

// add before current plugins directory:
$pluginsDirs = $smarty->getPluginsDir();
if(!is_dir($_SERVER['DOCUMENT_ROOT'] . '/plugins'))
  mkdir($_SERVER['DOCUMENT_ROOT'] . '/plugins');
array_unshift($pluginsDirs, $_SERVER['DOCUMENT_ROOT'] . '/plugins');
$smarty->setPluginsDir($pluginsDirs);

$smarty->setForceCompile(false);

$smarty->setCaching(\Smarty::CACHING_LIFETIME_SAVED);
$smarty->setCacheLifetime(5);

$smarty->registerFilter('pre',
  function($tpl_source, \Smarty_Internal_Template $template)
  {
    $stack = stristr($tpl_source, '__HALT_COMPILER');
    $tpl = substr($stack, strpos($stack, '?>') + 2);
    return $tpl ?: $tpl_source;
  }
);
