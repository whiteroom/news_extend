<?php
defined('TYPO3_MODE') or die();

$fieldConfig = [
    'type' => 'select',
    'renderType' => 'selectSingle',
    'items' => [
        ['LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinsizes.0', 0, ''],
        ['LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinsizes.1', 1, ''],
        ['LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinsizes.2', 2, ''],
    ],
    'default' => 0,
];
   

$extraSysFileReferenceColumns = [
    'showinsizes' => [
        'exclude' => true,
        'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinsizes',
        'config' => $fieldConfig
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $extraSysFileReferenceColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('sys_file_reference', 'newsPalette', 'showinsizes');
