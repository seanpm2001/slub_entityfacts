<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    static function($extKey)
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'SLUB DNB Entity Facts');
    },
    'slub_entityfacts'
);
