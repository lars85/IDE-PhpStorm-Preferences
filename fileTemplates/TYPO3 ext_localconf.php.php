<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'LarsPeipmann.' . $_EXTKEY,
	'PluginName',
	array(
		'Controller' => 'action1, action2',
	),
	// non-cacheable actions
	array(
	)
);
