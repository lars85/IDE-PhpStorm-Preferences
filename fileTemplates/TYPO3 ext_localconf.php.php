<?php
defined('TYPO3_MODE') || exit('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'LarsPeipmann.' . $_EXTKEY,
	'PluginName',
	array(
		'Controller' => 'action1, action2',
	),
	array(
	)
);
