<?php
  if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
  }


$tmp_news_extend_columns = [

    'image_w2' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.image_w2',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0
        ]

    ],
    'image_h2' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.image_h2',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0
        ]

    ],
    'subheader' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.subheader',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],

    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tmp_news_extend_columns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteCore',
 'image_w2,image_h2'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'subheader', '', 'after:title');

