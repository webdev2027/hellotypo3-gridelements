<?php
defined('TYPO3_MODE') || die('Access denied.');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hellotypo3-htidelements/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">'
);