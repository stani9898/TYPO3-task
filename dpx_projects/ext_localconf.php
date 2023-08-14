<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Vendor.Projects',
    'ProjectList',
    [
        'ProjectList' => 'list',
    ],
//non-cachable actions

    [
        'ProjectList' => '',
    ]
    );