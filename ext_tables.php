<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CodeID.AccountingSystem',
            'Accountingsystem',
            'Accounting System'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('accounting_system', 'Configuration/TypoScript', 'Accounting System');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_patient');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_consultation');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_invoice');

    }
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['accountingsystem_accountingsystem'] = 'select_key,recursive,pages';