<?php
defined('TYPO3_MODE') || exit('Access denied.');

/**
 * Add setup.txt / constants.txt to static files selection in template records
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'iFrame'
);

/**
 * Add Plugin
 */
$pluginName = lower('Pi1');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	$pluginName,
	'LLL:EXT:' . $_EXTKEY . '/Resources/Language/locallang_db.xlf:tx_extname.' . $pluginName . '.label'
);

$pluginSignatureList = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY)) . '_' . $pluginName;
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignatureList] = 'layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignatureList] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignatureList, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' . $pluginName .'.xml');