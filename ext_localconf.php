<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all']['html_min']
    = \StudioMitte\HtmlMin\Hooks\HtmlMinHook::class . '->run';
