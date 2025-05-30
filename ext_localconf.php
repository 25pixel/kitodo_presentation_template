<?php
defined('TYPO3_MODE') || die('Access denied.');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('SerbskiInstitut.KitodoPresentationTemplate', 'Content');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('SerbskiInstitut.KitodoPresentationTemplate', 'Page');

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('kitodo_presentation_template','Configuration/TypoScript','Kitodo Presentation Template');

// Override language files
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:dlf/Resources/Private/Language/locallang_metadata.xlf'][] = 'EXT:kitodo_presentation_template/Resources/Private/Language/Overrides/locallang_metadata.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:dlf/Resources/Private/Language/locallang_metadata.xlf'][] = 'EXT:kitodo_presentation_template/Resources/Private/Language/Overrides/de.locallang_metadata.xlf';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:dlf/Resources/Private/Language/locallang_structure.xlf'][] = 'EXT:kitodo_presentation_template/Resources/Private/Language/Overrides/locallang_structure.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:dlf/Resources/Private/Language/locallang_structure.xlf'][] = 'EXT:kitodo_presentation_template/Resources/Private/Language/Overrides/de.locallang_structure.xlf';
