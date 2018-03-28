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

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_accountingsystem_domain_model_patient', 'EXT:accounting_system/Resources/Private/Language/locallang_csh_tx_accountingsystem_domain_model_patient.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_patient');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_accountingsystem_domain_model_consultation', 'EXT:accounting_system/Resources/Private/Language/locallang_csh_tx_accountingsystem_domain_model_consultation.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_consultation');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_accountingsystem_domain_model_facture', 'EXT:accounting_system/Resources/Private/Language/locallang_csh_tx_accountingsystem_domain_model_facture.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_accountingsystem_domain_model_facture');

    }
);
