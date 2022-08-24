<?php
defined('TYPO3_MODE') or die();

(function () {


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:news_extend/Configuration/TSconfig/Ext/News" extensions="tsconfig">');


$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'news_extend';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/FileReference'][] = 'news_extend';



$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang_be.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/locallang_be.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang_db.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang_modadministration.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/locallang_modadministration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/locallang.xlf';



$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_be.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/de.locallang_be.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_db.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/de.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_modadministration.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/de.locallang_modadministration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang.xlf'][] = 'EXT:news_extend/Resources/Private/Language/Overrides/News/de.locallang.xlf';




})();