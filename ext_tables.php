<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('kitodo_presentation_template', 'Configuration/TypoScript', 'Kitodo Presentation Template');
