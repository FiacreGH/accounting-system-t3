<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CodeID.AccountingSystem',
            'Patient',
            'Patient management'
        );
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CodeID.AccountingSystem',
            'Accounting',
            'Accounting'
        );
        #\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('accounting_system', 'Configuration/TypoScript', 'Accounting System');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_patient');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_consultation');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_invoice');

    }
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['accountingsystem_patient'] = 'select_key,recursive,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['accountingsystem_accounting'] = 'select_key,recursive,pages';